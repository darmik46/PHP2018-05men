<h1>1 uzduotis</h1>
<table border="1">
    <tr>
        <td>
            <h1>PHP MySQL</h1>
            <?php
            //            cia yra susiejimas su MyphpSQL, visi privalomi pildyti laukai
            $host = 'localhost';
            $username = 'dariusM';
            $password = 'darmik47';
            //            dbname yra toks pat kaip name!
            $dbName = 'dariusM';
            $port = 3306;

            $db = mysqli_connect($host, $username, $password, $dbName, $port);

            if (!$db) {
//                su die nereikia papildomo echo, kad gautum ekrane duomenis
                die('Connection error:' . mysqli_connect_error());
            }
            echo 'Connected succesfully!';


            $sql = "CREATE TABLE IF NOT EXISTS `users` (
`id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
`email` VARCHAR (255) NOT NULL UNIQUE,
`username` VARCHAR (30) NOT NULL UNIQUE,
`password` VARCHAR (32) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE='InnoDB' CHARACTER SET utf8";
            mysqli_query($db, $sql);

            $sqlAddress = "CREATE TABLE IF NOT EXISTS `user addresses`
(`id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
`user id` INT(11) NOT NULL,
`address` TEXT NOT NULL,
PRIMARY KEY (`id`),
INDEX (`user_id`)
) ENGINE='InnoDB' CHARACTER SET utf8";
            mysqli_query($db, $sqlAddress);

            $sql1 = "INSERT INTO `users` (`email`, `username`, `password`)
VALUES (
'darius.mikelionis@gmail.com',
'dariusM',
MD5('kazkoksslaptazodis')
)
";
            mysqli_query($db, $sql1);

            //sitaip automatiskai galime pakeisti duomeni ar kelis duomenis
            $sql2 = "UPDATE `users` SET `username`= 'new_username', `email`='gogolis@gmail.com'
WHERE `id`=1";
            mysqli_query($db, $sql2);

            //sitas leidzia mums istraukti lauk duomenis ar duomeni is musu SQL bazes
            $sql3 = "SELECT *
                FROM `users`";

            //            sitaip apsiraso komanda duomenu grazinimui
            $users = mysqli_query($db, $sql3);

            //            cia yra naikinimo funkcija. Nenaikins tol, kol negaus komandos!
            $sql4 = "DELETE FROM `user` WHERE `id`>1";

            //            sita funkcija trina visas (ar visa) lenteles
            $sql5 = "DROP TABLE `users`";


            $sql6 = "SELECT users.*, user_addresses.address
            FROM `users`
            INNER JOIN `user_addresses` ON `users`.`id` = `user_addresses`.`user_id`
            WHERE `users`.`id` = 1";
            
            echo '<pre>';
            //            cia ASSOC leidzia garantuociau gauti laukiama duomeni
            foreach (mysqli_fetch_all($users, MYSQLI_ASSOC) as $user) {
                print_r($user);
            };




            echo '<br>';
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

<h1>3 uzduotis</h1>
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

<h1>4 uzduotis</h1>
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


<!--05-14 namu darbas-->
<h1>5 uzduotis</h1>
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
            $a = new CartProducts($data);
            $a->calculateTotal();

            class CartProducts
            {
                private $products;

                public function __construct($cartProducts)
                {
                    $this->products = $cartProducts->cart->products;
                }

                function calculateTotal()
                {
                    $total = 0;
                    foreach ($this->products as $product) {
                        $total = $total + ($product->price * $product->quantity);
                    }
                    echo 'Viso kaina:' . $total;
                }
            }

            echo '<br>';
            echo '</ul>';
            ?>
        </td>
    </tr>
</table>
<br>