# PHP Discount Price Calculator

A lightweight PHP helper function that calculates the final price of an item after applying a percentage discount, rounded to two decimal places.

## Function Signature

```php
calculateFinalPrice(float $price = 0, float$discountedPercent = 0): float
```

## Parameters

| Parameter            | Type         | Default | Description                                             |
| :------------------- | :----------- | :------ | :------------------------------------------------------ |
| `$price`             | `float\|int` | `0`     | The original price before discount.                     |
| `$discountedPercent` | `float\|int` | `0`     | The discount percentage to deduct (e.g., `20` for 20%). |

## Return Value

Returns a `float` representing the final price after deducting the discount, rounded to 2 decimal places.

## Usage Example

```php
<?php

function calculateFinalPrice($price = 0,$discountedPercent = 0)
{
    $discountedPrice =$price * ($discountedPercent / 100);$totalPrice = $price -$discountedPrice;

    return round($totalPrice, 2);
}

// Example: 20% discount on 98,934.34
echo calculateFinalPrice(98934.34, 20); // Output: 79147.47
```
