<?php

/**
 * 3º Tarefa
 *
 * @return string
 */
function arraySort(): string
{
    $qtd = 20;
    $sort = [];
    $arr = '';
    $arrS = '';

    for ($i = 0; $i < $qtd; $i++) {
        array_push($sort, rand(1, 10));
    }
    $diff = array_unique(array_diff_assoc($sort, array_unique($sort)));
    $unico = array_diff($sort, $diff);

    foreach ($unico as $u) {
        $arr .= "{$u}, ";
    }

    foreach ($sort as $s) {
        $arrS .= "{$s}, ";
    }
    $arr = substr($arr, 0, -2);
    $arrS = substr($arrS, 0, -2);
    return "<p>Array sorteado = [{$arrS}]<p><p>Os numeros que não se repetem são: {$arr}.</p>";
}
