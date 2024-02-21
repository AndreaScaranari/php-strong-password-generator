<?php
// Avviare la sessione
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Generator</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- my css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="text-center py-3 text-white">
        <h1>Strong Password Generator</h1>
        <h3>Genera una password sicura</h3>
    </header>

<div class="container">

    <!-- risultato password -->
    <div id="pw-result" class="text-white text-center p-2 bg-success rounded mb-3 <?= !$_SESSION['p_len'] ? 'd-none' : '' ?>">
        <p>La password di <b><?= $_SESSION['p_len'] ?></b> caratteri che abbiamo generato per te è: <b><?= $_SESSION['password'] ?></b></p>
    </div>

</div>
    
</body>
</html>