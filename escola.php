<?php include ("cabecalho.php"); ?>
<form action="adicionaescola.php">
    <table class="table">
        <tr>
            <td>Nome da escola </td>
            <td><input class="form-control" type="text" name="nome_escola" /></td>
        </tr>
        <tr>
            <td>Endereço</td>
            <td><input class="form-control" type="text" name="endereco_escola" /></td>
        </tr>
        <tr>
            <td><input class="btn btn-primary" type="submit" value="Cadastrar" /></td>
        </tr>
    </table>
</form>