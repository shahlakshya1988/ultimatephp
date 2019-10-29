<?php
declare(strict_types = 1);
function getDiscountedPrice(float $price,float $discountedPer):float{
    $discounted_price = $price - ( ($price * $discountedPer) / 100 );
    return $discounted_price;
}

echo getDiscountedPrice(100.00,20.20);
echo PHP_EOL;