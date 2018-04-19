<html>
<head>
    <title>Nice Shop</title>
</head>

<body>
    <h1>Welcome to shopping !</h1>
    <ul>
        <?php
            $json = file_get_contents('http://back-end');
            $obj = json_decode($json);
            $products = $obj->products;
            foreach ($products as $product) {
                echo "<li>$product</li>";
            }
        ?>
    </ul>
</body>
</html>