<?php 
    // creo la funzione che mi permette di generare una password in base al numero inserito nell'input del form
    function generateRandomPassword($length) {
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+';
        $password = '';
    
        for ($i = 0; $i < $length; $i++) {
            $randomIndex = rand(0, strlen($chars) - 1);
            $password .= $chars[$randomIndex];
        }
    
        return $password;
    }

    // creo la condizione che mi permette di mostrare a video la risposta
    if (isset($_GET['password_length'])) {
        $passwordLength = $_GET['password_length'];
        $password = generateRandomPassword($passwordLength);
    }
?>