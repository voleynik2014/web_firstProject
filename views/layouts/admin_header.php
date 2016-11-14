<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Шиномонтаж, Автозапчасти, шины новые, б/у, диски, под заказ, Киев, Левобережная, дешево, цены, купить">
    <title>ShinaServis</title>
    <link href="/template/css/bootstrap.min.css" rel="stylesheet">
    <link href="/template/css/style.css" rel="stylesheet">
</head>
<body>


<nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="admin_menu_header">
    <div class="container">
        <div class="row">
            <div class="navbar-header">
                <a class="navbar-brand" href="/admin/index">ShinoServis</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="/admin/product/create"><button type="button" class="btn btn-primary btn-lg">Добавить товар</button></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/admin/logout"><span class="glyphicon glyphicon-log-in"></span> Выйти</a></li>
            </ul>
        </div>
</nav>


<div class="jumbotron">
    <div class="container text-center">
        <h1>Online Store</h1>
        <p>Шины, Диски и тд...</p>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-12 header-menu">
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">WebSiteName</a>
                </div>
                <ul class="nav navbar-nav" role="tablist">
                    <li><a href="/admin/index/">Шиномонтаж</a></li>
                    <li><a href="/admin/product/category/<?php echo Category::getUsedTiresId(); ?>">Шины Б/У</a></li>
                    <li><a href="/admin/product/category/<?php echo Category::getNewTiresId(); ?>">Шины Новые</a></li>
                    <li><a href="/admin/product/category/<?php echo Category::getSparePartsId(); ?>">Автозапчасти</a></li>
                    <li><a href="/admin/contact/">Контакты</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>


<div class="container" id="main">
    <div class="row">
        <div class="col-md-2 menu">
            <ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="205">
                <h3>Меню</h3>
                <li class="active"><a href="/admin/index/">Шиномонтаж</a></li>
                <li><a href="/admin/product/category/available/<?php echo Category::getUsedTiresId(); ?>">Шины Б/У</a></li>
                <li><a href="/admin/product/category/available/<?php echo Category::getNewTiresId(); ?>">Шины Новые</a></li>
                <li><a href="/admin/product/category/available/<?php echo Category::getSparePartsId(); ?>">Автозапчасти</a></li>
                <li><a href="/admin/product/contact/">Контакты</a></li>
            </ul>
        </div>

