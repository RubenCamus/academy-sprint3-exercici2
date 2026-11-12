<?php
require_once('Task.php');
require_once('Observer.php');
class Mentor implements Observer {
    private string $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    #[Override]
    public function update(mixed $newTask): void
    {
        echo $this->name . " received the task ".  $newTask . PHP_EOL;
    }
}

?>
