<h1>1 uzduotis</h1>
<table border="1">
    <tr>
        <td>
            <?php
            echo '<pre>';

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


            $sql = "SELECT regions.title AS region_title,
shops.title AS shop_title
FROM regions
JOIN shops ON regions.id = shops.region_id";

            $query = $dht->prepare($sql);
            $query->execute();

            //echo '<pre>';
            //print_r($query->fetchAll(PDO::FETCH_OBJ));
            //echo '</pre>';
            echo '<ul>';
            foreach ($query->fetchAll(PDO::FETCH_OBJ) as $row) {
                echo '<li>' . $row->shop_title .
                    '___Priklauso regionui___' .
                    $row->region_title . '</li>';
            }
            echo '</ul>';
            echo '</pre>';

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
            echo '<pre>';

            $sql1 = "SELECT 
CONCAT(shops.title, '___Priklauso regionui___', regions.title) AS row_line
FROM regions
JOIN shops ON regions.id = shops.region_id";

            $query1 = $dht->prepare($sql1);
            $query1->execute();
            echo '_________';
            echo '<ul>';

            foreach ($query1->fetchAll(PDO::FETCH_OBJ) as $row) {
                echo '<li>' . $row->row_line . '</li>';
            }
            echo '</ul>';
            echo '</pre>';

            ?>
        </td>
    </tr>
</table>

<h1>3 uzduotis</h1>
<table border="1">
    <tr>
        <td>
            <?php
            echo '<pre>';

            $sql2 = "SELECT regions.id, regions.title,
COUNT(shops.id) AS shop_count
FROM regions
JOIN shops ON regions.id = shops.region_id
GROUP BY regions.title";

            $query2 = $dht->prepare($sql2);
            $query2->execute();
            echo '<ul>';
            foreach ($query2->fetchAll(PDO::FETCH_OBJ) as $row){
                echo '<li>' . $row->title . '__turi__'. $row->shop_count.'</li>';
            }

            echo '</ul>';
            echo '</pre>';

            ?>
        </td>
    </tr>
</table>
