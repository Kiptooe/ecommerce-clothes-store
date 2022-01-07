<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Edit a User </title>
        <link href=" <?php echo base_url()?> public/style.css" rel='stylesheet'>
    </head>
 <body>
<?php 

$validation = \Config\Services::validation();

?>
<form action="Adminedituser" method="POST" enctype="multipart/form-data">

    <fieldset>
     <legend>Edit User</legend>   
    <input name="firstname" type="text" placeholder="Enter First name"  value="<?php echo $user_data['first_name']?>" ><br><br>
    <?php
        if($validation->getError('firstname')){
          echo '<div class= "alert alert-danger mt-2">'
          .$validation->getError('firstname').
          '</div>';
        }
        ?>
    <input name="lastname" type="text" placeholder="Enter Last name" value="<?php echo $user_data['last_name']?>"><br><br>
    <?php
        if($validation->getError('lasstname')){
          echo '<div class= "alert alert-danger mt-2">'
          .$validation->getError('lasstname').
          '</div>';
        }
        ?>
    <input name="email" type="email" placeholder="Enter email" value="<?php echo $user_data['email']?>" ><br><br>
    <?php
        if($validation->getError('email')){
          echo '<div class= "alert alert-danger mt-2">'
          .$validation->getError('email').
          '</div>';
        }
        ?>
    <label for='gender-female'>Female</label>
    <input id='gender-female' name="gender" type="radio" value="Female"
    <?php if($user_data['gender']=='female'){echo 'checked';}?>
    >
    <label for='gender-male'>Male</label>
    <input id='gender-male' name="gender" type="radio" value="Male"
    <?php if($user_data['gender']=='male'){echo 'checked';}?>
    ><br><br>
    <label for="role">Select Role:</label>
    <select name="role_id" id="role">
        <option <?php if($user_data['role_id']==20){echo 'selected';}?>value="<?php echo $user_data['role_id']?>">Administrator</option>
        <option <?php if($user_data['role_id']==22){echo 'selected';}?>value="<?php echo $user_data['role_id']?>">Buyer</option>
        <option <?php if($user_data['role_id']==21){echo 'selected';}?> value="<?php echo $user_data['role_id']?>">Api User</option>
    </select><br><br>
    <!-- <label for="password">Edit password</label>
    <input type="text" id="password" name="password" value="<?php// echo $user_data['password'];?>"><br><br> -->
    <input type="hidden" name="user_id" value="<?php echo $user_data['user_id']?>">
    <input type="submit" value="Register!">
</fieldset>
</form>
 </body>   
</html>