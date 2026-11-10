<?php
class Tigger {
    private static ?Tigger $instance = null; // El interrogante porque al estar tipado es necesario para que pueda ser nulo
    private static int $counter = 0;

       private function __construct() {
               echo "Building character..." . PHP_EOL;
       }
       public function roar(): void {
               echo "Grrr!" . PHP_EOL;
               self::$counter++;
       }
       // Crear funcion getInstance
       // crea la instancia si no existe
       // si existe la devuelve
       public static function getInstance(): Tigger {
           if (self::$instance != null) {
               return self::$instance;
           }
           self::$instance = new Tigger;
           return self::$instance;
       }
       public static function getCounter(): int {
           return self::$counter;
       }
}
$tigger = Tigger::getInstance();
$tigger->roar();
$tigger->roar();
$tigger->roar();
echo Tigger::getCounter();
?>
