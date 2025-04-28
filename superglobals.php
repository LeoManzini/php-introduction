<?php 
// <pre> é uma tag HTML que formata o texto como se fosse um bloco de código, mantendo os espaços e quebras de linha
echo '<pre>';
// $_SERVER é uma superglobal que contém informações sobre o cabeçalho, caminhos e locais de script
//var_dump($_SERVER);
// $_GET é uma superglobal que contém os dados enviados pelo método GET http://localhost:3000/php-tests/superglobals.php?codigo=5&nome=maria
//var_dump($_GET);
// $_POST é uma superglobal que contém os dados enviados pelo método POST
//var_dump($_POST);
// $_REQUEST é uma superglobal que contém os dados enviados pelo método GET e POST
var_dump($_REQUEST);
// $_FILES é uma superglobal que contém os dados enviados pelo método POST, mas para arquivos
//var_dump($_FILES);
// $_ENV é uma superglobal que contém as variáveis de ambiente do servidor
//var_dump($_ENV);
// $_COOKIE é uma superglobal que contém os cookies enviados pelo navegador
//var_dump($_COOKIE);
// $_SESSION é uma superglobal que contém as variáveis de sessão
//var_dump($_SESSION);
// $_GLOBALS é uma superglobal que contém todas as variáveis globais do script
//var_dump($_GLOBALS);
echo '</pre>';
?>