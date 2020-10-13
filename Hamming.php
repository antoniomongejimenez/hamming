<?php

/*
 * @author Antonio <antonio.monge.jimenez@iesdonana.org>
 * @copyright Copyright (c) 2020 Antonio
 * @license GPL3
 */

/**
 * Calcula la distancia hamming entre dos cadenas de ADN.
 *
 * @param string $a La primera cadena.
 * @param string $b La primera cadena.
 * @return int|bool El número de caracteres distintos,
 *                  o false si tienen distinta longitud.
 */
function distancia($a, $b)
{
    if (mb_strlen($a) != mb_strlen($b)) {
        return false;
    }

    return count(array_diff_assoc(mb_str_split($a), mb_str_split($b)));

}


