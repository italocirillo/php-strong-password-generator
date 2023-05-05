<?php

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
