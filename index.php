<!-- Pregunta 1
Escribir un programa utilizando PHP que encuentre los dos 
elementos del arreglo que sumados dan 10. 
Se deben imprimir ambos números como resultado separados por un espacio 
(en el orden en que aparecen en el arreglo).
Por ejemplo, para el arreglo (1,3,4,2,7,0) el resultado sería: 3 7 -->
<?php

function findSum($arr) {
    $result = "";
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < count($arr); $j++) {
            if ($arr[$i] + $arr[$j] == 10) {
                $result = $arr[$i] . " " . $arr[$j];
                return $result;
            }
        }
    }
}

print_r(findSum([1,3,4,2,7,0])); // 3 7
// print_r(findSum([1,5,4,2,7,0])); // 5 5

?>