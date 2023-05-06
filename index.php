<?php
include __DIR__ . "/dati.php";
include_once __DIR__ . "/function.php";
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
    <!-- Style -->
    <link rel="stylesheet" href="./style/style.css">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1>Strong Password Generator</h1>
        <h2>Genera una password sicura</h2>
        <div class="controllo">
            <p>Nessun parametro valido inserito</p>
        </div>
        <div class="box-password" method="GET">
            <form action="password.php">
                <div class="informazioni-password">
                    <div class="sezione-label">
                        <label class="info-label" for="lunghezza-password">Lunghezza Password:</label>
                        <p>Consenti ripetizioni di uno o più caratteri:</p>
                    </div>
                    <div class="sezione-input">
                        <input type="number" name="lunghezza_password" id="lunghezza-password" min=1 max=26>
                        <div>
                            <input type="radio" name="ripeti_carattere" id="ripeti-carattere" value="1" checked>
                            <label for="ripeti-carattere">SI</label>
                        </div>
                        <div>
                            <input type="radio" name="ripeti_carattere" id="non-ripeti-carattere" value="0">
                            <label for="non-ripeti-carattere">No</label>
                        </div>
                        <div class="filtri">
                            <div>
                                <input type="checkbox" name="lettere" id="lettere" checked>
                                <label for="lettere">Lettere</label>
                            </div>
                            <div>
                                <input type="checkbox" name="numeri" id="numeri" checked>
                                <label for="numeri">Numeri</label>
                            </div>
                            <div>
                                <input type="checkbox" name="simboli" id="simboli" checked>
                                <label for="simboli">Simboli</label>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="invia">Invia</button>
                <button type="reset">Annulla</button>
            </form>
        </div>
    </div>
</body>

</html>