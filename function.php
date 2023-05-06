<?php
session_start();
if (isset($_GET["lunghezza_password"])) {
    $lunghezza = $_GET["lunghezza_password"];

    //LETTERE
    if (isset($_GET['lettere'])) {
        $lettere = $_GET['lettere'];
        if ($lettere) {
            $caratteri = array_merge($caratteri, $lettere_array);
        }
    }

    //NUMERI
    if (isset($_GET['numeri'])) {
        $numeri = $_GET['numeri'];
        if ($numeri) {
            $caratteri = array_merge($caratteri, $numeri_array);
        }
    }

    //SIMBOLI
    if (isset($_GET['simboli'])) {
        $simboli = $_GET['simboli'];
        if ($simboli) {
            $caratteri = array_merge($caratteri, $simboli_array);
        }
    }

    // PIÚ CARATTERI
    if (isset($_GET['ripeti_carattere'])) {
        $piu_caratteri = $_GET['ripeti_carattere'];
    }

    //CONTROLLO LUNGHEZZA
    if (controllo_lunghezza($caratteri, $lunghezza, $piu_caratteri) === false) {
        $lunghezza = 0;
    }


    if ($lunghezza === 0) {
        $password = "...ERRORE PARAMETRI...";
    } else {
        $password = genera_password($lunghezza, $caratteri, $piu_caratteri);
    }
    $_SESSION['password'] = $password;
}

function genera_password($lunghezza, $caratteri, $piu_caratteri)
{
    $password = '';
    $indice_casuale = 0;
    for ($i = 0; $i < $lunghezza; $i++) {
        $indice_casuale = rand(0, count($caratteri) - 1);
        if ($piu_caratteri == 0) {
            if (!str_contains($password, $caratteri[$indice_casuale])) {
                $password .= $caratteri[$indice_casuale];
            } else {
                $i--;
            }
        } else {
            $password .= $caratteri[$indice_casuale];
        }
    }
    return $password;
}

function controllo_lunghezza($caratteri, $lunghezza, $piu_caratteri)
{
    $lunghezza_massima = count($caratteri);
    if (($lunghezza > $lunghezza_massima && !$piu_caratteri) || $lunghezza_massima === 0) {
        return false;
    } else {
        return true;
    }
}
