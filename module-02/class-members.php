<?php
require_once "classes/Person.php";

$p1 = new Person("Maria da Silva", "F");
echo $p1->getGenderName(), "<br>";

$p2 = new Person("Carlos Pereira", "M");
echo $p2->getGenderName(), "<br>";

echo Person::getGenderLabel("M"), "<br>";
// Acessando variável static
// echo "Atributo de total de objetos criados: ", Person::$count, "<br>";
echo "Método de total de objetos criados: ", Person::getCounter();
?>