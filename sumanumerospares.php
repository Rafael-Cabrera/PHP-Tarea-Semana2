<?php
/*
2.Problema de Suma de Números Pares:
Crea un script que sume todos los números pares en un array de números enteros.
*/

// Definir la función para sumar los números pares
function sumaNumerosPares($numeros) {
    $sumaPar = 0; // Variable para almacenar la suma de los números pares
    
    // Recorrer el array y sumar solo los números pares
    foreach ($numeros as $numero) {
        if ($numero % 2 == 0) {  // Comprobar si el número es par
            $sumaPar += $numero;
        }
    }
    
    return $sumaPar; // Retornar la suma de los números pares
}

// Ejemplo de uso
$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$resultado = sumaNumerosPares($numeros);  // Llamar a la función

echo "La suma de los números pares es: " . $resultado;

?>
