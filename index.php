<?php
$p_len = $_GET['p-length'] ?? '';

// # Funzioni
require __DIR__ . '/logic/functions.php';

$password = randomPassword($p_len);
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

    <main>
        <div class="container">

            <!-- risultato password -->
            <div id="pw-result" class="text-white text-center p-2 bg-success rounded mb-3 <?= !$p_len ? 'd-none' : '' ?>">
                <p>La password di <b><?= $p_len ?></b> caratteri che abbiamo generato per te è: <b><?= $password ?></b></p>
            </div>

            <!-- riquadro generazione password -->
            <div id="pw-generator" class="form-card text-center">
                <form action="" method="GET" class="py-3 rounded">
                    <div class="input-group py-2 d-flex justify-content-center gap-3 align-items-center">
                    <label class="rounded col-2" for="p-length">Lunghezza Password</label>
                    <input class="rounded col-2" type="number" name="p-length" min="5" max="20" value="<?= !$p_len ? '5' : "$p_len" ?>">
                    </div>
                    <button class="btn btn-primary">Invia</button>
                    <button class="btn btn-secondary">Annulla</button>
                </form>
            </div>
        </div>
    </main>

    
</body>
</html>