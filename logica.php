<?php
$useLetters = $_GET['lettere'];
$useNumbers = $_GET['numeri'];
$useSpecialChars = $_GET['caratteri_speciali'];

function generateRandomPassword($length, $useLetters, $useNumbers, $useSpecialChars) {
    $lettere = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numeri = '0123456789';
    $caratteri_speciali = '!@#$%^&*()_+-=[]{}|;:,.<>?';
    $password = '';
    $result = '';

    if ($useLetters =='on') {
        $password .= $lettere;
    }
    if ($useNumbers =='on') {
        $password .= $numeri;
    }
    if ($useSpecialChars =='on') {
        $password .= $caratteri_speciali;
    }
    if (empty($password)) {
        return 'Errore: Seleziona almeno una categoria di caratteri.';
    }
    // Genera la password casuale
    for ($i = 0; $i < $length; $i++) {
        $result .= $password[rand(0, strlen($password) - 1)];
    }

    return $result;
}

if (isset($_GET['password_length'])) {
    // Ottieni la lunghezza della password dalla query string
    $passwordLength = intval($_GET['password_length']);

    // Verifica se le checkbox sono state selezionate
    $useLetters = isset($_GET['lettere']);
    $useNumbers = isset($_GET['numeri']);
    $useSpecialChars = isset($_GET['caratteri_speciali']);

    // Genera la password casuale utilizzando la funzione
    $randomPassword = generateRandomPassword($passwordLength, $useLetters, $useNumbers, $useSpecialChars);
} else {
    // Messaggio di errore se la lunghezza della password non è stata fornita
    $errorMessage = "Errore: specificare la lunghezza della password.";
}
?>
