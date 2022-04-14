<?php include("cabecalho.php"); ?>
<?php include("conecta.php"); ?>
<?php include("banco.php") ?>

<?php

$nome_aluno = $_GET["nome_aluno"];
$data_nascimento_aluno = $_GET["data_nascimento_aluno"];
$idade_aluno = $_GET["idade_aluno"];
$nome_mae = $_GET["nome_mae"];
$nome_pai = $_GET["nome_pai"];
$endereco = $_GET["endereco"];

if (inserealuno($conexao, $nome_aluno, $data_nascimento_aluno, $idade_aluno, $nome_mae, $nome_pai, $endereco)) {
?>
   <p class="alert-success">Aluno adicionado com sucesso</p>
<?php
} else {
?>
   <p class="alert-danger"> O aluno não foi adicionado </p>
<?php
}
?>

<?php include("rodape.php"); ?>