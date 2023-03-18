<?php 
    @session_start();
    require_once("../conexao.php"); 

    //variaveis para o menu
    $pag = @$_GET["pag"];
    $menu = "processador";
    $menu1 = "gpu";
    $menu2 = "ram";
    $menu3 = "mae";
    $menu4 = "hd";
    $menu5 = "monitor";
    $menu6 = "rato";
    $menu7 = "teclado";
    $menu8 = "fonte";
    $menu9 = "headset";
//armazenar o acesso do usuario

//RECUPERAR DADOS DO USUÁRIO
if(isset($_SESSION['id_usuario'])){
$query = $pdo->query("SELECT * FROM usuarios where id = '$_SESSION[id_usuario]'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$nome_usu = @$res[0]['nome'];
$cpf_usu = @$res[0]['cpf'];
$email_usu = @$res[0]['email'];
$idUsuario = @$res[0]['id'];
}
 ?>



<!DOCTYPE html>
<html lang="pt-br">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="Hugo Vasconcelos">

<title>Painel Administrador</title>

<!-- Custom fonts for this template-->
<link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


<!-- Custom styles for this template-->
<link href="../css/sb-admin-2.css" rel="stylesheet">
<link href="../css/style.css" rel="stylesheet">

<link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">


<!-- Bootstrap core JavaScript-->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<link rel="icon" href="../img/icon.png" type="image/png">

</head>

    <body id="page-top">


        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <ul class="navbar-nav bg-danger sidebar sidebar-dark accordion shadow" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                    <div class="sidebar-brand-icon rotate-n-15">
                        <i class="fas fa-wrench"></i>
                    </div>
                    <div class="sidebar-brand-text mx-3">Admin</div>
                </a>

                 <!-- Divider -->
                 <hr class="sidebar-divider my-0">
<!-- Divider -->
<hr class="sidebar-divider">
<li class="nav-item">
    <a class="nav-link" href="index.php">
        <i class="fas fa-desktop"></i>
        <span>Inicio</span></a>
</li>
<hr class="sidebar-divider">
<!-- Heading -->
<div class="sidebar-heading">
    Cadastros
</div>
<!-- <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-users"></i>
        <span>Pessoas</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded-sm">
            
            <a class="collapse-item" href="index.php?pag=<?php /*echo $menu1*/ ?>">Secretarios</a>
            <a class="collapse-item" href="index.php?pag=<?php /*echo $menu2*/ ?>">Professores</a>
            <a class="collapse-item" href="index.php?pag=<?php /*echo $menu3*/ ?>">Tesoureiros</a>
            <a class="collapse-item" href="index.php?pag=<?php /*echo $menu4*/ ?>">Funcionarios</a>
            <a class="collapse-item" href="index.php?pag=<?php /*echo $menu9*/ ?>">Responsaveis</a>
            <a class="collapse-item" href="index.php?pag=<?php /*echo $menu8*/ ?>">Alunos</a>
        </div>
    </div>
</li> -->
<li class="nav-item">
    <a class="nav-link" href="index.php?pag=<?php echo $menu?>">
        <img src="../img/icons/cat-2.png" alt="">
    <span>Processadores</span></a>
</li>
<li class="nav-item">
    <a class="nav-link" href="index.php?pag=<?php echo $menu1?>">
        <img src="../img/icons/cat-3.png" alt="">
        <span>Placa de Video</span></a>
</li>
<li class="nav-item">
    <a class="nav-link" href="index.php?pag=<?php echo $menu2?>">
        <img src="../img/icons/cat-1.png" alt="">
        <span>Memoria Ram</span></a>
</li>
<li class="nav-item">
    <a class="nav-link" href="index.php?pag=<?php echo $menu3?>">
        <img src="../img/icons/cat-9.png" alt="">
        <span>Placa Mae</span></a>
</li>
<li class="nav-item">
    <a class="nav-link" href="index.php?pag=<?php echo $menu4?>">
        <img src="../img/icons/cat-10.png" alt="">
        <span>Disco Rigido</span></a>
</li>
<li class="nav-item">
    <a class="nav-link" href="index.php?pag=<?php echo $menu5?>">
        <img src="../img/icons/cat-4.png" alt="">
        <span>Monitor</span></a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="index.php?pag=<?php echo $menu6?>">
        <img src="../img/icons/cat-5.png" alt="">
        <span>Mouse</span></a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="index.php?pag=<?php echo $menu7?>">
        <img src="../img/icons/cat-8.png" alt="">
        <span>Teclado</span></a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="index.php?pag=<?php echo $menu8?>">
        <img src="../img/icons/cat-6.png" alt="">
        <span>Fonte</span></a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="index.php?pag=<?php echo $menu9?>">
        <img src="../img/icons/cat-7.png" alt="">
        <span>Headset</span></a>
    </li>
<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">
<!-- Heading -->
<!-- <div class="sidebar-heading">
    Sites Externos
</div>
    <li class="nav-item">
        <a class="nav-link" href="index.php?pag=,<?php //echo $menu8 ?>">
            <i class="fas fa-fw fa-university"></i>
        <span></span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="index.php?pag=<?php //echo $menu8 ?>">
            <i class="fas fa-fw fa-dollar-sign"></i>
        <span>Portal Financeiro</span></a>
    </li>
<hr class="sidebar-divider"> -->



</ul>
<!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link rounded-sm-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                        <img src="../img/navbar.png" width="70" height="70" alt="">



                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">



                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $nome_usu ?></span>
                                    <img class="img-profile rounded-circle" src="../img/sem-foto.jpg">

                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="" data-toggle="modal" data-target="#ModalPerfil">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-primary"></i>
                                        Editar Perfil
                                    </a>

                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="../logout.php">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-danger"></i>
                                        Sair
                                    </a>
                                </div>
                            </li>

                        </ul>

                    </nav>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <?php if (@$pag == @$menu) { 
                            include_once("view/".@$menu.".php"); 
                        
                        } else if (@$pag==@$menu1) {
                            include_once("view/".@$menu1.".php");
                        
                        } else if (@$pag==@$menu2) {
                            include_once("view/".@$menu2.".php");

                         } else if (@$pag==@$menu3) {
                            include_once("view/".@$menu3.".php");

                        } else if (@$pag==@$menu4) {
                            include_once("view/".@$menu4.".php");

                        } else if (@$pag==@$menu5) {
                            include_once("view/".@$menu5.".php");

                        } else if (@$pag==@$menu6) {
                            include_once("view/".@$menu6.".php");

                        }else if (@$pag==@$menu7) {
                            include_once("view/".@$menu7.".php");

                        }else if (@$pag == @$menu8) {
                            include_once("view/".@$menu8.".php");

                        }else if (@$pag == @$menu9) {
                            include_once("view/".@$menu9.".php");

                         } else {
                        include_once("home.php");
                        }
                        ?>
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- End of Main Content -->
                <footer class="sticky-footer bg-white shadow">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Gogon 2021 Sua criadora de sites com conteudo dividavel</span>
                        </div>
                    </div>
                </footer>


            </div>
            <!-- End of Content Wrapper -->
        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded-sm" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>




        <!--  Modal Perfil-->
        <div class="modal fade" id="ModalPerfil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Editar Perfil</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>



                    <form id="form-perfil" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">

                           
                                    <div class="form-group">
                                        <label >Nome</label>
                                        <input value="<?php echo $nome_usu ?>" type="text" class="form-control" id="nome_usu" name="nome_usu" placeholder="Nome">
                                    </div>

                                    <div class="form-group">
                                        <label >CPF</label>
                                        <input value="<?php echo $cpf_usu ?>" type="text" class="form-control" id="cpf_usu" name="cpf_usu" placeholder="CPF">
                                    </div>

                                    <div class="form-group">
                                        <label >Email</label>
                                        <input value="<?php echo $email_usu ?>" type="email" class="form-control" id="email_usu" name="email_usu" placeholder="Email">
                                    </div>

                                    <div class="form-group">
                                        <label >Senha</label>
                                        <input value="" type="password" class="form-control" id="senha_usu" name="senha_usu" placeholder="Senha">
                                    </div>
                             



                            <small>
                                <div id="mensagem-perfil" class="mr-4">

                                </div>
                            </small>



                        </div>
                        <div class="modal-footer">



                            <input value="<?php echo $idUsuario ?>" type="hidden" name="id_usu" id="id_usu">
                            <input value="<?php echo $cpf_usu ?>" type="hidden" name="antigo_usu" id="antigo_usu">

                            <button type="button" id="btn-fechar-perfil" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" name="btn-salvar-perfil" id="btn-salvar-perfil" class="btn btn-info">Salvar</button>
                        </div>
                    </form>


                </div>
            </div>
        </div>


        <!-- Core plugin JavaScript-->
        <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="../js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="../vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="../js/demo/chart-area-demo.js"></script>
        <script src="../js/demo/chart-pie-demo.js"></script>

        <!-- Page level plugins -->
        <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="../js/demo/datatables-demo.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
        <script src="../js/mascaras.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
        <script type="text/javascript" src="../js/calendar.js"></script>
        <script type="text/javascript" src="../js/events.js"></script>
    </body>

</html>





<!--AJAX PARA INSERÇÃO E EDIÇÃO DOS DADOS COM IMAGEM -->
<script type="text/javascript">
    $("#form-perfil").submit(function () {
       
        event.preventDefault();
        var formData = new FormData(this);

        $.ajax({
            url: "editar-perfil.php",
            type: 'POST',
            data: formData,

            success: function (mensagem) {

                $('#mensagem-perfil').removeClass()

                if (mensagem.trim() == "Salvo com Sucesso!") {

                    //$('#nome').val('');
                    //$('#cpf').val('');
                    $('#btn-fechar-perfil').click();
                    window.location = "index.php";

                } else {

                    $('#mensagem-perfil').addClass('text-danger')
                }

                $('#mensagem-perfil').text(mensagem)

            },

            cache: false,
            contentType: false,
            processData: false,
            xhr: function () {  // Custom XMLHttpRequest
                var myXhr = $.ajaxSettings.xhr();
                if (myXhr.upload) { // Avalia se tem suporte a propriedade upload
                    myXhr.upload.addEventListener('progress', function () {
                        /* faz alguma coisa durante o progresso do upload */
                    }, false);
                }
                return myXhr;
            }
        });
    });
</script>