<?php
class Person {
    // As constantes do PHP também tem modificadores de acesso
    // Podemos acessar de qualquer ponto com ClassName::CONSTANT_NAME ou self::CONSTANT_NAME
    private const array GENDERS = ["M" => "Male", "F" => "Female"];
    private string $name;
    private string $gender;
    // Definindo variável static com tipo e inicializando
    // Pode ser public, private, protected, sem modificador (public)
    private static int $count = 0;

    public function __construct($name, $gender) {
        $this->name = $name;
        $this->gender = $gender;
        self::$count++;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getGenderName(): string {
        // Self se refere à própria CLASSE, diferente do this que é ao objeto atual
        return self::GENDERS[$this->gender];
    }

    // Métodos da classe, estáticos
	// Não posso usar o this em métodos estáticos
    public static function getGenderLabel(string $code): string {
        return self::GENDERS[$code] ?? "Unknown";
    }

    public static function getCounter(): int {
        return self::$count;
    }
}
?>