<?php

function inserirCliente($conexao,$codUsu,$nome,$cpf,$fone,$datanasc){
$query="insert into tbclientes(codUsuFK,nomeCli,cpfCli,foneCli,datanasCli)
values('{$codUsu}','{$nome}','{$cpf}','{$fone}','{$datanasc}')";

    $resultados = mysqli_query($conexao,$query);
    return $resultados;
}

function listaTudoClientes($conexao){
    
    $query = "Select * From tbclientes";

    $resultados = mysqli_query($conexao,$query);
    return $resultados;
}

function ListaClienteUsuario($conexao,$codUsuario){
    $query = "Select * from tbusuarios where codUsu={$codUsuario}";
    $resultados = mysqli_query($conexao,$query);
    $resul= mysqli_fetch_array($resultados);
    return $resul;  
}

function listaTudoClientesCod($conexao,$codCliente){
    $query = "Select * from tbclientes where codCli={$codCliente}";
    $resultados = mysqli_query($conexao,$query);
    $resul= mysqli_fetch_array($resultados);
    return $resul;
}

function alterarCliente($conexao,$codUsuFK,$nome,$cpf,$telefone,$datanasc){
    $query = "update tbclientes set codCli = {$codCli}";
    $resultados = mysqli_query($conexao,$query);
    return $resultados;
}

function deletarCliente($conexao,$codUsuFK,$nome,$cpf,$telefone,$datanasc){
    $query = "delete from tbclientes where codCli = {$codCli}";
    $resultados = mysqli_query($conexao,$query);
    return $resultados;
}

function listaTudoClientesNome($conexao,$nomeCliente){
    $query = "select * from tbclientes where nomeCli like '%{$nomeCliente}%'";
    $resultados = mysqli_query($conexao,$query);

    return $resultados;
}