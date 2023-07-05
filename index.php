<?php 
    // richiamo il file dov'è contenuta la parte logica della pagina
    require __DIR__.'/partials/functions.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/style.css">
        <title>Password Generator</title>
    </head>
    <body>
        <!-- creo il layout -->
        <div class="container">
            <div class="row d-flex flex-column align-items-center">
                <div class="col title d-flex flex-column align-items-center">
                    <h1>Strong Password Generator</h1>
                    <h3>Generatore di password efficaci</h3>
                </div>

                <div class="col-6 card p-5">
                    <!-- CREO LA FORM CON IL METODO GET -->
                    <form action="redirect.php" method="GET">
                        <div class="col-md-6">
                            <label for="length" class="form-label">Inserisci la lunghezza della password</label>
                            <input type="number" class="form-control" name="input" id="input">
                        </div>

                        <div class="col-12 mt-3">
                            <button type="submit" class="btn btn-primary">Genera la password</button>
                            <button type="reset" class="btn btn-warning">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>