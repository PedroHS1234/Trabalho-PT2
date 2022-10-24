<?php

$dados = true;
$dadis2 = false;

$result1 = $dados && $dadis2;
echo $result1, "<br>";

$dados3 = true;
$dados4 = false;

$resultados2 = $dados3 || $dados4;
echo $resultados2, "<br>";

$dados5 = true;
$dados6 = false;

$resultados3 = !$dados5;
echo $resultados3;