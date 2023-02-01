<?php
/*
Consigna: 
Tienes un arreglo (llamado myArray) con 5 elementos (enteros en el rango de 1 a 100). 
Escribe un programa en PHP que imprima el número más alto del arreglo 
(Si se repite, solo imprimir una vez). 
El programa solo debe imprimir el número, sin ningún texto.
El código que llena el arreglo ya está escrito, pero puedes editarlo para probar 
con otros valores. Con el botón de refrescar puedes recuperar el valor original que será 
utilizado para evaluar la pregunta como correcta o incorrecta durante la ejecución.
*/
$myArray = array(13,2,4,35,1);

function valor_maximo($array_numerico) {
    $numero_mas_alto = 0;
    for ($i = 0; $i < count($array_numerico); $i++) {
        if ($array_numerico[$i] > $numero_mas_alto) {
            $numero_mas_alto = $array_numerico[$i];
        }
    }
    return $numero_mas_alto;
}

print_r(valor_maximo($myArray));
print_r(valor_maximo([1,2,3,4,5])); // 5
print_r(valor_maximo([1,2,3,4,5,5])); // 5
print_r(valor_maximo([90,2,3,4,5])); // 90



?>