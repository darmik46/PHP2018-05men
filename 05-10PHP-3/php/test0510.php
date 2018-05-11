<?php

echo '<ul>';
$masyvas4=['Elementas1', 'Elementas2'];
$masyvas5=['Elementas3', 'Elementas4', 'Elementas5'];

function merge2arrays($array1, $array2){
    return array_merge($array1, $array2);
    }
    print_r(merge2arrays($masyvas4, $masyvas5));
echo '</ul>';
?>


<?php
echo '<ul>';

$zodis = [];

function helloWorld(){
for ($i = 0; $i < 10; $i++);
};
echo 'Hello world'.'<br>';
echo '</ul>';
?>


<table border="1">
    <tr>
        <td>
            <?php
            //paprasciausias budas sudvigubinti turimas reiksmes
            $masyvas1 = [4, 2, 65, 3, 2];
            function doubleArrayValue($array)
            {
                {
                    foreach ($array as $key => $value) {
                        $value = $value * 2;
                        echo sprintf('<li>%s</li>', $value);
                    }
                    return $array;
                };
            }
            echo '<pre>';
            print_r(doubleArrayValue($masyvas1));
            echo '</pre>';
            ?>
        </td>
    </tr>
</table>

<br>
<br>
<table border="1">
    <tr>
        <td>
            <?php
            echo '<table border="1">';
            echo '<tr>
<th>sarasas</th>
</tr>';
            $masyvas2 = [
                '1 daiktas',
                '2 daiktas',
                '3 daiktas',
                '4 daiktas',
                '5 daiktas',
                '6 daiktas',
            ];
            $c = count($masyvas2);
            echo '<ul>';
            for ($i = 0; $i < $c; $i++) {
                echo '<li>' . $masyvas2[$i] . '</li>';
            }
            echo '</ul>';
            echo '</table>';
            ?>
        </td>
    </tr>
</table>
<br>
<br>
<table border="1">
    <tr>
        <td>
            <?php
            $masyvas3 = [
                '1 daiktas',
                '2 daiktas',
                '3 daiktas',
                '4 daiktas',
                '5 daiktas',
                '6 daiktas',
            ];
            $c = count($masyvas3);
            echo '<ul>';
            function firstLast($array)
            {
//    cia SUKURIAMAS TUSCIAS MASYVAS
                $ret = [
                    array_shift($array),
                    array_pop($array),
                ];
                return $ret;
            }
            echo '<pre>';
            print_r(firstLast($masyvas3));
            echo '</pre>';
            ?>
        </td>
    </tr>
</table>

<br>
<br>
<table border="1">
    <tr>
        <td>
            <ul>
                <li>mano
                <li>namas
                <li>mazas
            </ul>
            <select name="miestas">
                <option value="Kaunas">Kaunas</option>
                <option value="Vilnius">Vilnius</option>
                <option value="Birzai">Birzai</option>
            </select>
        </td>
    </tr>
</table>
<!--cia aprasomi ciklai for - masyvu elementu eiliskumo deliojimas ir pan-->
<table border="1">
    <tr>
        <td>
            <?php
            $masyvas = [
                '1 kabinetas',
                '2 kabinetas',
                '3 kabinetas',
                '4 kabinetas',
                '5 kabinetas',
                '6 kabinetas',
            ];

            //cia i tai yra fiksuotas elementas pagal nutylejima, kuris nuskaitineja masyvo reiksmes
            for ($i = 0; $i <= 5; $i++) {
                echo 'Labas' . '<br>';
            }

            $c = count($masyvas);
            echo '<ul>';
            for ($i = 0; $i < $c; $i++) {
                echo '<li>' . $masyvas[$i] . '</li>';
            }
            echo '</ul>';

            //sudaro salygas atvaizduoti masyva dviem budais, nurodant jo seka ir pan
            $c = count($masyvas);
            echo '<select name="kabinetai">';
            for ($i = 0; $i < $c; $i++) {
                echo '<option value=".$i.">' . $masyvas[$i] . '</option>';
                echo '</select>';
            }
            ?>
        </td>
    </tr>
</table>

<?php

$automobiliai = [
    [
        'id' => 23,
        'marke' => 'audi',
        'modelis' => '100',
        'kubiku' => 122,
        'metai' => 2015,
    ],
    [
        'id' => 72,
        'marke' => 'bmw',
        'modelis' => '325',
        'kubiku' => 152,
        'metai' => 2014,
    ],
    [
        'id' => 23,
        'marke' => 'mb',
        'modelis' => 'cl',
        'kubiku' => 123,
        'metai' => 2013,
    ],
    [
        'id' => 72,
        'marke' => 'honda',
        'modelis' => 'crv',
        'kubiku' => 142,
        'metai' => 2011,
    ]];

$c = count($automobiliai);
echo '<ul>';
for ($i = 0; $i < $c; $i++) {
    echo '<li>' . $automobiliai[$i]['marke'] . '</li>';
}
echo '</ul>';
?>

<?php
echo '<ul>';
$masyvas = [
    0 => [
        '1 kabinetas',
        '2 kabinetas',
        '3 kabinetas'
    ], 1 => [
        '4 kabinetas',
        '5 kabinetas',
        '6 kabinetas',
    ]
];
$c = count($masyvas);
echo '<ul>';
//cia pasirasomi busimi indekso i pokyciai - eiliskumo didejimas ir pan
for ($i = 0; $i < $c; $i++) {
    $k = count($masyvas[$i]);
    for ($j = 0; $j < $k; $j++) {
        echo '<li>' . $masyvas[$i][$j] . '</li>';
    }
};
?>


<!--cia aprasomi while ciklai, jiems nera svarbus masyvo elementu eiliskumas ir pan-->
<?php
$masyvas = [
    '1 kabinetas',
    '2 kabinetas',
    '3 kabinetas',
    '4 kabinetas',
    '5 kabinetas',
    '6 kabinetas',
];
$i = 0;
echo '<ul>';
while ($i < count($masyvas)) {
    echo '<li>' . $masyvas[$i] . '</li>';
    $i++;
}

echo '<ul>';
//sitas istrina mums nereikalinga indekso reiksme, kad nesikartotu statinis jam uzduotas skaicius
unset ($i);

//sita formuluota leidzia is saraso pasalinti viena ar kelis nereikalingus elementus
unset ($masyvas[2], $masyvas[5]);
echo '<pre>';
print_r($masyvas);

?>

<?php
//sitas aprasymas mums leidzia keliu lygmenu masyvus sujungti i viena sarasa
$i = 0;
echo '<ul>';
$masyvas = [
    0 => [
        '1 kabinetas',
        '2 kabinetas',
        '3 kabinetas'
    ], 1 => [
        '4 kabinetas',
        '5 kabinetas',
        '6 kabinetas',
    ]
];

while ($i < count($masyvas)) {
    $j = 0;
    while ($j < count($masyvas[$i])) {
        echo '<li>' . $masyvas[$i][$j] . '</li>';
        $j++;
    }
    $i++;
}
?>
<?php

$i = count($masyvas);
$masyvas = [
    '1 kabinetas',
    '2 kabinetas',
    '3 kabinetas',
    '4 kabinetas',
    '5 kabinetas',
    '6 kabinetas',
];

echo '<ul>';
while ($i > 0) {
    echo '<li>' . $masyvas[$i - 1] . '</li>';
    $i--;
}
echo '<ul>';

?>

<?php
$automobiliai = [
    0 => [
        'id' => 23,
        'marke' => 'audi',
        'modelis' => '100',
        'kubiku' => 122,
        'metai' => 2015,
    ],
    1 => [
        'id' => 72,
        'marke' => 'bmw',
        'modelis' => '325',
        'kubiku' => 152,
        'metai' => 2014,
    ],
];

echo '<ul>';
foreach ($masyvas as $value) {
//    echo '<li>'.$value.'</li>';

//    sitaip galima aprasyti auksciau esancia funkcija,
// tik ji leidzia aprasyti tiek teksta, tiek skaicius,
// tik kai rasomi skaicia, po % zenklu reikia irasyti d raide
    echo sprintf('<li>%s</li>', $value);
}
echo '</ul>';

//sita funkcija leidzia mums atvaizduoti ne tik paciu elementu seka,
// bet ir nurodant ju indeksini numeri (nuo 0 iki x)
foreach ($masyvas as $key => $value) {
    echo '<li>' . $key . '=' . $value . '</li>';
}
echo '</ul>';
?>

<?php

// sita funkcija leidzia selekcionuoti masyva, bet itin svarbu tinkamai sudeti skliaustus!
echo '<select name="masyvas">';
foreach ($masyvas as $key => $value) {
    echo '<option value="' . $key . '">' . $value . '</option>';
};
echo '</select>';
?>
<?php

foreach ($masyvas as &$value) {
    $value = $value;

}
echo '<pre>';
print_r($masyvas);
echo '</pre>';
?>

<?php

$automobiliai = [
    0 => [
        'id' => 23,
        'marke' => 'audi',
        'modelis' => '100',
        'kubiku' => 122,
        'metai' => 2015,
    ],
    1 => [
        'id' => 72,
        'marke' => 'bmw',
        'modelis' => '325',
        'kubiku' => 152,
        'metai' => 2014,
    ],
];

echo '<table border="1">';
echo '<tr>
<th>id</th>th>
<th>marke</th>
<th>modelis</th>
<th>kubiku</th>
<th>metai</th>
</tr>';

foreach ($automobiliai as &$automobilis) {
    echo '<tr>';

    foreach ($automobilis as $tekstas) {
        echo '<td>' . $tekstas . '</td>';
    }
}

echo '</table>';
?>

<?php


?>




