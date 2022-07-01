<?php
session_start();
if(!$_SESSION["emailUsuario"]){
    $_SESSION["msg"] ="<div class='alert alert-danger' role='alert'>Você não tem acesso a essa página.Cai Fora!!!!!!!!</div>";
    header("Location:../views/logar.php");
}
include_once("header.php");
include_once("../models/conexao.php");
include_once("../models/bancoCliente.php");

?>
<div class="container m-5 p-5">
    <form action="listaTudoClientesNome.php" method="GET">
        <div class="row mb-3">
            <label for="inputNome" class="col-sm-2 col-form-label">Digite o Nome do Usuario: </label>
            <div class="col-sm-3">
                <input type="text" required name="nomeCliente" class="form-control" id="inputNome">
            </div>
            <div class="col-sm-3">
                <button type="submit" class="btn btn-primary">Buscar</button>
            </div>
        </div>

    </form>
</div>


<table class="table">
    <thead>
        <tr>
            <th scope="col">Código</th>
            <th scope="col">Código Usuário</th>
            <th scope="col">Cliente</th>
            <th scope="col">CPF</th>
            <th scope="col">Telefone</th>
            <th scope="col">Data de Nascimento</th>
            <th scope="col">Alterar</th>
            <th scope="col">Deletar</th>
            
        </tr>
    </thead>
    <tbody>
        <?php
        $nomeCliente = isset($_GET['nomeCliente'])?$_GET['nomeCliente']: "";
     
        if($nomeCliente != ""){
            $Cliente = listaTudoClientesNome($conexao,$nomeCliente);

            if($Cliente){

              foreach($Cliente as $Clientes) :
    ?>
            <tr>
                <th scope="row"><?=$Clientes['codCli'] ?></th>
                <td><?=$Clientes['codUsuFK'] ?></td>
                <td><?=$Clientes['nomeCli'] ?></td>
                <td><?=$Clientes['cpfCli'] ?></td>
                <td><?=$Clientes['foneCli'] ?></td>
                <td><?=$Clientes['datanasCli'] ?></td>
      </td>
      <td>
        <form action="formAlterarClientes.php" method="Post">
          <input type="hidden" name="codClientealterar" value="<?=$Clientes['codCli']?>">
          <button type="submit" class="btn-small btn-danger"> Alterar</button>
        </form>
<td>
        <form action="../controllers/deletarCliente.php" method="Post">
          <input type="hidden" name="codClienteariodeletar" value="<?=$Clientes['codCli']?>">
          <button type="submit" class="btn-small btn-danger"> Deletar </button>
        </form>
        </td>
      </td>
            </tr>
        <?php
        endforeach;
    }
}
        ?>
        
    </tbody>



<?php
include_once("footer.php");
?>