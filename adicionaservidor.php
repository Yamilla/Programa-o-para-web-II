<?php include("cabecalho.php"); ?>
<?php include("conecta.php"); ?>
<?php include("banco.php") ?>

<?php

$nome_servidor = $_GET["nome_servidor"];
$data_nascimento_servidor = $_GET["data_nascimento_servidor"];
$idade_servidor = $_GET["idade_servidor"];
$cpf_servidor = $_GET["cpf_servidor"];
$local_trabalho = $_GET["local_trabalho"];
$cargo = $_GET["cargo"];

if (insereservidor($conexao, $nome_servidor, $data_nascimento_servidor, $idade_servidor, $cpf_servidor, $local_trabalho, $cargo)) {
?>
   <p class="alert-success">Servidor adicionado com sucesso</p>
<?php
} else {
?>
   <p class="alert-danger"> O servidor não foi adicionado </p>
<?php
}
?>

<?php include("rodape.php"); ?>