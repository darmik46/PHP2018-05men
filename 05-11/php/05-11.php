<h1>1 ir 2 uzduotis</h1>
<table border="1">
    <tr>
        <td>
            <?php
            //cia 'title' ir 'price' yra INDEKSAI. jei nebutu pavadinimu, indeksai tiesiog butu 0 ir 1, pagal seka
            $masyvas2 = ['Jonas', 'Petras', 'Antanas',];
            echo '<ul>';

            foreach ($masyvas2 as $vardas) {
                echo '<li>' . $vardas . '</li>';
            }
            sprintf($vardas);
            $vardas = $masyvas2;
            echo '</ul>';
            ?>
        </td>
    </tr>
</table>

<h1>2 uzduotis</h1>
<table border="1">
    <tr>
        <td>
            <?php
            //cia kitoks I uzduoties variantas!
            $masyvas2 = ['Jonas', 'Petras', 'Antanas',];
            printVardas($masyvas2);
            function printVardas($array)
            {
                echo $array[0];
                echo '<br>';
                echo $array[1];
                echo '<br>';
                echo $array[2];
            }

            echo '<ul>';
            echo '</ul>';
            ?>
        </td>
    </tr>
</table>

<h1>3 uzduotis</h1>
<table border="1">
    <tr>
        <td>
            <?php
            echo '<table border="1">';
            $masyvas2 = ['Jonas', 'Petras', 'Antanas',];

            //            cia kaip ir 1 ir 2 uazduoti gauname sarasa, tik jau "prasukdami" funkcini cikla
            printVardas($masyvas2);
            function printMas($array)
            {
                foreach ($array as $vardas) {
                    echo $vardas;
                }
            }

            echo '</ul>';
            echo '</table>';
            ?>
        </td>
    </tr>
</table>

<h1>4 uzduotis</h1>
<table border="1">
    <tr>
        <td>
            <?php
            $masyvas6 = [
                [
                    'bank' => 'swed',
                    'payment_title' => 'Mokejimas uz prekes 1',
                    'total' => 21.32,
                ],
                [
                    'bank' => 'seb',
                    'payment_title' => 'Mokejimas uz paslaugas',
                    'total' => 32.52,
                ],
                [
                    'bank' => 'dnb',
                    'payment_title' => 'Mokejimas uz prekes 2',
                    'total' => 12.84,
                ],
            ];
            paymentInfo($masyvas6);
            function paymentInfo($payments)
            {
                foreach ($payments as $payment) {
                    if ($payment['bank'] == 'swed') {
                        echo $payment['payment_title'];
                        echo '<br>';
                    } elseif ($payment['bank'] == 'seb') {
                        printPaymentData($payment);
                    } else {
                        echo 'Mokejimas neimanomas';
                    }
                }
            }

            function printPaymentData($paymentData)
            {
                echo $paymentData['payment_title'] . '' . $paymentData['total'] . '<br>';
            }

            ?>
        </td>
    </tr>
</table>

<h1>5 uzduotis</h1>
<table border="1">
    <tr>
        <td>
            <?php
            $masyvas6 = [
                [
                    'bank' => 'swed',
                    'payment_title' => 'Mokejimas uz prekes 1',
                    'total' => 21.32,
                ],
                [
                    'bank' => 'seb',
                    'payment_title' => 'Mokejimas uz paslaugas',
                    'total' => 32.52,
                ],
                [
                    'bank' => 'dnb',
                    'payment_title' => 'Mokejimas uz prekes 2',
                    'total' => 12.84,
                ],
            ];
//cia idomesnis ir paprastesnis cikla uzdarantis variantas, taip pat padarantis 5 uzduoties salygas
            paymentInfo($masyvas6);
            function paymentInfo($payments)
            {
                foreach ($payments as $payment) {
                    switch ($payment['bank']) {
                        case 'swed':
                            echo $payment['payment_title'];
                            echo '<br>';
                            break;
                        case 'seb':
                            printPaymentData($payment);
                            break;
                        default:
                            echo 'Mokejimas neimanomas';
                            break;
                    }
                }
            }
            function printPaymentData($paymentData)
            {
                echo $paymentData['payment_title'] . '' . $paymentData['total'] . '<br>';
            }

            ?>
        </td>
    </tr>
</table>


<!--kiekvienos funkcijos iskvietima rasome ten, kur norime gauti rezultata - ar prieky ar gale,
 jokio skirtumo. o pati funkcija gali buti bet kur - iskvietimo metu pagaunamas reikalingas elementas-->


<h1>Pirma uzduotis</h1>
<table border="1">
    <tr>
        <td>
            <?php
            //cia 'title' ir 'price' yra INDEKSAI. jei nebutu pavadinimu, indeksai tiesiog butu 0 ir 1, pagal seka
            $produktai = [
                [
                    'title' => 'knyga kaip zudirbti stuka',
                    'price' => 4.3457,
                ],
                [
                    'title' => 'knyga Vincas prakale ferariu',
                    'price' => 14.275,
                ]
            ];
            echo '<ul>';
            foreach ($produktai as $product) {
                echo '<li>' . $product['title'] . '.Kaina:' . formatPrice($product['price']) . '</li>';
                echo '<li>' . formatPrice($product['price']) . '.Kaina:' . $product['title'] . '</li>';
            }
            echo '</ul>';
            function formatPrice($price)
            {
                $ret = round($price, 2) . 'Eur';
                return $ret;
            }

            echo '<tr>';

            echo '</table>'
            ?>
        </td>
    </tr>
</table>
<br>
<br>


<h1>Antra uzduotis</h1>
<table border="1">
    <tr>
        <td>
            <?php

            $vardai = ['Jonas', 'Petras', 'Antanas',];

            $masyvas1 = [0, 4, 1, 2, 2, 65, 3, 3, 4, 2];

            $masyvas3 = [
                0 => [
                    0 => '1 kabinetas',
                    1 => '2 kabinetas',
                    2 => '3 kabinetas',
                ],
                1 => [
                    0 => '4 kabinetas',
                    1 => '5 kabinetas',
                    2 => '6 kabinetas',
                ],
            ];
            echo '<ul>';
            //            sito aprasyme pakanka, kad istraukti VIENA mums rupiam elementa!
            echo '<li>' . $vardai[1] . '</li>';
            echo '<li>' . $masyvas1[5] . '</li>';
            echo '<li>' . $masyvas3[0][1] . '</li>';
            echo '<li>' . $masyvas3[1][2] . '</li>';
            echo '<tr>';
            echo '</table>'
            ?>
        </td>
    </tr>
</table>
<br>
<br>


<h1>Trecia uzduotis</h1>
<table border="1">
    <tr>
        <td>
            <?php


            echo '<table border="1">';
            $masyvas5 = [
                [
                    'marke' => 'Audi',
                    'model' => 'A6',
                    'kubatura' => 1995,
                    'metai' => 2016,
                ],
                [
                    'marke' => 'BMW',
                    'model' => 'M3',
                    'kubatura' => 2995,
                    'metai' => 2018,
                ],
                [
                    'marke' => 'BMW',
                    'model' => '320',
                    'kubatura' => 1999,
                    'metai' => 2017
                ]
            ];
            echo '<ul>';
            foreach ($masyvas5 as $auto) {
                echo $auto['marke'] . '</br>';
                echo '<li>' . $auto['model'] . '</li>';
                echo '<li>' . formatNumber($auto['kubatura'], '.cm3') . '</li>';
                echo '<li>' . formatNumber($auto['metai']) . '</li>';
                echo ' ' . '</br>';
            }
            echo '</ul>';
            //            sitas leidzia mums prideti kazkoki simboli ar simbolius prie mums norimu pmatyti elementu!
            function formatNumber($numb, $addString = '.m')
            {
                return $numb . ' ' . $addString . ' ';
            }

            echo '</ul>';
            echo '</table>';
            ?>
        </td>
    </tr>
</table>
<br>
<br>

<h1>Ketvirta uzduotis</h1>
<table border="1">
    <tr>
        <td>
            <?php
            echo '<table border="1">';
            $salys = [
                'Indija',
                'Kinija',
                'Japonija',
            ];

            foreach ($salys as $salis) {
                switch ($salis) {
                    case 'Indija':
                        echo 'Keliaujam pabut sventi.<br>';
//                        cia break nutraukia konkretaus zingsnio darba
//                    tuomet funkcija sukasi is naujo nuo pradziu
//                    ir automatiskai vykdo kita jai uzduota salyga
                        break;
                    case 'Kinija':
                        travelToChina();
                        break;
                    default:
                        echo 'Samsung.<br>';
                        break;
                }
            }
            function travelToChina()
            {
                echo '<ul>';
                echo '<li>' . 'Valgysim sunis' . '</li>';
            }

            echo '</ul>';
            echo '</table>';
            ?>
        </td>
    </tr>
</table>
<br>
<br>
<h1>Penkta uzduotis</h1>
<table border="1">
    <tr>
        <td>
            <?php
            echo '<table border="1">';
            $masyvas4 = [
                [
                    'vardas' => 'Petras',
                    'pavarde' => 'Petraitis',
                    'amzius' => 23,
                ],
                [
                    'vardas' => 'Jonas',
                    'pavarde' => 'Jonaitis',
                    'amzius' => 24,
                ],
                [
                    'vardas' => 'Tomas',
                    'pavarde' => 'Pavardenis',
                    'amzius' => 33,
                ],
                [
                    'vardas' => 'Vardas',
                    'pavarde' => 'Jonusas',
                    'amzius' => 28,
                ],
            ];

            $c = count($masyvas4);
            echo '<ul>';
            for ($i = 0; $i < $c; $i++) {
                echo '<li>' . $masyvas4[$i] . '</li>';
            }
            echo '</ul>';
            echo '</table>';
            ?>
        </td>
    </tr>
</table>
<br>
<br>

<h1>Šešta uzduotis</h1>
<table border="1">
    <tr>
        <td>
            <?php
            echo '<table border="1">';
            echo '<tr>';


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
                return $ilgis * $plotis; // Grazina dugno ploti
            }

            function apskaiciuotiSienuPlota($gylis, $ilgis)
            {
                return $gylis * $ilgis * 2;
            }

            function plytelesPlotis($ilgis, $plotis, $tarpas = 0)
            {
                return ($ilgis + $tarpas) * ($plotis + $tarpas);
            }


            echo 'Reikalina plyteliu: ' .
                plytelesBaseinui(3500, 1200, 400);

            echo '</ul>';
            echo '</table>';
            ?>
        </td>
    </tr>
</table>