<?php 
require_once("../../conexao.php"); 

//variaveis da fonte
$nome = @$_POST['nome'];
$modelo = @$_POST['modelo'];
$marca = @$_POST['marca'];
$descricao = @$_POST['descricao'];
$soquete = @$_POST['soquete'];
$tipo = @$_POST['tipo'];
$chipset = @$_POST['chipset'];
$categoria = "mae";

$antigo = $_POST['antigo'];
$id = $_POST['txtid2'];


if($nome == ""){
	echo 'O NOME É OBRIGATORIO!';
	exit();
}
if($modelo == ""){
	echo 'O MODELO É OBRIGATORIO!';
	exit();
}
if($marca == ""){
	echo 'A MARCA É OBRIGATORIA!';
	exit();
}
if($soquete == ""){
	echo 'O SOQUETE É OBRIGATORIO!';
	exit();
}
if($tipo == ""){
	echo 'O TIPO É OBRIGATORIA!';
	exit();
}
if($chipset == ""){
	echo 'O CHIPSET É OBRIGATORIA!';
	exit();
}



//VERIFICAR SE O MODELO JÁ EXISTE NO BANCO
if($antigo != $modelo){
	$query = $pdo->query("SELECT * FROM produtos where modelo = '$modelo' ");
	$res = $query->fetchAll(PDO::FETCH_ASSOC);
	$total_reg = @count($res);
	if($total_reg > 0){
		echo 'ESTE MODELO JA EXISTE';
		exit();
	}
}

//SCRIPT PARA SUBIR FOTO NO BANCO e verificar se ja tem uma foto no banco


$img = preg_replace('/[ -]+/' , '-' , @$_FILES['imagem']['name']);
$caminho = '../../../img/Peças/Mae/' .$img;
if (@$_FILES['imagem']['name'] == ""){
  $imagem = "sem-foto.jpg";
}else{
    $imagem = $img;
}

$imagem_temp = @$_FILES['imagem']['tmp_name']; 
$ext = pathinfo($imagem, PATHINFO_EXTENSION);   
if($ext == 'png' or $ext == 'jpg' or $ext == 'jpeg' or $ext == 'gif'){ 
move_uploaded_file($imagem_temp, $caminho);
}else{
	echo 'Extensão de Imagem não permitida!';
	exit();
}


if($id == ""){
	$resmae = $pdo->prepare("INSERT INTO mae SET tipo = :tipo, chipset = :chipset, soquete = :soquete");
		$resmae->bindValue(":soquete", $soquete);
		$resmae->bindValue(":tipo", $tipo);
		$resmae->bindValue(":chipset",$chipset);
		$resmae->execute();
		$id_last = $pdo->lastInsertId();
	$resproduto = $pdo->prepare("INSERT INTO produtos SET id_produto = '$id_last',categoria= :categoria, nome = :nome, modelo = :modelo, marca = :marca, descri = :descricao, img = '$imagem'");
		$resproduto->bindValue(":nome", $nome);
		$resproduto->bindValue(":modelo", $modelo);
		$resproduto->bindValue(":marca", $marca);
		$resproduto->bindValue(":descricao", $descricao);
		$resproduto->bindValue(":categoria", $categoria);
		$resproduto->execute();
}else{

	//resgatar o id da fonte
	$query = $pdo->query("SELECT * FROM produtos WHERE categoria = 'fonte'AND id= '$id'");
    $res = $query->fetchAll(PDO::FETCH_ASSOC);
	$id_produto = $res[0]['id_produto'];

	if(@$_FILES['imagem']['name'] == ""){
		$resproduto = $pdo->prepare("UPDATE produtos SET nome = :nome, modelo = :modelo, marca = :marca, descri = :descricao WHERE id = '$id'");
			$resproduto->bindValue(":nome", $nome);
			$resproduto->bindValue(":modelo", $modelo);
			$resproduto->bindValue(":marca", $marca);
			$resproduto->bindValue(":descricao", $descricao);
			$resproduto->execute();
		$resmae = $pdo->prepare("UPDATE mae SET tipo = :tipo, chipset = :chipset, soquete = :soquete WHERE id = '$id_produto'");
			$resmae->bindValue(":soquete", $soquete);
			$resmae->bindValue(":tipo", $tipo);
			$resmae->bindValue(":chipset",$chipset);
			$resmae->execute();
	}else{
		$resproduto = $pdo->prepare("UPDATE produtos SET nome = :nome, modelo = :modelo, marca = :marca, descri = :descricao, img = '$imagem' WHERE id = '$id'");
			$resproduto->bindValue(":nome", $nome);
			$resproduto->bindValue(":modelo", $modelo);
			$resproduto->bindValue(":marca", $marca);
			$resproduto->bindValue(":descricao", $descricao);
			$resproduto->execute();
		$resmae = $pdo->prepare("UPDATE mae SET tipo = :tipo, chipset = :chipset, soquete = :soquete WHERE id = '$id_produto'");
			$resmae->bindValue(":soquete", $soquete);
			$resmae->bindValue(":tipo", $tipo);
			$resmae->bindValue(":chipset",$chipset);
			$resmae->execute();
	}	
}


echo 'Salvo com Sucesso!';

?>