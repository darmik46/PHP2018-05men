<form class="1">
    <h1>Naujos dokumentines funkcijos</h1>

    <?php

    /**
     * @param $a
     * @param $b
     * @return mixed
     */
    function kazkokiaFunkcija($a = 3, $b = 7)
    {
        return $a + $b;
//    arba
//    $c=$a+$b;
//

    }

    ?>

    <?php

    function buyProducts($eggs = true)
    {
        $milk = 1;
        if ($eggs == true) {
            $milk = 10;
        }
        echo $milk;
    }

    buyProducts(false);

    //skirtingas lygybiu ir kitu prilyginamuju naudojimas apsprendzia
    //gaunamos informacijos tiksluma pagal uzduotus parametrus
    //==_ ===>=<==

    $number = 10;

    if ($number > 15) {
        echo 'tikrai taip';
    } elseif ($number > 5) {
        echo 'lyg ir taip';
    } else {
        echo 'tikrai ne';
    }
    ?>

    <br>
    <?php
    $prekesKiekis = 10;
    $norimaskiekis = 11;
    $galimaParduoti = true;
    if ($norimaskiekis <= $prekesKiekis && $galimaParduoti == true) {
        echo 'dedam i krepseli';
    } else {
        echo 'nededam';
    }
    ?>
</form>

<form class="2">
    <h1>Vardo parodymas</h1>
    <form method="post" action="">
        <h2>Prekes</h2>
        <input type="number" name="x" value=""><br>
        <input type="number" name="y" value=""><br>
        <button type="submit">Pirkimui</button>
    </form>
    <?php
    //Cia yra klaidu!!!!!!
    $prekesKiekis = 'y';
    $norimaskiekis = 'x';
    $prekePakeisime = true;

    $number = $_POST;
    if (isset ($number['x']) <= ($number['y'])) {
        echo 'Preke pakeisime';
    } elseif (isset ($number['x']) >= $number['y']) {
        echo 'negalime pakeisti';
    }

    ?>

    <br>
    <br>
    <?php

    define('PAVADINIMAS', 'puslapis');
    define('KIEKIS', 10);
    if (defined('PAVADINIMAS')) {
        echo PAVADINIMAS;
    } else {
        echo 'prasome irasyti pavadinimas';
    }
    echo '<br>';

    $norimasKiekis = 15;
    if (KIEKIS >= $norimasKiekis) {
        echo 'i krepseli';
    } else {
        echo 'tiek neturime';
    }
    ?>

    <br>
    <?php
    //masyvai aprasomi taip
    $masyvas1 = [
        'plauti indus',
        'valyti grindis',
        'nesti siuksles',
        'paserti kates'];


    //arba taip. cia skaicius simbolizuoja masyvo elemento indeksa
    $masyvas2 = [
        0 => 'plauti indus',
        1 => 'valyti grindis',
        2 => 'nesti siuksles',
        3 => 'paserti kates'];

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
        ]];

    $automobiliai1 = [
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


    //sita funckija masyva isveda i ekrana
    echo '<pre>';
    print_r($masyvas1);
    print_r($masyvas2);
    print_r($automobiliai);
    echo '</pre>';
    ?>

    <?php
    //leidzia mums grupuoti pagal atitinkamus kriterijus, galime nurodyti ir grupuojamos info
    // id bei kitus uzduotus variantus
    $prekes = [
        'sviestas',
        'duona',
        'batonas',
        'kefyras',
        'slyvos',
        'desras',
    ];
    echo '<pre>';
    print_r($prekes);
    print_r(array_chunk($prekes, 2));
    $arrayColumn = array_column($automobiliai, 'modelis', 'marke');
    print_r($arrayColumn);

    //sita funckija mums sujungia kelis masyvus i viena ir
    //leidzia isgrupuoti juose esancius duomenis pagal seka
    print_r(array_merge($automobiliai, $automobiliai1));
    var_dump(array_key_exists('6', $prekes));
    print_r(array_keys($arrayColumn));

    //sita funkcija is saraso eliminuoja PASKUTINI elementa
    array_pop($prekes);
    array_pop($prekes);

    //sitas pasalina elementa is priekio
    array_shift($prekes);
    print_r($prekes);
    array_push($prekes, 'duona');
    print_r($prekes);

    $prekiuKainos = [5, 4, 3, 8, 9, 7];
    print_r(array_sum($prekiuKainos));

    $prekes1 = ['duona', 'desra', 'duona', 'slyva'];
    print_r(array_unique($prekes1));


    //        sugrupuoja pagal abecele
    $vaisiai = ['obuolys', 'kriause', 'slyva', 'abrikosas'];
    sort($vaisiai);
    print_r($vaisiai);
    $arrayColumn = array_column($automobiliai, 'modelis', 'marke');
    print_r($arrayColumn);
    print_r($automobiliai[1]['marke']);


    echo '</pre>';
    ?>
</form>


<?php
echo '<pre>';
$masyvas = [[
    '1 kabinetas',
    '2 kabinetas',
    '3 kabinetas'
], '2-as aukstas' => [
    '4 kabinetas',
    '5 kabinetas',
    '6 kabinetas',
]
];

echo $masyvas[0][0];
echo $masyvas[0][1];
echo $masyvas[0][2];
echo $masyvas['2-as aukstas'][0];
echo $masyvas['2-as aukstas'][1];
echo $masyvas['2-as aukstas'][2];


//print_r(array_keys($masyvas));
print_r($masyvas);
echo '</pre>';

?>

<?php

$darbuotojai1 = [
    [
        'vardas' => 'Petras',
        'pavardė' => 'Petraitis',
        'amžius' => 23,
    ],
    [
        'vardas' => 'Jonas',
        'pavardė' => 'Jonaitis',
        'amžius' => 24,
    ]
];
$darbuotojai2 = [
    [
        'vardas' => 'Tomas',
        'pavardė' => 'Tomaitis',
        'amžius' => 23,
    ],
    [
        'vardas' => 'Zigmas',
        'pavardė' => 'Zigmaitis',
        'amžius' => 24,
    ]];

$visasSarasas= array_merge($darbuotojai1, $darbuotojai2);
echo '<pre>';
print_r(array_chunk($visasSarasas, 2));
echo '</pre>';
?>

<!--Pratesti uzduoti 2.
istraukti dalyviu sarasa taip kad masyvo elementas butu pavarde
 o reiksme vardas ir is gauto masyvo patikrinti ar egzistuoja
 kokia nors pasirinkta pavarde, jei taip, tada isvesti dalyvio varda,
  jei ne isvesti i ekrana praneisma kad dalyvis neegzistuoja.-->



