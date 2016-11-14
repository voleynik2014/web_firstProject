<?php include (ROOT. '/views/layouts/admin_header.php'); ?>


        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-md-10 text-center no-gutter" id="admin_panel" >
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


<?php include (ROOT. '/views/layouts/footer.php'); ?>