<?php 
    // cre la funzione che mi permette di generare una password in base al numero inserito nell'input del form
    function generateRandomPassword(){
        $comb = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!£$%&/=?^@#*";
        $shfl = str_shuffle($comb);
        $pwd = substr($shfl,0,($_GET['length_input']));
        echo $pwd;
    }

?>