<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>JS su JQ</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
          crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">

<body>
<header>
    <div class="row">
        <div class="container">
            <div class="col-12 col-md-8 offset-md-2">
                <div class="color">
                    <form method="post" action="prekes.php">
                        <input type="text" name="vardas" value="">
                        <input type="text" name="pavarde" value="">
                        <button type="submit">Vardas, pavarde</button>
                    </form>
                    <br>
                    <form method="post" action="prekes.php">
                        <input type="number" name="kaina" value="">
                        <input type="number" name="suma" value="">
                        <button type="submit">Sudetis</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <h1></h1>
    <h1></h1>
    <h1></h1>
<div class="row">
    <form method="post" action="skaiciuoti">
        <input type="number" name="number1" value="">
        <input type="number" name="number2" value="">
        <button type="submit">Sudetis</button>
    </form>
<br>
    <br>
    <form method="post" action="skaiciuoti.php">
        <input type="text" name="zodis1" value="">
        <input type="text" name="zodis2" value="">
        <button type="submit">sakinys</button>
    </form>
</div>
</header>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
        crossorigin="anonymous"></script>
<script src="js/script.js"></script>
</body>
</html>

