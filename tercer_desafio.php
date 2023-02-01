<!-- 
Tienes un arreglo (llamado myArray) con 10 elementos (enteros en el rango de 1 a 9). 
Escribe un programa en PHP que imprima el número que tiene más ocurrencias consecutivas en el arreglo 
y también imprimir la cantidad de veces que aparece en la secuencia.

El código que llena el arreglo ya está escrito, pero puedes editarlo para probar con otros valores. 
Con el botón de refrescar puedes recuperar el valor original que será utilizado para evaluar la pregunta 
como correcta o incorrecta durante la ejecución.

Su programa debe analizar el arreglo de izquierda a derecha para que en caso de que dos números 
cumplan la condición, el que aparece por primera vez de izquierda a derecha será el que se imprima. 
La salida de los datos para el arreglo en el ejemplo (1,2,2,5,4,6,7,8,8,8) sería la siguiente:
Longest: 3
Number: 8

En el ejemplo, la secuencia más larga la tiene el número 8 con una secuencia de tres ochos seguidos. 
Tenga en cuenta que el código que escriba debe imprimir los resultados exactamente como se muestra 
con el fin de que la pregunta sea considerada válida.

El código para declarar y poblar myArray ya está ahí, puede editarlo para probar con otros valores 
y puede hacer clic en el botón de actualizar junto a él para volver al valor original que se 
utilizará para validar su código durante la prueba.
 -->
<?php
$myArray = array(1,2,2,4,5,6,7,8,8,8);

function obtener_concurrencias($myArray){
    $repeticiones = 0;
    $numero_mas_repetido = 0;
    $resultado = '';
    foreach ($myArray as $numero) {
        if ($numero == $numero_mas_repetido) {
            $repeticiones++;
        } else {
            $repeticiones = 1;
            $numero_mas_repetido = $numero;
        }
    }
    $resultado = 'Longest: ' . $repeticiones . PHP_EOL . 'Number: ' . $numero_mas_repetido;
    return $resultado;
}
print_r(obtener_concurrencias($myArray))
?>