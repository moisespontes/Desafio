<?php

require_once __DIR__ . '/functions/seculoAno.php';
require_once __DIR__ . '/functions/primo.php';
require_once __DIR__ . '/functions/arrSort.php';
require_once __DIR__ . '/functions/sequencia.php';

$post = (filter_input_array(INPUT_POST, FILTER_SANITIZE_STRIPPED) ?? null);

if ($post) {
    if (isset($post['tarefa1'])) {
        $ano = filter_var($post['ano'], FILTER_VALIDATE_INT);

        $seculo = seculoAno($ano);
    }

    if (isset($post['tarefa2'])) {
        $primo = $post;

        $ini = $primo['ini'];
        $fin = $primo['fin'];
        $nPrimos = primo($ini, $fin);
    }

    if (isset($post['tarefa4'])) {
        $str = ltrim(rtrim(trim($post['seq']), ']'), '[');
        $seq = sequenciaCrescente($str);
    }
}

$arrSort = arraySort();
?>

<div>
    <h3>1ª Tarefa - Função Século Ano</h3>
    <p><?= isset($seculo) ? $seculo : ''; ?></p>
    <form method="post">
        <input type="int" name="ano" required><br>
        <input type="submit" name="tarefa1" value=Enviar>
    </form>
</div><br>
<p>===========================</p>
<div>
    <h3>2ª Tarefa - Função Primo</h3>
    <p><?= isset($nPrimos) ? $nPrimos : ''; ?></p>
    <form method="post">
        <input type="number" name="ini" required><br>
        <input type="number" name="fin" required><br>
        <input type="submit" name="tarefa2" value=Enviar>    
    </form>
</div>
<p>===========================</p>
<div>
    <h3>3ª Tarefa - Array Sorteado</h3>
    <p><?= $arrSort; ?></p>
</div>
<p>===========================</p>
<div>
    <h3>4ª Tarefa - Sequencia Crescente</h3>
    <p><?= isset($seq) ? $seq : ''; ?></p>
    <form method="post">
        <input type="text" name="seq" required><br>
        <input type="submit" name="tarefa4" value=Enviar>
    </form>
</div>