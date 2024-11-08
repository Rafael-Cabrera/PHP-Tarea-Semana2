<?php
/*
1.Problema de Lista Invertida:
Escribe un programa que tome un array de números y devuelva una nueva lista que contenga los mismos elementos en orden inverso.
*/
// Definir una clase Nodo
class Nodo {
    public $value;
    public $next;
    
    public function __construct($value) {
        $this->value = $value;
        $this->next = null;
    }
}

// Definir una clase ListaEnlazada
class ListaEnlazada {
    public $head;
    
    public function __construct() {
        $this->head = null;
    }
    
    // Método para agregar un nodo al final
    public function agregarNodo($value) {
        $newNodo = new Nodo($value);
        
        if ($this->head === null) {
            $this->head = $newNodo;
        } else {
            $currentNodo = $this->head;
            while ($currentNodo->next !== null) {
                $currentNodo = $currentNodo->next;
            }
            $currentNodo->next = $newNodo;
        }
    }
    
    // Método para imprimir la lista
    public function imprimirLista() {
        $currentNodo = $this->head;
        while ($currentNodo !== null) {
            echo $currentNodo->value . " ";
            $currentNodo = $currentNodo->next;
        }
        echo "\n";
    }
    
    // Método para invertir la lista enlazada
    public function invertir() {
        $previousNodo = null;
        $currentNodo = $this->head;
        
        while ($currentNodo !== null) {
            $next = $currentNodo->next;
            $currentNodo->next = $previousNodo;
            $previousNodo = $currentNodo;
            $currentNodo = $next;
        }
        
        $this->head = $previousNodo;
    }
}

// Función para invertir un array y convertirlo en una lista enlazada
function arrayAListaInvertida($array) {
    $lista = new ListaEnlazada();
    
    // Insertamos los elementos del array en la lista en orden inverso
    foreach (array_reverse($array) as $elemento) {
        $lista->agregarNodo($elemento);
    }
    
    return $lista;
}

// Ejemplo de uso
$array = [1, 2, 3, 4, 5]; // Array de ejemplo

// Convertimos el array en una lista enlazada invertida
$listaInvertida = arrayAListaInvertida($array);

// Imprimimos la lista enlazada
echo "Lista enlazada invertida: ";
$listaInvertida->imprimirLista();

?>
