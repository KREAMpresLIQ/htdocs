<?php
    class Father{
        public $surname="";
        public $firstname="";
        public $age=null;

//        private $eye = "Blue";
        protected $eye = "Blue";

        function __construct(){
            echo "Father constructor <br>";
        }

        public function Out(){
            echo "$this->age <br>";
            echo "Eye: $this->eye<br>";
        }

        function __destruct(){
            echo "Father died <br>";
        }
    }

    class Son extends Father{
        function __construct()
        {
            $this->eye="Red";
            parent::__construct();
            echo "Son construktor <br>";
        }
        function __destruct(){
            echo "Son died <br>";
        }
    }

    $Father = new Father();
    $Son = new Son();
    $Son->age=19;
    $Son->Out();