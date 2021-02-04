<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products table</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <h1>Products table</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Product ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Article</th>
            <th>Quantity</th>
            <th>Data Create</th>
            <th>Hided</th>
            <th></th>
        </tr>

        <?php
            include "CProducts.php";
            foreach (\CProducts\CProducts::getAllWithLimit(25) as $product) {
                if ($product["hided"]) {
                    continue;
                }

                echo "<tr>";
                echo "<th>" . $product["id"] . "</th>";
                echo "<th>" . $product["product_id"] . "</th>";
                echo "<th>" . $product["product_name"] . "</th>";
                echo "<th>" . $product["product_price"] . "</th>";
                echo "<th>".$product["product_article"] . "</th>";
                echo "<th>"
                    . "<a href='#' data-product-id=" . $product["id"] . " class='js-increase-product-quantity'>+</a>"
                    . "<span class='js-product-quantity'>"  . $product["product_quantity"]  . "</span>"
                    . "<a href='#' data-product-id=" . $product["id"] . " class='js-reduce-product-quantity'>-</a>"
                    . "</th>";
                echo "<th>" . $product["data_create"] . "</th>";
                echo "<th>" .  $product["hided"] . "</th>";
                echo "<th><a class='js-hide-row' data-product-id=" . $product["id"] . " href='#'>" . "HIDE" ."</a></th>";
                echo "</tr>";
            }
        ?>

    </table>
    <script type="text/javascript" src="/script.js"></script>
</body>
</html>
