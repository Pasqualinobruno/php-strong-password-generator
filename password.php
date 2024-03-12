<?php 
include __DIR__ . '/logica.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h1>
            La tua password è :
            <?php if (isset($randomPassword)): ?>
                <?php echo $randomPassword; ?>
            <?php endif; ?>
        </h1>
    </div>
    
    
    
    
    
    
   
   
   
</body>
</html>
<style>
    .container{
        display: flex;
        margin-top: 1rem;
        background-color: red;
        padding: 2rem;
        height: 50vh;
        align-items: center;
        justify-content: center;
    }
</style>