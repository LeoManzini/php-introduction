<?php 
// Faz o PHP não tentar converter os tipos de dados, se pede float na declaração, tem que ser float
// Se não for, dá erro
// Isso é útil para evitar erros de comparação entre tipos diferentes
declare(strict_types = 1);

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