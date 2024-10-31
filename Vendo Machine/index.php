<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendo Machine</title>
</head>

<body>

    <h2>Vendo Machine</h2>

    <form method="post">
        <fieldset class="fset">
            <legend>Products:</legend>
            <label>
                <input type="checkbox" name="product[]" id="prdCoke" value="Coke">
                Coke - ₱15
            </label>
            <br>
            <label>
                <input type="checkbox" name="product[]" id="prdSprite" value="Sprite">
                Sprite - ₱20
            </label>
            <br>
            <label>
                <input type="checkbox" name="product[]" id="prdRoyal" value="Royal">
                Royal - ₱20
            </label>
            <br>
            <label>
                <input type="checkbox" name="product[]" id="prdPepsi" value="Pepsi">
                Pepsi - ₱15
            </label><br>
            <label>
                <input type="checkbox" name="product[]" value="Mountain Dew" id="prdMd" value="Mountain Dew">
                Mountain Dew - ₱20
            </label>
            <br>
        </fieldset>


        <fieldset class="fset">
            <legend>Options:</legend>
            <label for="size">
                Size:
            </label>
            <select name="size">
                <option value="regular">
                    Regular
                </option>
                <option value="upsize">
                    Up-Size (add ₱5)
                </option>
                <option value="jumbo">
                    Jumbo (add ₱10)
                </option>
            </select>
            <label for="quantity">
                Quantity:
            </label>
            <input type="number" name="quantity" min="0" value="0" id="qntty-sec">
            <Button name="checkout" id="checkout">Checkout</Button>
        </fieldset>
    </form>

</body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['checkout']) && isset($_POST['product'])) {

        $arrPrd = $_POST['product'];
        $quantity = isset($_POST['quantity']) ? $_POST['quantity'] : 0;
        $size = isset($_POST['size']) ? $_POST['size'] : 'regular';

        $productPrices = [
            "Coke" => 15,
            "Sprite" => 20,
            "Royal" => 20,
            "Pepsi" => 15,
            "Mountain Dew" => 20
        ];

        $sizeAdjustments = [
            "regular" => 0,
            "upsize" => 5,
            "jumbo" => 10
        ];

        $totalItems = 0;
        $totalPrice = 0;

        if ($quantity > 0) {

            echo "<hr><b>Purchase Summary:</b><br>";

            foreach ($arrPrd as $product) {
                
                $basePrice = $productPrices[$product];
                $sizeAdjustment = $sizeAdjustments[$size];
                $totalPricePerItem = ($basePrice + $sizeAdjustment) * $quantity;
                
                $totalItems += $quantity; 
                $totalPrice += $totalPricePerItem; 
                
                echo "<ul><li><label>{$quantity} ";
                echo ($quantity > 1) ? "pieces" : "piece";
                echo " of {$size} {$product} amounting to ₱{$totalPricePerItem}</label></li></ul>";

            }

            echo "<hr><b>Total Items:</b> {$totalItems}<br>";
            echo "<b>Total Price:</b> ₱{$totalPrice}";
        } else {
            echo "<hr>Quantity is zero. Please enter a valid quantity.";
        }

    } else {
        echo "<hr>No Selected Product, Try Again.";
    }
}
?>