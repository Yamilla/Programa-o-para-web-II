<?php include("cabecalho.php"); ?>
<?php include("conecta.php"); ?>
<?php include("banco.php") ?>

<?php

$veiculo = $_GET["veiculo"];
$placa = $_GET["placa"];
$quantidade_passageiro = $_GET["quantidade_passageiro"];

if (inserefrota($conexao, $veiculo, $placa, $quantidade_passageiro)) {
?>
   <p class="alert-success">Frota adicionada com sucesso</p>
<?php
} else {
?>
   <p class="alert-danger"> A frota não foi adicionado </p>
<?php
}
?>

<?php include("rodape.php"); ?>