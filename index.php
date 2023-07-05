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

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <title>Password Generator</title>
    </head>
    <body>
        <div class="container">
            <div class="row d-flex flex-column align-items-center">
                <div class="col title d-flex flex-column align-items-center">
                    <h1>Strong Password Generator</h1>
                    <h3>Generatore di password efficaci</h3>
                </div>

                <div class="col card p-5">
                    <form action="index.php" method="GET">
                        <div class="col-md-6">
                            <label for="length" class="form-label">Inserisci la lunghezza della password</label>
                            <input type="number" class="form-control" name="length_input" id="length_input">
                        </div>
                        <!-- <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Password</label>
                            <input type="password" class="form-control" id="inputPassword4">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Address</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress2" class="form-label">Address 2</label>
                            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                        </div>
                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">City</label>
                            <input type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="col-md-4">
                            <label for="inputState" class="form-label">State</label>
                            <select id="inputState" class="form-select">
                            <option selected>Choose...</option>
                            <option>...</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="inputZip" class="form-label">Zip</label>
                            <input type="text" class="form-control" id="inputZip">
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">Check me out</label>
                            </div>
                        </div> -->
                        <div class="col-12 mt-3">
                            <button type="submit" class="btn btn-primary">Genera la password</button>
                        </div>
                    </form>
                </div>
                <div class="col-12">
                    <h5>La tua password generata è: <?php echo generateRandomPassword(); ?></h5>
                </div>
            </div>
        </div>
    </body>
</html>