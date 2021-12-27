<?php
session_start();
if(isset($_SESSION['duplicate_email'])){
  $error = $_SESSION['duplicate_email'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta lang="en">    
    <title>Registration Page</title>
    <link href="style.css" rel="stylesheet" >    
</head>
<body>
  <?php include_once('navigation.php');?>
    <main>
      <form action="process_reg.php" method="post" enctype="multipart/form-data">
        <fieldset>
         <legend>Register Here</legend>   
        <input type="text" id="fname" name="fname" required  placeholder="Enter your First Name"><br><br>
        <input type="text" id="sname" name="sname" required placeholder="Enter your Last Name"><br><br>
        <input type="email" id="client-email" name="email" required placeholder="Enter your Email"><br><br>
        <input type="password" id="client-pwd" name="pwd" required placeholder="Enter  password"><br><br>
        <input type="submit" name="submit" value="Register"> <!--<a href="login.php"><p>  Already a member? Click to sign in</p></a>--><br>
        <?php if (isset($_GET["error"])){
     if($_GET["error"]="emptyinput"){
       
       echo "Fill all fields";
     }
     if($_GET["error"]="invalidemail"){
      echo "<p>Email already used, register with another</p>";
    }
    if($_GET["error"]="stmtfailed"){
      echo "Statement failed";
    }
    if($_GET["error"]="none"){
      echo " ";
    }
   }?>
        
        </fieldset>
      </form>  <!--How to display failed registration-->
          
    </main>
    <h2>Categories</h2>
        <ol>
         <li><a href="#women">Women</a></li>
         <li><a href="#men">Men</a></li>
         <li><a href="#kids">Kids</a></li>   
        </ol>  
  
   <?php include_once('footer.php'); ?>

</body>
</html>