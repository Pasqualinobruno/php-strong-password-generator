<?php 
include __DIR__ . '/logica.php';
/* 
Descrizione
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure. L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.
Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. Scriviamo tutto (logica e layout) in un unico file index.php
Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generatore Password Casuale</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="">
    <div class="container mt-2 p-5 ">
        <h2>Generatore Password Casuale</h2>

        <?php if (isset($errorMessage)): ?>
            <p style="color: red;"><?php echo $errorMessage; ?></p>
        <?php endif; ?>

        <form action="" method="get">
            <label for="password_length">Lunghezza Password:</label>
            <input type="number" name="password_length" id="password_length" required>
            <button type="submit" class="btn btn-primary">Genera Password Casuale</button>
        </form>

        <br>

        <?php if (isset($randomPassword)): ?>
            <h3>Password Casuale Generata:</h3>
            <p><?php echo $randomPassword; ?></p>
        <?php endif; ?>
    </div>
</body>
</html>
<style>
    body{
        background-color: aquamarine;
    }
    h2{
        color: blue;
    }
    h3{
        color: red;
    }
</style>
