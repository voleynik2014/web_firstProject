<?php include ROOT . '/views/layouts/header.php'; ?>


    <div class="container">
        <div class="row">
            <div class="col-md-10 content-body">
                <div class="row">

                    <div class="col-md-8">
                        <img class="img-responsive" src="<?php echo Product::getImage("1"); ?>" alt="">
                    </div>

                    <div class="col-md-4">
                        <h3>Описание товара</h3>
                        <p><?php echo $product['description']; ?></p>
                        <h3>Здесь можно добавить в будущем кнопки</h3>
                        <ul>
                            <li><p><?php Product::getAvailabilityText($product['availability']); ?></p></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>


<?php include ROOT . '/views/layouts/footer.php'; ?>