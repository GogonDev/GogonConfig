<!DOCTYPE html>
<html lang="zxx">
<?php
if(@$_GET['q']){
$nome = @$_GET['q'];
include_once('conexao.php');
}
else{
    echo "<script language='javascript'> window.location='index.php' </script>";
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Directing Template">
    <meta name="keywords" content="Directing, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo @$nome ?> - Pesquisa Peças</title>
    <link rel="icon" href="img/icon.png">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

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
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header header--normal">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="./index.php"><img src="img/logo.png" alt=""></a><!--Trocar logo-->
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-md-3" style="padding-top: 25px;">
                <form action="search.php" method="GET">
                    <div class="form-row align-items-center">
                        <div class="col-9 col-lg-9 col-md-9 my-1">
                            <input type="text" class="form-control mb-2 rounded-0" id="inlineFormInput" name='q' placeholder="Procurar...">
                        </div>
                        <div class="col-3 col-lg-3 col-md-3">
                            <button type="submit" class="btn btn-danger mb-2 rounded-0">Pesquisar</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li><a href="./index.php">Inicio</a></li>
                                <li><a href="index.php#work">Como Funciona</a></li>
                                <li><a href="index.php#most">Mais Procurados</a>
                                <li><a href="contact.php">Contato</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <?php
        $query = $pdo->query("SELECT * FROM produtos WHERE nome LIKE '%$nome%'LIMIT 9");
        $res = $query->fetchAll(PDO::FETCH_ASSOC);
        $count = count($res);
    ?>
    <div class="container-xl" style="padding-top: 190px;">
              <div class="row">
                <div class="col-md-8 order-md-2 col-lg-9">
                  <div class="container-fluid">
                    <div class="row mb-5">
                      <div class="col-12">
                        <div class="dropdown text-md-left text-center float-md-left mb-3 mt-3 mt-md-0 mb-md-0">
                          <label class="mr-2">Ordenar por:</label>
                          <a class="btn btn-lg btn-light dropdown-toggle rounded-0" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Relevancia <span class="caret"></span></a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown" x-placement="bottom-start" style="position: absolute; transform: translate3d(71px, 48px, 0px); top: 0px; left: 0px; will-change: transform;">
                            <a class="dropdown-item" href="#">Relevancia</a>
                            <a class="dropdown-item" href="#">Price Descending</a>
                            <a class="dropdown-item" href="#">Price Ascending</a>
                            <a class="dropdown-item" href="#">Best Selling</a>
                          </div>
                        </div>
                        <div class="btn-group float-md-right ml-3">
                          <button type="button" class="btn btn-lg btn-light rounded-0"> <span class="fa fa-arrow-left"></span> </button>
                          <button type="button" class="btn btn-lg btn-light rounded-0"> <span class="fa fa-arrow-right"></span> </button>
                        </div>
                        <div class="dropdown float-right">
                          <label class="mr-2">View:</label>
                          <a class="btn btn-lg btn-light dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">12 <span class="caret"></span></a>
                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" x-placement="bottom-end" style="will-change: transform; position: absolute; transform: translate3d(120px, 48px, 0px); top: 0px; left: 0px;">
                            <a class="dropdown-item" href="#">12</a>
                            <a class="dropdown-item" href="#">24</a>
                            <a class="dropdown-item" href="#">48</a>
                            <a class="dropdown-item" href="#">96</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                    <?php 
                        if($count != 0){
                        for ($i=0; $i < count($res); $i++) {
                            foreach ($res[$i] as $key => $value) {
                            }
                            $id = $res[$i]['id'];
                            $nome = $res[$i]['nome'];
                            $modelo = $res[$i]['modelo'];
                            $id_produto = $res[$i]['id_produto'];
                            $id_marca = $res[$i]['marca'];
                            $categoria = $res[$i]['categoria'];
                            $img = $res[$i]['img'];
                            $query_marca = $pdo->query("SELECT * FROM marcas where id = $id_marca");
                            $res_marca = $query_marca->fetchAll(PDO::FETCH_ASSOC);
                            $marca = $res_marca[0]['Nome'];
                    ?>
                    <!-- item -->
                      <div class="col-6 col-md-6 col-lg-4 mb-3">
                        <div class="card h-100 border-0 card-search">
                          <div class="card-img-top" onclick="window.location='show.php?show=<?php echo $id ?>';">
                            <img src="<?php echo "img/Pecas/$categoria/$img"?>" class="img-fluid mx-auto d-block" alt="Card image cap">
                          </div>
                          <div class="card-body text-center">
                            <h4 class="card-title">
                              <a href="show.php?show=<?php echo $id ?>" class=" font-weight-bold text-dark text-uppercase small"><?php echo @$nome ?></a>
                            </h4>
                          </div>
                        </div>
                      </div>

                      <!-- Item -->
                      <?php }
                    }else{?>
                      <div class="container">
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="card h-100 border-0">
                              <div class="card-img-top">
                                <img class="img-responsive" src="img/listing/noitem.png" alt="Imagem"/>
                              </div>
                              <div class="card-body text-center">
                                <h4 class="card-title">
                                  <a href="#" class=" font-weight-bold text-dark text-uppercase small">Nenhum Produto Encontrado</a>
                                </h4>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                <?php
                    }
                    ?>
                    </div>
                    <div class="row sorting mb-5 mt-5">
                      <div class="col-12">
                        <div class="btn-group float-md-right ml-3">
                          <button type="button" class="btn btn-lg btn-light rounded-0"> <span class="fa fa-arrow-left"></span> </button>
                          <button type="button" class="btn btn-lg btn-light rounded-0"> <span class="fa fa-arrow-right"></span> </button>
                        </div>
                        <div class="dropdown float-md-right">
                          <label class="mr-2">View:</label>
                          <a class="btn btn-light btn-lg dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">12 <span class="caret"></span></a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">12</a>
                            <a class="dropdown-item" href="#">24</a>
                            <a class="dropdown-item" href="#">48</a>
                            <a class="dropdown-item" href="#">96</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div><div class="col-md-4 order-md-1 col-lg-3 sidebar-filter">
                  <h4 class="mt-0 mb-5"><span class="text-danger"><?php echo $count?></span> Resultados</h4>
                  <h6 class="text-uppercase font-weight-bold mb-3">Categorias</h6>
                  <div class="mt-2 mb-2 pl-2">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="category-1">
                      <label class="custom-control-label" for="category-1">Processadores</label>
                    </div>
                  </div>
                  <div class="mt-2 mb-2 pl-2">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="category-2">
                      <label class="custom-control-label" for="category-2">Placa de video</label>
                    </div>
                  </div>
                  <div class="mt-2 mb-2 pl-2">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="category-3">
                      <label class="custom-control-label" for="category-3">Memoria ram</label>
                    </div>
                  </div>
                  <div class="mt-2 mb-2 pl-2">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="category-4">
                      <label class="custom-control-label" for="category-4">Placa Mãe</label>
                    </div>
                  </div>
                  <div class="mt-2 mb-2 pl-2">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="category-5">
                      <label class="custom-control-label" for="category-5">Disco rigido</label>
                    </div>
                  </div>
                  <div class="mt-2 mb-2 pl-2">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="category-6">
                      <label class="custom-control-label" for="category-6">Monitores</label>
                    </div>
                  </div>
                  <div class="mt-2 mb-2 pl-2">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="category-7">
                      <label class="custom-control-label" for="category-7">Mouses</label>
                    </div>
                  </div>
                  <div class="mt-2 mb-2 pl-2">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="category-8">
                      <label class="custom-control-label" for="category-8">Teclados</label>
                    </div>
                  </div>
                  <div class="mt-2 mb-2 pl-2">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="category-9">
                      <label class="custom-control-label" for="category-9">Fontes</label>
                    </div>
                  </div>
                  <div class="mt-2 mb-2 pl-2">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="category-10">
                      <label class="custom-control-label" for="category-10">Headsets</label>
                    </div>
                  </div>
                  <div class="divider mt-5 mb-5 border-bottom border-secondary"></div>
                  <a href="#" class="btn btn-lg btn-block btn-danger rounded-0 mt-5">Atualizar Resultados</a>
                </div>
              </div>
            </div>

<!-- Footer Section Begin -->
    <footer class="footer fixarRodape">
        <div class="container-fluid">
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

</html>