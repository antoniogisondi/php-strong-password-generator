<?php 
    // richiamo il file dov'è contenuta la funzione che mi genera la password
   require __DIR__.'/partials/functions.php';

    // creo la sessione che, se in caso non esistesse la sessione che contiene la password, mi riporti nel file index.php
   session_start();
   if(!isset($_SESSION['password'])){
    header("Location: index.php");
    exit();
   }

   $password = $_SESSION['password'];
    unset($_SESSION['password']);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/style_redirect.css">
        <title>Password Generator</title>
    </head>
    <body>
        <!-- creo il layout della pagina del risultato -->
        <div class="container">
            <div class="row d-flex flex-column align-items-center mt-3">
                <div class="col-6">
                <h4>La tua password generata è:</h4>
                </div>
                <div class="card col-6 p-3">
                    <!-- RICHIAMO LA FUNZIONE NELL'HTML -->
                    <h3><?php echo $password?></h3>
                </div>
            </div>
        </div>
    </body>
</html>