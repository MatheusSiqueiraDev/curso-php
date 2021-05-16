<div class="titulo">Desafio Equação</div>

<?php

$expressao1 = ((6 * (3 + 2))**2)/ (3 * 2);
$expressao2 = ((((1 - 5) * (2 - 7))/2)**2);
$numerador = 10**3;

$resultado = ($expressao1 - $expressao2)**3 / $numerador;

echo $expressao1 . '<br>';
echo $expressao2 . '<br>';
echo $numerador . '<br>';
echo $resultado;
