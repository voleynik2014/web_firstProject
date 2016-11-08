<?php include ROOT . '/views/layouts/header.php'; ?>


    <div class="container">
        <div class="row">
            <div class="col-md-10 content-body">
                <div class="row">
                    <?php foreach ($categoryProducts as $product): ?>
                        <div class="col-md-3">
                            <div class="panel panel-primary">
                                <a href="/product/<?php echo $product['id']; ?>">
                                    <div class="panel-heading text-center"><?php echo $product['name']; ?></div>
                                    <div class="panel-body"><img src="<?php echo Product::getImage("1"); ?>" class="img-responsive" alt="Image"></div>
                                    <div class="panel-footer"><p></p><?php echo Product::getAvailabilityText($product['availability']); ?></div>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Постраничная навигация -->
            <?php echo $pagination->get(); ?>

        </div>
    </div>


<?php include ROOT . '/views/layouts/footer.php'; ?>