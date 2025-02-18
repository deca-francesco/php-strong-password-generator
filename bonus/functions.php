<?php

// se starto la sessione qua sarà startata anche in result col require
session_start();

// prendo la lunghezza della password se c'è, altrimenti 0
$passwordLength = $_GET["passwordLength"] ?? 0;

// la eseguo sempre così se non va bene viene sovrascritta a stringa vuota
$password = $_SESSION['password'] = generatePassword($passwordLength);

function generatePassword($passwordLength)
{

    // controllo se la lunghezza esiste, altrimenti interrompo
    if (!$passwordLength || $passwordLength < 8 || $passwordLength > 16) {
        return "";
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
