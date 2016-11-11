<?php


class Product
{

    const SHOW_BY_DEFAULT = 12;


    public static function getAvailableProductsListByCategory($category, $page = 1)
    {

        $limit = Product::SHOW_BY_DEFAULT;

        $offset = ($page - 1) * self::SHOW_BY_DEFAULT;

        $db = Db::getConnection();

        $sql = 'SELECT * FROM product '
            . 'WHERE availability = "1" '
            . 'AND category = :category '
    . 'ORDER BY id ASC LIMIT :limit OFFSET :offset';

        $result = $db->prepare($sql);
        $result->bindParam(':category', $category, PDO::PARAM_INT);
        $result->bindParam(':limit', $limit, PDO::PARAM_INT);
        $result->bindParam(':offset', $offset, PDO::PARAM_INT);

        $result->execute();

        $i = 0;
        $products = array();
        while ($row = $result->fetch()) {
            $products[$i]['id'] = $row['id'];
            $products[$i]['name'] = $row['name'];
            $products[$i]['category'] = $row['category'];
            $products[$i]['availability'] = $row['availability'];
            $products[$i]['description'] = $row['description'];
            $products[$i]['season'] = $row['season'];
            $products[$i]['width'] = $row['width'];
            $products[$i]['profile'] = $row['profile'];
            $products[$i]['radius'] = $row['radius'];
            $products[$i]['price'] = $row['price'];
            $i++;
        }
        return $products;
    }


    public static function getCustomProductsListByCategory($category, $page = 1)
    {

        $limit = Product::SHOW_BY_DEFAULT;

        $offset = ($page - 1) * self::SHOW_BY_DEFAULT;

        $db = Db::getConnection();

        $sql = 'SELECT * FROM product '
            . 'WHERE availability = "0" '
            . 'AND category = :category '
            . 'ORDER BY id ASC LIMIT :limit OFFSET :offset';

        $result = $db->prepare($sql);
        $result->bindParam(':category', $category, PDO::PARAM_INT);
        $result->bindParam(':limit', $limit, PDO::PARAM_INT);
        $result->bindParam(':offset', $offset, PDO::PARAM_INT);

        $result->execute();

        $i = 0;
        $products = array();
        while ($row = $result->fetch()) {
            $products[$i]['id'] = $row['id'];
            $products[$i]['name'] = $row['name'];
            $products[$i]['category'] = $row['category'];
            $products[$i]['availability'] = $row['availability'];
            $products[$i]['description'] = $row['description'];
            $products[$i]['season'] = $row['season'];
            $products[$i]['width'] = $row['width'];
            $products[$i]['profile'] = $row['profile'];
            $products[$i]['radius'] = $row['radius'];
            $products[$i]['price'] = $row['price'];
            $i++;
        }
        return $products;
    }


    public static function getTotalAvailableProductsInCategory($category)
    {

        $db = Db::getConnection();

        $sql = 'SELECT count(id) AS count FROM product WHERE availability = "1" AND category = :category';

        $result = $db->prepare($sql);
        $result->bindParam(':category', $category, PDO::PARAM_INT);

        $result->execute();

        $row = $result->fetch();
        return $row['count'];
    }


    public static function getTotalCustomProductsInCategory($category)
    {

        $db = Db::getConnection();

        $sql = 'SELECT count(id) AS count FROM product WHERE availability = "0" AND category = :category';

        $result = $db->prepare($sql);
        $result->bindParam(':category', $category, PDO::PARAM_INT);

        $result->execute();

        $row = $result->fetch();
        return $row['count'];
    }


    public static function getProductById($id)
    {

        $db = Db::getConnection();

        $sql = 'SELECT * FROM product WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->setFetchMode(PDO::FETCH_ASSOC);

        $result->execute();

        return $result->fetch();
    }


    public static function deleteProductById($id)
    {

        $db = Db::getConnection();


        $sql = 'DELETE FROM product WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }


    public static function updateProductById($id, $options)
    {

        $db = Db::getConnection();

        $sql = "UPDATE product
            SET 
                name = :name, 
                category = :category, 
                availability = :availability, 
                description = :description,
                season = :season,
                width = :width,
                profile = :profile,
                radius = :radius,
                price = :price,
            WHERE id = :id";

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':category', $options['category'], PDO::PARAM_INT);
        $result->bindParam(':availability', $options['availability'], PDO::PARAM_INT);
        $result->bindParam(':description', $options['description'], PDO::PARAM_STR);
        $result->bindParam(':season', $options['season'], PDO::PARAM_INT);
        $result->bindParam(':width', $options['external_r'], PDO::PARAM_INT);
        $result->bindParam(':profile', $options['profile_r'], PDO::PARAM_INT);
        $result->bindParam(':radius', $options['radius'], PDO::PARAM_INT);
        $result->bindParam(':price', $options['price'], PDO::PARAM_INT);
        return $result->execute();
    }


    public static function createProduct($options)
    {

        $db = Db::getConnection();

        $sql = 'INSERT INTO product '
            . '(name, category, availability, description, season, width, profile, radius, price) '
            . 'VALUES '
            . '(:name, :category, :availability, :description, :season, :width, :profile, :radius, :price)';

        $result = $db->prepare($sql);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':category', $options['category'], PDO::PARAM_INT);
        $result->bindParam(':availability', $options['availability'], PDO::PARAM_INT);
        $result->bindParam(':description', $options['description'], PDO::PARAM_STR);
        $result->bindParam(':season', $options['season'], PDO::PARAM_INT);
        $result->bindParam(':width', $options['width'], PDO::PARAM_INT);
        $result->bindParam(':profile', $options['profile'], PDO::PARAM_INT);
        $result->bindParam(':radius', $options['radius'], PDO::PARAM_INT);
        $result->bindParam(':price', $options['price'], PDO::PARAM_INT);
//        $result->bindParam(':image', $options['image'], PDO::PARAM_STR);
        $result->execute();

    }


    public static function getAvailabilityText($availability)
    {
        switch ($availability) {
            case '1':
                return 'Есть в наличии';
                break;
            case '0':
                return 'Под заказ';
                break;
        }
    }


    public static function getImage($id)
    {

        $noImage = 'no-image.jpg';

        $path = '/upload/images/products/';

        $pathToProductImage = $path . $id . '.jpg';

        if (file_exists($_SERVER['DOCUMENT_ROOT'].$pathToProductImage)) {
            return $pathToProductImage;
        }

        return $path . $noImage;
    }

}