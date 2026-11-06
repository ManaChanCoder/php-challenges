<?php

/**
 * Gumawa ng PHP script.
 * Mag-define ng constant na APP_NAME na may value na "PHP Quiz App".
 * Mag-declare ng variables para sa:
 * Student name (String)
 * Score (Integer)
 * maxScore (Integer)
 * Gamit ang Operators, kuhanin ang Percentage Score ((score / maxScore) * 100).
 * Gamit ang Ternary Operator, mag-assign ng status variable: "PASSED" kung ang percentage ay 70 pataas, kung hindi ay "FAILED".
 * I-print (gamit ang echo o print) ang buong resulta sa isang maayos na format/sentence.
 */


define("APP_NAME", "PHP Quiz App");

$studentName = "Manachan";
$score = 85;
$maxScore = 100;
$percentageScore = ($score / $maxScore) * 100;

$status = ($percentageScore >= 70) ? "PASSED" : "FAILED";

// echo or printing the result in a formatted sentence
echo APP_NAME . "<br>";
echo "Student Name: " . $studentName . "<br>";
echo "Score: " . $score . "<br>";
echo "Max score: " . $maxScore . "<br>";
echo "Percentage Score: " . $percentageScore . "<br>";
echo "Status: " . $status . "<br>";
