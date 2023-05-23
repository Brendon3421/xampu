<?php
session_start();

include "header.php";

if(isset($_SESSION["logged"]) ){
    if(isset($_GET["pagina"])){
        $pagina = $_GET["pagina"];
    }else{
        $pagina = 'seg';
    }
}else{
    $pagina = 'home';
}
switch ($pagina) {
    case 'seg':
        include 'seg.php';
        break;
    case 'listadealunos':
        include 'views/consulta.php';
        break;
    case "inserirNota":
        include 'views/inserirNota.php';
        break;
    default:
        include 'home.php';
        break;

}




?>

