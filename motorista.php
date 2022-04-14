<?php include ("cabecalho.php");?>

<form action="adicionamotorista.php">
    <table class="table">
        <tr>
            <td>Nome do motorista</td>
            <td><input class="form-control" type="text" name="nome_motorista" /></td>
        </tr>
        <tr>
            <td>Data de nascimento</td>
            <td><input class="form-control" type="text" name="data_nascimento_motorista" /></td>
        </tr>
        <tr>
            <td>Idade</td>
            <td><input class="form-control" type="text" name="idade_motorista" /></td>
        </tr>
        <tr>
            <td>Numero da CNH</td>
            <td><input class="form-control" type="text" name="cnh" /></td>
        </tr>
        <tr>
            <td>Cpf</td>
            <td><input class="form-control" type="text" name="cpf_motorista" /></td>
        </tr>
        <tr>
            <td><input class="btn btn-primary" type="submit" value="Cadastrar" /></td>
        </tr>
    </table>
</form>