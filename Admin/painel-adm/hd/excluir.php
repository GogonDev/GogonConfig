<?php 
require_once("../../conexao.php"); 

$id = $_POST['id'];

$query = $pdo->query("SELECT * FROM produtos WHERE categoria = 'hd'AND id= '$id'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$id_produto = $res[0]['id_produto'];
$pdo->query("DELETE FROM hd WHERE id = '$id_produto'");
$pdo->query("DELETE FROM produtos WHERE id = '$id'");


echo 'Excluído com Sucesso!';

?>