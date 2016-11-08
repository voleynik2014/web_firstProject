<?php


class AdminProductController extends AdminBase
{

    public function actionIndex()
    {
        self::checkAdmin();

        if (isset($_POST['submit'])) {

            $options['name'] = $_POST['name'];
            $options['category'] = $_POST['category'];
            $options['availability'] = $_POST['availability'];
            $options['description'] = $_POST['description'];
            $options['season'] = $_POST['season'];
            $options['width'] = $_POST['width'];
            $options['profile'] = $_POST['profile'];
            $options['radius'] = $_POST['radius'];
            $options['price'] = $_POST['price'];
//            $options['image'] = $_POST['image'];

            $errors = false;

            if (!isset($options['name']) || empty($options['name'])) {
                $errors[] = 'Заполните поля';
            }

            Product::createProduct($options);

            header("Location: /admin/product");

        }

        require_once(ROOT . '/views/admin_product/index.php');
        return true;
    }


//    public function actionCreate()
//    {
//        self::checkAdmin();
//
//        if (isset($_POST['submit'])) {
//
//            $options['name'] = $_POST['name'];
//            $options['category'] = $_POST['category'];
//            $options['availability'] = $_POST['availability'];
//            $options['description'] = $_POST['description'];
//            $options['season'] = $_POST['season'];
//            $options['width'] = $_POST['width'];
//            $options['profile'] = $_POST['profile'];
//            $options['radius'] = $_POST['radius'];
//            $options['price'] = $_POST['price'];
////            $options['image'] = $_POST['image'];
//
//            $errors = false;
//
//            if (!isset($options['name']) || empty($options['name'])) {
//                $errors[] = 'Заполните поля';
//            }
//
//            Product::createProduct($options);
//
//            header("Location: /admin/product");
//
////            if ($errors == false) {
////                $id = Product::createProduct($options);
////
////                if ($id) {
////
////                    if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
////                        move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/images/products/{$id}.jpg");
////                    }
////                };
////
////                header("Location: /admin/product");
////            }
//        }
//
//        require_once(ROOT . '/views/admin_product/create.php');
//        return true;
//    }


    public function actionUpdate($id)
    {

        self::checkAdmin();

        $product = Product::getProductById($id);

        if (isset($_POST['submit'])) {

            $options['name'] = $_POST['name'];
            $options['category_id'] = $_POST['category_id'];
            $options['availability'] = $_POST['availability'];
            $options['description'] = $_POST['description'];
            $options['season_id'] = $_POST['season_id'];
            $options['external_r'] = $_POST['external_r'];
            $options['profile_r'] = $_POST['profile_r'];
            $options['wheel_r'] = $_POST['wheel_r'];
            $options['price'] = $_POST['price'];

            if (Product::updateProductById($id, $options)) {

                if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                    move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/images/products/{$id}.jpg");
                }
            }

            header("Location: /admin/product");
        }

        require_once(ROOT . '/views/admin_product/update.php');
        return true;
    }


    public function actionDelete($id)
    {

        self::checkAdmin();

        if (isset($_POST['submit'])) {
            Product::deleteProductById($id);

            header("Location: /admin/product");
        }

        require_once(ROOT . '/views/admin_product/delete.php');
        return true;
    }

}