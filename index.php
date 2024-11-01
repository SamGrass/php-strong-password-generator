<?php
require_once __DIR__ . "/functions.php";

// creo array che contiene lettere maiuscole e minuscole
$lower_alphabet = range("a","z");
$upper_alphabet = range("A","Z");
$alphabet = array_merge($lower_alphabet, $upper_alphabet);
// creo array che contiene i numeri da 0 a 1
$nums = range(0,9);
// creo array che contiene dei caratteri speciali
$specials = ['!','?','&','%','$','<','>','^','+','-','*','/','(',')','[',']','{','}','@','#','_','=',];
// creo un array che contenga gli altri
$password_characters = array_merge($alphabet, $nums, $specials);

// utilizzo la funzione per tornarmi una password
if (isset($_GET['length']) && !empty($_GET['length'])) {
    $password = randomPassword($_GET['length'], $password_characters);

    // creo sessione per segnare la password
    session_start();

    $_SESSION['password'] = $password;

    header('Location: ./password.php');
} else {
    $password = '';
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
    <div class="container text-center">
        <h1 class="mt-3">Password generator</h1>
        <?php if (!isset($_GET['length'])): ?>
            <div class="ms_card">Genera una password di lunghezza compresa tra 8 e 32</div>
        <?php elseif (empty($_GET['length'])): ?>
            <div  class="ms_card">Errore: seleziona la lunghezza della password</div>
        <?php else: ?>
            <div>La tua password è: <?php echo $_SESSION ?></div>
        <?php endif; ?>

        <!-- form con la selezione delle caratteristiche della password -->
        <div class="ms_card ms_card-form">
            <form action="index.php" method="GET">
                <label class="mb-4" for="length-password">Lunghezza password: </label>
                <input type="number" name="length" id="length-password" min="8" max="32"> <br>

                <button class="btn btn-primary" type="submit">Invia</button>
            </form>
        </div>
    </div>
</body>
</html>