<?php
session_start();
$email = isset($_SESSION["emailUsuario"])?$_SESSION["emailUsuario"]:null;
if($email !=null){
    include("../views/header.php");
}
?>  
<br>
    <form method="Post" action="../controllers/inserirUsuario.php">
        <p>E-mail <input type="text" name="email"></p>
        <p>Senha<input type="password" name="senha"></p>
        <p>PIN<input type="Text" name="pin"></p>
        <button type="submit">Salvar</button>
    </form>
<?php
if($email!=null){
include("../views/footer.php");
}
?>