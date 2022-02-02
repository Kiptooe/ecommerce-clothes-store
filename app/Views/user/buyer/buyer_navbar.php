<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <?php
     $session = session();
     $user_details = $session->get('user_details');
     $firstname = $user_details['first_name'];
     
     ?><nav> 
         <ul>
             <li>
            <a href="purchases">My Purchases</a>
            </li>
             <li>
                 <a href='logout'>Logout</a>
            </li>
              <li>
             <?php

             echo ' <a href="buyer">'.$firstname.'</a> ';
             
             ?>
            </li> 
         </ul>
     </nav>   
        
    </body>
</html>