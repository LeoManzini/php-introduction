<?php 
// Faz o PHP não tentar converter os tipos de dados, se pede float na declaração, tem que ser float
// Se não for, dá erro
// Isso é útil para evitar erros de comparação entre tipos diferentes
declare(strict_types = 1);

include 'square.php';
// O require é mais forte que o include, se não encontrar o arquivo, dá erro fatal
// O include dá erro de aviso, mas continua a execução do código
// require 'square.php';
// include_once 'square.php';
// require_once 'square.php';
// O include_once e require_once só incluem o arquivo uma vez, mesmo que sejam chamados várias vezes
// Isso é útil para evitar erros de inclusão de arquivos duplicados
var_dump(calcularQuadrado(5));
print '<br>';

// Declaração de variáveis na assinatura da função com tipos de dados
// Declaração de uma função com tipo de retorno
// O PHP não tem tipagem forte, mas podemos declarar os tipos de dados que a função deve receber e retornar
function calculoImc(float $peso, float $altura): float {
    return $peso / ($altura * $altura);
}

var_dump(calculoImc(70, 1.75));
print '<br>';

$peso = '70';
$altura = '1.75';
var_dump(calculoImc((float) $peso, (float) $altura));

// Podemos acessar variáveis definidas fora da função, mas não podemos modificar o valor delas dentro da função
// Ou seja, se tentarmos modificar o valor da variável $peso dentro da função, não vai funcionar
// Para acessar uma variável definida fora da função de dentro de uma função, precisamos usar a palavra-chave global
function teste() {
    global $peso, $altura;
    $peso = '78';
    $altura = '1.77';
    print '<br>' . calculoImc((float) $peso, (float) $altura) . '<br>';
}
teste();


function percorre($km) {
    static $total = 0;
    $total += $km;
    print "percorreu $km km, total: $total km<br>";
}
percorre(10);
percorre(20);
percorre(30);

function incrementa($variavel, $valor) {
    $variavel += $valor;
}
$teste = 100;
incrementa($teste, 10);
var_dump($teste); // 100, pois a variável $teste não foi passada por referência

function incrementaRetornando($variavel, $valor) {
    $variavel += $valor;
    return $variavel;
}
$teste = incrementaRetornando($teste, 10);
var_dump($teste); // 110, pois a variável $teste recebeu o valor retornado pela função

function incrementaPorReferencia(&$variavel, $valor) {
    $variavel += $valor;
}
$teste = 100;
incrementaPorReferencia($teste, 100);
var_dump($teste);
print '<br>';
// 200, pois a variável $teste foi passada por referência e recebeu o valor incrementado, pois apontam para o mesmo endereço de memória que guarda o valor contido na variável

// Função anônima (closure) - função que não tem nome, é uma função que pode ser atribuída a uma variável e passada como parâmetro para outra função
// É uma função que pode ser usada como callback, ou seja, uma função que é passada como parâmetro para outra função
$remove_acento = function($string) {
    // str_replace é uma função que substitui uma string por outra à partir de um parâmetro de entrada
    // O primeiro parâmetro é o que queremos substituir, o segundo é o que queremos colocar no lugar e o terceiro é a string que queremos modificar
    return str_replace(['á', 'é', 'í', 'ó', 'ú'], ['a', 'e', 'i', 'o', 'u'], $string);
};
var_dump($remove_acento('Olá, tudo bem?'));
print '<br>';

function upper($palavra, $funcao) {
    $palavra = $funcao($palavra);
    return strtoupper($palavra);
}
var_dump(upper('Olá, tudo bem?', $remove_acento));
?>