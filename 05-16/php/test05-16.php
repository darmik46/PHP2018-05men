<h1>1 uzduotis</h1>
<table border="1">
    <tr>
        <td>
            <?php
            //            prisijungimas prie duombazes!!
            try {
                $username = 'dariusM';
                $pass = 'darmik47';

                $dht = new PDO(
                    'mysql:host=localhost:3306; dbname=dariusM',
                    $username,
                    $pass
                );
                echo "Connected";
            } //            klaidos galimybes matymo funkcija
            catch (PDOException $exception) {
                echo "Error!" . $exception->getMessage();
            }
            //            cia aprasoma uzklausa busimam duomenu apdorojimo vykdymui
            $sql = "SELECT*FROM users";
            $query = $dht->prepare($sql);
            $query->execute();


            echo '<pre>';
            //            cia fetch_obj sukonkretina musu norimus duomenis pagal uzklausa
            print_r($query->fetchALL(PDO::FETCH_OBJ));
            echo '<br>';
            echo '</pre>';


            $userId = 33;

            $query1 = $dht->prepare("
            SELECT * 
            FROM users
            WHERE id= :user_id"
            );

            $query1->bindValue(
                ':user_id',
                $userId,
                PDO::PARAM_INT
            );

            $query1->execute();
            echo '<pre>';
            print_r($query1->fetch(PDO::FETCH_OBJ));
            echo '</pre>';


            $email = 'darius.mikelionis@gmail.com';

            $query2 = $dht->prepare(
                "SELECT users. *, .user_addresses.address 
                FROM users
            LEFT JOIN user_addresses 
            ON users.id=user_addresses.user_id
            WHERE users.id= :user_id
            AND users.email = :email
            ");

            $query2->bindValue(
                ':user_id',
                $userId,
                PDO::PARAM_INT
            );

            $query2->bindValue(
                ':email',
                $email
            );
            echo '<pre>';
            print_r($query2->fetch(PDO::FETCH_OBJ));
            echo '</pre>';


            //cia nurodome, is kokios lenteles mes duomenis imame- ji vadinasi nauja0516.
            $query3 = $dht->prepare(
                "SELECT 
* FROM nauja0516
ORDER BY title ASC
");
            $query3->execute();
            echo '<pre>';
            print_r($query3->fetchAll(PDO::FETCH_OBJ));
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
