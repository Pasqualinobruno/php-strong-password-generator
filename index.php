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
//var_dump($_GET['lettere'], $_GET['numeri'], $_GET['caratteri_speciali']);
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

        

        <form action="./password.php" method="get">
            <div>
                <label for="password_length">Lunghezza Password:</label>
                <input type="number" name="password_length" id="password_length" required>
            </div>
            <h4>Seleziona i parametri della tua password</h4>
            <div>
                <label for="lettere">lettere</label>
                <input type="checkbox" id="lettere" name="lettere" checked>
            </div>
            <div>
                <label for="numeri">Numeri</label>
                <input type="checkbox" id="numeri" name="numeri" checked>
            </div>
            <div>
                <label for="caratteri_speciali">Caratteri speciali</label>
                <input type="checkbox" id="caratteri_speciali" name="caratteri_speciali" checked>
            </div>
            
            
            
           
           
            <button type="submit" class="btn btn-primary">Genera Password Casuale</button>
        </form>

    
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
    form{
        padding: 2rem;
        div{
            margin-bottom: 1rem
        }
    }
</style>
