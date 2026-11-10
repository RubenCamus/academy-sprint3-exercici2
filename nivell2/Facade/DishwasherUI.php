<?php
require_once('Dishwasher.php');
class DishwasherUI {
    private bool $gel = false;
    public function __construct(private Dishwasher $dishwasher)
    {}

    public function start() {
        if (!$this->gel) {
            throw new Exception('There is no gel in the dishwasher');
        }
        $this->dishwasher->startWorking();
    }
    public function setGel(bool $gel) {
        $this->gel = $gel;
    }
}
$dishwasher = new DishwasherUI(new Dishwasher());
// $dishwasher->start();
$dishwasher->setGel(true);
$dishwasher->start();
?>
