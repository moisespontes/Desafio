<?php

/**
 * 1º Tarefa
 *
 * @param integer $ano
 * @return void
 */
function seculoAno(int $ano)
{
    if ($ano == 0) {
        $seculo = 1;
        return "Ano inválido!";
    }
    if ($ano == 1) {
        $seculo = 1;
        return "O Ano {$ano} pertence ao Século {$seculo}";
    }

    $algarismo = (string)(($ano - 2) / 100) + 1;
    $seculo = substr($algarismo, 0, -3);
    return "O Ano {$ano} pertence ao Século {$seculo}";
}
