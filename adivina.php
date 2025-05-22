<?php require_once 'partes/head.php'; ?>
<h3>Juego Adivina el numero</h3>
<h3>Adivina el numero que va a sarlir del 1 al 5</h3>
<style>
    #adivina {
        width: 200px;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
        margin-bottom: 10px;
    }
    button {
        padding: 10px 20px;
        background-color: #007bff;
        color: white;
        border: none;
        cursor: pointer;
        border-radius: 4px;
    }
    button:hover {
        background-color: #0056b3;
    }
</style>
<form method="get" action="">
<input type="number" required id="adivina" name="numero" placeholder="Adivina el numero" min="1" max="5">
<button type="submit">Enviar</button>
</form>
<?php

if (isset($_GET['numero'])) {
    $numero= $_GET['numero'];
    $aletario= rand(1,5);
    if ($numero == $aletario) {
        echo "<h3>Felicidades, adivinaste el numero: $aletario</h3>";
    } else {
        echo "<h3>Lo siento, el numero era: $aletario</h3>";
    }
}
?>
</div>
<?php require_once 'partes/foot.php'; ?>