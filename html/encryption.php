<?php

class ENCRIPT
{
    public static function encript($data)
    {
        $ciphering = "BF-CBC";
        $iv_length = openssl_cipher_iv_length($ciphering);
        $options = 0;
        $encryption_iv = random_bytes($iv_length);
        $encryption_key = openssl_digest(php_uname(), 'MD5', TRUE);
        $encryption = openssl_encrypt($data, $ciphering, $encryption_key, $options, $encryption_iv);

        return $encryption;
    }

    public static function decript($data)
    {
        $ciphering = "BF-CBC";
        $iv_length = openssl_cipher_iv_length($ciphering);
        $options = 0;
        $encryption_iv = random_bytes($iv_length);
        $encryption_key = openssl_digest(php_uname(), 'MD5', TRUE);
        $decryption = openssl_decrypt($data, $ciphering, $encryption_key, $options, $encryption_iv);

        return $decryption;
    }
}
