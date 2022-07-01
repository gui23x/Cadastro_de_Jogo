<?php

include("../models/conexao.php");
include("../models/bancoPedido.php");
include("../views/header.php");

extract($_REQUEST,EXTR_OVERWRITE);

if(alterarPedidos($conexao,$codCliFK,$codFunFK,$codJogFK,$totalJogoPed)){
    echo("Pedido Alterado com sucesso");
}else{
    echo("Pedido não Alterado");
}

include("../views/footer.php");