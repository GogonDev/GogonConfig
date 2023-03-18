<?php 
require_once("conexao.php");

$email = $_POST['email'];

if($email == ""){
    echo 'Preencha o Campo Email!';
    exit();
}

$res = $pdo->query("SELECT * FROM usuarios where email = '$email' "); 
$dados = $res->fetchAll(PDO::FETCH_ASSOC);
if(@count($dados) > 0){
    $senha = $dados[0]['senha'];

   //ENVIAR O EMAIL COM A SENHA
    $destinatario = $email;
    $assunto = utf8_decode($nome_escola . ' - Recuperação de Senha');;
    $mensagem = utf8_decode('Sua senha é ' .$senha);
    $cabecalhos = "From: ".$email_adm;
    @mail($destinatario, $assunto, $mensagem, $cabecalhos);
    echo 'Sua senha foi Enviada para seu Email!';

}else{
	echo 'Email não Cadastrado!';
}

 ?>