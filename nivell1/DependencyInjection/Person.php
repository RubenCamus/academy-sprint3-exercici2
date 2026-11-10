<?php
require_once('Keys.php');
require_once('Smartphone.php');
require_once('TransportKey.php');
require_once('Wallet.php');
class Person {
    public function __construct(private Wallet $wallet,private Keys $houseKeys, private Smartphone $smartphone,private ?TransportKey $transportKey = null)
    {}
    public function leaveHouse() {
        $this->houseKeys->lockDoor();
    }
}

$pepe = new Person(new Wallet(), new Keys(), new Smartphone());
$pepe->leaveHouse();
?>
