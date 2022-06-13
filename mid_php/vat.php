<?php
    $vat = 15;
    $priceExcludingVat = 150;
    $vatToPay = ($priceExcludingVat/100)* $vat;
    $totalPrice = $priceExcludingVat + $vatToPay;
    echo "Total Price after including VAT =" .number_format($totalPrice);
?>