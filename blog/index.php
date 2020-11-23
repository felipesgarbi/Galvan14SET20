<!doctype html>
<html class="no-js" lang="zxx">

<?php include $_SERVER["DOCUMENT_ROOT"] . "/estrutura/head.php"; ?>

<body>
    <!--? Preloader Start -->
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
    $blog = "active";
    include $_SERVER["DOCUMENT_ROOT"] . "/estrutura/header.php" ?>
    <main>
        <!--? Hero Start -->

        <!-- TOP DO BLOG INICIO -->
        <div class="col-md-12 border mb-5 topBlog">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 textoCentralizado pt-40 mb-5">
                        <h1><b class="font-ruda textoAzul"> BLOG DA GALVAN</b></h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- TOP DO BLOG FIM -->

        <!-- Hero End -->

        <!--? Blog Area Start-->
        <section class="blog_area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mb-5 mb-lg-0">
                        <div class="blog_left_sidebar">

                        <!-- POST 01 INÍCIO -->
                        <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="../apartamento-na-planta/CAPA.png" alt="">
                                    <span class="blog_item_date">
                                        <h3>16</h3>
                                        <p>OUT</p>
                                    </span>
                                </div>
                                <div class="blog_details">
                                    <a class="d-inline-block" href="/apartamento-na-planta">
                                        <h2 class="blog-head" style="color: #2d2d2d;">5 MEDOS de comprar um APARTAMENTO NA PLANTA</h2>
                                    </a>
                                    <p>
                                        A compra de um imóvel é um grande passo na vida de qualquer pessoa. 
                                        O sonho de ter um apartamento totalmente novo, com instalações modernas 
                                        e com um preço acessível pode estar ao seu alcance muito antes do que 
                                        você imagina!
                                    </p>
                                </div>
                            </article>    
                        <!-- POST 01 FIM -->

                        <!-- POST 02 INÍCIO -->
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="../apartamento-ideal/CAPA.png" alt="">
                                    <span class="blog_item_date">
                                        <h3>08</h3>
                                        <p>SET</p>
                                    </span>
                                </div>
                                <div class="blog_details">
                                    <a class="d-inline-block" href="/apartamento-ideal">
                                        <h2 class="blog-head" style="color: #2d2d2d;">5 PASSOS para encontrar o APARTAMENTO IDEAL</h2>
                                    </a>
                                    <p>
                                        Está pensando em comprar um apartamento mas não sabe o que escolher diante de 
                                        tantas opções disponíveis no mercado?
                                    </p>
                                </div>
                            </article>
                        <!-- POST 02 FIM -->

                        <!-- POST 03 INÍCIO -->
                        <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="../arquitetura-decoracao/CAPA.png" alt="">
                                    <span class="blog_item_date">
                                        <h3>29</h3>
                                        <p>JUL</p>
                                    </span>
                                </div>
                                <div class="blog_details">
                                    <a class="d-inline-block" href="/arquitetura-decoracao">
                                        <h2 class="blog-head" style="color: #2d2d2d;">
                                        DICAS FÁCEIS e BARATAS para trazer mais CONFORTO 
                                        para a sua casa durante DISTÂNCIAMENTO SOCIAL
                                    </h2>
                                    </a>
                                    <p>
                                        O distanciamento social trouxe um novo olhar para dentro das nossas casas. 
                                        Se antes passávamos poucas horas desfrutando do nosso lar, hoje ele se 
                                        tornou nosso ambiente de trabalho, nosso espaço de lazer e até mesmo escola 
                                        e playground para quem tem filhos.
                                    </p>
                                </div>
                            </article>
                        <!-- POST 03 FIM -->

                            <nav class="blog-pagination justify-content-center d-flex">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a href="#" class="page-link" aria-label="Previous">
                                            <i class="ti-angle-left"></i>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">1</a>
                                    </li>
                                    <!--
                                    <li class="page-item active">
                                        <a href="#" class="page-link">2</a>
                                    </li>
                                    -->
                                    <li class="page-item">
                                        <a href="#" class="page-link" aria-label="Next">
                                            <i class="ti-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget search_widget">
                                <form action="#">
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder='Digite aqui o que deseja encontrar...' onfocus="this.placeholder = ''" onblur="this.placeholder = 'Digite aqui o que deseja encontrar...'">
                                        </div>
                                    </div>
                                    <button class="button primary-bg text-white w-100 btn_1 boxed-btn" style="border-radius: 10px;" type="submit">Pesquisar</button>
                                </form>
                            </aside>
                            <aside class="single_sidebar_widget post_category_widget">
                                <h4 class="widget_title" style="color: #2d2d2d;">Categorias</h4>
                                <ul class="list cat-list">
                                    <li>
                                        <a href="#" class="d-flex">
                                            <p>Galvan Engenharia</p>
                                            <p> (01)</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex">
                                            <p>Joinville</p>
                                            <p> (01)</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex">
                                            <p>Construção Civil</p>
                                            <p> (01)</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex">
                                            <p>Engenharia e tecnologia</p>
                                            <p> (01)</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex">
                                            <p>Mercado imobiliário</p>
                                            <p> (01)</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex">
                                            <p>Arquitetura e Decoração</p>
                                            <p> (01)</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex">
                                            <p>Estilo de Vida</p>
                                            <p> (01)</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex">
                                            <p>Curiosidades</p>
                                            <p> (01)</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex">
                                            <p>Eventos/Reconhecimento</p>
                                            <p> (01)</p>
                                        </a>
                                    </li>
                                </ul>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Area End -->
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
            z-index:1000;" target="_blank">

        <i style="margin-top:16px" class="fab fa-whatsapp"></i></a>

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