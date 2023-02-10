<?php
// Se tiene una matriz de 3 x 3 que contiene números del 1 al 9 
// simulado con una matriz unidimensional. Así, por ejemplo, esta matriz:

// 1 2 9
// 2 5 3
// 5 1 5

// Se representaría como (1,2,9,2,5,3,5,1,5). El objetivo es identificar el camino que de 
// la menor suma al recorrer el arreglo bi-dimensional de izquierda a derecha. 
// Se empieza en la columna izquierda y se mueve siempre una columna a la derecha de la misma fila o 
// a una fila hacia arriba o hacia abajo. En el ejemplo, si parte de 1, puede pasar al 2 o al 5. 
// De ahí, si pasó al 5 puede pasar al 9 al 3 o al 5. Por otro lado, si pasa del 1 al 2, desde el 2 de la 
// columna del medio no podría pasar al 5 de la ultima fila en la columna derecha.

// Es necesario encontrar el camino que produce el número más bajo al suma los valores de cada número que 
// visita. Así que para el ejemplo, la ruta con la menor suma sería 1,2,3

// El código para declarar y poblar myArray ya está ahí, puede editarlo para probar con otros valores 
// y puede hacer clic en el botón de actualizar junto a él para volver al valor original que se utilizará 
// para validar su código durante la prueba.

// El resultado de su programa debe ser los 3 números por los que pasó para obtener la menor 
//suma separados por un espacio. Para el ejemplo, la salida sería exactamente así:
// 1 2 3
$myArray = array(1,2,9,2,5,3,5,1,5);

function camino_efectivo($array) {
    $fila = 0;
    $columna = 0;
    $suma = 0;
    $resultado = array();
    $resultado[] = $array[$fila];
    $suma += $array[$fila];
    while ($columna < 2) {
        $columna++;
        $fila++;
        $resultado[] = $array[$fila];
        $suma += $array[$fila];
        if ($array[$fila] > $array[$fila + 3]) {
            $fila += 3;
            $resultado[] = $array[$fila];
            $suma += $array[$fila];
        } else {
            $fila -= 3;
            $resultado[] = $array[$fila];
            $suma += $array[$fila];
        }
    }
    $resultado[] = $suma;
    $resultado = array_filter($resultado);
    $resultado = implode(" ", $resultado);
    return $resultado;
}

print_r(camino_efectivo($myArray));
?>