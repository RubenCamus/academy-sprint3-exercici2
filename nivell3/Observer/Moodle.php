<?php
require_once('Observable.php');
require_once('Task.php');
class Moodle implements Observable {
    private Task $task;
    private array $observers = [];
    #[Override]
    public function attach(Observer $observer): void
    {
        array_push($this->observers, $observer);
    }
    #[Override]
    public function detach(Observer $observer): void
    {
        // Buscar el indice del array y elimina el valor
        $key = array_search($observer, $this->observers);
        if (!$key) {
            echo 'observer not found in subject';
            return;
        }
        unset($this->observers[$key]);
    }
    #[Override]
    public function notify(mixed $taskNotification): void
    {
        foreach($this->observers as $observer) {
            $observer->update($taskNotification);
        }
    }
    public function setTask(Task $task): void {
        $this->task = $task;
        $this->notify($this->task->getTitle());
    }
}

?>
