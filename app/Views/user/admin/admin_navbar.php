<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Admin Panel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
             <!-- <li><a href='profile
             '><?php //echo 'Welcome'. ' '; echo $firstname ?></a></li>  -->
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
             <li>
            <form action='/purchases'>
             <select name="purchases" id="purchases">
                <option value="0">Select purchases per:</option>
                <option value="customers">Customers</option>
                <option value="gender">Gender</option>
                <option value="category">Category</option>
                <option value="subcategory">Subcategory</option>
                <option value="product">Product</option>
             </select></li>
            </form>
         </ul>
     </nav>   
</body>
