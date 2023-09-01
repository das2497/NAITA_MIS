<?php

// Store a string into the variable which
// needs to be encrypted
$simple_string = "1";

// Display the original string
echo "Original String: " . $simple_string . "<br/>";

// Store cipher method
$ciphering = "BF-CBC";

// Use OpenSSL encryption method
$iv_length = openssl_cipher_iv_length($ciphering);
$options = 0;

// Use random_bytes() function to generate a random initialization vector (iv)
$encryption_iv = random_bytes($iv_length);

// Alternatively, you can use a fixed iv if needed
// $encryption_iv = openssl_random_pseudo_bytes($iv_length);

// Use php_uname() as the encryption key
$encryption_key = openssl_digest(php_uname(), 'MD5', TRUE);

// Encryption process
$encryption = openssl_encrypt($simple_string, $ciphering,$encryption_key, $options, $encryption_iv);

// Display the encrypted string
echo "Encrypted String: " . $encryption . "<br/>";

// Decryption process
$decryption = openssl_decrypt($encryption, $ciphering,$encryption_key, $options, $encryption_iv);

// Display the decrypted string
echo "Decrypted String: " . $decryption."<br/>";

##########################################################################################################################endregion

$originalDate = '2023-08-30'; // Replace this with your original date

// Create a DateTime object from the original date
$dateTime = new DateTime($originalDate);

// Subtract one day
$dateTime->modify('-1 day');

// Format the result back to your desired format
$newDate = $dateTime->format('Y-m-d');

echo "Original Date: $originalDate<br>";
echo "New Date (One day earlier): $newDate<br/>";

##########################################################################################################################


echo md5('0000');