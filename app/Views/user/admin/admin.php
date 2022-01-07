<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Admin Panel</title>
        <link href="style.css" rel='stylesheet'>
    </head>
<body>
<?php require('admin_navbar.php');
  $session = session();
  $session = \Config\Services::session();
  $success = $session->getFlashdata('editsuccess');
  echo '<div>'.$success.'</div><br><br>';

  $session = session();
  $session = \Config\Services::session();
  $success = $session->getFlashdata('deletesuccess');
  echo '<div>'.$success.'</div><br><br>';

?>
</body>
</html>