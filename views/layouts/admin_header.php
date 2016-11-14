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
                <a class="navbar-brand" href="#">ShinoServis</a>
            </div>
            <ul class="nav navbar-nav">
                <li><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Добавить товар</button></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/admin/logout"><span class="glyphicon glyphicon-log-in"></span> Выйти</a></li>
            </ul>
        </div>
</nav>


<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Добавить товар</h4>
            </div>


            <div class="modal-body no-gutter">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 text-center no-gutter" id="admin_panel" >
                            <form enctype="multipart/form-data" method="post">
                                <div class="form-group no-gutter">


                                    <div class="col-sm-12 col-md-4 colum no-gutter">
                                        <div class="border">
                                            <label for="item_name">Наименование</label>
                                            <input type="text" name="name" class="form-control" id="item_name">
                                        </div>
                                        <div class="border2">
                                            <label for="Description">Описание</label>
                                            <textarea style="resize: none;" name="description" class="form-control" rows="3" id="Description"></textarea>
                                        </div>
                                    </div>


                                    <div class="col-sm-8 col-md-2 colum no-gutter" id="season_radio">
                                        <div class="col-sm-8 col-md-12 border">
                                            <label for="item_category">Категория:</label>
                                            <select class="form-control" name="category" id="item_category">
                                                <option id="1" value="1">Шины б\у</option>
                                                <option id="2" value="2">Щины новые</option>
                                                <option id="3" value="3">Автозапчасти</option>
                                            </select>
                                        </div>


                                        <div class="c_item_param col-sm-8 col-md-12 border2">
                                            <label for="item_param">Размер:</label>
                                            <input class="col-sm-8 col-md-12" type="text" name="width" id="item_param">
                                            <input class="col-sm-8 col-md-12" type="text" name="profile">
                                            <input class="col-sm-8 col-md-12" type="text" name="radius">
                                        </div>
                                    </div>


                                    <div class="col-sm-8 col-md-3 colum">
                                        <div class="border">
                                            <label>Сезон:</label>
                                            <div>
                                                <label class="radio-input"><input type="radio" value="1" name="season">Лето</label>
                                                <label class="radio-input"><input type="radio" value="2" name="season" checked>Зима</label>
                                                <label class="radio-input"><input type="radio" value="3" name="season">В/С</label>
                                            </div>
                                        </div>


                                        <div class="border2">
                                            <label>Наличие:</label>
                                            <div>
                                                <label class="radio"><input type="radio" value="1" name="availability" checked>В наличии</label>
                                                <label class="radio"><input type="radio" value="0" name="availability">Под заказ</label>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-sm-8 col-md-2 colum">
                                        <!--                            <div class="border">-->
                                        <!--                                <label for="image_download" class="lab_img">Изображение</label>-->
                                        <!--                                <div class="img_upload">-->
                                        <!--                                    <input type="file" name="upload" id="image_download" multiple accept="image/*,image/jpeg">-->
                                        <!--                                </div>-->
                                        <!--                            </div>-->

                                        <div class="border2">
                                            <label for="item_price">Цена:</label>
                                            <div class="">
                                                <input class="form-control" type="text" name="price" id="item_price">
                                            </div>
                                            <input type="submit" name="submit" class="btn btn-success" style="margin-top: 10px;">
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


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
                <li><a href="/admin/contact/">Контакты</a></li>
            </ul>
        </div>

