<?php

if(isset($_POST['encrypt'])){

    $simple_string = $_POST['text'];
    echo "Original Data :" . $simple_string;
    echo "<br>";

    $ciphering = "AES-128-CTR";   // it store the cipher method
    $option = 0;  // it holds the bitwise disjunction of the flags
    $encryption_iv = '1234567890123456'; // it hold the initialization vector while is not null
    $encryption_key ="hello";
    $encryption = openssl_encrypt($simple_string,$ciphering,$encryption_key,$option,$encryption_iv);

    echo "Encrypted Data : " .$encryption;
    echo "<br>";
}

if(isset($_POST['decrypt'])){

    $text = $_POST['text'];
    $ciphering = "AES-128-CTR";   // it store the cipher method
    $option = 0;
    $decryption_key ="devanshu";
    $decryption_iv = "1234567890123456";

    $decryption = openssl_decrypt($text,$ciphering,$decryption_key,$option,$decryption_iv);
    echo "Decrypted Data : " .$decryption;
    echo "<br>";
}