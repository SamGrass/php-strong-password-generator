<?php

// creo sessione per segnare la password
session_start();

if (isset($_SESSION['password'])) {
    $password = $_SESSION['password'];
} else {
    header('Location: index.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
    <div class="container text-center mt-5">
        <div class="ms_card mb-4">
            La tua password è: <?php echo $password ?>
        </div>
        
        <a class="btn btn-primary" href="index.php">Torna alla Home</a>
    </div>
    
</body>
</html>