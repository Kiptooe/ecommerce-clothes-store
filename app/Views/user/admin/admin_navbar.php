<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Admin Panel</title>
        <link href="style.css" rel='stylesheet'>
    </head>
<body>
    <?php
     $session = session();
     $user_details = $session->get('user_details');
     $firstname = $user_details['first_name'];
     
     ?><nav>
         <ul>
             <li><a href='logout'>Logout</li>
             <li><a href='profile
             '><?php echo 'Welcome'. ' '; echo $firstname ?></a></li> 
             <li><a href="createrole">Create Role</a></li>
             <li><a href='editrole'>Edit Role</a></li> 
             <li><a href="createuser">Create User</a></li>
             <li><a href='edituser'>Edit User</a></li>
             <li><a href='createcategory'>Create Category</a></li>
             <li><a href='editcategory'>Edit Category</a></li>
             <li><a href='createsubcategory'>Create Sub-category</a></li>
             <li><a href='editsubcategory'>Edit Sub-category</a></li>
             <li><a href='createproduct'>Create Product</a></li>
             <li><a href='editproduct'>Edit Product</a></li>
         </ul>
     </nav>   
</body>
