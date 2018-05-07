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
<form action="" method="post">
    <h1></h1>
<li><label for="name">Iveskite varda:</label>
<input type="text" name="name" value="">
<br>
<li><label for="name">Iveskite pavarde:</label>
<input type="text" name="surname" value="">
<br>

<!--        php naudpjamas ne iprastas button, bet type-submit. nes iprastasis button yra labiau del grozio,
o info pernbesimui i serveri butinas toks variantas-->

<i class="fas fa-ambulance"><input type="submit" value="Submit"></i>
</form>
</div>
</div>
</div>
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


 <?php

if (isset($_POST['name']) && !empty($_POST['name'])){
    echo "labas {$_POST['name']}!";
}

 if (isset($_POST['surname']) && !empty($_POST['surname'])){
     echo "{$_POST['surname']}!";
 }

?>
<br>
<br>
<br>
<br>
<?php

$variable=[];
$variable=['value', 'value1'];
$stringas='textas';
$integere=9876;
$float=9.098;
$bool=1;

echo 'is_numeric';
print_r(is_numeric($integere));
echo '<br>is_int';
print_r(is_int($integere));
echo '<br>is_string';
print_r(is_string($integere));
echo '<br>is_bool';
print_r(is_bool($integere));
?>
