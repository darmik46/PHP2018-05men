
<!--zodziams jungti naudojamas taskas! o formule - ta pati kaip ir skaiciu jungimui-->
<?php
$zodziai = $_POST;
if (isset($zodziai['vardas']) && !isset($zodziai['pavarde'])) {
    $sak = $zodziai['vardas'] . $zodziai['pavarde'];
    echo '<br>'.$sak;
}
?>

<?php
$numbers = $_POST;
if (isset($numbers['kaina']) && !isset($numbers['suma'])) {
    $sum = $numbers['kaina'] + $numbers['suma'];
    echo '<br>'."Jums truksta {$_POST['sum']}!";
}
?>


