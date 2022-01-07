<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Create sub-category page</title>
        <link rel="stylesheet" href="style.css"> 
    </head>
<body>
   <?php include('admin_navbar.php');
       $session = \Config\Services::session();
       $success = $session->getFlashdata('success'); 
       echo '<div>'.$success.'</div>';

   ?>
    <form action="Admincreatesubcategory" method="POST" enctype="multipart/form-data">

        <fieldset>
            <legend>Create sub-category</legend>
            <label for="subcategory">Enter Subcategory:</label>
            <input id="subcategory" name="subcategory" placeholder="Enter subcategory name"><br><br>
            <input type="submit" value="Create Sub-category!">
        </fieldset>
    </form>
</body>    
</html>