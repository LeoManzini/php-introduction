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
?>