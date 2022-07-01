<?php
function inserirFuncionarios($conexao,$codUsuFK,$nomeFun,$funcaoFun,$foneFun,$datanasFun){
$query="insert into tbfuncionarios(codUsuFK,nomeFun,funcaoFun,foneFun,datanasFun) values('{$codUsuFK}','{$nomeFun}','{$funcaoFun}','{$foneFun}','{$datanasFun}')";

    $resultados = mysqli_query($conexao,$query);
    return $resultados;
}

function listaTudoFuncionarios($conexao){
    
    $query = "Select * From tbfuncionarios";

    $resultados = mysqli_query($conexao,$query);
    return $resultados;
}

function alterarFuncionarios($conexao,$codFuncionarios,$nomeFuncionarios,$funcaoFuncionarios,$foneFuncionarios,$datanascFuncionarios){
    $query = "update tbfuncionarios set = $codFuncionarios";
    $resultados = mysqli_query($conexao,$query);
    return $resultados;
}

function deletarFuncionarios($conexao,$codFuncionarios){
    $query = "delete from tbfuncionarios where codFun = $codFuncionarios";
    $resultados = mysqli_query($conexao,$query);
    return $resultados;
}

function listaTudoFuncionariosNome($conexao,$nomeFuncionario){
    $query = "select * from tbfuncionarios where nomeFun like = $nomeFuncionario";
    $resultados = mysqli_query($conexao,$query);

    return $resultados;
}

function listabuscafunUsu($conexao,$codUsuFK){
    $query = "select * from tbfuncionarios where codUsuFK = '{$codUsuFK}'";
    $resultados = mysqli_query($conexao,$query);
    $resul=mysqli_fetch_array($resultados);
    return $resul;
}
