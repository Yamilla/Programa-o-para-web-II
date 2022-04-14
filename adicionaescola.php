<?php include("cabecalho.php"); ?>
<?php include("conecta.php"); ?>
<?php include("banco.php") ?>

<?php 
$nome_escola = $_GET["nome_escola"];
$endereco_escola = $_GET["endereco_escola"];
if(insereescola($conexao,$nome_escola,$endereco_escola)){
?>
  <p class="alert-success">Escola adiconada com sucesso</p>
<?php
} else {
?>
   <p class="alert-danger"> A escola não foi adicionada</p>
<?php
}
?>

<?php include("rodape.php"); ?>