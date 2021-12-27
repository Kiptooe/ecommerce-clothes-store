<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Create a User </title>
        <link href="style.css" rel='stylesheet'>
    </head>
 <body>

     <?php include('admin_navbar.php');?>

<form action="AdminController/createuser" method="POST" enctype="multipart/form-data">

    <fieldset>
     <legend>Create User</legend>   
    <input name="fname" type="text" placeholder="Enter First name" ><br><br>
    <input name="lname" type="text" placeholder="Enter Last name"><br><br>
    <input name="email" type="email" placeholder="Enter email"><br><br>
    <input name="pwd" type="password" placeholder="Enter Password"><br><br>
    <label for='gender-female'>Female</label>
    <input id='gender-female' name="gender" type="radio" value="Female">
    <label for='gender-male'>Male</label>
    <input id='gender-male' name="gender" type="radio" value="Male"><br><br>
    <input name="role" type="text" placeholder="Enter role"><br><br>

    <input type="submit" value="Register!">
</fieldset>
</form>
 </body>   
</html>