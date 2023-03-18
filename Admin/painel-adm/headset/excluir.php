<?php 
require_once("../../conexao.php"); 

$id = $_POST['id'];

$query = $pdo->query("SELECT * FROM produtos WHERE categoria = 'headset'AND id= '$id'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$id_produto = $res[0]['id_produto'];
$pdo->query("DELETE FROM produtos WHERE categoria= 'headset' AND id = '$id'");


echo 'Excluído com Sucesso!';

?>