<?php

    class Car{

        private $model;
        protected $color;

        public $year;

        public function setModel($model) {
            $this->model = $model;
        }
        public function getModel() {
            return $this->model;
        }
        protected function setColor($color) {
            $this->color = $color;
        }
        public function getColor(){
            return $this->color;
        }
    }

    $car = new Car();
    $car->setModel("Toyata");
    $car->year = 2024;
    echo $car->getModel();
    echo $car->year;

?>