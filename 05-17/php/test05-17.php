<h1>1 uzduotis</h1>
<?php
if (isset($_COOKIE['logged_in']) && $_COOKIE['logged_in']==true){
    echo 'You are logged in!';
    ?>
    <a href="Logout.php">Logout</a>
<?php

//    sitas istrina uzdeta riboto galiojimo COOKIE
//    unset($_COOKIE['logged_in']);

} else {
?>
<table border="1">
    <tr>
        <td>
            <form action="" method="post">
                <label for="username">Username</label>
                <input type="text" name="username" value="">
                <br>
                <label for="pass">Password</label>
                <input type="password" name="pass" value="">
                <br>
                <input type="submit" name="submit_login" value="Prisijungti">
            </form>

            <?php
            }
           
            try {
                $username = 'dariusM';                $pass = 'darmik47';

                $dht = new PDO(
                    'mysql:host=localhost:3306; dbname=dariusM',
                    $username,
                    $pass
                );
            } catch (Exception $exception) {
                echo "Error!" . $exception->getMessage();
            }

            if (isset($_POST['submit_login'])) {
                $sql = "SELECT *
    FROM users
    WHERE username= :username AND password= :password";
                $query = $dht->prepare($sql);
                $query->bindValue(':username', $_POST['username']);
                $query->bindValue(':password', md5($_POST['pass']));
                $query->execute();
                $result = $query->fetch(PDO::FETCH_OBJ);
                echo '<pre>';
                print_r($result);
                echo '</pre>';

                if (!empty($result)) {
                    setcookie('logged_in', true, time() + 86400);
                    header('Location: http://05-17.eu/test05-17.php');
                }
            }
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
              
            echo '<pre>';

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
