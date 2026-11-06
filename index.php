<?php
$namesData = "Alenere,SDPT|Jaymar,Doe|Johana,MARE";

$names = explode("|", $namesData);

foreach ($names as $name) {
    list($firstName, $lastName) = explode(",", $name);
    echo $firstName . " " . $lastName . "<br>";
}
