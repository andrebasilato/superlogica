<?php 
function geraNumero() {
    for ($i = 0; $i <= 6; $i++) {
        $resultado[] = rand(1, 50);
    }
    return $resultado;
}