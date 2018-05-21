<h1>1 uzduotis</h1>
<?php

    ?>

    <?php


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




            echo '<pre>';



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



            echo '<pre>';



            echo '<br>';
            echo '</pre>';
            echo '</ul>';
            ?>
        </td>
    </tr>
</table>
<br>
