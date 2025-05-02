<?php
$coresArray = array("verde", "vermelho", "amarelo");
$coresArrayChaves = ["verde", "vermelho", "amarelo"];

// Declarando array vazio
$cores = [];
// Adicionando dados na última posição do array, mantendo a ordem
$cores[] = "verde";
// Adicionando dados em uma posição específica
$cores[2] = "vermelho";
// Printando o array todo
var_dump($cores);
// Printando posição do array
print ($cores[2]);

// Utilizando indices criados por mim (tipo um mapa)
$pessoa = [];
$pessoa["nome"] = "Leonardo";
$pessoa["enderedo"] = "rua tal";
$pessoa["nascimento"] = "1990-01-01";

var_dump($pessoa);
echo $pessoa["nascimento"];

foreach ($pessoa as $valor) {
	print $valor . "<br>";
}

foreach ($pessoa as $chave => $valor) {
	print "{$chave}: {$valor} <br>";
}

$carros = [
	"palio" => ["cor" => "azul", "marca" => "fiat"], 
	"corsa" => ["cor" => "prata", "marca" => "GM"]
];

// Acessandoo as informações
print "{$carros["palio"]["cor"]} <br>";

// Acessando via laço de repetição
foreach ($carros as $modelo => $informacoes) {
	print "Carro {$modelo}: <br>";
	foreach ($informacoes as $atributo => $valor) {
		print "{$atributo}: $valor <br>";
	}
}

$cores = ["verde", "vermelho", "amarelo"];

// Adiciona um registro no final do array
array_push($cores, "ciano");
var_dump($cores);
echo "<br>";
// Adiciona um registro no início do array
array_unshift($cores, "ciano");
var_dump($cores);
echo "<br>";
// Remove o primeiro registro do array
array_shift($cores);
var_dump($cores);
echo "<br>";
// Remove o último registro do array
array_pop($cores);
var_dump($cores);
echo "<br>";
// Remove um registro específico do array
unset($cores[1]);
var_dump($cores);
echo "<br>";
// Inverte os registros do array
$cores = array_reverse($cores);
var_dump($cores);
echo "<br>";
// Mescla dois vetores
$resultado = array_merge($cores, ["magenta", "preto"]);
var_dump($resultado);
echo "<br>";

$carros = [];
$carros[10001] = "Palio 2002";
$carros[73933] = "Corsa 2003";
$carros[82634] = "Celta 2005";
$carros[12838] = "Uno 1999";

// Ordena o array mas mantendo os índices
asort($carros);
echo "<pre>";
var_dump($carros);
echo "</pre>";
// Ordena o array mas pelos índices
ksort($carros);
echo "<pre>";
var_dump($carros);
echo "</pre>";
// Retorna um vetor com o conteúdo das chaves de um array
var_dump(array_keys($carros));
echo "<br>";
// Retorna um vetor com o conteúdo dos valores de um array
var_dump(array_values($carros));
echo "<br>";
// Retorna quantas posições tem no vetor
var_dump(count($carros));
echo "<br>";
// Ordena o array mas perdendo os índices, ela coloca 0, 1, 2, ...
sort($carros);
echo "<pre>";
var_dump($carros);
echo "</pre>";
// Verifica se determinado conteúdo está em um vetor, é uma busca exata
var_dump(in_array("Uno 1999", $carros));
echo "<br>";
// Ordena o array em ordem alfabética inversa
rsort($cores);
echo "<pre>";
var_dump($cores);
echo "</pre>";
// Ordena o array em ordem alfabética inversa, mas mantendo os índices
$cores = ["verde", "vermelho", "amarelo"];
rsort($cores, SORT_STRING | SORT_FLAG_CASE);
echo "<pre>";
var_dump($cores);
echo "</pre>";

$data = "2025-05-02";

// Explode quebra a string em partes, o primeiro parâmetro é o delimitador e o segundo é a string
$partesData = explode("-", $data);
var_dump($partesData);
echo "<br>";

// Implode junta as partes de um array em uma string, o primeiro parâmetro é o delimitador e o segundo é o array
$partesData = implode("/", $partesData);
var_dump($partesData);
?>