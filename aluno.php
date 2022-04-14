<?php include ("cabecalho.php"); ?>

<h1 class="aluno">Cadastro de aluno</h1>
<form action="adicionaaluno.php">
    <table class="table">
        <tr>
            <td>Nome</td>
            <td><input class="form-control" type="text" name="nome_aluno" /></td>
        </tr>
        <tr>
            <td>Data de nascimento</td>
            <td><input class="form-control" type="text" name="data_nascimento_aluno" /></td>
        </tr>
        <tr>
            <td>Idade</td>
            <td><input class="form-control" type="text" name="idade_aluno" /></td>
        </tr>
        <tr>
            <td>Nome da mãe</td>
            <td><input class="form-control" type="text" name="nome_mae" /></td>
        </tr>
        <tr>
            <td>Nome do pai</td>
            <td><input class="form-control" type="text" name="nome_pai" /></td>
        </tr>
        <tr>
            <td>Endereço</td>
            <td><input class="form-control" type="text" name="endereco" /></td>
        </tr>
        <tr>
            <td><input class="btn btn-primary" type="submit" value="Cadastrar" /></td>
        </tr>
    </table>
</form>