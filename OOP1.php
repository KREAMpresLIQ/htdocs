<?php
    class Person{
        var string $surname="";
        var string $firstname="";
        public $age=null;

        private $HairColor = "Brown";

        function __construct($sname,$fname){
            $this->surname=$sname;
            $this->firstname=$fname;
        }

        public function Welcome(): void
        {
            echo "Welcome <br>".$this->firstname." ".$this->surname. "! <br> Right Now ".$this->age." Age! <br> Hair Color: ".$this->HairColor."!<br>";
        }

        function __destruct(){
            $age = null;
            //echo sprintf("Died at %s Age.<br>", $this->age);
        }
    }
/*
    $person1 = new Person();
    $person1->surname="Smith";
    $person1->firstname="Harry";
    $person1->age=34;
    $person1->Welcome();
*/

    $person2 = new Person("Little", "Louise");
    $person2->age=34;
    $person2->Welcome();

