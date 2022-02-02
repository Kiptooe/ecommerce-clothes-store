<!DOCTYPE html>
<html>
    <head>
        <title>Single product</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
<body>
    <p><?php echo$product['product_name'] ;?></p><br><br>
    <p><?php echo$product['product_price'] ;?></p><br><br>
    <p><?php echo$product['product_description'] ;?></p>

    <form action="createorder" method="post">
    <input type="hidden" name="product_id" value="<?php echo $product['product_id'] ;?>"><br><br>
    <input type="hidden" name="product_price" value="<?php echo $product['product_price'] ;?>"><br><br>
    <label for="payment">Select payment method:</label>
    <select name="payment_id" id="payment">
    <option value="1">E-Wallet</option>
    </select><br><br><!--Add dynamic payment method select-->
    <label for="quantity">Update quantity:</label>
    <input id="quantity" type="number" name="quantity" value="1"><br><br>
    <input type="submit" value="Purchase">
    </form>
</body>    
</html>