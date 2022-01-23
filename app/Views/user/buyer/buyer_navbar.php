<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <?php
     $session = session();
     $user_details = $session->get('user_details');
     $firstname = $user_details['first_name'];
     
     ?><nav> 
         <ul>
             <li><a href='logout'>Logout</li>
              <li>
             <?php echo 'Welcome'. ' '; echo $firstname ?></li> 
         </ul>
     </nav>   
        
    </body>
</html>