<div class="titulo">If Else</div>

<?php
if(false)
    echo "Não serei impresso";
    echo "Serei impresso<br>";

if(true) {
    echo "Eu e o de baixo seremos impressos<br>";
    echo "Eu e o de cima seremos impressos<br>";
}

if(false) {
    echo "Acho que não seremos impressos";
    echo "Também acho que não!";
}

if(false); {
    echo "Acredito que tenha possibilidade<br>";
    echo "Com certeza!<br>";
}

if(true) 
    echo "Verdadeiro <br>";
else
    echo "Falso <br>";

if(true) {
    echo "Todos nós ";
    echo "vamos ser impressos <br>";
} else {
    echo "Nós não iremos <br>";
}

$numero = 15;
if($numero < 10) {
    echo "$numero < 10";
} elseif ($numero < 20) {
    echo "$numero < 20";
} else {
    echo "$numero é maior que 20";
}