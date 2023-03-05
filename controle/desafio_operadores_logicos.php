<div class="titulo">
    Desafio Operadores Logicos
</div>

<!--
    Se os dois trabalhos forem executados -> TV 50' e Sorvete 
    Se apenas um for executado -> TV 32' e Sorvete
    Se nenhum for executado -> Fica em casa mais saudável
-->

<?php
/**
 * @var Bool
 */
$trabalho1 = !!$_POST['t1'];

/**
 * @var Bool
 */
$trabalho2 =  !!$_POST['t2'];
?>

<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (Terça):</label>
        <select name="t1" id="t1">
            <option 
                value="1" 
                <?= $trabalho1 == true ? 'selected' : ''?>
            >
                Executado
            </option>
            <option 
                value="0"
                <?= $trabalho1 == false ? 'selected' : ''?>
            >
                Não executado
            </option>
        </select>
    </div>

    <div>
        <label for="t2">Trabalho 2 (Terça):</label>
        <select name="t2" id="t2">
            <option 
                <?= $trabalho2 == true ? 'selected' : ''?>
                value="1"
            >
                Executado
            </option>
            <option 
                <?= $trabalho2 == false ? 'selected' : ''?>
                value="0"
            >
                Não executado
            </option>
        </select>
    </div>

    <button>Executar</button>
</form>

<nav>
    <ul>
        <?php if($trabalho1 && $trabalho2): ?>
            <li>TV 50'</li>
            <li>Sorvete</li>
        <?php endif;?>

        <?php if($trabalho1 xor $trabalho2):?>
            <li>TV 32'</li>
            <li>Sorvete</li>
        <?php endif?>

        <?php if(!($trabalho1 || $trabalho2)):?>
            <li>Ficar em Casa</li>
        <?php endif?>
    </ul>
</nav>
    
<style>
    button, select {
        font-size: 1.8rem;
    }
</style>