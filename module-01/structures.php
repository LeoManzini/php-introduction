<?php
$nome;

// isset() verifica se a variável está definida e não é null, mesmo se for uma string vazia
if (isset($nome)) {
    echo "A variável nome está definida.<br>";
} else {
    echo "A variável nome não está definida.<br>";
}

if ($nome) {
    echo "A variável nome é verdadeira.<br>";
} else {
    echo "A variável nome é falsa.<br>";
}

$valorVenda = 1000;

if ($valorVenda > 500) {
    $resultado =  "O valor da venda é maior que 500.<br>";
} elseif ($valorVenda == 500) {
    $resultado = "O valor da venda é igual a 500.<br>";
} else {
    $resultado = "O valor da venda é menor que 500.<br>";
}
print($resultado);

$resultado = ($valorVenda > 500) ? "O valor da venda é maior que 500.<br>" : "O valor da venda não é maior que 500.<br>";
print($resultado);

switch ($valorVenda) {
    case 1000:
        $resultado = "O valor da venda é 1000.<br>";
        break;
    case 500:
        $resultado = "O valor da venda é 500.<br>";
        break;
    default:
        $resultado = "O valor da venda não é 1000 nem 500.<br>";
}
print($resultado);

$count = 0;
while ($count < 5) {
    print $count . "<br>";
    $count++;
}

foreach ($array as $key => $value) {
    print "Chave: $key, Valor: $value<br>";
}

foreach ($array as $value) {
    print "Valor: $value<br>";
}

for ($count = 0; $count < 5; $count++) {
    print $count . "<br>";
}

do {
    print $count . "<br>";
    $count++;
} while ($count < 5);
?>