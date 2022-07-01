<?php
function inserirPedido($conexao,$codJogFK,$codCliFK,$codFunFK,$totalJogoPed){
$query="insert into tbpedidos(codCliFK,codFunFK,codJogFK,totalJogoPed) 
values('{$codJogFK}','{$codCliFK}','{$codFunFK}','{$totalJogoPed}')";

    $resultados = mysqli_query($conexao,$query);
    return $resultados;
}

function listaTudoPedidos($conexao){
    $query="Select * From tbpedidos";
    $resultados=mysqli_query($conexao,$query);
    return $resultados;
}
function listaTudoPedidosCod($conexao,$codPed){
    $query="Select * from tbpedidos where codPed={$codPed}";
    $resultados=mysqli_query($conexao,$query);
    $resul=mysqli_fetch_array($resultados);
    return $resul;
}
function alterarPedidos($conexao,$codCliFK,$codFunFK,$codJogFK,$totalJogoPed){
    $query="update tbpedidos set totalJogoPed='{$totalJogoPed}'";
    $resultados=mysqli_query($conexao,$query);
    return $resultados;
}
function deletarPedidos($conexao,$codPed){
    $query="delete from tbpedidos where codPed=$codPed";
    $resultados=mysqli_query($conexao,$query);
    return $resultados;
}