<?php

function encrypt($string) 
    {
        $output = false;
        $encrypt_method = "";
        $secret_key = "";
        $secret_iv = "";
        // hash
        $key = hash('sha256', $secret_key);    
        // iv - encrypt method ### expects 16 bytes 
        $iv = substr(hash('sha256', $secret_iv), 0, 16);

        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);

        return $output;
    }

$plaintext = "";

echo encrypt($plaintext);
?>
