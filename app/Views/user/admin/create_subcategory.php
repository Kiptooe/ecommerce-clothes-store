<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Create sub-category page</title>
        <link rel="stylesheet" href="style.css"> 
    </head>
<body>
   <?php include('admin_navbar.php')?>
    <form action="AdminController/createsubcategory" method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend>Create sub-category</legend>
            <label for="subcategory">Enter Subcategory:</label><br><br>
            <select id="subcategory" name="subcategory">
            <option value="MenCasual">MenCasual</option>
            <option value="MenOfficial">MenOfficial</option>
            <option value="MenSports">MenSports</option>
            <option value="WomenCasual">WomenCasual</option>
            <option value="WomenOfficial">WomenOfficial</option>
            <option value="WomenSports">WomenSports</option>
            <option value="ChildrenCasual">ChildrenCasual</option>
            <option value="ChildrenOfficial">ChildrenOfficial</option>
            <option value="ChildrenSports">ChildrenSports</option>
            <option value="Dogs">Dogs</option>
            <option value="Cats">Cats</option>
            <option value="Others">Others</option>
            </select>
            <input type="submit" value="Create Sub-category!">
        </fieldset>
    </form>
</body>    
</html>