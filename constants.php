<?php 
// Constantes são variáveis que não podem ser alteradas após serem definidas
// Declaradas em caixa alta por convenção
// Podem ser definidas com a função define() ou com a palavra-chave const
define('LANGUAGE', 'pt-BR');
const VERSION = '1.0.0';

var_dump(LANGUAGE);
print '<br>';
var_dump(VERSION);
print '<br>';

// Testando se a constante LANGUAGE está definida
var_dump(defined('LANGUAGE'));
print '<br>';

// Constantes mágicas são constantes que o PHP define automaticamente
// __FILE__ é o caminho completo do arquivo atual
var_dump(__FILE__);
print '<br>';
// __LINE__ é o número da linha atual do arquivo
var_dump(__LINE__);
print '<br>';
// __DIR__ é o diretório atual do arquivo
var_dump(__DIR__);
// Algumas constantes mágicas somente irão fazer sentido dentro de uma classe ou função
?>