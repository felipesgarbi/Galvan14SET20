<!doctype html>
<html class="no-js" lang="zxx">

<?php
include "../estrutura/head.php";
?>

<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="../assets/img/logo-galvan/logo-galvan.png" alt="logo-galvan-engenharia">
                </div>
            </div>
        </div>
    </div>

    <!-- Preloader Start -->
    <?php
    $contact = "active";
    include "../estrutura/header.php" ?>
    <main>
        <!--? Hero Start -->
        <div class="slider-area2 section-bg2" data-background="../assets/img/Contact.jpg" style="background-size: cover;">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2">
                                <h1 class="font-vagnotie text-white font-vagnotieCONT" style="font-size:68px">Queremos ouvir você!</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Section: Contact v.2-->

        <section class="mb-4">
            <div class="container">
                <?php
                if (isset($_GET["r"])) {
                    if ($_GET["r"] == 1) {


                ?>
                        <div class="alert alert-success text-center mt-20" role="alert">
                            Seu contato foi registrado com sucesso.
                        </div>

                <?php
                    }
                }
                ?>
                <!--Section description-->
                <p class="text-center w-responsive mx-auto font-ruda duvidas-contato">
                    Tire suas dúvidas, agende visitas, envie sugestões ou comentários.
                </p>

                <div class="container">
                    <div class="row pt-40">
                        <div class="col-lg-9 mb-40">


                            <form id="contact-form" name="contact-form" action="./mail.php" method="POST">

                                <div class="row">
                                    <div class="col-lg-4 mb-10">
                                        <div class="md-form mb-0">
                                            <input type="text" id="nome" name="nome" class="formContact" placeholder="Seu nome (obrigatório)" required="">
                                        </div>
                                    </div>

                                    <div class="col-lg-4 mb-10">
                                        <div class="md-form mb-0">
                                            <input type="text" id="telefone" name="telefone" class="formContact" placeholder="Seu telefone (obrigatório)" required="">
                                        </div>
                                    </div>

                                    <div class="col-lg-4 mb-10">
                                        <div class="md-form mb-0">
                                            <input type="text" id="email" name="email" class="formContact" placeholder="Seu e-mail">
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-lg-12 tp-10 mb-40">
                                        <div class="md-form">
                                            <textarea type="text" id="mensagem" name="mensagem" rows="5" class="formContact contact-form" placeholder="Digite aqui a sua mensagem :)" style="min-height:100px;"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2 mb-40 paddingContact">
                                    <button type="submit" class="font-ruda button text-white w-100 btnContactNew" style="border-radius: 10px;">Enviar</button>
                                </div>
                                <!--<div class="font-ruda textoAzul"><php echo $msg ></div>-->

                            </form>
                        </div>

                        <div class="col-md-3 text-center">
                            <ul class="list-unstyled mb-0">
                                <li><i class="textoCinza fas fa-map-marker-alt fa-2x"></i>
                                    <p class="font-ruda">Joinville/SC</p>
                                </li>

                                <li><i class="textoCinza fab fa-whatsapp mt-4 fa-2x"></i>
                                    <p class="font-ruda">+55 47 9.8919-0606</p>
                                </li>

                                <li><i class="textoCinza fas fa-envelope mt-4 fa-2x"></i>
                                    <p class="font-ruda">atendimento@galvanengenharia.com</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
        </section>
    </main>
    <footer>
        <!-- Footer Start-->
        <?php include $_SERVER["DOCUMENT_ROOT"] . "/estrutura/footer.php" ?>
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
            z-index:1000;" class="botaoWhats" target="_blank">

        <i style="margin-top:16px;" class="fab fa-whatsapp"></i></a>

    <!-- BOTÃO DO WHATSAPP FIM -->

    <!-- JS here -->

    <script src="./../assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./../assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./../assets/js/popper.min.js"></script>
    <script src="./../assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./../assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./../assets/js/owl.carousel.min.js"></script>
    <script src="./../assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./../assets/js/wow.min.js"></script>
    <script src="./../assets/js/animated.headline.js"></script>
    <script src="./../assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="./../assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="./../assets/js/jquery.nice-select.min.js"></script>
    <script src="./../assets/js/jquery.sticky.js"></script>
    <!-- Progress -->
    <script src="./../assets/js/jquery.barfiller.js"></script>

    <!-- counter , waypoint,Hover Direction -->
    <script src="./../assets/js/jquery.counterup.min.js"></script>
    <script src="./../assets/js/waypoints.min.js"></script>
    <script src="./../assets/js/jquery.countdown.min.js"></script>
    <script src="./../assets/js/hover-direction-snake.min.js"></script>

    <!-- contact js -->
    <script src="./../assets/js/contact.js"></script>
    <script src="./../assets/js/jquery.form.js"></script>
    <script src="./../assets/js/jquery.validate.min.js"></script>
    <script src="./../assets/js/mail-script.js"></script>
    <script src="./../assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="./../assets/js/plugins.js"></script>
    <script src="./../assets/js/main.js"></script>



</body>

</html>