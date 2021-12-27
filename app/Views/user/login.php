<!DOCTYPE html>
<html>
<head>
    <meta lang="en">    
    <title>Sign In Page Page</title>
    <link href="style.css" rel="stylesheet" >    
</head>
<body>
   <?php include_once('navigation.php');?>
    <main>
      <form method="POST" action="userlogin" enctype="multipart/form-data"><!--action='Controller/method'-->
        <fieldset>
         <legend>Sign In Here</legend>   
        <input type="email" id="cus-email" name="email" required placeholder="Enter your Email"><br><br>
        <input type="password" id="cus-pwd" name="pwd" required placeholder="Enter  password"><br><br>
        <input type="submit" name="submit" value="Sign In"> <a href="register.php"><p>New here? Click to sign up</p></a>
        </fieldset>
      </form>  
    </main>
    <h2>Categories</h2>
        <ol>
         <li><a href="#women">Women</a></li>
         <li><a href="#men">Men</a></li>
         <li><a href="#kids">Kids</a></li>   
        </ol>  
   <?php include_once('footer.php');?>
   
</body>
</html>