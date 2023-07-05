<?php 

    function generateRandomPassword(){
        // $bytes = openssl_random_pseudo_bytes($_GET['length_input'] / 2);
        // $pass = bin2hex($bytes);
        // echo $pass;
        $comb = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!£$%&/=?^@#*";
        $shfl = str_shuffle($comb);
        $pwd = substr($shfl,0,($_GET['length_input']));
        echo $pwd;
    }

?>