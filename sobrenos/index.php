<!Doctype html>
<html class="no-js" lang="zxx">
<?php 
include_once $_SERVER["DOCUMENT_ROOT"]."/estrutura/head.php"

?>

<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="/assets/img/logo-galvan/logo-galvan.png" alt="logo-galvan-engenharia">
                </div>
            </div>
        </div>
    </div>

    <!-- Preloader Start -->
    <?php $sobreNos = "active";
    include $_SERVER["DOCUMENT_ROOT"] . "/estrutura/header.php";
    ?>
    <main>
        <!--? Hero Start -->
        <div class="slider-area2 section-bg2" data-background="../assets/img/sobrenos/topSobreNos.jpg">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2">
                                <h1 class="font-vagnotie font-vagnotieEMP">O amanhã a gente projeta hoje!</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--? About 1 Start-->
        <section class="about-low-area section-padding30 border-bottom">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-12">
                        <div class="about-caption">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-35">
                                <h2 class="font-ruda titulo-sobre"><i class="far fa-building"></i> A GALVAN ENGENHARIA</h2>
                            </div>
                            <p>Em 2011, o desejo de unir nossa família através de um sonho começou a se realizar. Desde então, temos construído a Galvan Engenharia para oferecer a você espaços amplos, confortáveis e com acabamento de qualidade. Buscando localizações privilegiadas, valorizamos o seu tempo, proporcionando mais lazer, segurança e praticidade para o seu dia.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- About  End-->

        <!-- VALORES INICIO -->

        <section id="valores">
            <div class="container">
                <div class="row border-bottom">
                    <div class="col-xl-6 col-lg-6 col-md-10">
                        <div class="about-caption">
                            <!--Section Tittle-->
                            <div class="section-tittle">
                                <h2 class="font-ruda titulo-nossosValores"><i class="fas fa-angle-right"></i> NOSSOS VALORES</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="valoresSobre">
                    <img src="../assets/img/valores/proximidadeV1.jpg" alt="valores-proximidade" width="100%">
                    <img src="../assets/img/valores/qualidadeV2.jpg" alt="valores-qualidade" width="100%">
                    <img src="../assets/img/valores/satisfacaoV3.jpg" alt="valores-satisfacao" width="100%">
                    <img src="../assets/img/valores/comprometimentoV4.jpg" alt="valores-comprometimento" width="100%">
                    <img src="../assets/img/valores/transparenciaV5.jpg" alt="valores-transparencia" width="100%">
                    <img src="../assets/img/valores/estabilidadeV6.jpg" alt="valores-estabilidade" width="100%">
                </div>
            </div>
        </section>
        <!-- VALORES FIM-->
        <div class="mb-4"></div>

        <!-- Want To work 2-->
        <section class="wantToWork-area" style="background-image: url(assets/img/12125-NNZAB6-3.png); position: relative; background-size: contain; background-repeat: no-repeat;">
            <div class="container">
                <div class="wants-wrapper w-padding3">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-8 col-lg-8 col-md-8">
                            <div class="wantToWork-caption">
                                <div class="logo">
                                    <h1 class="font-vagnotie">O seu sonho está aqui!</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <div class="double-btn f-right">
                                <a href="/empreendimentos" class="button primary-bg text-white w-100 btn_1 boxed-btn" style="border-radius: 10px;">EMPREENDIMENTOS</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Want To work End 2-->
    </main>
    <!-- Footer Start-->
    <?php include $_SERVER["DOCUMENT_ROOT"] . "/estrutura/footer.php" ?>
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

    <!-- JS here -->

    <script src="../assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="../assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="../assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="../assets/js/wow.min.js"></script>
    <script src="../assets/js/animated.headline.js"></script>
    <script src="../assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="../assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="../assets/js/jquery.nice-select.min.js"></script>
    <script src="../assets/js/jquery.sticky.js"></script>
    <!-- Progress -->
    <script src="../assets/js/jquery.barfiller.js"></script>

    <!-- counter , waypoint,Hover Direction -->
    <script src="../assets/js/jquery.counterup.min.js"></script>
    <script src="../assets/js/waypoints.min.js"></script>
    <script src="../assets/js/jquery.countdown.min.js"></script>
    <script src="../assets/js/hover-direction-snake.min.js"></script>

    <!-- contact js -->
    <script src="../assets/js/contact.js"></script>
    <script src="../assets/js/jquery.form.js"></script>
    <script src="../assets/js/jquery.validate.min.js"></script>
    <script src="../assets/js/mail-script.js"></script>
    <script src="../assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/main.js"></script>



</body>

</html>