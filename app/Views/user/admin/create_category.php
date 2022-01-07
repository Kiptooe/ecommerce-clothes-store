<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title> Create category</title>
        <link rel="stylesheet" href="style.css">
    </head>
<body>
<?php include('admin_navbar.php')?>
    <form action="Admincreatecategory" method="POST" enctype="multipart/form-data">
<fieldset>
    <legend>Create Product category</legend>
    <label for="category">Enter category name: </label>
    <input type="text" id="category" name="category" required><br><br>
    <input type="submit" value="Create Category!">
</fieldset>
</form>
</body>    
</html>