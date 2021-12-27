<?php
    $session = session();
    $credentials = $session->get('user');//

    $fname = $credentials[0];
    $sname = $credentials[1];
    

?>
<!DOCTYPE html>
<html>
<head>
    <title>HomePage</title>
    <link href="style.css" rel="stylesheet">
</head>        
<body>
    <?php include_once('navigation.php') ?>

    <div id="welcome-user"><p><?php echo "Welcome your firstname is: ".$fname." Second name is:"." ".$sname;?><span id="logout"> <a  href="logout.php">Log out</a></span></p></div><!--Display log out far-right which changes on scroll/select-->
    <div id="homepage-h1">
    <h2>Dope clothes coming soon ... Watch out &#128524;</h>
    </div>
    <?php include_once('footer.php') ?>
</body>

</html>
