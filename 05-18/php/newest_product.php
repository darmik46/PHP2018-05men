<?php

require_once 'bootstrap.php';

use Shop\Models\Product;

?>

<ul>
    <li><a href="index.php">Pagrindinis</a></li>
    <li><a href="all_products.php">Visi produktai</a></li>
        <li><a href="newest_product.php">Naujausi</a></li>
    <li><a href="add_product.php">Nauja preke</a></li>
</ul>

<?php
$productsClass = new Product($conn);

$products = $productsClass->getProducts(null, 'id', 'DESC')
    ->fetchAll(PDO::FETCH_OBJ);
?>

<ul>
    <?php
    foreach ($products as $product) {
        echo '<li>' . $product->title .'</li>';
    }
    ?>
</ul>