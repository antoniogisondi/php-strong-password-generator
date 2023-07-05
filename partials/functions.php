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

    // creo la funzione che mi permette di scegliere come vorrei che si generasse la password: numeri, lettere, simboli ecc...
    function generatePassword($length, $useNumbers, $useLetters, $useSymbols, $duplicatesCharacters) {
        $chars = '';
    
        if ($useNumbers) {
            $chars .='0123456789';
        }
    
        if ($useLetters) {
            $chars .= 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        }
    
        if ($useSymbols) {
            $chars .= '!@#$%^&*()-_=+';
        }
    
        $password = '';
    
        for ($i = 0; $i < $length; $i++) {
            $randomIndex = rand(0, strlen($chars) - 1);
            $password .= $chars[$randomIndex];
    
            if (!$duplicatesCharacters) {
                $chars = str_replace($chars[$randomIndex], '', $chars);
            }
        }
    
        return $password;
    }
    
    // creo la condizione per far si che vengano mostrate a video le opzioni di scelta del tipo di password
    if (isset($_GET['password_length'])) {
        $passwordLength = $_GET['password_length'];
        $useNumbers = isset($_GET['use_numbers']);
        $useLetters = isset($_GET['use_letters']);
        $useSymbols = isset($_GET['use_symbols']);
        $duplicatesCharacters = isset($_GET['duplicates_characters']);
    
        $password = generatePassword($passwordLength, $useNumbers, $useLetters, $useSymbols, $duplicatesCharacters);
    }
?>