<?php

$arrayGrades = [45, 88, 92, 60, 30, 100, 75];
$arrayLettersGrade = [];

foreach ($arrayGrades as $index => $value) {
    if ($value >= 90 && $value <= 100) {
        $arrayLettersGrade[$index] = "A";
    } else if ($value >= 80 && $value <= 89) {
        $arrayLettersGrade[$index] = "B";
    } else if ($value >= 70 && $value <= 79) {
        $arrayLettersGrade[$index] = "C";
    } else if ($value >= 60 && $value <= 69) {
        $arrayLettersGrade[$index] = "D";
    } else if ($value < 60) {
        $arrayLettersGrade[$index] = "F";
    }

    echo "Score: $value => Letter Grade: " . $arrayLettersGrade[$index] . "<br>";

    switch ($arrayLettersGrade[$index]) {
        case "A":
            echo "A => Excellent! <br>";
            break;
        case "B":
            echo "B => Good job! <br>";
            break;
        case "C":
            echo "C => Fair performance. <br>";
            break;
        case "D":
            echo "D => Needs Improvement. <br>";
            break;
        case "F":
            echo "F => Failed. Study more. <br>";
            break;
    }
    echo "<br>";
}
