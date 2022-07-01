<?php
    include_once("header.php");
    include_once("../models/conexao.php");
    include_once("../models/bancoCliente.php");
?>  
    <form method="Post" action="../controllers/alterarCliente.php">
<?php
$codCliente = $_POST["codClientealterar"];
$cliente = listaTudoClientesCod($conexao,$codCliente);
$codUsuario = $cliente['codUsuFK'];
$Usuario = ListaClienteUsuario($conexao,$codUsuario);
?>
        <p>Código <input type="text" name="codigo" readonly value="<?=$cliente['codCli']?>"></p>
        <p>Código do Usuario<input type="text" name="codUsuFK" readonly value="<?=$cliente['codUsuFK']?>"></p>
        <p>E-mail <input type="text" name="emailUsu" readonly value="<?=$Usuario['emailUsu']?>"></p>
        <p>Nome <input type="text" name="nome" value="<?=$cliente['nomeCli']?>"></p>
        <p>CPF<input type="text" name="cpf" value="<?=$cliente['cpfCli']?>" ></p>
        <p>Telefone <input type="text" name="telefone" value="<?=$cliente['foneCli']?>"></p>
        <p>Data de Nascimento <input type="date" name="datanasc" value="<?=$cliente['datanasCli']?>"></p>
        <button type="submit">Alterar</button>
    </form>
<?php
include("../views/footer.php");
?>