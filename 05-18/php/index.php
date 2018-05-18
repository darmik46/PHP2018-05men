
        <?php

        require_once 'bootstrap.php';

        use Shop\Models\Product;

        ?>

        <ul>
            <li><a href="index.php">Pagrindinis</a></li>
            <li><a href="all_products.php">Visi produktai</a></li>
            <li><a href="newest_product.php">Nauji produktai</a></li>
            <li><a href="add_product.php">Ikelti produkta</a></li>
        </ul>

        <?php
        $productClass = new Product($conn);

        $products = $productClass->getProducts()
            ->fetchAll(PDO::FETCH_OBJ);

        ?>

        <?php
        foreach ($products as $product) {
            echo '<td>' .
                $product->title . '' . $product->price .
                '</td>';
        }
        ?>


