<?php 
require_once("../../conexao.php"); 

//variaveis da fonte
$nome = @$_POST['nome'];
$modelo = @$_POST['modelo'];
$marca = @$_POST['marca'];
$descricao = @$_POST['descricao'];
$nucleos = @$_POST['nucleos'];
$threads = @$_POST['threads'];
$socket = @$_POST['socket'];
$tipo = @$_POST['tipo'];
$categoria = "processador";

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
if($nucleos == ""){
	echo 'OS NUCLEOS SÃO OBRIGATORIOS!';
	exit();
}
if($threads == ""){
	echo 'AS THREADS SÃO OBRIGATORIAS!';
	exit();
}
if($socket == ""){
	echo 'O SOCKET É OBRIGATORIO!';
	exit();
}
if($tipo == ""){
	echo 'O TIPO É OBRIGATORIO!';
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
$caminho = '../../../img/Peças/Processador/' .$img;
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
	$res = $pdo->prepare("INSERT INTO processador SET nome = :nome, modelo = :modelo, marca = :marca, descri = :descricao, threads = :threads, img = '$imagem', socket = :socket, nucleos = :nucleos, tipo = :tipo");	
}else{
	if(@$_FILES['imagem']['name'] == ""){
		$res = $pdo->prepare("UPDATE processador SET nome = :nome, modelo = :modelo, marca = :marca, descri = :descricao, threads = :threads, socket = :socket, nucleos = :nucleos, tipo = :tipo WHERE id = '$id'");
	}else{
		$res = $pdo->prepare("UPDATE processador SET nome = :nome, modelo = :modelo, marca = :marca, descri = :descricao, threads = :threads, img = '$imagem', socket = :socket, nucleos = :nucleos, tipo = :tipo WHERE id = '$id'");
	}	
}

$res->bindValue(":nome", $nome);
$res->bindValue(":modelo", $modelo);
$res->bindValue(":marca", $marca);
$res->bindValue(":nucleos", $nucleos);
$res->bindValue(":threads", $threads);
$res->bindValue(":socket",$socket);
$res->bindValue(":tipo",$tipo);
$res->bindValue(":descricao", $descricao);

$res->execute();

echo 'Salvo com Sucesso!';

?>