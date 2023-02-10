<?
// Escribir un programa en PHP que imprima una X construida a base de la letra X y 
// utilizar el carácter de subrayado como espacio. 
// El tamaño de la x se basa en una variable n que indicará el tamaño de la letra para imprimir 
// (en una matriz de n x n).
// Por ejemplo, para n = 5 se obtiene:

// X___X
// _X_X_
// __X__
// _X_X_
// X___X

// y para n=6 se obtiene:

// X____X
// _X__X_
// __XX__
// __XX__
// _X__X_
// X____X

// Si n es igual a cero imprimir "ERROR"

// El código para el tamaño de n ya está ahí, puede editarlo para probar con otros valores y 
// puede hacer clic en el botón de actualización junto a él para volver al valor original que se utiliza para 
// validar su código durante la prueba. Tenga en cuenta que el código debe imprimir los resultados 
// exactamente como se muestra con el fin de que la pregunta sea considerada válida durante la prueba 
// (El carácter "X" en mayúscula y el guion bajo "_" para los espacios)

function construir_figura($numero){
    $resultado = '';
    if ($numero == 0) {
        $resultado = 'ERROR';
    } else {
        for ($i=0; $i < $numero; $i++) { 
            for ($j=0; $j < $numero; $j++) { 
                if ($i == $j || $i + $j == $numero - 1) {
                    $resultado .= 'X';
                } else {
                    $resultado .= '_';
                }
            }
            $resultado .= PHP_EOL;
        }
    }
    return $resultado;
}

print_r(construir_figura(6));
print_r(construir_figura(5));

?>

