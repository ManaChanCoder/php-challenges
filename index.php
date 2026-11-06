<?php
// Requirements
/*
    * Constant: Mag-define ng constant na TAX_RATE na may value na 0.12 (12%).
    * Mag-define ng constant na TAX_RATE na may value na 0.12 (12%).
    * Associative Array:
    * Gumawa ng array na naglalaman ng mga biniling items at presyo nito:
    * PHP
    * $myOrders = [
    * "Laptop" => 35000,
    * "Mouse" => 500,
    * "Keyboard" => 1500,
    * "Monitor" => 8000
    * ];
    * Function Definition:
    * Gumawa ng function na ang pangalan ay processOrders($orders).
    * Inside the Function (Logic & Computation):
    * Gamit ang foreach loop, i-compute ang Subtotal (sum ng lahat ng presyo sa array).
    * Conditional Logic & Operators:
    * Kung ang Subtotal ay mas mataas sa 10,000, magkakaroon ng 10% discount (0.10).
    * Kung 10,000 pababa, 0% discount (0).
    * Kwentahin ang:
    * Discount Amount = Subtotal * Discount Rate
    * Discounted Subtotal = Subtotal - Discount Amount
    * Tax Amount = Discounted Subtotal * TAX_RATE
    * Final Total = Discounted Subtotal + Tax Amount
    * Output: I-echo ang malinis na resibo/breakdown (I-print ang bawat item at ang mga kinwentang halaga).
    * Function Call:
    * Sa labas ng function, tawagin ang processOrders($myOrders).
    */

define("TAX_RATE", 0.12);

$myOrders = [
    "Laptop" => 35000,
    "Mouse" => 500,
    "Keyboard" => 1500,
    "Monitor" => 8000
];

function processOrders($orders)
{
    $subTotal = 0;
    $total = 0;
    $discountRate = 0;
    $discountAmt = 0;
    $discountedSubTotal = 0;

    echo "Receipt Breakdown:<br>";
    foreach ($orders as $name => $order) {
        $subTotal += $order;

        echo "Item: " . $name . " - Price: " . number_format($order, 2) . "<br>";
    }

    echo "-------------------------------------<br>";

    if ($subTotal > 10000) {
        // getting discount rate of 10%
        $discountRate = 0.10;
        echo "Eligible for 10% discount.<br>";
        echo "<br>";
    } else {
        $discountRate = 0.00;
    }

    $discountAmt = $subTotal * $discountRate;
    $discountedSubTotal = $subTotal - $discountAmt;
    $tax_amount = $discountedSubTotal * TAX_RATE;



    echo "Subtotal: " . number_format($subTotal, 2) . "<br>";
    echo "Discount Amount: " . number_format($discountAmt, 2) . "<br>";
    echo "Discounted Subtotal: " . number_format($discountedSubTotal, 2) . "<br>";
    echo "Tax Amount: " . number_format($tax_amount, 2) . "<br>";
    echo "<br>";
    return $total = $discountedSubTotal - $tax_amount;
}

echo "Total: " . number_format(processOrders($myOrders), 2) . "<br>";
echo "-------------------------------------<br>";
