<?php
session_start();
if(!$_SESSION["emailUsuario"]){
    $_SESSION["msg"] = "<div class='alert alert-danger' role='alert'>Você não tem acesso a essa página.</div>";
    header("Location:../view/logar.php");
}else{
include_once("header.php");
include_once("../models/conexao.php");
include_once("../models/bancoPedido.php");
?>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Código</th>
            <th scope="col">Código Funcionário</th>
            <th scope="col">Código Cliente</th>
            <th scope="col">Código Jogo</th>
            <th scope="col">Total</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $pedidos = listaTudoPedidos($conexao);
        foreach ($pedidos as $pedido) :
        ?>
            <tr>
                <th scope="row"><?= $pedido['codPed'] ?></th>
                <td><?= $pedido['codFunFK'] ?></td>
                <td><?= $pedido['codCliFK'] ?></td>
                <td><?= $pedido['codJogFK'] ?></td>
                <td><?= $pedido['totalJogoPed'] ?></td>
            </tr>
        <?php
        endforeach;
        ?>

    </tbody>
</table>
<?php
include_once("footer.php");}
?>