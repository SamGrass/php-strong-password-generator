<?php 
// creo una funzione che in base al numero tornato da $_GET['length'] va a prendere casualmente i caratteri nell'array $password_characters
function randomPassword($length, $characters){
    $result = [];
    while (count($result) < $length) {
        $result[] = $characters [array_rand($characters)];
    }
    return htmlspecialchars(implode("", $result)) ;
    
};