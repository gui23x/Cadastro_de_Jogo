<?php

include("../models/conexao.php");
include("../models/bancoFuncionario.php");
include("../models/bancoUsuario.php");
include("../views/header.php");

extract($_REQUEST, EXTR_OVERWRITE);

if (inserirFuncionarios($conexao, $codUsuFK, $nomeFun, $funcaoFun, $foneFun, $datanasFun)) {
    echo ("Funcionario cadastrado com sucesso");
} else {
    echo ("Funcionario não cadastrado.");
}

include("../views/footer.php");
