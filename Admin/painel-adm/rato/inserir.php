<?php 
require_once("../../conexao.php"); 

//variaveis da fonte
$nome = @$_POST['nome'];
$modelo = @$_POST['modelo'];
$marca = @$_POST['marca'];
$descricao = @$_POST['descricao'];

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




//VERIFICAR SE O MODELO JÁ EXISTE NO BANCO
if($antigo != $modelo){
	$query = $pdo->query("SELECT * FROM rato where modelo = '$modelo' ");
	$res = $query->fetchAll(PDO::FETCH_ASSOC);
	$total_reg = @count($res);
	if($total_reg > 0){
		echo 'ESTE MODELO JA EXISTE';
		exit();
	}
}

//SCRIPT PARA SUBIR FOTO NO BANCO e verificar se ja tem uma foto no banco


$img = preg_replace('/[ -]+/' , '-' , @$_FILES['imagem']['name']);
$caminho = '../../../img/Peças/Mouse/' .$img;
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
	$res = $pdo->prepare("INSERT INTO rato SET nome = :nome, modelo = :modelo, marca = :marca, descri = :descricao, img = '$imagem'");	
}else{
	if(@$_FILES['imagem']['name'] == ""){
		$res = $pdo->prepare("UPDATE rato SET nome = :nome, modelo = :modelo, marca = :marca, descri = :descricao WHERE id = '$id'");
	}else{
		$res = $pdo->prepare("UPDATE rato SET nome = :nome, modelo = :modelo, marca = :marca, descri = :descricao, img = '$imagem' WHERE id = '$id'");
	}	
}

$res->bindValue(":nome", $nome);
$res->bindValue(":modelo", $modelo);
$res->bindValue(":marca", $marca);
$res->bindValue(":descricao", $descricao);

$res->execute();

echo 'Salvo com Sucesso!';

?>