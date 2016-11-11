<?php


class CatalogController
{

    public function actionAvailable($categoryId, $page = 1)
    {
        $categoryProducts = Product::getAvailableProductsListByCategory($categoryId, $page);

        $total = Product::getTotalAvailableProductsInCategory($categoryId);

        $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');

        require_once(ROOT . '/views/catalog/category.php');
        return true;
    }

    public function actionCustom($categoryId, $page = 1)
    {
        $categoryProducts = Product::getCustomProductsListByCategory($categoryId, $page);

        $total = Product::getTotalCustomProductsInCategory($categoryId);

        $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');

        require_once(ROOT . '/views/catalog/category.php');
        return true;
    }

}