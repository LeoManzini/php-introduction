<?php
$nome = 'Leonardo';
$sobrenome = 'Manzini';

print $nome . ' ' . $sobrenome . '<br>';

// Podemos concatenar e atribuir à uma variável tbm
$nome_completo = $nome . ' ' . $sobrenome;
print $nome_completo . '<br>';

// Aspas duplas interpretam variáveis dentro de strings
// É uma boa prática isolar as variáveis com chaves para evitar confusões, dentro do uso de aspas duplas
print "$nome {$sobrenome}<br>";

// Podemos usar o comando echo para imprimir variáveis, assim como o print
// O echo não precisa de ponto para concatenar, mas podemos usar vírgula para separar os parâmetros
echo $nome, ' ', $sobrenome, '<br>';

$a = 5;
$b = 4;
$c = 2.5;
$d = '5abc';

var_dump($a, $b);
print '<br>';
var_dump($a * $b);
print '<br>';
var_dump($a * $c);
print '<br>';
// O PHP tenta converter a string para número, consegue, mas dá um warning
var_dump($a * $d);
print '<br>';

$e = 5;
// Passando o valor de uma variável para outra, não a referência
// Ou seja, se mudarmos o valor da variável $e, não mudará o valor da variável $f
$f = $e;

$e = 10;

var_dump($e);
print '<br>';
var_dump($f);
print '<br>';

// Para passar a referência de uma variável para outra, usamos o operador & (ampersand)
// Ou seja, se mudarmos o valor da variável $e, mudará o valor da variável $f
$f = &$e;
$e = 10;

var_dump($e);
print '<br>';
var_dump($f);
print '<br>';

$lista = [1, '2', 3, 4, 5];
var_dump($lista);
print '<br>';

// O PHP tem vetores como um map, onde podemos usar chaves para acessar os valores
$lista = ['cor' => 'vermelho', 'peso' => 20, 'cor' => 'azul'];
var_dump($lista);
print '<br>';

// Arrays indexados
$indexado = [10, 20, 30];
var_dump($indexado);
print '<br>';

// Arrays associativos
$associativo = ['nome' => 'João', 'idade' => 25];
var_dump($associativo);
print '<br>';

// Arrays multidimensionais
$multidimensional = [
    ['nome' => 'Ana', 'idade' => 22],
    ['nome' => 'Carlos', 'idade' => 30]
];
var_dump($multidimensional);
print '<br>';

// Arrays mistos (com índices numéricos e associativos)
$misto = [10, 'nome' => 'Maria', 20, 'idade' => 28];
var_dump($misto);
print '<br>';

// Todos objetos em PHP são passados por referência, exceto os tipos primitivos (int, float, string, bool e null)
// Podemos criar um objeto usando a classe stdClass, que é uma classe vazia
// Ou seja, não tem atributos ou métodos definidos
$obj = new stdClass();
$obj->name = 'João';

$obj2 = $obj;

$obj2->name = 'Maria';

$obj->age = 30;

var_dump($obj);
print '<br>';
var_dump($obj2);
print '<br>';
?>