<?php
    $person = new stdClass();
    $person->Surname="Smith";
    $person->Firstname="Harry";
    $person->Age=32;
    $person->Weight=86;

    //$person->Firstname="Anabelle";
    $person = new stdClass();
    $person->Surname="Smith";
    $person->Firstname="James";
    $person->Age=41;
    $person->Weight=76;

    echo "<pre>";
    print_r($person);
    echo "</pre>";

    echo $person->Surname." ".$person->Firstname." ".$person->Age." age and ".$person->Weight." kg ";