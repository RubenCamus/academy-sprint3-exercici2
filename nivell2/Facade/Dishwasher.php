<?php

class Dishwasher  {

    public function startWorking() {
        $this->soap();
        $this->rinse();
        $this->dry();
    }
    private function rinse() {
        echo 'Rinse the dishes' . PHP_EOL;
    }
    private function soap() {
        echo 'Soap the dishes'. PHP_EOL;
    }
    private function dry() {
        echo 'Dry the dishes'. PHP_EOL;
    }

}
