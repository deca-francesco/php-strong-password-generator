<?php

// se starto la sessione qua sarà startata anche in result col require
session_start();

// prendo la lunghezza della password se c'è, altrimenti 0
$passwordLength = $_GET["passwordLength"] ?? 0;

// prendo tutte le opzioni
$useUppercase = isset($_GET['uppercase']);
$useLowercase = isset($_GET['lowercase']);
$useNumbers = isset($_GET['numbers']);
$useSymbols = isset($_GET['symbols']);
// col radio button è sempre settato (true o false), se è false la comparazione è falsa e sarà falso anche $allowRepeats, altrimenti tutto sarà true
$allowRepeats = $_GET['allowRepeats'] === "true";

// la eseguo sempre così se non va bene viene sovrascritta a stringa vuota
$password = $_SESSION['password'] = generatePassword($passwordLength, $useUppercase, $useLowercase, $useNumbers, $useSymbols, $allowRepeats);

function generatePassword($length, $uppercase, $lowercase, $numbers, $symbols, $allowRepeats)
{

    // controllo se la lunghezza esiste, altrimenti interrompo
    if (!$length || $length < 8 || $length > 16) {
        return "";
    }

    // tipi di caratteri separati nella milestone 3, inizializzato a stringa vuota (Tutti sono 81 caratteri)
    // se le checkbox non sono checkate non esistono nell'url, quindi nemmeno in $_GET
    $characters = "";
    if ($uppercase) $characters .= "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    if ($lowercase) $characters .= "abcdefghijklmnopqrstuvwxyz";
    if ($numbers) $characters .= "0123456789";
    if ($symbols) $characters .= "!@#$%^&*()[]-_,.;:+";

    // se nessuno è selezionato o sei metti solo numeri, più di 10 e senza ripetizioni ritorno stringa vuota
    if ($characters === "") {
        return "";
    }

    // se sono selezionati solo numeri senza ripetizioni e più di 10 caratteri ritorno "err" (3 caratteri, tanto la password minima è 8)
    if ($characters === "0123456789" && $length > 10 && !$allowRepeats) {
        return "err";
    }

    // rimane in questo scope
    $password = "";

    for ($i = 0; $i < $length; $i++) {
        $char = $characters[rand(0, strlen($characters) - 1)];
        // se non ci sono le ripetizioni tolgo char da characters
        if (!$allowRepeats) {
            $characters = str_replace($char, '', $characters);
        }
        // infine inserisco nella password
        $password .= $char;
    }

    // ritorno solo il valore
    return $password;
}
