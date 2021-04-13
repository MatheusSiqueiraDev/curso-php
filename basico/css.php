<div class="titulo">Integração HTML</div>

<h1 center>
    <?php
        echo 'Olá';
        echo '<small>';
        echo ' Mundo!';
        echo '</small>'
    ?>
</h1>

<?= "<div center azul>Outra forma de me 'expressar'!</div>"?>

<div center><button dobro><?="Legal"?></button></div>

<style>
    button {
        padding: 5px <?= 10 * 2?>px;
        background-color: #4296f4;
        color: #eee;
        font-weigth: bold;
        boder-radius: 10px;
    }

    [center] {
        display: flex;
        justify-content: center;
    }

    <?="[azul]"?> {
        color: #4286f4;
    }

    [dobro] {
        font-size: <?= 10 - 8?>rem;
    }
</style>