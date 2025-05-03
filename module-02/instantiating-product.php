<?php
// Temos que incluir o arquivo da classe antes de usá-la
// O PHP não tem um autoloader padrão, então temos que incluir os arquivos manualmente
include 'Product.php';

// Instanciando um objeto da classe Product
// O operador new é usado para criar uma nova instância de uma classe
// Podemos chamar new ClasseName(), new ClasseName ou new ClasseName(args)
$product1 = new Product("Chocolate", 10.99);
var_dump($product1);
echo "<br>";
// Acessando propriedades e métodos do objeto
$product1->setPrice('12.99');
var_dump($product1);

// Posso destruir o objeto manualmente usando unset()
// Isso chama o destrutor e libera a memória ocupada pelo objeto
// unset($product1);

// Convertendo o objeto para um array
// Isso chama o método __sleep() se ele estiver definido na classe
$vetor = (array) $product1;
var_dump($vetor); // Não acessa propriedades privadas, protected

// Convertendo de um array para um objeto, porém ele usa a stdClass
$vetor = ["name" => "Chocolate", "price" => 10.99];
$product2 = (object) $vetor;
var_dump($product2);

// Posso também definir um objeto à partir de um array através de um forEach
foreach($vetor as $key => $value) {
    // O operador -> aqui foi utilizado para definir o valor da propriedade do objeto
    // com o valor da key do array
    $product2->$key = $value;
}
?>