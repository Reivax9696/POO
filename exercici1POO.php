<?php

class Employee {
    private $nom;
    private $sou;

    
    public function initialize($nom, $sou) {
        $this->nom = $nom;
        $this->sou = $sou;
    }

    public function printInfo() {
        echo "nom: " . $this->nom . "<br>";
        echo "sou: $" . $this->sou . "<br>";

        if ($this->sou > 6000) {
            echo "Tens que pagar taxes.<br>";
        } else {
            echo "No tens que pagar taxes.<br>";
        }
    }
}


$employee1 = new Employee();
$employee1->initialize("Xavier Bigorra", 8000);
$employee1->printInfo();

$employee2 = new Employee();
$employee2->initialize("Montse Ayllon", 5000);
$employee2->printInfo();


?>