<?php

/**
 * 4º Tarefa
 *
 * @return void
 */
function sequenciaCrescente(string $seq)
{
    $arr = explode(',', $seq);
    $arrvr = [];
    $arrverify = [];

    $verificar = function ($arr) {
        for ($i = 1; $i < count($arr); $i++) {
            if ($arr[$i - 1] >= $arr[$i]) {
                return false;
            }
        };
        return true;
    };


    $arrver = function ($arr, $pos) use (&$arrvr) {
        $arb = $arr;
        $ara = [];
        unset($arb[$pos]);
        foreach ($arb as $value) {
            array_push($ara, $value);
        }
        array_push($arrvr, $ara);
    };


    foreach ($arr as $key => $value) {
        $arrver($arr, $key);
    }

    foreach ($arrvr as $vrify) {
        if ($verificar($vrify)) {
            array_push($arrverify, true);
        } else {
            array_push($arrverify, false);
        }
    }

    if (in_array(true, $arrverify)) {
        return "true";
    } else {
        return "false";
    }
}
