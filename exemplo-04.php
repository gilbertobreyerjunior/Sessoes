<?php

require_once("config.php");

//Força criar uma nova sessão

session_regenerate_id();

//Imprimi as novas sessões
echo session_id();

//Array superglobal da sessão, dentro dele temos o array com o nome
var_dump($_SESSION);

?>