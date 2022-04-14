<?php include ("cabecalho.php"); ?>

<form action="adicionaservidor.php">
    <table class="table">
        <tr>
            <td>Nome do servidor</td>
            <td><input class="form-control" type="text" name="nome_servidor" /></td>
        </tr>
        <tr>
            <td>Data de nascimento</td>
            <td><input class="form-control" type="text" name="data_nascimento_servidor" /></td>
        </tr>
        <tr>
            <td>Idade</td>
            <td><input class="form-control" type="text" name="idade_servidor" /></td>
        </tr>
        <tr>
            <td>CPF</td>
            <td><input class="form-control" type="text" name="cpf_servidor" /></td>
        </tr>
        <tr>
            <td>Local de trabalho</td>
            <td><input class="form-control" type="text" name="local_trabalho" /></td>
        </tr>
        <tr>
            <td>Cargo</td>
            <td><input class="form-control" type="text" name="cargo" /></td>
        </tr>
        <tr>
            <td><input class="btn btn-primary" type="submit" value="Cadastrar" /></td>
        </tr>
    </table>
</form>