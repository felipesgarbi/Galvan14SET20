<!doctype html>
<html class="no-js" lang="zxx">
<?php include "./estrutura/head.php" ?>

<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo-galvan/logo-galvan.png" alt="logo-galvan-engenharia">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <?php include "./estrutura/header.php" ?>
    <main>
        <!-- CAROUSEL INICIADO AQUI -->
        <div id="carouselFade" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                </div>
                <div class="item">
                </div>
                <div class="item">
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carouselFade" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carouselFade" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- TESTE DE CAROUSEL FINALIZADO AQUI -->

        <!-- CHAMADA SOBRE NÓS INICIO -->
        <section class="wantToWork-area" style="background-image: url(assets/img/predinhos.png); position: relative; background-size: contain; background-repeat: no-repeat;">
            <div class="container">
                <div class="wants-wrapper w-padding3">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-8 col-lg-8 col-md-8">
                            <div class="wantToWork-caption">
                                <div class="logo">
                                    <h1 class="font-daydream40"><b>O amanhã a gente projeta hoje!</b></h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <div class="double-btn f-right ">
                                <a href="about.php" class="btn w-btn wantToWork-btn mr-20 textoBranco">CONHEÇA A GALVAN<i class="ti-arrow-right"></i></a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- CHAMADA SOBRE NÓS FIM -->

        <!-- EMPRRENDIMENTOS INICIO -->
        <section id="services">
            <div class="gallery-area">
                <div class="container-fluid p-0 fix">
                    <div class="row no-gutters size-empre">
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="text-center h-100">
                                <figure class=" effect-layla h-100" style="background-image: url(assets/img/edificios/ed-contarini437x566.jpg); position: relative; background-size: cover;">

                                    <figcaption>
                                        <h2 style="font-family: Daydream;  color: white;">Edifício Contarini</h2>
                                        <div class="row">
                                            <p class="localizacao-empre" style="color: white;">Rua exemplo, 123, </br>Bairro Exemplo, Joinville - SC</p>
                                        </div>

                                    </figcaption>

                                </figure>


                            </div>

                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 ">
                            <div class="text-center h-100">
                                <figure class=" effect-layla h-100" style="background-image: url(assets/img/edificios/ed-ouroverde.jpg); position: relative; background-size: cover;">

                                    <figcaption>
                                        <h2 style="font-family: Daydream;  color: white;">Edifício Ouro Verde</h2>
                                        <div class="row">
                                            <p class="localizacao-empre" style="color: white;">Rua exemplo, 123, </br>Bairro Exemplo, Joinville - SC</p>
                                        </div>

                                    </figcaption>

                                </figure>


                            </div>
                        </div>



                        <div class="col-xl-4 col-lg-4 col-md-6 ">
                            <div class="text-center h-100">
                                <figure class=" effect-layla h-100" style="background-image: url(assets/img/edificios/ed-dipietra.jpg); position: relative; background-size: cover;">

                                    <figcaption>
                                        <h2 style="font-family: Daydream;  color: white;">Edifício Di Pietra</h2>
                                        <div class="row">
                                            <p class="localizacao-empre" style="color: white;">Rua exemplo, 123, </br>Bairro Exemplo, Joinville - SC</p>
                                        </div>

                                    </figcaption>

                                </figure>


                            </div>
                        </div>


                    </div>
                </div>
            </div>
            </div>
        </section>
        <!-- EMPRRENDIMENTOS FIM -->

    </main>
    <footer>
            <!-- Footer Start-->
            <?php include "./estrutura/footer.php" ?>
            <!-- Footer End-->
        </footer>
        
    <!-- BOTÃO DO WHATSAPP INÍCIO -->
    <a href="https://wa.me/5547989190606" style="
            position:fixed;
            width:60px;
            height:60px;
            bottom:40px;
            right:40px;
            background-color:#25d366;
            color:#FFF;
            border-radius:50px;
            text-align:center;
            font-size:30px;
            box-shadow: 1px 1px 2px #888;
            z-index:1000;" 
        target="_blank">
        
        <i style="margin-top:16px" class="fab fa-whatsapp"></i></a>

    <!-- BOTÃO DO WHATSAPP FIM -->

    <!-- JS here -->
    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="./assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    <!-- Progress -->
    <script src="./assets/js/jquery.barfiller.js"></script>

    <!-- counter , waypoint,Hover Direction -->
    <script src="./assets/js/jquery.counterup.min.js"></script>
    <script src="./assets/js/waypoints.min.js"></script>
    <script src="./assets/js/jquery.countdown.min.js"></script>
    <script src="./assets/js/hover-direction-snake.min.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>

</body>

</html>