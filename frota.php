<?php include ("cabecalho.php"); ?>

<form action="adicionafrota.php">
    <table class="table">
        <tr>
            <td>Tipo do veículo</td>
            <td><input class="form-control" type="text" name="veiculo" /></td>
        </tr>
        <tr>
            <td>Placa</td>
            <td><input class="form-control" type="text" name="placa" /></td>
        </tr>
        <tr>
            <td>Quantidade de passageiros</td>
            <td><input class="form-control" type="text" name="quantidade_passageiro" /></td>
        </tr>
        <tr>
            <td><input class="btn btn-primary" type="submit" value="Cadastrar" /></td>
        </tr>
    </table>
</form>