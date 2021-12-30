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
     <tr>
     <?php
     $session = session();
     $users = $session->get('users');
     for($index=0;$index!=count($users);$index++){
     ?>
    <td><?php echo $users[$index]["first_name"]; ?></td>
    <td><?php echo $users[$index]["last_name"]; ?></td>
    <td><?php echo $users[$index]["email"]; ?></td>
    <td><?php echo $users[$index]["role_id"]; ?></td>
    <td><?php echo $users[$index]["gender"]; ?></td>
    <td><a href="AdminController::editSingleUser/$users['email']">Edit</a></td>
    </tr>
    <?php
    echo '<br><br>';
    }?>
        </table>
    </body>
</html>