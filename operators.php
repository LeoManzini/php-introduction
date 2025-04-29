<?php 
$valor = 100;

$valor += 5;
var_dump($valor);
print('<br>');

$valor -= 5;
var_dump($valor);
print('<br>');

$valor *= 5;
$valor /= 5;
$valor %= 5;

$teste = $valor++;
var_dump($valor);
print('<br>');
var_dump($teste);
print('<br>');

$teste = ++$valor;
var_dump($valor);
print('<br>');
var_dump($teste);
print('<br>');

$a = 2;
$b = 4;

// Seguindo a ordem de precedência
// 1. Parênteses
// 2. Exponenciação
// 3. Multiplicação e divisão
// 4. Soma e subtração
echo $a + 3 * 4 + 5 *$b;
print('<br>');
echo ($a + 3) * 4 + (5 *$b);
print('<br>');

// Exemplo de exponenciação
$resultado = 2 ** 3; // 2 elevado à potência de 3
var_dump($resultado);
print('<br>');

// Exemplo de comparação
$valor1 = 10;
$valor2 = '10';

if ($valor1 == $valor2) {
    echo "Os valores são iguais.";
} else {
    echo "Os valores são diferentes.";
}
print('<br>');

if ($valor1 === $valor2) {
    echo "Os valores são iguais e do mesmo tipo.";
} else {
    echo "Os valores são diferentes ou de tipos diferentes.";
}
print('<br>');

if ($valor1 != $valor2) {
    echo "Os valores são diferentes.";
} else {
    echo "Os valores são iguais.";
}
print('<br>');

if ($valor1 !== $valor2) {
    echo "Os valores são diferentes ou de tipos diferentes.";
} else {
    echo "Os valores são iguais e do mesmo tipo.";
}
print('<br>');

if ($valor1 < $valor2) {
    echo "$valor1 é menor que $valor2.";
} else {
    echo "$valor1 não é menor que $valor2.";
}
print('<br>');

if ($valor1 > $valor2) {
    echo "$valor1 é maior que $valor2.";
} else {
    echo "$valor1 não é maior que $valor2.";
}
print('<br>');

if ($valor1 <= $valor2) {
    echo "$valor1 é menor ou igual a $valor2.";
} else {
    echo "$valor1 não é menor ou igual a $valor2.";
}
print('<br>');

if ($valor1 >= $valor2) {
    echo "$valor1 é maior ou igual a $valor2.";
} else {
    echo "$valor1 não é maior ou igual a $valor2.";
}

// Exemplo de operadores lógicos
$valor1 = true;
$valor2 = false;

// AND &&
if ($valor1 and $valor2) {
    echo "Ambos os valores são verdadeiros.";
} else {
    echo "Pelo menos um dos valores é falso.";
}
print('<br>');
if ($valor1 && $valor2) {
    echo "Ambos os valores são verdadeiros.";
} else {
    echo "Pelo menos um dos valores é falso.";
}
print('<br>');

// OR ||
if ($valor1 or $valor2) {
    echo "Pelo menos um dos valores é verdadeiro.";
} else {
    echo "Ambos os valores são falsos.";
}
print('<br>');
if ($valor1 || $valor2) {
    echo "Pelo menos um dos valores é verdadeiro.";
} else {
    echo "Ambos os valores são falsos.";
}
print('<br>');

if (!$valor1) {
    echo "$valor1 é falso.";
} else {
    echo "$valor1 é verdadeiro.";
}
print('<br>');

// XOR
// O operador XOR retorna verdadeiro se e somente se um dos valores for verdadeiro, mas não ambos.
if ($valor1 xor $valor2) {
    echo "Um dos valores é verdadeiro, mas não ambos.";
} else {
    echo "Ambos os valores são verdadeiros ou ambos são falsos.";
}
?>