<?php
require('stripe-php-master/init.php');

$publishableKey="pk_test_51HQ921CrgDj5AUGRUjVZnHVFCGbTIOFqRKTeM2qQ7svEAxPi7wLJneujMmf7QtIbRG4BfWYZ7w8SGQl901imhs0700HsNVliM2";

$secretKey="sk_test_51HQ921CrgDj5AUGRrpSqbWrnCFoMp9aYzowBO3OnHro2ODAuLyRlfAoDfH4UMc7qCcgAMbrFOV3jKUMqViQjAjZt00haa4nx7M";

\Stripe\Stripe::setApiKey($secretKey);
?>