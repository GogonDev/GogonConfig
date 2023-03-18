<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Directing Template">
    <meta name="keywords" content="Directing, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gogon Config</title>
    <link rel="icon" type="image/png" href="img/icon.png">
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <a id="back-to-top" href="#topo" class="btn btn-secondary btn-lg scrollToTop" role="button"><i class="fa fa-arrow-up" ></i></a>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header" id="topo">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <img src="img/logo.png" alt="">
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="./index.php">Inicio</a></li>
                                <li><a href="#work">Como Funciona</a></li>
                                <li><a href="#most">Mais Procurados</a>
                                    <!-- <ul class="dropdown">
                                        <li><a href="./about.html">About</a></li>
                                        <li><a href="./listing-details.html">Listing Details</a></li>
                                        <li><a href="./blog-details.html">Blog Details</a></li>
                                        <li><a href="./contact.html">Contact</a></li>
                                    </ul> -->
                                </li>
                                <li><a href="contact.php">Contato</a></li>
                                <!-- <li><a href="./blog.html">Blog</a></li>
                                <li><a href="#">Shop</a></li> -->
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero set-bg" data-setbg="img/hero/hero-bg.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero__text">
                        <div class="section-title">
                            <a href="./index.php"><img src="img/logo3.png" alt=""></a>
                            <h2>Descubra as especificações que voce precisa</h2>
                        </div>
                        <div class="hero__search__form">
                            <form action="search.php" method="GET">
                                <input type="text" name="q" placeholder="Procurar...">
                                <button type="submit">Pesquisar Agora</button>
                            </form>
                        </div>
                        <ul class="hero__categories__tags">
                            <li><a href="index.php?page=processadores" ><img src="img/hero/cat-2.png" alt=""> Processadores</a></li>
                            <li><a href="index.php?page=placadevideo" ><img src="img/hero/cat-3.png" alt=""> Placas de Video</a></li>
                            <li><a href="index.php?page=memoria" ><img src="img/hero/cat-1.png" alt=""> Memoria RAM</a></li>
                            <li><a href="index.php?page=memoria" ><img src="img/hero/cat-9.png" alt=""> Placa mae</a></li>
                            <li><a href="index.php?page=memoria" ><img src="img/hero/cat-10.png" alt=""> Disco rigido</a></li>
                            <li><a href="index.php?page=monitores" ><img src="img/hero/cat-4.png" alt=""> Monitores</a></li>
                            <li><a href="index.php?page=mouse&teclado" ><img src="img/hero/cat-5.png" alt=""> Mouses</a></li>
                            <li><a href="index.php?page=headsets" ><img src="img/hero/cat-8.png" alt=""> Teclados</a></li>
                            <li><a href="index.php?page=fontes" ><img src="img/hero/cat-6.png" alt=""> Fontes</a></li>
                            <li><a href="index.php?page=headsets" ><img src="img/hero/cat-7.png" alt=""> Headsets</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
    
    <!-- Work Section Begin -->
    <section class="work spad" id="work">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Como o site funciona ?
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="work__item">
                        <div class="work__item__number">01.</div>
                        <img src="img/work/work-1.png" alt="">
                        <h5>Buscar por peça.</h5>
                        <p>Você pode pesquisar a peça que deseja e lhe mostraremos aonde ela pode ser comprada pelo melhor preço possivel</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="work__item">
                        <div class="work__item__number">02.</div>
                        <img src="img/work/work-2.png" alt="">
                        <h5>Buscar por maquina.</h5>
                        <p>Você pode informar seu objetivo, e vamos lhe apresentar as melhores configuraçoes para resolve-lo</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="work__item">
                        <div class="work__item__number">03.</div>
                        <img src="img/work/work-3.png" alt="">
                        <h5>Visitar nosso Youtube.</h5>
                        <p>Você também pode visitar nosso canal de reviews, para ter as melhores dicas e informaçoes sobre as peças que procura.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Work Section End -->

    <!-- Most Search Section Begin -->
    <section class="most-search spad" id="most">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Os mais procurados</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="most__search__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">
                                    <span><img src="img/hero/cat-2.2.png" alt=""></span>
                                    Processadores
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">
                                    <span><img src="img/hero/cat-3.3.png" alt=""></span>
                                    Placa de video
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">
                                    <span><img src="img/hero/cat-1.1.png" alt=""></span>
                                    Memoria Ram
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-4" role="tab">
                                    <span><img src="img/hero/cat-9.9.png" alt=""></span>
                                    Placa mae
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-5" role="tab">
                                    <span><img src="img/hero/cat-10.10.png" alt=""></span>
                                    Disco rigido
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-6" role="tab">
                                    <span><img src="img/hero/cat-4.4.png" alt=""></span>
                                    Monitores
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-7" role="tab">
                                    <span><img src="img/hero/cat-5.5.png" alt=""></span>
                                    Mouses
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-8" role="tab">
                                    <span><img src="img/hero/cat-8.8.png" alt=""></span>
                                    Teclados
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-9" role="tab">
                                    <span><img src="img/hero/cat-6.6.png" alt=""></span>
                                    Fontes
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-10" role="tab">
                                    <span><img src="img/hero/cat-7.7.png" alt=""></span>
                                    Headsets
                                </a>
                            </li>
                        </ul>
                    </div> 
            <div class="tab-content">
             <!-- MENU -->
                <div class="tab-pane active" id="tabs-1" role="tabpanel">
                    <div class="row">
                    <?php
                        
                    ?>
                    <!-- ITEM -->
                    <div class="col-xl-3 col-lg-3 mb-4">
                        <div class="card">
                            <img class="card-img-top" src="img/Pecas/Processador/Processador_AMD_Ryzen_5_5600X_Cache_35MB_3.7GHz_4.6GHz_Max_Turbo_AM4.jpg" alt="Card image cap">
                            <div class="card-body">
                            <h5 class="card-title">Processador AMD Ryzen 5 5600X - AM4</h5>
                            <p class="card-text"></p>
                            <p class="card-text"><small class="text-muted"></small></p>
                            </div>
                        </div>
                    </div>
                    <!-- ITEM FIM -->
                    <!-- ITEM -->
                    <div class="col-xl-3 col-lg-3 mb-4">
                        <div class="card">
                            <img class="card-img-top" src="img/Pecas/Processador/164402103_2225708600899991_152640100786634831_n.jpg" alt="Card image cap">
                            <div class="card-body">
                            <h5 class="card-title">Processador AMD Ryzen 5 1600 - AM4</h5>
                            <p class="card-text"></p>
                            <p class="card-text"><small class="text-muted"></small></p>
                            </div>
                        </div>
                    </div>
                    <!-- ITEM FIM -->
                    <!-- ITEM -->
                    <div class="col-xl-3 col-lg-3 mb-4">
                        <div class="card">
                            <img class="card-img-top" src="img/Pecas/Processador/Processador_AMD_Ryzen_7_3700X_32MB_3.6GHz_4.4GHz_Max_Turbo_AM4.jpg" alt="Card image cap">
                            <div class="card-body">
                            <h5 class="card-title">Processador AMD Ryzen 7 3700X 3.6GHz - AM4</h5>
                            <p class="card-text"></p>
                            <p class="card-text"><small class="text-muted"></small></p>
                            </div>
                        </div>
                    </div>
                    <!-- ITEM FIM -->
                    <!-- ITEM -->
                    <div class="col-xl-3 col-lg-3 mb-4">
                        <div class="card">
                            <img class="card-img-top" src="img/Pecas/Processador/Processador_AMD_Athlon_3000G_Two_Core_Cache_5MB_3500MHz_AM4.jpg" alt="Card image cap">
                            <div class="card-body">
                            <h5 class="card-title">Processador AMD Athlon 3000G Two Core - AM4</h5>
                            <p class="card-text"></p>
                            <p class="card-text"><small class="text-muted"></small></p>
                            </div>
                        </div>
                    </div>
                    <!-- ITEM FIM -->
                    
                    </div>
                </div>
                 <!-- MENU FIM -->
                <!-- MENU --> 
                <div class="tab-pane" id="tabs-2" role="tabpanel">
                    <div class="row">
                    <!-- ITEM -->
                    <div class="col-xl-3 col-lg-3 mb-4">
                        <div class="card">
                            <img class="card-img-top" src="<?php echo "img/Pecas/gpu/Placa_de_Video_EVGA_NVIDIA_GeForce_GT_710_2GB_DDR3.jpg"?>" alt="Card image cap">
                            <div class="card-body">
                            <h5 class="card-title">Placa de Vídeo EVGA NVIDIA GeForce GT 710 2GB</h5>
                            </div>
                        </div>
                    </div>
                    <!-- ITEM FIM -->
                    <!-- ITEM -->
                    <div class="col-xl-3 col-lg-3 mb-4">
                        <div class="card">
                            <img class="card-img-top" src="<?php echo "img/Pecas/gpu/Placa_de_Video_MSI_NVIDIA_GeForce_GTX_1650_D6_Ventus_XS_4G_OC_4GB_GDDR6.jpg"?>" alt="Card image cap">
                            <div class="card-body">
                            <h5 class="card-title">Placa de Vídeo MSI NVIDIA GeForce GTX 1650 4GB</h5>
                            </div>
                        </div>
                    </div>
                    <!-- ITEM FIM -->
                    <!-- ITEM -->
                    <div class="col-xl-3 col-lg-3 mb-4">
                        <div class="card">
                            <img class="card-img-top" src="<?php echo "img/Pecas/gpu/Placa_de_Video_PCYes_Graffiti_Series_GTX_1650_4GB_8Gbps_GDDR6.jpg"?>" alt="Card image cap">
                            <div class="card-body">
                            <h5 class="card-title">Placa de Vídeo PCYes Graffiti Series GTX 1650, 4GB GDDR6</h5>
                            </div>
                        </div>
                    </div>
                    <!-- ITEM FIM -->
                    <!-- ITEM -->
                    <div class="col-xl-3 col-lg-3 mb-4">
                        <div class="card">
                            <img class="card-img-top" src="<?php echo "img/Pecas/gpu/Placa_de_Video_Gigabyte_GeForce_RTX_3060_Gaming_OC_12G_12_GB_GDDR6_Ray_Tracing.jpg"?>" alt="Card image cap">
                            <div class="card-body">
                            <h5 class="card-title">Placa de Vídeo Gigabyte GeForce RTX 3060 Gaming OC 12 GB</h5>
                            </div>
                        </div>
                    </div>
                    <!-- ITEM FIM -->
                    </div>
                </div>
                <!-- MENU FIM -->
                <!-- MENU -->
                <div class="tab-pane" id="tabs-3" role="tabpanel">
                    <div class="row">
                    <!-- ITEM -->
                    <div class="col-xl-3 col-lg-3 mb-4">
                        <div class="card">
                            <img class="card-img-top" src="<?php echo "img/Pecas/$categoria/$img"?>" alt="Card image cap">
                            <div class="card-body">
                            <h5 class="card-title"><?php echo @$nome ?></h5>
                            <p class="card-text">This is a lonASDASDger card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                    <!-- ITEM FIM -->
                    </div>
                </div>
                <!-- MENU FIM -->
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- Most Search Section End -->

     <!-- Newslatter Section Begin -->
     <section class="newslatter">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="newslatter__text">
                        <h3>Ainda com alguma duvida ao procurar por peças?</h3>
                        <h5>Entre em contato para que possamos ajuda-lo melhor</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <a href="contact.php" type="button" class="btn btn-danger btn-lg btn-block rounded-0">Contate-nos</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Newslatter Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer" style="padding-top: 20px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="img/footer-logo.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1 col-md-6">
                    <div class="footer__address">
                        <ul>
                            <li>
                                <span>Whatsapp:</span>
                                <p>(+55) 21 4002-8922</p>
                            </li>
                            <li>
                                <span>Telefone:</span>
                                <p>(+12) 345-678-910</p>
                            </li>
                            <li>
                                <span>Email:</span>
                                <p>gogon@gmail.com</p>
                            </li>
                            <li>
                                <span>Connect Us:</span>
                                <div class="footer__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-skype"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6">
                    <div class="footer__widget">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Suporte</a></li>
                            <li><a href="#work">Como isso funciona</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> e editado por gogon
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                        <div class="footer__copyright__links">
                            <a href="#">Terms</a>
                            <a href="#">Privacy Policy</a>
                            <a href="#">Cookie Policy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.barfiller.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>
<?php
    // include_once("conexao.php");
    // $ip = $_SERVER['REMOTE_ADDR'];
    // $query = $pdo->prepare("INSERT INTO acesso_usuarios (date,ip) VALUES (NOW(),'$ip')");
    // $query->execute();
?>
</html>