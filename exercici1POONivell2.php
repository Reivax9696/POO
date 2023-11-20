<?php

class Pokerdice {

    private static $caresDau = ['As', 'K', 'Q', 'J', 7, 8];
    private static $totalTirades = 0;
    private $ultimaCara;

    public function __construct() {
        $this->throw();
    }

    public function throw() {
        $this->ultimaCara = self::$caresDau[array_rand(self::$caresDau)];
        self::$totalTirades++;
    }

    public function shapeName() {
        return $this->ultimaCara;
    }

    public static function allTiradas() {
        return self::$totalTirades;
    }
}

$dauArray = [];
for ($i = 0; $i < 5; $i++) {
    $dauArray[] = new Pokerdice();
}

echo "Resultat de les cinc tirades del dau:<br>";
foreach ($dauArray as $index => $dau) {
    echo "Dau " . ($index + 1) . ": " . $dau->shapeName() . "<br>";
}

echo "Total de tirades del dau: " . Pokerdice::allTiradas() . "<br>";


?>
