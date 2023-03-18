<?php 
require_once("../../conexao.php"); 

//variaveis da fonte
$nome = @$_POST['nome'];
$modelo = @$_POST['modelo'];
$marca = @$_POST['marca'];
$rpm = @$_POST['rpm'];
$sata = @$_POST['sata'];
$cache = @$_POST['cache'];
$descricao = @$_POST['descricao'];
$categoria = "hd";

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
$caminho = '../../../img/Peças/Hd/' .$img;
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
	$reshd = $pdo->prepare("INSERT INTO hd SET sata = :sata, cache = :cache, rpm = :rpm");
		$reshd->bindValue(":rpm", $rpm);
		$reshd->bindValue(":sata", $sata);
		$reshd->bindValue(":cache",$cache);
		$reshd->execute();
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
		$reshd = $pdo->prepare("INSERT INTO hd SET sata = :sata, cache = :cache, rpm = :rpm WHERE id = '$id_produto'");
			$reshd->bindValue(":rpm", $rpm);
			$reshd->bindValue(":sata", $sata);
			$reshd->bindValue(":cache",$cache);
			$reshd->execute();
	}else{
		$resproduto = $pdo->prepare("UPDATE produtos SET nome = :nome, modelo = :modelo, marca = :marca, descri = :descricao, img = '$imagem' WHERE id = '$id'");
			$resproduto->bindValue(":nome", $nome);
			$resproduto->bindValue(":modelo", $modelo);
			$resproduto->bindValue(":marca", $marca);
			$resproduto->bindValue(":descricao", $descricao);
			$resproduto->execute();
		$reshd = $pdo->prepare("UPDATE hd SET sata = :sata, cache = :cache, rpm = :rpm WHERE id = '$id_produto'");
			$reshd->bindValue(":rpm", $rpm);
			$reshd->bindValue(":sata", $sata);
			$reshd->bindValue(":cache",$cache);
			$reshd->execute();	
	}	
}

echo 'Salvo com Sucesso!';

?>