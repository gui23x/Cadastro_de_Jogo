<?php

include("../models/conexao.php");
include("../models/bancoCliente.php");
include("../views/header.php");

extract($_REQUEST,EXTR_OVERWRITE);

if(deletarCliente($conexao,$codUsuFK,$nome,$cpf,$telefone,$datanasc)){
    echo("Cliente deletado com sucesso");
}else{
    echo("Cliente não deletado.");
}

include("../views/footer.php");