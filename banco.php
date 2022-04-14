<?php 
function inserealuno($conexao, $nome_aluno, $data_nascimento_aluno,$idade_aluno,$nome_mae,$nome_pai,$endereco){
    $query = "insert into aluno (nome_aluno, data_nascimento_aluno,idade_aluno,nome_mae,nome_pai,endereco) values ('{$nome_aluno}' ,'{$data_nascimento_aluno}','{$idade_aluno}','{$nome_mae}','{$nome_pai}','{$endereco}')";
    $resultadoaluno = mysqli_query($conexao,$query);
    return $resultadoaluno;
}
?>

<?php 
function insereescola($conexao, $nome_escola,$endereco_escola){
    $query = "insert into escola(nome_escola, endereco_escola) values ('{$nome_escola}', '{$endereco_escola}')";
    $resultadoescola = mysqli_query($conexao,$query);
    return $resultadoescola;
}
?>

<?php 
function inseremotorista($conexao, $nome_motorista, $data_nascimento_motorista, $idade_motorista, $cnh, $cpf_motorista){
    $query = "insert into motorista(nome_motorista, data_nascimento_motorista,idade_motorista, cnh, cpf_motorista) values ('{$nome_motorista}', '{$data_nascimento_motorista}','{$idade_motorista}', '{$cnh}', '{$cpf_motorista}')";
    $resultadomotorista= mysqli_query($conexao,$query);
    return $resultadomotorista;
}
?>
<?php 
function insereservidor($conexao, $nome_servidor, $data_nascimento_servidor, $idade_servidor, $cpf_servidor, $local_trabalho, $cargo){
    $query = "insert into servidores (nome_servidor,data_nascimento_servidor, idade_servidor, cpf_servidor, local_trabalho,cargo) values ('{$nome_servidor}','{$data_nascimento_servidor}','{$idade_servidor}','{$cpf_servidor}','{$local_trabalho}','{$cargo}')";
    $resultadoservidor = mysqli_query($conexao,$query);
    return $resultadoservidor;
}
function inserefrota($conexao,$veiculo,$placa,$quantidade_passageiro){
    $query = "insert into frota (veiculo,placa,quantidade_passageiro) values ('{$veiculo}','{$placa}','{$quantidade_passageiro}')";
    $resultadofrota = mysqli_query($conexao,$query);
    return $resultadofrota;

}
?>