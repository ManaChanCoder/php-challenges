<?php

function calculateFinalPrice($price = 0, $discountedPercent = 0)
{
    $discountAmt = $price * ($discountedPercent / 100);
    $finalPrice = $price - $discountAmt;

    return round($finalPrice, 2);
}

echo calculateFinalPrice(98934.34, 20);
