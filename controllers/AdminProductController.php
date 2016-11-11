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


    public function actionCategoryAvailable($categoryId, $page = 1)
    {
        self::checkAdmin();

        $categoryProducts = Product::getAvailableProductsListByCategory($categoryId, $page);

        $total = Product::getTotalAvailableProductsInCategory($categoryId);

        $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');

        require_once(ROOT . '/views/admin_product/admin_category.php');
        return true;

    }


    public function actionCategoryCustom($categoryId, $page = 1)
    {
        $categoryProducts = Product::getAvailableProductsListByCategory($categoryId, $page);

        $total = Product::getTotalAvailableProductsInCategory($categoryId);

        $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');

        require_once(ROOT . '/views/admin_product/admin_category.php');
        return true;

    }


    public function actionContact()
    {
        self::checkAdmin();

        require_once (ROOT. '/views/admin_product/admin_contact.php');
        return true;
    }


    public function actionUpdate($id)
    {

        self::checkAdmin();

        $product = Product::getProductById($id);

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

//            if (Product::updateProductById($id, $options)) {
//
//                if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
//                    move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/images/products/{$id}.jpg");
//                }
//            }

            header("Location: /admin/product/category/available/{$options['category']}");
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