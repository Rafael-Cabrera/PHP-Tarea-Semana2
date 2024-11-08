<?php
/*
3.Problema de Frecuencia de Caracteres:
Implementa una función que tome una cadena de texto y devuelva un array asociativo que muestre la frecuencia de cada carácter en la cadena.
*/

// Función que recibe una cadena y devuelve un array asociativo con la frecuencia de cada carácter
function frecuenciaCaracteres($cadena) {
    $frecuencia = [];  // Array para almacenar la frecuencia de los caracteres
    
    // Recorrer cada carácter en la cadena
    for ($i = 0; $i < strlen($cadena); $i++) {
        $caracter = $cadena[$i];  // Obtener el carácter actual
        
        // Si el carácter ya existe en el array, incrementar su frecuencia
        if (isset($frecuencia[$caracter])) {
            $frecuencia[$caracter]++;
        } else {
            // Si el carácter no existe en el array, agregarlo con frecuencia 1
            $frecuencia[$caracter] = 1;
        }
    }
    
    return $frecuencia;  // Retornar el array con las frecuencias
}

// Ejemplo de uso
$cadena = "Holiwuis";
$resultado = frecuenciaCaracteres($cadena);  // Llamar a la función

// Mostrar el resultado
echo "<pre>";
print_r($resultado);
echo "</pre>";

?>
