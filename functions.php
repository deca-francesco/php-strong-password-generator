<?php

// prendo la lunghezza della password se c'è, altrimenti null
$passwordLength = $_GET["passwordLength"] ?? null;

// se la lunghezza esiste genero subito la password, altrimenti null
$password = $passwordLength ? generatePassword($passwordLength) : null;

function generatePassword()
{
    // prendo la lunghezza della password da fuori 
    global $passwordLength;

    // controllo se la lunghezza esiste, altrimenti interrompo
    if (!$passwordLength || $passwordLength < 8 || $passwordLength > 16) {
        return;
    }

    // tutto insieme nella milestone 1
    $characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()";
    // rimane in questo scope
    $password = "";

    // genero una password casuale di lunghezza $passwordLength
    for ($i = 0; $i < $passwordLength; $i++) {
        // ad ogni iterazione aggiungo a password un carattere preso da $charaters 
        // accedo a $characters come un array, all'indice casuale (tra 0 e la lunghezza di $characters -1 perché parto da 0)
        $password .= $characters[rand(0, strlen($characters) - 1)];
    }
    // ritorno solo il valore
    return $password;
}
