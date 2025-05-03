<?php
class Product {
    // Modificadores de acceso
    // public, private, protected, não tem o padrão de acesso para quando não definido
    // podemos definir o tipo de dado da propriedade
    private string $name;
    private float $price;

    // Construtor
    // O construtor é um método especial que é chamado quando um objeto é criado
    public function __construct($name, $price) {
        // $this é uma referência ao objeto atual
        // O operador -> é usado para acessar propriedades e métodos de um objeto
        $this->name = $name;
        $this->price = $price;
    }

    // Destrutor
    // O destrutor é um método especial que é chamado quando um objeto é destruído
    // Ele pode ser usado para liberar recursos ou fazer outras tarefas de limpeza
    // O PHP chama automaticamente o destrutor quando o objeto sai do escopo ou é explicitamente destruído
    public function __destruct() {
        echo "<br> Product {$this->name} is being destroyed.<br>";
    }

    // O método __sleep() é chamado quando o objeto é convertido em um array
    // Ele deve retornar um array com os nomes das propriedades que devem ser serializadas
    public function __sleep() {
        return ['name', 'price'];
    }

    // Métodos de acesso (getters e setters)
    // Encapsulamento é o conceito de esconder os detalhes internos de um objeto e expor apenas o que é necessário
    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setName($name) {
        $this->name = $name;
    }

    // Uma boa prática é validar os dados antes de atribuí-los a uma propriedade
    // Isso ajuda a garantir que o objeto esteja sempre em um estado válido
    // E evita manter validações em vários lugares do código
    public function setPrice($price) {
        if ($price < 0) {
            throw new Exception("Price cannot be negative");
        }
        if (!is_numeric($price)) {
            throw new Exception("Price must be a number");
        }
        $this->price = $price;
    }
}
?>