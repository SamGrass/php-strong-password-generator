<?php
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

// creo una funzione che in base al numero tornato da $_GET['length'] va a prendere casualmente i caratteri nell'array $password_characters
function randomPassword($length, $characters){
    $result = [];
    for ($i = 0; $i < $length; $i++) {
        $result[] = $characters [array_rand($characters)];
    }
    return implode("", $result);
};

// utilizzo la funzione per tornarmi una password
if (isset($_GET['length'])) {
    $password = randomPassword($_GET['length'], $password_characters);
} else {
    $password = '';
}

var_dump($_GET);
var_dump($password);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container text-center">
        <h1>Password generator</h1>
        <div>Genera una password di lunghezza compresa tra 8 e 32</div>
        <div><?php echo $password ?></div>

        <!-- form con la selezione delle caratteristiche della password -->
        <form action="index.php" method="GET">
            <label for="length-password">Lunghezza password: </label>
            <input type="number" name="length" id="length-password" min="8" max="32"> <br>

            <button class="btn btn-primary" type="submit">Invia</button>
        </form>

    </div>
</body>
</html>