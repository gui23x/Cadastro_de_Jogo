<?php

include("../models/conexao.php");
include("../models/bancoCliente.php");
include("../views/header.php");

extract($_REQUEST,EXTR_OVERWRITE);

if(inserirCliente($conexao,$codUsu,$nome,$cpf,$fone,$datanasc)){
    echo("Cliente cadastrado com sucesso");
}else{
    echo("Cliente não cadastrado.");
}

include("../views/footer.php");