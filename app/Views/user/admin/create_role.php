<!DOCTYPE html>
<html>
    <head>  
    <meta charset='utf-8'>
    <title>Create Role page</title>
    <link rel="stylesheet" href="style.css">
    </head>   
<body>
<?php include('admin_navbar.php');?>
    <form action="AdminController/createrole" method='POST' enctype='multipart/form-data'>
<fieldset>
    <legend>Create Role</legend>
    <label for="role"> Enter role name </label><br><br>
    <input type="text" id='role' name='role' required><br><br>
    <input type="submit" value="Create Role!">
</fieldset>
    </form>
</body>
</html>    