<?php
require_once 'lib/Braintree.php';

Braintree_Configuration::environment('sandbox');
Braintree_Configuration::merchantId('qh4qnv75dw3j2fp9');
Braintree_Configuration::publicKey('9ssykgrz8dwkrgd6');
Braintree_Configuration::privateKey('229c9b092f27fb1efa88a2ab342a82cf');

$result = Braintree_Transaction::sale(array(
    'amount' => '1000.00',
    'creditCard' => array(
        'number' => '5105105105105100',
        'expirationMonth' => '05',
        'expirationYear' => '12'
    )
));

if ($result->success) {
    print_r("success!: " . $result->transaction->id);
    header('Location: http://inseconds.local/bought.php');
} else if ($result->transaction) {
    print_r("Error processing transaction:");
    print_r("\n  message: " . $result->message);
    print_r("\n  code: " . $result->transaction->processorResponseCode);
    print_r("\n  text: " . $result->transaction->processorResponseText);
} else {
    print_r("Message: " . $result->message);
    print_r("\nValidation errors: \n");
    print_r($result->errors->deepAll());
}
