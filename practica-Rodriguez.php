<?php

/**
 * Clase Matematicas
 *
 * Esta clase ofrece funciones matemáticas básicas.
 *
 * @package Matematicas
 * @version 1.0.0
 * @author Jesus Daniel Rodriguez Sanchez
 */

/**
 * Clase Matematicas
 *
 * Esta clase contiene métodos para realizar operaciones matemáticas básicas.
 */
class Matematicas
{

    /**
     * Multiplica dos números.
     *
     * @param float|int $multiplo1 El primer número a multiplicar.
     * @param float|int $multiplo2 El segundo número a multiplicar.
     * @return float|int El producto de los dos números.
     * 
     * @static
     * @internal
     * Este método utiliza el operador * para realizar la multiplicación.
     */
    public static function multiplicar($multiplo1, $multiplo2)
    {
        //cambiamos producto por resultado
        $resultado = $multiplo1 * $multiplo2;
        return $resultado;
    }

    /**
     * Eleva un número a una potencia.
     *
     * @param float|int $base El número base.
     * @param float|int $exponente La potencia a la que se eleva la base.
     * @return float|int El resultado de elevar la base al exponente.
     *
     * @static
     * @internal
     * Este método utiliza la función pow() de PHP para calcular la potencia.
     */
    public static function elevar($base, $exponente)
    {
        $resultado = pow($base, $exponente);
        return $resultado;
    }
}

// Ejemplo de uso de la clase Matematicas
echo Matematicas::multiplicar(2, 3); // Imprime 6
echo Matematicas::elevar(2, 3);      // Imprime 8
