<?php include ROOT. '/views/layouts/admin_header.php'; ?>


    <div class="container">
        <div class="row">
            <div class="col-md-10 content-body">


                <div id="contact" class="container-fluid bg-grey">
                    <h2 class="text-center">Контакты</h2>
                    <div class="row">
                        <div class="col-sm-5">
                            <p>Если у Вас возникли вопросы, вы можете связятся с нами.</p>
                            <p><span class="glyphicon glyphicon-map-marker"></span> Киев, Украина</p>
                            <p><span class="glyphicon glyphicon-phone"></span> +теле</p>
                            <p><span class="glyphicon glyphicon-envelope"></span> test@test.com</p>
                        </div>
                        <div class="col-sm-7 slideanim">
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <input class="form-control" id="name" name="name" placeholder="Имя" type="text" required>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                                </div>
                            </div>
                            <textarea class="form-control" id="comments" name="comments" placeholder="Сообщение" rows="5" style="resize: none;"></textarea><br>
                            <div class="row">
                                <div class="col-sm-12 form-group">
                                    <button class="btn btn-default pull-right" type="submit">Отправить</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="googleMap" style="height:400px;width:100%;"></div>

                <script src="https://maps.googleapis.com/maps/api/js"></script>
                <script>
                    var myCenter = new google.maps.LatLng(50.460740, 30.588658);

                    function initialize() {
                        var mapProp = {
                            center:myCenter,
                            zoom:15,
                            scrollwheel:true,
                            draggable:true,
                            mapTypeId:google.maps.MapTypeId.ROADMAP
                        };

                        var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

                        var marker = new google.maps.Marker({
                            position:myCenter,
                        });

                        marker.setMap(map);
                    }

                    google.maps.event.addDomListener(window, 'load', initialize);
                </script>
            </div>
        </div>
    </div>


<?php include ROOT. '/views/layouts/footer.php'; ?>