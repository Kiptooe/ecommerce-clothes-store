<!DOCTYPE html>
<html>
<head>
    <meta lang="en">    
    <title>Registration Page</title>
    <link href="style.css" rel="stylesheet" >    
</head>
<body>
  <?php include_once('navigation.php');?>
  <?php
  $validation = \Config\Services::validation();
  ?>
    <main>
      <form action="user-registration" method="post" enctype="multipart/form-data">
        <fieldset>
         <legend>Register Here</legend>   
        <input type="text" id="firstname" name="firstname" required  placeholder="Enter your First Name"><br><br>
        <?php
        if($validation->getError('firstname')){
          echo '<div class= "alert alert-danger mt-2">'
          .$validation->getError('firstname').
          '</div>';
        }
        ?>
        <input type="text" id="lastname" name="lastname" required placeholder="Enter your Last Name"><br><br>
        <?php if($validation->getError('lastname')){

          echo '<div class= "alert alert-danger mt-2">'
          .$validation->getError('lastname').
          '</div>';
        }
        ?>
        <label for="male">Male</label>
        <input id="male" type="radio" name="gender" value="Male">
        <label for="female">Female</label>
        <input id="female" type="radio" name="gender" value="Female"><br><br>
        <input type="email" id="client-email" name="email" required placeholder="Enter your Email"><br><br>
        <?php
        if($validation->getError('email')){
          echo '<div class= "alert alert-danger mt-2">'
          .$validation->getError('email').
          '</div>';
        }
        ?>
        <label for="role">Enter Role</label>
        <select name="role" id="role">
          <option value="ApiUser">Api User</option>
          <option value="Buyer">Buyer</option>
        </select><br><br>

        <input type="password" id="clientpassword" name="password" required placeholder="Enter password"><br><br>
        <?php
        if($validation->getError('password')){
          echo '<div class= "alert alert-danger mt-2">'
          .$validation->getError('password').
          '</div>';
        }
        ?>
        <input type="submit" name="submit" value="Register"> <!--<a href="login.php"><p>  Already a member? Click to sign in</p></a>--><br>        
        </fieldset>
      </form>  <!--How to display failed registration-->
          
    </main>
    <h2>Categories</h2>
        <ol>
         <li><a href="#women">Women</a></li>
         <li><a href="#men">Men</a></li>
         <li><a href="#kids">Kids</a></li>
         <li><a href="#pets">Pets</a></li>   
        </ol>  
  
   <?php include_once('footer.php'); ?>

</body>
</html>