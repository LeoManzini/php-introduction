<?php
class Employee {
    public string $name;
    public float $payment;

    function getName(){}
    function setName(){}
    function getPayment(){}
    function setPayment(){}
}

class Trainee extends Employee {
    public bool $scholarshipHolder;
}

echo "<pre>";
// Retorna os métodos que uma classe tem disponível
print_r(get_class_methods("Employee"));

$jose = new Employee();
$joao = new Trainee();
// Retorna os atributos PUBLIC de um objeto
print_r(get_object_vars($jose));

// Retorna o tipo da classe de um objeto
print get_class($jose) . "<br>";
print get_class($joao) . "<br>";

// Retorna o nome do tipo da classe pai de um objeto
// Posso passar classe ou objeto
// Se não tiver n retorna nada
print get_parent_class($joao) . "<br>";

// Retorna true ou false se o objeto for classe filha da enviada
print is_subclass_of($joao, "Employee") . "<br>";

// Testar se um método de uma classe existe ou não
// Pega métodos herdados também
print method_exists($joao, "setName") . "<br>";

function sayHello($name) {
    print "Hello, {$name}! <br>";
}
// Modo normal de invocar a função
sayHello("Leonardo");

// Programar a execução de uma função para outro momento (callback)
// guarda o nome da função
$funcao = "sayHello";
// Invoca a função com o nome armazenado na variável, e passa como parâmetro a segunda string
call_user_func($funcao, "Leonardo");

// Jeito de chamar uma função static de uma classe
class Person {
    public static function sayHello($name) {
        print "Hello, {$name}! <br>";
    }
}
Person::sayHello("Leonardo");

// Chamando com reflection passando o nome da classe, nome da função e o parâmetro
$classe = "Person";
$metodo = "sayHello";
call_user_func([$classe, $metodo], "Leonardo");

// Posso passar objeto aqui também, ao invés de só o nome da classe
$pessoa = new Person();
call_user_func([$pessoa, $metodo], "Leonardo");
echo "</pre>";
?>