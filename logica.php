<?php
function generateRandomPassword($length) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-=[]{}|;:,.<>?';
    $password = '';

    // Genera la password casuale
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[rand(0, strlen($characters) - 1)];
    }

    return $password;
}



    if (isset($_GET['password_length'])) {
        // Ottieni la lunghezza della password dalla query string
        $passwordLength = intval($_GET['password_length']);

        // Genera la password casuale utilizzando la funzione
        $randomPassword = generateRandomPassword($passwordLength);
    } else {
        // Messaggio di errore se la lunghezza della password non è stata fornita
        $errorMessage = "Errore: specificare la lunghezza della password.";
    }
