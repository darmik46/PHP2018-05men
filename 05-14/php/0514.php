<h1>1 savarankiska uzduotis</h1>
<table border="1">
    <tr>
        <td>
            <?php
            $obj = new stdClass();
            $obj->darbas1 = (object)[];

            $obj = new stdClass();
            $obj->darbas1 = 'Skalbimas';
            $obj->darbas2 = 'Valymas';
            $obj->darbas3 = 'Lyginimas';

            echo '<pre>';
            print_r($obj);
            echo '<br>';
            echo '</pre>';
            echo '</ul>';
            ?>
        </td>
    </tr>
</table>
<br>
<h1>2 savarankiska uzduotis</h1>
<table border="1">
    <tr>
        <td>
            <?php

            $data = (object)[
                'cart' => (object)[
                    'products' => [
                        (object)[
                            'id' => 23,
                            'title' => 'Duona',
                            'price' => 1.23,
                            'quantity' => 1,
                        ],
                        (object)[
                            'id' => 43,
                            'title' => 'Suris',
                            'price' => 3.65,
                            'quantity' => 1,
                        ],
                    ],
                    'total' => 4.88,
                ],
                'customer' => (object)[
                    'name' => 'Petras',
                    'lastname' => 'Petraitis',
                    'email' => 'petras@petraitis.com',
                ],
            ];

            echo $data->customer->name;
            echo '<br>';
            echo $data->customer->lastname;
            echo '<br>';
            echo $data->customer->email;

            echo '</pre>';
            echo '</ul>';
            ?>
        </td>
    </tr>
</table>
<br>
<h1>3 savarankiska uzduotis</h1>
<!--cia kazkas negerai! ne taip atsivaizduoja duomenys-->
<table border="1">
    <tr>
        <td>
            <?php
            $data = (object)[
                'cart' => (object)[
                    'products' => [
                        (object)[
                            'id' => 23,
                            'title' => 'Duona',
                            'price' => 1.23,
                            'quantity' => 1,
                        ],
                        (object)[
                            'id' => 43,
                            'title' => 'Suris',
                            'price' => 3.65,
                            'quantity' => 1,
                        ],
                    ],
                    'total' => 4.88,
                ],
                'customer' => (object)[
                    'name' => 'Petras',
                    'lastname' => 'Petraitis',
                    'email' => 'petras@petraitis.com',
                ],
            ];
            echo '<pre>';
            $a = new cartProducts($data->cart->products);
            $a->printList();


            class cartProducts
            {
                private $products;

                public function __construct($products)
                {
                    $this->products = $products;
                }

                function printList()
                {
                    foreach ($this->products as $product) {
                        echo $product->id . '<br>';
                        echo $product->title . '<br>';
                        echo $product->price . '<br>';
                        echo $product->quantity . '<br>';
                    }
                }
            }

            echo '</pre>';
            echo '</ul>';
            ?>
        </td>
    </tr>
</table>
<br>

<h1>4 savarankiska uzduotis</h1>
<table border="1">
    <tr>
        <td>
            <?php

            echo '<pre>';

            $file = 'data.json';
            $a = new JsonToObject($file);
            $a->readDataAndSave();
            $a->printData();

            class JsonToObject
            {
                private $fileNameString;
                private $objectData;

                public function __construct($filename)
                {
                    $this->fileNameString = $filename;
                }

                function readDataAndSave()
                {
                    $content = file_get_contents($this->fileNameString);
                    $convertedData = json_decode($content);
                    $this->objectData = $convertedData;
                }

                function printData()
                {
                    print_r($this->objectData);
                }

            }

            echo '<br>';
            echo '</pre>';
            echo '</ul>';
            ?>
        </td>
    </tr>
</table>
<br>

<h1>1 uzduotis</h1>
<table border="1">
    <tr>
        <td>
            <?php
            //objektu kurimas irfunkcionavimas
            //            cia array yra masyvas

            $array = [
                0 => 'Petras',
                1 => 'Jonas',
                2 => (object)[
                    'vardas3' => 'Antanas',
                ]
            ];
            //            objekt _ jau musu objektas, kuris apims masyvo reiksmingumus.
            // objektai yra klasifikuojami - ju atveju dibama su klasemis.
            $obj = new stdClass();
            $obj->auto1 = 'Petras';
            $obj->vardas2 = 'Jonas';
            $obj->mas = $array;

            echo '<pre>';
            print_r($array);
            echo $array[0];
            echo $array[1];
            echo '<br>';

            print_r($obj);
            echo $obj->mas[1];
            echo '<br>';
            echo $obj->mas[2]->vardas3;
            echo '<br>';
            echo '<br>';
            echo '<br>';

            $list = (object)[
                0 => 'duona',
                1 => 'desra',
                2 => 'suris',
            ];
            print_r($list);

            echo '</pre>';
            echo '</ul>';
            ?>
        </td>
    </tr>
</table>
<br>
<h1>2 uzduotis</h1>
<table border="1">
    <tr>
        <td>
            <?php
            //cia aprasoma galimybe is masyvo 'issimti' objektus, pateikti ju sarasa.
            $data = (object)[
                'auto1' => 'BMW',
                'auto2' => 'Audi',
                'auto3' => 'MB',
            ];

            $data1 = new stdClass();
            $data1->auto1 = 'BMW';
            $data1->auto2 = 'Audi';
            $data1->auto3 = 'MB';

            echo '<pre>';
            print_r($data);
            print_r($data1);
            echo '</pre>';

            echo $data->auto1;
            echo '<br>';
            echo $data->auto2;
            echo '<br>';
            echo $data->auto3;
            echo '<br>';

            echo '</ul>';
            ?>
        </td>
    </tr>
</table>
<br>

<h1>3 uzduotis</h1>
<table border="1">
    <tr>
        <td>
            <?php
            echo '<ul>';
            $data1 = new stdClass();
            $data1->auto1 = 'BMW';
            $data1->auto2 = 'Audi';
            $data1->auto3 = 'MB';


            foreach ($data1 as $auto) {
                echo $auto . '<br>';
            }
            foreach ($data1 as $autoKey => $autoValue) {
                echo $data1->$autoKey . '<br>';
            }
            echo '</ul>';
            ?>
        </td>
    </tr>
</table>
<br>
<h1>4 uzduotis</h1>
<table border="1">
    <tr>
        <td>
            <?php
            //            taip atvaizduojamos klases. lauztiniu skls viduje aprasoma visa veiksmams butina informacija

            class Automobile
            {
                public function __construct()
                {
                    $this->autos = (object)[
                        (object)['model' => 'BMW',
                            'marke' => '350'],
                        (object)['model' => 'Audi',
                            'marke' => '100',
                        ]
                    ];
                }

                function printModel()
                {
                    foreach ($this->autos as $auto) {
                        //            sitas rodys TIK MODELI
                        echo $auto->model . '<br>';
                    }
                }

                function printMarke()
                {
                    foreach ($this->autos as $auto) {
                        echo $auto->marke . '<br>';
                    }
                }
            }

            $a = new Automobile;
            $a->printModel();
            $a->printMarke();
            //            situo budu gauname visus musu turimus duomenis
            //vien issaukiant musu susikurat kintamajai, prilyginta turimai klasei
            print_r($a);

            ?>
        </td>
    </tr>
</table>

<h1>5 uzduotis</h1>
<table border="1">
    <tr>
        <td>
            <?php
            $autos = (object)[
                (object)[
                    'model' => 'BMW',
                    'marke' => '3',
                ],
                (object)[
                    'model' => 'Audi',
                    'marke' => 'A3',
                ],
            ];
            $a = new Autos($autos);
            $a->printModel();
            $a->printMarke();
            print_r($a->getAutosObject());

            class Autos
            {
                private $autos;

                public function __construct($autos)
                {
                    $this->autos = $autos;
                }

                function printModel()
                {
                    foreach ($this->autos as $auto) {
                        echo $auto->model . '<br>';
                    }
                }

                function printMarke()
                {
                    foreach ($this->autos as $auto) {
                        echo $auto->marke . '<br>';
                    }
                }

                function getAutosObject()
                {
                    return $this->autos;
                }
            }

            ?>
        </td>
    </tr>
</table>

<h1>6 uzduotis</h1>
<table border="1">
    <tr>
        <td>
            <?php
            $auto1 = (object)[
                'model' => 'BMW',
                'marke' => '3',
            ];
            $auto2 = (object)[
                'model' => 'Audi',
                'marke' => 'A3',
            ];
            $a = new Automobil();
            $a->getData();
            echo '<br>';
            $a->setData($auto1);
            echo '<br>';
            $a->getData();
            echo '<br>';
            $a->setData($auto2, 'antras');
            echo '<br>';
            $a->getData();
            echo '<br>';
            $a->printModel();

            class Automobil
            {
                private $autos;

                public function __construct()
                {
                    $this->autos = (object)[];
                }

                function setData($data, $index = 'pirmas')
                {
                    $this->autos->$index = $data;
                }

                function getData()
                {
                    print_r($this->autos);
                }

                function printModel()
                {
                    foreach ($this->autos as $auto) {
                        echo $auto->model . '<br>';
                    }
                }
            }

            ?>
        </td>
    </tr>
</table>