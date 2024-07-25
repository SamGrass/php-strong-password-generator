<?php
// creo array che contiene lettere maiuscole e minuscole
$lower_alphabet = range("a","z");
$upper_alphabet = range("A","Z");
$alphabet = array_merge($lower_alphabet, $upper_alphabet);
// creo array che contiene i numeri da 0 a 1
$nums = range(0,9);
var_dump($nums);
// creo array che contiene dei caratteri speciali
$specials = ['!','?','&','%','$','<','>','^','+','-','*','/','(',')','[',']','{','}','@','#','_','=',];
var_dump($specials);

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
    
</body>
</html>