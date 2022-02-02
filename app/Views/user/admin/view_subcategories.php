<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Table  of all subcategories</title>
    </head>
    <body>

        <table class="table table-bordered table-striped table-responsive" >
     <tr>
         <th>Subcategory Name</th><th>Category Id</th><th>Edit</th><th>Delete</th>
     </tr>   

     <?php
     
     for($index=0;$index!=count($subcategories);$index++){
         if($subcategories[$index]['is_deleted'] != 1){
    echo '
    <tr>   
    <td>'.$subcategories[$index]["subcategory_name"].'</td>
    <td>'.$subcategories[$index]["category_id"].'</td>
    <td><a href="subcategoryedit-'.$subcategories[$index]['subcategory_id'].'">Edit</a></td>
    <td><a href="subcategorydelete-'.$subcategories[$index]['subcategory_id'].'">Delete</a></td>
    </tr>';
    
      } }
    ?>
        </table>
    </body>
</html>