<?php

/**
 * 2º Tarefa
 *
 * @param integer $ini
 * @param integer $fin
 * @return string
 */
function primo(int $ini, int $fin): string
{
    if ($ini > $fin) {
        return "Nº final não pode ser maior que o inicial";
    }

    $verificar = function (int $ini) {
        if ($ini == 0 || $ini == 1) {
            return false;
        }

        for ($i = 2; $i < $ini - 1; $i++) {
            if ($ini % $i == 0) {
                return false;
            }
        }
        return true;
    };

    $nPrimos = [];
    $arr = '';
    $ini += 1;
    for ($i = $ini; $i < $fin; $i++) {
        if ($verificar($i)) {
            array_push($nPrimos, $i);
        }
    }
    foreach ($nPrimos as $value) {
        $arr .= "{$value}, ";
    }

    $qtd = count($nPrimos);
    $arr = substr($arr, 0, -2);
    return "Encontrados {$qtd} números primos, são eles: {$arr}";
}
