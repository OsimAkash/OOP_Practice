<!-- Procidural Programming: Process  -->

<?php


function calculateVAT(float $amount, float $taxPercentange):float 
{
    return ($amount * $taxPercentange) / 100.0;

}

function calculateDiscount(float $amount, float $discount, string $discountType = "flat"): float

{
    if($discountType == 'percent') {
        return (($amount * $discount) / 100.0);
    }
    return $discount;
}

$blance = 500;
$taxPercentange =5;

$blanceWithVat = $blance + calculateVAT($blance , discount:10,  discountType: 'flat');

echo $financialBalance;