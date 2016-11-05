<!DOCTYPE html>
<html lang="ru">
<head>
    <title>ShinaServis</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/template/css/bootstrap.min.css" rel="stylesheet">
    <link href="/template/css/style.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="description" content="Шиномонтаж, Автозапчасти, шины новые, б/у, диски, под заказ, Киев, Левобережная, дешев о, цены, купить">
</head>
<body>


    <div class="jumbotron">
        <div class="container text-center">
            <h1>Online Store</h1>
            <p>Шины, Диски и тд...</p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 headar-menu">
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">WebSiteName</a>
                    </div>
                    <ul class="nav navbar-nav" role="tablist">
                        <li class=""><a href="#">Шиномонтаж</a></li>
                        <li class=""><a href="#">Шины Б/У</a></li>
                        <li class=""><a href="#">Шины Новые</a></li>
                        <li class=""><a href="#">Автозапчасти</a></li>
                        <li class=""><a href="#">Контакты</a></li>
                    </ul>
            </div>
            </nav>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="content-header">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Главная</a></li>
                        <li><a href="#">Шины Б/У</a></li>
                        <li class="active">ЧтоТо</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="container" id="main">
        <div class="row">
            <div class="col-md-2 menu">
                <h3>Меню</h3>
                <ul class="nav nav-pills nav-stacked ">
                    <li class="active"><a href="/site/index/">Шиномонтаж</a></li>
                    <li><a href="/category/available/<?php echo Category::getUsedTiresId(); ?>">Шины Б/У</a></li>
                    <li><a href="/category/available/<?php echo Category::getNewTiresId(); ?>">Шины Новые</a></li>
                    <li><a href="/category/available/<?php echo Category::getSparePartsId(); ?>">Автозапчасти</a></li>
                    <li><a href="/site/contact/">Контакты</a></li>
                </ul>
            </div>