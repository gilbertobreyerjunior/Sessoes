<?php

require_once("config.php");

//Obtém e/ou define o caminho para armazenamento da sessão atual
echo session_save_path();

echo "<br>";

//Como está a situação da sessão do seu site?  Será que o start está funcionando? Será que já foi definido?
//E ele retorna um int (2) porque as sessões estão habilitadas e uma existir, significa PHP_SESSION_ACTIVE
var_dump(session_status());

echo "<br>";
//Faz um switch para tratar o session status identificando qual sessão que há no momento
switch(session_status()) {


case PHP_SESSION_DISABLED:
echo "as sessões estiverem desabilitadas";
break;

case PHP_SESSION_NONE:
echo "as sessões estiverem habilitadas, mas nenhuma existir";
break;

case PHP_SESSION_ACTIVE:
echo " as sessões estiverem habilitadas, e uma existir";
break;


}

?>