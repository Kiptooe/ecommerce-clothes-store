<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\RoleModel;
use App\Models\CategoryModel;
use App\Models\SubcategoryModel;
use App\Models\ProductModel;

class AdminController extends BaseController
{
    public function index()
    {
       // return view('welcome_message.php');
    echo "Welcome";
    }
    public function show($p)
    {
        echo view('user/admin/'.$p);
    }
    public function createUser(){
        // echo 'Good progress';
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];
        $gender = $_POST['gender'];
        $role = $_POST['role'];

        $gri = new RoleModel();
        $createuser = new UserModel();

        $role_details = $gri->getRoleId($role);

        $createuser->createUser($fname,$lname,$email,$pwd,$role_details['role_id']);        
    }

    public function createRole(){
        $role = $_POST['role'];
        $create_role = new RoleModel();

        $create_role->createRole($role);
    }

    public function createCategory(){
        $category = $_POST['category'];
        $create_category = new CategoryModel();

        $create_category->createCategory($category);
    }

    public function createSubCategory(){
        $subcategory = $_POST['subcategory'];
        $create_subcategory = new SubcategoryModel();

        if(preg_match("/Men/",$subcategory)){
            $categoryid = 1;
        }elseif (preg_match("/Women/",$subcategory)){
            $categoryid = 2;
        }elseif (preg_match("/Children/",$subcategory)){
            $categoryid = 3;
        }else {
            $categoryid = 4;
        }
        //or put conditional in category model, getCategoryId()
        $create_subcategory->createSubCategory($categoryid,$subcategory);
    }
    public function createProduct(){
        
        $product = array(
            'product_name' => $_POST['product_name'],
            'product_description' => $_POST['product_description'],
            'product_image' =>$_POST['product_image'],
            'product_price' =>$_POST['product_price'],
            'available_quantity' =>$_POST['available_quantity'],
            'subcategory_id' => $_POST['sub_category'],
            'created_at' =>$_POST['created_at'],
            'added_by' =>$_POST['added_by']
        );
      
        $sc = new SubcategoryModel();
        $subcategory_id = $sc->getSubCategoryId($product['subcategory_id']);

        $product['subcategory_id'] = $subcategory_id;

        $cp = new ProductModel();
        $cp->createProduct($product);


    }

}