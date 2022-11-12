<?php
require('../controllers/product_controller.php');
$product = list_products_controller()
?>

<html>
    <body>
        <form action="product_functions.php" method="post">
            Search <input type = "text" name="search"><br>

            Column: <select name="column">
                <option value="name">Name</option>
                <option value="age">Age</option>
                <option value="gender">Gender</option>
            </select><br>

            <input type = "submit">
        </form>
    </body>
</html>