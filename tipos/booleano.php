<div class="titulo">Tipo Booleano</div>

<?php
echo TRUE;
echo '<br>';
echo FALSE;

echo '<br>' . var_dump(true);
echo '<br>' . var_dump(false);
echo '<br>' . var_dump('false');
echo '<br>' . is_bool(false);
echo '<br>' . is_bool('true');
// Fazer as regras de conversões
?>

<p>Regras</p>

<?php
echo '<br>' . var_dump((bool) 0);   
echo '<br>' . var_dump((bool) 20);
echo '<br>' . var_dump((bool) -1);
echo '<br>' . var_dump((bool) 0.0);
echo '<br>' . var_dump((bool) 0.000000001);
echo '<br>' . var_dump((bool) "");
echo '<br>' . var_dump((bool) "0");
echo '<br>' . var_dump((bool) " ");
echo '<br>' . var_dump((bool) "00");
echo '<br>' . var_dump((bool) "false");
echo '<br>' . var_dump(!!"false");
?>
