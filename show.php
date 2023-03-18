<!DOCTYPE html>
<html lang="zxx">
<?php
if(@$_GET['show']){
    $q = @$_GET['show'];
    include_once('conexao.php');
    $query = $pdo->query("SELECT * FROM produtos WHERE id = '$q'");
        $res = $query->fetchAll(PDO::FETCH_ASSOC);
        $id = $res[0]['id'];
        $nome = $res[0]['nome'];
        $modelo = $res[0]['modelo'];
        $id_marca = $res[0]['marca'];
        $descricao = $res[0]['descri'];
        $categoria = $res[0]['categoria'];
        $img = $res[0]['img'];
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
    <title><?php echo @$nome ?> - Produto</title>
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
<!--Section: Block Content-->
<div class="container-xl" style="padding-top: 190px;">
	<div class="col-lg-12 card rounded-0 border-0 bg-white p-3">
		<div class="row m-0">
        <div class="col-12 col-md-12 col-lg-4 mb-3">
           <div class="card rounded-0 h-100 shadow">
             <div class="card-img-top">
               <img src="<?php echo "img/Pecas/$categoria/$img"?>" class="img-fluid mx-auto d-block" alt="Card image cap">
             </div>
           </div>
         </div>
			<div class="col-lg-8">
				<div class="card rounded-0 p-3 m-0 shadow">
					<div class="row">
						<div class="col-lg-12">
							<span><?php echo $nome;
                                if ($id == 18) {
                                    echo " <h5 class= text-danger>Nao Recomendada<h5>";
                                }
                                else {
                                    echo " <h5 class= text-success>Recomendada<h5>";
                                }
                            ?></span>
                            <?php 
                            if($categoria == "fonte"){
                                echo "<p class='m-0 p-0'>Fonte</p>";
                            }
                            elseif($categoria == "gpu"){
                                echo "<p class='m-0 p-0'>Placa de video</p>";
                            }
                            elseif($categoria == "hd"){
                                echo "<p class='m-0 p-0'>HD</p>";
                            }
                            elseif($categoria == "headset"){
                                echo "<p class='m-0 p-0'>Headset</p>";
                            }
                            elseif($categoria == "mae"){
                                echo "<p class='m-0 p-0'>Placa Mãe</p>";
                            }
                            elseif($categoria == "monitor"){
                                echo "<p class='m-0 p-0'>Monitor</p>";
                            }
                            elseif($categoria == "processador"){
                                echo "<p class='m-0 p-0'>Processador</p>";
                            }
                            elseif($categoria == "ram"){
                                echo "<p class='m-0 p-0'>Meroria Ram</p>";
                            }
                            elseif($categoria = "rato"){
                                echo "<p class='m-0 p-0'>Mouse</p>";
                            }
                            else{
                                echo "<p class='m-0 p-0'>Teclado</p>";
                            }
                            ?>
						</div>
						<div class="col-lg-12">
							<hr class="p-0 m-0">
						</div>
						<div class="col-lg-12 pt-2">
							<h5>Detalhes</h5>
							<span><?php echo $descricao ?></span><hr class="m-0 pt-2 mt-2">
						</div>
						<div class="col-lg-12 mt-3">
							<a href="https://www.zoom.com.br/search?q=<?php echo $nome ?>" class="btn btn-success w-100 rounded-0">Ver Produto</a>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 text-center pt-3">
				<h4>Produtos Relacionados</h4>
			</div>
		</div>
		<div class="row mt-3 p-0 text-center pro-box-section">
            <?php
                $query = $pdo->query("SELECT * FROM produtos WHERE categoria = '$categoria' order by id desc");
                $res = $query->fetchAll(PDO::FETCH_ASSOC);
                
                for ($i=0; $i < count($res); $i++) { 
                    foreach ($res[$i] as $key => $value) {
                    }
                    if($res[$i]['id'] == $q) 
                        continue;
                    else{
                    $id = $res[$i]['id'];
                    $nome = $res[$i]['nome'];
                    $img = $res[$i]['img'];
            ?>
			<div class="col-lg-3">
				<div class="card rounded-0 h-100 shadow card-search">
                    <div class="card-img-top" onclick="window.location='show.php?show=<?php echo $id ?>';">
					    <img src="<?php echo "img/Pecas/$categoria/$img"?>">
                    </div>
                    <div class="card-body text-center">
                        <h4 class="card-title">
                            <a href="show.php?show=<?php echo $id ?>" class=" font-weight-bold text-dark text-uppercase small"><?php echo $nome ?></a>
                        </h4>
                    </div>
				</div>
			</div>
            <?php
                }
            }
            ?>
		</div>
	</div>
</div>
<!--Section: Block Content-->

<!-- Footer Section Begin -->
<footer class="footer" style="margin-top: 30px">
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