<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>
            Create a product
        </title>
    </head>
<body>
    <?php
    include('admin_navbar.php');
    ?>

    <form action="AdminController/createproduct" method="POST" enctype="multipart/form-data" >
        <fieldset>
            <legend>Create a product</legend>
        <input type="text" name="product_name" placeholder="Enter name of the product" required><br><br>
        <input type="text" name="product_description" placeholder="Enter description of the product" required><br><br>
        <input type="text" name="product_image" placeholder="Enter name of the product image" required><br><br>
        <input type="text" name="product_price" placeholder="Enter price of the product" required><br><br>
        <input type="text" name="available_quantity" placeholder="Enter available quantity" required><br><br>
        <label for="sub_category">Select Product SubCategory</label>
        <select name="sub_category" id="sub_category">

        <option value="MenCasual">Men Casual</option>
        <option value="MenOfficial">Men Official</option>
        <option value="MenSports">Men Sports</option>
        <option value="WomenCasual">Women Casual</option>
        <option value="WomenOfficial">Women Official</option>
        <option value="WomenSports">Women Sports</option>
        <option value="ChildrenCasual">Children Casual</option>
        <option value="ChildrenOfficial">Children Official</option>
        <option value="ChildrenSports">Children Sports</option>
        <option value="Dogs">Dogs</option>
        <option value="Cats">Cats</option>
        <option value="Others">Others</option>
        
        </select><br><br>
        <label for="date_created">Enter Date created</label>
        <input type="date" id="date_created" name="created_at"><br><br>
        <input type="text" name="added_by" hidden value="<?php echo $user_details['user_id']; ?>"><br><br>

        <input type="submit" value="Create Product">

         </fieldset>
    </form>
</body>
</html>