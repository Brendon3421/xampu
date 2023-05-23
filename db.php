<?php

//variavel que nunca muda e chamda constante
define('HOST' , 'localHost');
define('USER' , 'root');
define('PASSOWORD' , '');
define('NAME_DATABASE' , 'escola');
//CONFIGURAÇAO DE CONEXÃO COM O BANCO DE DADO
$connection = mysqli_connect (HOST, USER, PASSOWORD , NAME_DATABASE);

