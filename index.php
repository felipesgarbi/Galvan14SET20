<!doctype html>
<html class="no-js" lang="zxx">

<?php include $_SERVER["DOCUMENT_ROOT"] . "/estrutura/head.php"; ?>

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
    <?php include $_SERVER["DOCUMENT_ROOT"] . "/estrutura/header.php"; ?>
    <main>
        <!-- CAROUSEL INICIADO AQUI -->
        <div id="carouselFade" class="carousel slide carousel-fade carousel-inicio" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active w-100">
                    <a href="/edificio-guara">
                        <div style="width: 100%; height: 100%;">
                            <img src="assets/img/inicial/1-guara.png" alt="" style="width: 100%;">
                        </div>
                    </a>
                </div>   

                <div class="item w-100">
                    <a href="/edificio-contarini">
                        <div style="width: 100%; height: 100%;">
                            <img src="assets/img/inicial/Conta4.png" alt="" style="width: 100%;">
                        </div>
                    </a>
                </div>

                <div class="item w-100">
                    <img src="assets/img/inicial/IMG2.png" alt="" style="width: 100%;">
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

        <div class="mb-4"></div>

        <!-- CHAMADA SOBRE NÓS INICIO -->
        <section class="wantToWork-area" style="background-image: url(assets/img/12125-NNZAB6-3.png); position: relative; background-size: contain; background-repeat: no-repeat;">
            <div class="container">
                <div class="wants-wrapper w-padding3">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-8 col-lg-8 col-md-8">
                            <div class="wantToWork-caption">
                                <div class="logo">
                                    <h1 class="font-vagnotie">O amanhã a gente projeta hoje!</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <div class="double-btn f-right alinha-30">
                                <a href="/sobrenos" class="button primary-bg text-white w-100 btn_1 boxed-btn " style="border-radius: 10px;">CONHEÇA A GALVAN</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- CHAMADA SOBRE NÓS FIM -->

        <!-- EMPRRENDIMENTOS INICIO -->
        <section id="services">
        <div id="carouselFadeEmpreen" class="carousel slide carousel-fade carousel-inicio" data-ride="carousel" data-interval="false" >
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active w-100">
                    <div class="gallery-area">
                        <div class="container-fluid p-0 fix">
                            <div class="row no-gutters ">
                            <div class="col-xl-4 col-lg-4">
                                    <div class="grid">
                                        <a href="/edificio-guara">
                                            <figure class="effect-bubba">

                                                <img class="img_fundo" src="assets/img/edificios/edGuara-(437x566)3.png" alt="img02" />

                                                <figcaption class="margin-figcaption">

                                                    <h2 style="font-family: Daydream;  color: white;"><img class="img_logo" src="assets/img/logo/LogoGuara.png" alt="img03" /></h2>


                                                    <p class="localizacao-empre" style="color: white;">Rua Guaratuba, 135, </br>Bairro Saguaçu - Joinville</p>

                                                </figcaption>

                                            </figure>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4">
                                    <div class="grid">
                                        <a href="/edificio-contarini">
                                            <figure class="effect-bubba">

                                                <img class="img_fundo" src="assets/img/edificios/ed-contarini437x566.jpeg" alt="img02" />

                                                <figcaption class="margin-figcaption">

                                                    <h2 style="font-family: Daydream;  color: white;"><img class="img_logo" src="assets/img/logo/logoContarini.png" alt="img03" /></h2>


                                                    <p class="localizacao-empre" style="color: white;">Rua Indaial, 1003, </br>Bairro Saguaçu, Joinville - SC</p>

                                                </figcaption>

                                            </figure>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4">
                                    <div class="grid">
                                        <a href="/edificio-ouro-verde">
                                            <figure class="effect-bubba ">

                                                <img class="img_fundo" src="assets/img/edificios/ed-ouroverdei437x566.jpeg" alt="img02" />

                                                <figcaption class="margin-figcaption">

                                                    <h2 style="font-family: Daydream;  color: white;"><img class="img_logo" src="assets/img/logo/OuroVerdeLogo.png" alt="img02" /></h2>


                                                    <p class="localizacao-empre" style="color: white;">Rua Ouro Verde, 98, </br>Bairro Saguaçu, Joinville - SC</p>

                                                </figcaption>

                                            </figure>
                                        </a>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                 </div>
                </div>


                <div class="item w-100">
                <div class="gallery-area">
                        <div class="container-fluid p-0 fix">
                            <div class="row no-gutters ">
                            <div class="col-xl-4 col-lg-4">
                                    <div class="grid">
                                        <a href="/edificio-contarini">
                                            <figure class="effect-bubba">

                                                <img class="img_fundo" src="assets/img/edificios/ed-contarini437x566.jpeg" alt="img02" />

                                                <figcaption class="margin-figcaption">

                                                    <h2 style="font-family: Daydream;  color: white;"><img class="img_logo" src="assets/img/logo/logoContarini.png" alt="img03" /></h2>


                                                    <p class="localizacao-empre" style="color: white;">Rua Indaial, 1003, </br>Bairro Saguaçu, Joinville - SC</p>

                                                </figcaption>

                                            </figure>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4">
                                    <div class="grid">
                                        <a href="/edificio-ouro-verde">
                                            <figure class="effect-bubba ">

                                                <img class="img_fundo" src="assets/img/edificios/ed-ouroverdei437x566.jpeg" alt="img02" />

                                                <figcaption class="margin-figcaption">

                                                    <h2 style="font-family: Daydream;  color: white;"><img class="img_logo" src="assets/img/logo/OuroVerdeLogo.png" alt="img02" /></h2>


                                                    <p class="localizacao-empre" style="color: white;">Rua Ouro Verde, 98, </br>Bairro Saguaçu, Joinville - SC</p>

                                                </figcaption>

                                            </figure>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 ">
                                    <div class="grid">
                                        <a href="/edificio-di-pietra">
                                            <figure class="effect-bubba">

                                                <img class="img_fundo" src="assets/img/edificios/ed-dipietra437x566.jpeg" alt="img02" />

                                                <figcaption>

                                                    <h2 style="font-family: Daydream;  color: white;"><img class="img_logo" src="assets/img/logo/DiPietraLogo.png" alt="img02" /></h2>


                                                    <p class="localizacao-empre" style="color: white;">Rua Piratuba, 1141, </br>Bairro Iririú, Joinville - SC</p>

                                                </figcaption>

                                            </figure>
                                        </a>
                                    </div>
                                </div>
                                
                               
                            </div>
                        </div>
                 </div>
                </div>
                
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carouselFadeEmpreen" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carouselFadeEmpreen" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>








            
        </section>
        <div class="mb-4"></div>
        <section class="wantToWork-area" style="background-image: url(assets/img/12125-NNZAB6-3.png); position: relative; background-size: contain; background-repeat: no-repeat;">
            <div class="container">
                <div class="wants-wrapper w-padding3">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-8 col-lg-8 col-md-8">
                            <div class="wantToWork-caption">
                                <div class="logo">
                                    <h1 class="font-vagnotie ml-50">O seu sonho está aqui!</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <div class="double-btn f-right alinha-30">
                                <a href="/empreendimentos" class="button primary-bg text-white w-100 btn_1 boxed-btn" style="border-radius: 10px;">EMPREENDIMENTOS</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <!-- Footer Start-->
    <div class="text-white">
        <?php include "./estrutura/footer.php" ?>
    </div>
    <!-- Footer End-->

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
            z-index:1000;" class="botaoWhats" target="_blank">

        <i style="margin-top:16px;" class="fab fa-whatsapp"></i></a>

    <!-- BOTÃO DO WHATSAPP FIM -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
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