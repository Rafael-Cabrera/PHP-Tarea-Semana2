<?php
/*
4.Problema de Bucle Anidado:
Escribe un programa que utilice bucles anidados para imprimir un patrón de asteriscos en forma de pirámide.
*/

// Función para imprimir una pirámide de asteriscos
function bucleAnidado($height) {
    // Bucle para cada fila de la pirámide
    for ($i = 1; $i <= $height; $i++) {
        // Imprimir los espacios antes de los asteriscos (espacios a la izquierda)
        for ($j = $i; $j < $height; $j++) {
            echo " ";  // Espacio
        }
        
        // Imprimir los asteriscos
        for ($k = 1; $k <= (2 * $i - 1); $k++) {
            echo "*";  // Asterisco
        }
        
        // Salto de línea después de cada fila
        echo "\n";
    }
}

// Ejemplo de uso: generar una pirámide con altura 5 filas
$height = 10;
bucleAnidado($height);

?>
