<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>

<body>
</body>

</html>
<p></p>
<div align="center">
<?php
/* $piedra=$_POST["piedra"];
$papel=$_POST["papel"];
$tijera=$_POST["tijera"];
$lagarto=$_POST["lagarto"];
$spock=$_POST["spock"];
 */

if (isset($_POST['juego'])) {
    $opcion = $_POST['juego'];
    $aleatorio = rand(1, 5);
    switch ($aleatorio) {
        case 1:$aleatorio = 'piedra';
            break;
        case 2:$aleatorio = 'papel';
            break;
        case 3:$aleatorio = 'tijera';
            break;
        case 4:$aleatorio = 'lagarto';
            break;
        case 5:$aleatorio = 'spock';
            break;

    }
    ?>
<p class="alert alert-primary">
    <?echo "Tu has elegido $opcion y la máquina ha seleccionado $aleatorio. ";
        echo "<br>"?>
</p>
<?php
if
    (($opcion == 'piedra' && ($aleatorio == 'tijera' || $aleatorio == 'lagarto')) ||
        ($opcion == 'papel' && ($aleatorio == 'piedra' || $aleatorio == 'spock')) ||
        ($opcion == 'tijera' && ($aleatorio == 'papel' || $aleatorio == 'lagarto')) ||
        ($opcion == 'lagarto' && ($aleatorio == 'papel' || $aleatorio == 'spock')) ||
        ($opcion == 'spock' && ($aleatorio == 'piedra' || $aleatorio == 'tijera'))) {?>
<p class="alert alert-success">
<?php echo " Buena elección, has ganado";
        echo "<br>" ?>
</p>
<?php
} else if ($opcion == $aleatorio) {?>
<p class="alert alert-warning">
<?php
echo "Has empatado con la maquina";
        echo "<br>" ?>
</p>
<?php
} else {?>
<p class="alert alert-danger">
    <?
echo " Te ha ganado la maquina";
echo "<br>"?>
</p>
<?php
}

}?>
</div>