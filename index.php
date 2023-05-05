<?php
$caratteri = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 1, 2, 3, 4, 5, 6, 7, 8, 9, 0, '?', '!', '£', '$', '€', '*', '#', '@', '(', ')', '[', ']', '{', '}'];

if (isset($_GET["lunghezza_password"])) {
    $lunghezza = $_GET["lunghezza_password"];
    $password = genera_password($lunghezza, $caratteri);
}

function genera_password($lunghezza, $caratteri)
{
    $password = "";
    $indice_casuale = 0;
    for ($i = 0; $i < $lunghezza; $i++) {
        $indice_casuale = rand(0, count($caratteri) - 1);
        $password .= $caratteri[$indice_casuale];
    }
    return $password;
}
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
            <form action="index.php">
                <div class="informazioni-passord">
                    <div class="sezione-label">
                        <label for="lunghezza-password">Lunghezza Password:</label>
                    </div>
                    <div class="sezione-input">
                        <input type="number" name="lunghezza_password" id="lunghezza-password" min=0 max=26>
                    </div>
                </div>
                <h4>password: <?php echo $password ?? isset($_GET["lunghezza_password"]) ?></h4>
                <button type="submit" class="invia">Invia</button>
                <button type="reset">Annulla</button>
            </form>
        </div>
    </div>
</body>

</html>