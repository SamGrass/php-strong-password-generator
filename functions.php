<?php function randomPassword($length, $characters){
    $result = [];
    for ($i = 0; $i < $length; $i++) {
        $result[] = $characters [array_rand($characters)];
    }
    return implode("", $result);
    // creo una funzione che in base al numero tornato da $_GET['length'] va a prendere casualmente i caratteri nell'array $password_characters
};