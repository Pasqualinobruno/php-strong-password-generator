<?php 
include __DIR__ . '/logica.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        La tua password è :
        <?php if (isset($randomPassword)): ?>
            <?php echo $randomPassword; ?>
        <?php endif; ?>
    </h1>
   
   
   
</body>
</html>