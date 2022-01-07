<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Table  of all users</title>
    </head>
    <body>
        <table>
     <tr>
         <th>Firstname</th><th>Lastname</th><th>Email</th><th>Gender</th><th>Role</th><th><th>Edit</th><th>Delete</th>
     </tr>   

     <?php
     $session = session();
     $session = \Config\Services::session();
     $success = $session->getFlashdata('success');
     echo '<div>'.$success.'</div><br><br>';
     $users = $session->get('users');
     for($index=0;$index!=count($users);$index++){
    echo '
    <tr>   
    <td>'.$users[$index]["first_name"].'</td>
    <td>'.$users[$index]["last_name"].'</td>
    <td>'.$users[$index]["email"].'</td>
    <td>'.$users[$index]["role_id"].'</td>
    <td>'.$users[$index]["gender"].'</td>
    <td><a href="useredit-'.$users[$index]['user_id'].'">Edit</a></td>
    <td><a href="userdelete-'.$users[$index]['user_id'].'">Delete</a></td>    
    </tr>';
    
    }
    ?>
        </table>
    </body>
</html>