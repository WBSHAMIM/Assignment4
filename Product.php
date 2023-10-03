<?php

class Product {
    //  Add properties
    public int $id; 
    public string $name; 
    public float $price;

    
    public function __construct($id, $name, $price) {
        // Initialize properties
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    //  Add getFormattedPrice method
    public function FormattedPrice(){
        $decimal = $this->price;
        $formateDecimal  = number_format($decimal ,2);
        echo $formateDecimal;
    }

    //  Add showDetails method
    public function showDetails (){
        $this->id;
        $this->name;
        echo "-ID: $this->id"."\n";
        echo "-Name: $this->name"."\n";
        echo "-Price: $";$this->FormattedPrice();
    }
}

$cartObject = new Product(1,"T-shirt", 19.99);
print_r ($cartObject->showDetails());









