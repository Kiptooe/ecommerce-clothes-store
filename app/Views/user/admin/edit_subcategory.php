<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Create sub-category page</title>
        <link rel="stylesheet" href="style.css"> 
    </head>
<body>
<?php
       $session = \Config\Services::session();
       $success = $session->getFlashdata('success'); 
       echo '<div>'.$success.'</div>';

   ?>
    <form action="Admineditsubcategory" method="POST" enctype="multipart/form-data">

        <fieldset>
            <legend>Edit sub-category</legend>
            <input type="text"  name="subcategory_name" value= "<?php echo $subcategory['subcategory_name']; ?> " placeholder="Enter subcategory name"><br><br>
            <input type="text"  name="category_id" value= "<?php echo $subcategory['category_id'];?>" placeholder="Enter category Id "><br><br>
            <input type="hidden" name="subcategory_id" value= "<?php echo $subcategory['subcategory_id'];?>" ><br><br>    
            <input type="submit" value="Edit Sub-category!">
        </fieldset>
    </form>
</body>    
</html>