<?php
session_start();
if(!$_SESSION["emailUsuario"]){
    $_SESSION["msg"] ="<div class='alert alert-danger' role='alert'>Você não tem acesso a essa página.Cai Fora!!!!!!!!</div>";
    header("Location:../views/logar.php");
}
include_once("header.php");
include_once("../models/conexao.php");
include_once("../models/bancoJogos.php");

?>
<div class="container m-5 p-5">
    <form action="listaTudoJogosCod.php" method="GET">
        <div class="row mb-3">
            <label for="inputCodigo" class="col-sm-2 col-form-label">Digite o Código do Jogo: </label>
            <div class="col-sm-3">
                <input type="number" required name="CodJogo"class="form-control" id="inputCodigo">
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
      <th scope="col">Jogo</th>
      <th scope="col">Console</th>
      <th scope="col">Preço</th>
      <th scope="col">Deletar</th>
      <th scope="col">Alterar</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $CodJogo = isset($_GET['CodJogo'])?$_GET['CodJogo']:0;
     
        if($CodJogo > 0){
            $Jogo = listaTudoJogosCod($conexao,$CodJogo);
        ?>
            <tr>
                <th scope="row"><?=$Jogo['codJog']?></th>
                <td><?=$Jogo['nomeJog'] ?></td>
                <td><?=$Jogo['consoleJog'] ?></td>
                <td><?=$Jogo['precoJog'] ?></td>
                <td>
        <form action="../controllers/deletarJogos.php" method="Post">
          <input type="hidden" name="codJogdeletar" value="<?=$Jogo['codJog']?>">
          <button type="submit" class="btn-small btn-danger"> Deletar </button>
        </form>
      </td>
      <td>
        <form action="formAlterarJogos.php" method="Post">
          <input type="hidden" name="codJogalterar" value="<?=$Jogo['codJog']?>">
          <button type="submit" class="btn-small btn-danger"> Alterar</button>
        </form>
      </td>
            </tr>
            
    </tr>

        <?php
    }
        ?>
    </tbody>
</table>



<?php
include_once("footer.php");
?>