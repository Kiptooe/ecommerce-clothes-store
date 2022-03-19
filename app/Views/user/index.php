<!DOCTYPE html>
<html>
<head>
    <title>Landing Page</title>
    <meta lang="en">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet" >
</head>    
    <body>
<?php include_once("navigation.php");?> 
        <header>
            <h1 style="font-size: 30px;">Your one stop shop for all clothing needs</h1>
            <h2>Clothes for women,men, kids that range from new-age, old-school, casual and official. You name it we've got it!</h2>
        </header>
        <div id="call-to-action">
         <div class="register-login" id="left">
         <p> To get all exclusive deals Register:</p>
         <a href="register"><input type="button" value="Register Now!" id="register-btn" class="btn btn-danger" ></a>   
         </div>   
         <div class="register-login" id="right">
         <p> Already a member ? Sign in to your account!</p>
         <a href="login"><input type="button" class="btn btn-danger" value="Sign-in" id="login-btn" ></a>   
         </div>
        </div>
        <main>  
        <h2>Categories</h2>
        <ol>
         <li><a href="#women">Women</a></li>
         <li><a href="#men">Men</a></li>
         <li><a href="#kids">Kids</a></li>
         <li><a href="#Pets">Pets</a></li>      
        </ol>  
       <?php include_once('footer.php'); ?>
       
    </body>
</html>