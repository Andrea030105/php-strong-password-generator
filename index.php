<?php

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
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="bg-white my-3 p-5 d-flex justify-content-around">
                    <p>
                        Lunghezza password:
                    </p>
                    <form action="./index.php" method="GET">
                        <input type="number">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>