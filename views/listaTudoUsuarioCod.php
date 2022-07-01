<?php
session_start();
if(!$_SESSION["emailUsuario"]){
    $_SESSION["msg"] ="<div class='alert alert-danger' role='alert'>Você não tem acesso a essa página.Cai Fora!!!!!!!!</div>";
    header("Location:../views/logar.php");
}
include_once("header.php");
include_once("../models/conexao.php");
include_once("../models/bancoUsuario.php");

?>
<div class="container m-5 p-5">
    <form action="listaTudoUsuarioCod.php" method="GET">
        <div class="row mb-3">
            <label for="inputCodigo" class="col-sm-2 col-form-label">Digite o Código do Usuario: </label>
            <div class="col-sm-3">
                <input type="number" required name="CodUsu"class="form-control" id="inputCodigo">
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
            <th scope="col">Usuario</th>
            <th scope="col">Senha</th>
            <th scope="col">Pin</th>
            <th scope="col">Deletar</th>
            <th scope="col">Alterar</th>
            
        </tr>
    </thead>
    <tbody>
        <?php
        $codUsuario = isset($_GET['CodUsu'])?$_GET['CodUsu']:0;
     
        if($codUsuario > 0){
            $Usuario = listaTudoUsuarioCod($conexao,$codUsuario);
    if($Usuario){
    ?>
            <tr>
                <th scope="row"><?=$Usuario['codUsu'] ?></th>
                <td><?=$Usuario['emailUsu'] ?></td>
                <td><?=$Usuario['senhaUsu'] ?></td>
                <td><?=$Usuario['pinUsu'] ?></td>
            </tr>
        <?php
    }
}
        ?>
    </tbody>

    <?php 
$usuarios = listaTudoUsuario($conexao);
foreach($usuarios as $usuario):
?>
  <tr>
      <th scope="row"><?=$usuario['codUsu']?></th>
      <td><?=$usuario['emailUsu']?></td>
      <td><?=$usuario['senhaUsu']?></td>
      <td><?=$usuario['pinUsu']?></td>
      <td>
        <form action="../controllers/deletarUsuario.php" method="Post">
          <input type="hidden" name="codUsuariodeletar" value="<?=$usuario['codUsu']?>">
          <button type="submit" class="btn-small btn-danger"> Deletar </button>
        </form>
      </td>
      <td>
        <form action="formAlterarUsuario.php" method="Post">
          <input type="hidden" name="codUsuarioalterar" value="<?=$usuario['codUsu']?>">
          <button type="submit" class="btn-small btn-danger"> Alterar</button>
        </form>
      </td>
    </tr>
<?php
endforeach;
?>
</table>



<?php
include_once("footer.php");
?>