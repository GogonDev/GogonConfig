<?php
if(@$_SESSION['nivel_usuario'] == null || $_SESSION['nivel_usuario'] != 'Admin'){
	echo "<script language='javascript'> window.location='../index.php' </script>";
}

require_once("../conexao.php"); 


//Total de Processadores
$select = $pdo->query("SELECT * FROM Produtos WHERE categoria = 'processador'")->fetchAll();
$totalProcessadores = count($select);
//Total Placa de video
$select = $pdo->query("SELECT * FROM produtos WHERE categoria = 'gpu'")->fetchAll();
$totalGpu = count($select);
//Total Memoria Ram
$select = $pdo->query("SELECT * FROM produtos WHERE categoria = 'ram'")->fetchAll();
$totalRam = count($select);
//Total Placa mãe
$select = $pdo->query("SELECT * FROM produtos WHERE categoria = 'mae'")->fetchAll();
$totalMae = count($select);
?>

<div class="row">
	<!-- Earnings (Monthly) Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-info shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-info text-uppercase mb-1">Processadores</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo @$totalProcessadores ?></div>
					</div>
					<div class="col-auto">
						<i class="fas fa-id-card fa-2x text-info"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Earnings (Monthly) Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-success shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-success text-uppercase mb-1">Placa de video</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo @$totalGpu ?> </div>
					</div>
					<div class="col-auto">
						<i class="fas fa-chalkboard-teacher fa-2x text-success"></i>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Earnings (Monthly) Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-primary shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Memoria Ram</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo @$totalRam ?> </div>
					</div>
					<div class="col-auto" align="center">
						<i class="fas fa-user-friends fa-2x text-primary"></i>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Pending Requests Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-secondary shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Placa mae</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo @$totalMae?></div>
					</div>
					<div class="col-auto">
						<i class="fas fa-clipboard-list fa-2x text-secondary"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class = "row">
	<div class="col-xl-8 col-lg-7">
		<!-- Area Chart -->
        <?php include_once("chart.php");?>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Categorias mais acessadas</h6>
            </div>
            <div class="card-body pt-5" style="padding-bottom: 1px;">
                <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                </div>
            </div>
        </div>
	</div>
		<div class="col-xl-4 col-lg-5">
			<div class="card shadow mb-4" style="padding-bottom: 30px; padding-top: 31px;">
				<!-- Card Body -->
				<div class="card-body">
                <?php
                    $mes_atual = date('m');
                    $ano_atual = date('Y');
                    $query = $pdo->query("SELECT * FROM acesso_usuarios WHERE MONTH(date) = '$mes_atual' AND YEAR(date) = '$ano_atual'")->fetchAll();
                    $totalPessoasMes = count($query);

                ?>
                <div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total de acessos no mês</div>
                        <h1 class="display-4"><?php echo @$totalPessoasMes?></h1>
					</div>
					<div class="col-auto">
						<i class="fas fa-user fa-4x text-primary"></i>
					</div>
				</div>
				</div>
			</div>
            <div class="card shadow mb-4" style="padding-bottom: 30px; padding-top: 31px;">
				<!-- Card Body -->
				<div class="card-body">
                 <?php
                        $query = $pdo->query("SELECT * FROM produtos")->fetchAll();
                        $totalItens = count($query);
                ?>
                <div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Total de peças</div>
                        <h1 class="display-4"><?php echo @$totalItens ?></h1>
					</div>
					<div class="col-auto">
						<i class="fas fa-wrench fa-4x text-danger"></i>
					</div>
				</div>
				</div>
			</div>
		</div>
</div>
<!-- <div class = "row">
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary">Produtos em alta</h6>
			</div>
			<div class="card-body">
				<nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Hoje</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Mensal</a>
                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Anual</a>
						<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Todo o tempo</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <?php

                    $query = $pdo->query("select id_produto, count(*) from acessos_produto WHERE MONTH(date) = '06' AND YEAR(date) = '2021' group by id_produto");
                    $res = $query->fetchAll(PDO::FETCH_ASSOC);





                    ?>
					<div class="table-responsive">
                        <table class="table table-bordered" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Imagem</th>
                                    <th>Nome</th>
                                    <th>Visualizações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="#">Work 1</a></td>
                                    <td>Doe</td>
                                    <td>john@example.com</td>
                                </tr>
                                <tr>
                                    <td><a href="#">Work 2</a></td>
                                    <td>Moe</td>
                                    <td>mary@example.com</td>
                                </tr>
                                <tr>
                                    <td><a href="#">Work 3</a></td>
                                    <td>Dooley</td>
                                    <td>july@example.com</td>
                                </tr>
                            </tbody>
                        </table>
					</div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
					<div class="table-responsive">
                        <table class="table" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Project Name</th>
                                    <th>Employer</th>
                                    <th>Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="#">Work 1</a></td>
                                    <td>Doe</td>
                                    <td>john@example.com</td>
                                </tr>
                                <tr>
                                    <td><a href="#">Work 2</a></td>
                                    <td>Moe</td>
                                    <td>mary@example.com</td>
                                </tr>
                                <tr>
                                    <td><a href="#">Work 3</a></td>
                                    <td>Dooley</td>
                                    <td>july@example.com</td>
                                </tr>
                            </tbody>
                        </table>
					</div>
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
					<div class="table-responsive">
                        <table class="table" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Contest Name</th>
                                    <th>Date</th>
                                    <th>Award Position</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="#">Work 1</a></td>
                                    <td>Doe</td>
                                    <td>john@example.com</td>
                                </tr>
                                <tr>
                                    <td><a href="#">Work 2</a></td>
                                    <td>Moe</td>
                                    <td>mary@example.com</td>
                                </tr>
                                <tr>
                                    <td><a href="#">Work 3</a></td>
                                    <td>Dooley</td>
                                    <td>july@example.com</td>
                                </tr>
                            </tbody>
                        </table>
					</div>
                    </div>
					<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
					<div class="table-responsive">
                        <table class="table" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Contest Name</th>
                                    <th>Date</th>
                                    <th>Award Position</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="#">Work 1</a></td>
                                    <td>Doe</td>
                                    <td>john@example.com</td>
                                </tr>
                                <tr>
                                    <td><a href="#">Work 2</a></td>
                                    <td>Moe</td>
                                    <td>mary@example.com</td>
                                </tr>
                                <tr>
                                    <td><a href="#">Work 3</a></td>
                                    <td>Dooley</td>
                                    <td>july@example.com</td>
                                </tr>
                            </tbody>
                        </table>
					</div>
                    </div>
                </div>
			</div>
        </div>
    </div> -->