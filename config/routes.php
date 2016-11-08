<?php

return array (

    //Admin

    //Adminproduct
    'admin/product/create' => 'adminProduct/create',
    'admin/product/update/([0-9]+)' => 'adminProduct/update/$1',
    'admin/product/delete/([0-9]+)' => 'adminProduct/delete/$1',
    'admin/product' => 'adminProduct/index',

    //Admin panel
    'admin/logout' => 'admin/logout',
    'admin' => 'admin/login',

    //Категория товаров
        //В наличии
        'category/available/([0-9]+)/page-([0-9]+)' => 'catalog/available/$1/$2',
        'category/available/([0-9]+)' => 'catalog/available/$1',
        //Под закaз
        'category/custom/([0-9]+)/page-([0-9]+)' => 'catalog/custom/$1/$2',
        'category/custom/([0-9]+)' => 'catalog/custom/$1',

    //Страница отдельного товара
    'product/([0-9]+)' => 'product/view/$1',

    //Информационные страницы
    'site/index' => 'site/index',
    'site/contact' => 'site/contact',

    //Главная страница(шиномонтаж)
    'index.php' => 'site/index',
    '' => 'site/index',
);