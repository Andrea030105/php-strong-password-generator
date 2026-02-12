<?php
session_start();

include __DIR__ . "/function.php";

if (isset($_GET['length-pass']) && $_GET['length-pass'] !== '') {
    $lengthPass = $_GET['length-pass'];
    $_SESSION['password']  = randomPass($lengthPass);
} elseif (isset($_GET['length-pass']) && $_GET['length-pass'] == '') {
    $error = "Non hai inserito nessun numero!";
    header("Location:./index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <?php
                if (isset($error)) {
                ?>
                    <div class="container-text bg-info p-3 d-flex align-items-center rounded">
                        <p class="m-0">
                            <?php
                            echo $error;
                            ?>
                        </p>
                    </div>
                <?php
                } else {
                ?>
                    <div class="container-text bg-info p-3 d-flex align-items-center rounded">
                        <p class="m-0">
                            <?php
                            echo "La tua password è: " . $_SESSION['password'];
                            ?>
                        </p>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>