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
?>