<?php
include 'db.php';

$usuarioSalvo = $_POST["usuario"];
$senhaSalva = sha1($_POST["senha"]);

$query = "SELECT * FROM usuarios  WHERE usuario = '$usuarioSalvo'";
 
//executa para pesquisar no banco de dados
$usuario = mysqli_query($connection , $query);

$result = mysqli_fetch_array($usuario, MYSQLI_ASSOC);

if($result["senha"] === $senhaSalva){

session_start();

$_SESSION ["logged"] = true;
$_SESSION ["usuario"] = $usuarioSalvo;

header ("location:index.php");

}else {
  header("location:home.php?erro=1");  
}


?>