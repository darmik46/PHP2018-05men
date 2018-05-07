

<?php
include_once ('skaiciuoti.php');
$numbers = $_POST;
if (isset($numbers['number1']) && isset($numbers['number2'])) {
    $sum = $numbers['number1'] + $numbers['number2'];
    echo $sum;
}
?>

<!--zodziams jungti naudojamas taskas! o formule - ta pati kaip ir skaiciu jungimui-->
<?php
include_once ('skaiciuoti.php');
$zodziai = $_POST;
if (isset($zodziai['zodis1']) && isset($zodziai['zodis2'])) {
    $sak = $zodziai['zodis1'] . $zodziai['zodis2'];
    echo $sak;
}
?>

.
