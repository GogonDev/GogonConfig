<?php 
require_once("../../conexao.php"); 

//variaveis da fonte
$nome = @$_POST['nome'];
$modelo = @$_POST['modelo'];
$marca = @$_POST['marca'];
$descricao = @$_POST['descricao'];
$capacidade = @$_POST['capacidade'];
$velocidade = @$_POST['velocidade'];
$pinagem = @$_POST['pinagem'];
$tipo = @$_POST['tipo'];
$voltagem = @$_POST['voltagem'];

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
if($capacidade == ""){
	echo 'A CAPACIDADE É OBRIGATORIA!';
	exit();
}
if($velocidade == ""){
	echo 'A VELOCIDADE É OBRIGATORIA!';
	exit();
}
if($pinagem == ""){
	echo 'A PINAGEM É OBRIGATORIA!';
	exit();
}
if($tipo == ""){
	echo 'O TIPO É OBRIGATORIO!';
	exit();
}
if($voltagem == ""){
	echo 'A VOLTAGEM É OBRIGATORIA!';
	exit();
}


//VERIFICAR SE O MODELO JÁ EXISTE NO BANCO
if($antigo != $modelo){
	$query = $pdo->query("SELECT * FROM ram where modelo = '$modelo' ");
	$res = $query->fetchAll(PDO::FETCH_ASSOC);
	$total_reg = @count($res);
	if($total_reg > 0){
		echo 'ESTE MODELO JA EXISTE';
		exit();
	}
}

//SCRIPT PARA SUBIR FOTO NO BANCO e verificar se ja tem uma foto no banco


$img = preg_replace('/[ -]+/' , '-' , @$_FILES['imagem']['name']);
$caminho = '../../../img/Peças/Ram/' .$img;
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
	$res = $pdo->prepare("INSERT INTO ram SET nome = :nome, modelo = :modelo, marca = :marca, descri = :descricao, velocidade = :velocidade, img = '$imagem', pinagem = :pinagem, capacidade = :capacidade, tipo = :tipo, voltagem = :voltagem");	
}else{
	if(@$_FILES['imagem']['name'] == ""){
		$res = $pdo->prepare("UPDATE ram SET nome = :nome, modelo = :modelo, marca = :marca, descri = :descricao, velocidade = :velocidade, pinagem = :pinagem, capacidade = :capacidade, tipo = :tipo, voltagem = :voltagem WHERE id = '$id'");
	}else{
		$res = $pdo->prepare("UPDATE ram SET nome = :nome, modelo = :modelo, marca = :marca, descri = :descricao, velocidade = :velocidade, img = '$imagem', pinagem = :pinagem, capacidade = :capacidade, tipo = :tipo, voltagem = :voltagem WHERE id = '$id'");
	}	
}

$res->bindValue(":nome", $nome);
$res->bindValue(":modelo", $modelo);
$res->bindValue(":marca", $marca);
$res->bindValue(":capacidade", $capacidade);
$res->bindValue(":velocidade", $velocidade);
$res->bindValue(":pinagem",$pinagem);
$res->bindValue(":tipo",$tipo);
$res->bindValue(":voltagem",$voltagem);
$res->bindValue(":descricao", $descricao);

$res->execute();

echo 'Salvo com Sucesso!';

?>