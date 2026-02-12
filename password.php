<?php
session_start();

include __DIR__ . "/function.php";

if (!isset($_GET['length-pass'])) {
    header("Location: ./index.php");
    exit;
}

if (isset($_GET['length-pass']) && $_GET['length-pass'] !== '') {
    unset($_SESSION['error']);
    session_write_close();

    $lengthPass = $_GET['length-pass'];
    $_SESSION['password']  = randomPass($lengthPass);
    session_start();
} elseif (isset($_GET['length-pass']) && $_GET['length-pass'] == '') {
    $error = "Non hai inserito nessun numero!";
    $_SESSION['error'] = $error;
    session_write_close();
    header("Location:./index.php");
    exit;
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
                <div class="container-text bg-info p-3 d-flex align-items-center rounded">
                    <p class="m-0">
                        <?php
                        echo "La tua password è: " . $_SESSION['password'];
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>