<?php
require_once 'bootstrap.php';

use Shop\Models\Product;

$productslass = new Product($conn);
$productId = $_GET['product_id'];

if (isset ($_POST['submit_button'])) {
    $data=[
        'title'=> $_POST['title'],
        'description'=> $_POST['description'],
        'price'=> $_POST['price'],
        'quantity'=> $_POST['quantity'],
    ];
$productsClass->updateProduct($productId, $data);
header('Location: http://05-18.com/all_products.php');
}
    else{
        $product = $productsClass->getById($productId)
            ->fetch(PDO::FETCH_OBJ);
    }

?>

<h2>Edit product</h2>
<form action="" method="post">
    <label for="title">Pavadinimas</label>
    <input type="text" name="title" value="<?php echo $product->title; ?>">
    <br>
    <label for="description">Aprasymas</label>
    <textarea name="description" value=""><?php echo $product->description; ?></textarea>
    <br>
    <label for="price">Kaina</label>
    <input type="number" name="price" step="0,01" value="<?php echo $product->price; ?>">
    <br>
    <label for="quantity">Kiekis</label>
    <input type="number" name="quantity" step="1" value="<?php echo $product->quantity; ?>">
    <br>
    <input type="submit" value="Saugoti">
</form>