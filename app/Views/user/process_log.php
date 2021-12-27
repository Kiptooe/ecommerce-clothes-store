<?php 
require_once('functions.php');//Adds the function to get the data

$email = $_POST["email"];
$pwd = $_POST["pwd"];
$salt = "#!@!@!#";
$pwd = $salt.$pwd.$salt;
$encpwd = md5($pwd);

$sql = "SELECT * FROM client WHERE client_email = '$email' AND client_pwd = '$encpwd' ";

$user_information = getData($sql);//assigns the data returned by this function to user_information
  

if(sizeof($user_information)>0){//Checks is $user_information has any data
    session_start();
    $_SESSION["user"] = $user_information[0];//stores the user information in a session array
    header('Location:homepage.php'); //redirects to the home page
}else{
    header('Location:login.php?error = Error Logging In');
}
?>