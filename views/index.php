<?php
session_start();
if(!$_SESSION["emailUsuario"]){
    $_SESSION["msg"] ="<div class='alert alert-danger' role='alert'>Você não tem acesso a essa página.Cai Fora!!!!!!!!</div>";
    header("Location:../views/logar.php");
}
include_once("header.php");
?>
<div class="corpo">


<img src="img/Jogosonline.gif" width="100%"/>
</div>
<?php
include_once("footer.php");
?>