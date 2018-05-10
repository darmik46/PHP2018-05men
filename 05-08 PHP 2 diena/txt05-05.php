<?php
function kauliukas()
{
    echo 'Ismestas skaicius:' . mt_rand(1, 6);
}

kauliukas();
?>
    <br>


    <h1>Vardo parodymas</h1>
    <form method="post" action="">
        <h2>Iveskite varda</h2>
        <input type="text" name="name" value=""><br>
        <button type="submit">Vardas</button>
        <h2>Jusu vardas:</h2>

        <?php
        $zodziai = $_POST;
        if (isset($zodziai['name'])) {
            $sak = $zodziai['name'];
            echo strtoupper($sak);
        }
        ?>
    </form>


    <!--cia reikia rasti klaida!!!!!!!!-->
    <h1>Valandos</h1>
    <form method="post" action="">
        <h2>Iveskite valandas</h2>
        <input type="number" name="valandos" value=""><br>
        <button type="submit">Valanda</button>

        <?php
        $number = $_POST;
        function kiekLaiko($number)
        {
            if (isset($number['valandos]'])) ;
            $sum = ($number) / 24;
            echo floor($sum) . '<br>';
        }

        ?>
    </form>


    <div class="row">
        <div class="content">
            <?php
            function plytelesBaseinui($ilgis, $plotis, $gylis)
            {
                $baseinoPlotas = apskaiciuotiDugnoPlota($ilgis, $plotis) +
                    apskaiciuotiSienuPlota($gylis, $ilgis) +
                    apskaiciuotiSienuPlota($gylis, $plotis);

                $plytelesPlotas = plytelesPlotis(12, 12, 0.4);
                return ceil($baseinoPlotas / $plytelesPlotas);
            }

            function apskaiciuotiDugnoPlota($ilgis, $plotis)
            {
                return $ilgis * $plotis;
            }

            function apskaiciuotiSienuPlota($gylis, $ilgis)
            {
                return $gylis * $ilgis * 2;
            }

            function plytelesPlotis($ilgis, $plotis, $tarpas = 0)
            {
                return ($ilgis + $tarpas) * ($plotis + $tarpas);
            }
            echo ceil(plytelesBaseinui) . '<br>';
            ?>
        </div>
    </div>


<?php
include_once('txt05-05.php');
$numbers = $_POST;
if (isset($numbers['kaina']) && isset($numbers['suma']) && isset($numbers['taupyti'])) {

    echo abs($sum);
}
?>

    <br>
    <br>
    <br>
    <br>


<?php
function pranesimas()
{
    echo 'iviko semingai';
}

function plotas($weight, $height = 1)
{
    $plotas = $weight * $height;
    echo $plotas . '<br>';
}

function grazinamas($weight, $height = 1)
{
    $plotas = $weight * $height;
    return $plotas;
}

plotas(3);
plotas(5, 5);
plotas(7, 7);
plotas(6, 76);
pranesimas();

?>


    <!--cia yra MATEMATINES FUNKCIJOS! jos pasiraso automatiskai,
    tik reikia zinot, kurios funkcijos kokiam vieksmui mums projekte reikia-->

<?php

$number = -5;

//skaiciu padaro visada teigiamu
//ir tai yra ABS modulis
echo abs($number) . '<br>';
$ceil = 3.6743;

//lygina i didejancia puse
echo ceil($ceil) . '<br>';

//lygina i mazejancia puse
echo floor($ceil) . '<br>';

$mas = [1, 2, 3, 4];
//
echo min($mas) . '<br>';

//isima minimuma is skaiciu eiles
echo max($mas) . '<br>';

//isima maksimuma is skaiciu eiles
echo max(1, 2, 3, 4) . '<br>';

// leidzia aptureti atsitiktini skaiciu
echo mt_rand(1, 4) . '<br>';

//cia mums leidzia naudoti PI reiksme
echo pi() . '<br>';
echo M_PI . '<br>';

//cia apvalina su kableliu
echo round($ceil, 2) . '<br>';

$sqrt = 10;
//cia yra kvadratines saknies funkcija
echo sqrt($sqrt) . '<br>';

?>