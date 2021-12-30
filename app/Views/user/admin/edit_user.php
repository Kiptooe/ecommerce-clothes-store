<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Edit a User </title>
        <link href="style.css" rel='stylesheet'>
    </head>
 <body>

     <?php include('admin_navbar.php');?>

<form action="AdminController/edituser" method="POST" enctype="multipart/form-data">

    <fieldset>
     <legend>Edit User</legend>   
    <input name="firstname" type="text" placeholder="Enter First name"  value="<?php echo $user_data['first_name']?>" ><br><br>
    <input name="lastname" type="text" placeholder="Enter Last name" value="<?php echo $user_data['last_name']?>"><br><br>
    <input name="email" type="email" placeholder="Enter email" value="<?php echo $user_data['email']?>" ><br><br>
    <input name="password" type="password" placeholder="Enter Password" ><br><br>
    <label for='gender-female'>Female</label>
    <input id='gender-female' name="gender" type="radio" value="Female"
    <?php if($user_data['gender']=='female'){echo 'selected';}?>
    >
    <label for='gender-male'>Male</label>
    <input id='gender-male' name="gender" type="radio" value="Male"
    <?php if($user_data['gender']=='male'){echo 'selected';}?>
    ><br><br>
    <label for="role">Select Role:</label>
    <select name="role" id="role">
        <option <?php if($user_data['role_id']==20){echo 'selected';}?>value="Admin">Administrator</option>
        <option <?php if($user_data['role_id']==22){echo 'selected';}?>value="Buyer">Buyer</option>
        <option <?php if($user_data['role_id']==21){echo 'selected';}?> value="ApiUser">Api User</option>
    </select><br><br>
    <input type="submit" value="Register!">
</fieldset>
</form>
 </body>   
</html>