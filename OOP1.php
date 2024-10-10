<?php
    class Person{
        var string $surname="";
        var string $firstname="";
        public $age=null;

        private $HairColor = "Brown";
        public static $EyeColor = "Blue";
        const RegisterNumber = 45454545;

        function __construct($sname,$fname){
            $this->surname=$sname;
            $this->firstname=$fname;
        }

        /*private function EchoData(){
            echo "Welcome <br>".$this->firstname." ".$this->surname. "! <br> Right Now ".$this->age." Age! <br> Hair Color: ".$this->HairColor."!<br>";
        }*/

        public /*static*/ function Welcome(): void
        {
            //$this->EchoData();
            echo "Welcome <br>".$this->firstname." ".$this->surname. "! <br> Right Now ".$this->age." Age! <br> Hair Color: ".$this->HairColor."!<br> Eye Color: ".self::$EyeColor." <br> Register Number: ".self::RegisterNumber."<br>";
            //echo "Eye Color: ".self::$EyeColor."<br>";
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
    /*
    Person::$EyeColor="Fekete";
    Person::Welcome();
    */

    $person2 = new Person("Little", "Louise");
    $person2->age=34;
    $person2->Welcome();


