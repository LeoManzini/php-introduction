<?php
class Manufacturer {
    private string $name;
    private string $country;
    private string $document;

    public function __construct(string $name, string $country, string $document) {
        $this->name = $name;
        $this->country = $country;
        $this->document = $document;
    }
    
    public function getName(): string {
        return $this->name;
    }
    
    public function getCountry(): string {
        return $this->country;
    }

    public function getDocument(): string {
        return $this->document;
    }
}
?>