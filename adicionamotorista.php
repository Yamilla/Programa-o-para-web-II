<?php include("cabecalho.php"); ?>
<?php include("conecta.php"); ?>
<?php include("banco.php") ?>

<?php

$nome_motorista = $_GET["nome_motorista"];
$data_nascimento_motorista = $_GET["data_nascimento_motorista"];
$idade_motorista = $_GET["idade_motorista"];
$cnh= $_GET["cnh"];
$cpf_motorista = $_GET["cpf_motorista"];

if (inseremotorista($conexao, $nome_motorista, $data_nascimento_motorista, $idade_motorista, $cnh, $cpf_motorista)) {
?>
   <p class="alert-success">Motorista adiconado com sucesso</p>
<?php
} else {
?>
   <p class="alert-danger"> O motorista não foi adicionado </p>
<?php
}
?>

<?php include("rodape.php"); ?>