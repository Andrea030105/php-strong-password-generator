<?php

if (isset($_GET['length-pass']) && $_GET['length-pass'] !== '') {
    $lengthPass = $_GET['length-pass'];
    $fullPass = randomPass($lengthPass);
}
function randomPass($length)
{
    $pass = random_bytes($length);
    return bin2hex($pass);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body class="bg-secondary">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center my-3 text-light">
                    Strong Password Generator
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h1 class="text-center my-3 fs-2 text-white">
                    Genera una password sicura
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="container-text bg-info p-3 d-flex align-items-center rounded">
                    <p class="m-0">
                        Nessun parametro valido inserito
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container bg-white my-3 p-5">
        <div class="row">
            <div class="col">
                <div class="d-flex justify-content-center">
                    <p class="mx-5">
                        Lunghezza password:
                    </p>
                    <form action="./index.php" method="GET" class="w-75 d-flex justify-content-center">
                        <input class="w-50" type="number" name="length-pass" min="1" max="10" placeholder="Inserisci la lunghezza che vuoi">
                        <button class="btn-primary mx-3" type="submit">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-center align-items-center">
                <h1 class="m-0 my-5">
                    La tua Password è:
                    <?php
                    echo $fullPass;
                    ?>
                </h1>
            </div>
        </div>
    </div>
</body>

</html>