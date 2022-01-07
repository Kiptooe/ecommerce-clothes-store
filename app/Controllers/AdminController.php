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
        $scmodel = new SubcategoryModel();
        $subcategories['subcategories'] = $scmodel->findAll();
        echo view('user/admin/'.$p,$subcategories);
    }
    public function editSingleUser($userid){

        $usermodel = new UserModel();
        $user['user_data'] = $usermodel->getSingleUser($userid);
       
        echo view('user/admin/admin_navbar');
        echo view('user/admin/edit_user',$user);

    }
    public function editSingleSubcategory($subcategoryid){

        $subcategorymd = new SubcategoryModel();
        $subcategory['subcategory'] = $subcategorymd->asArray()->where('subcategory_id',$subcategoryid)->first();
     
        echo view('user/admin/admin_navbar');
        echo view('user/admin/edit_subcategory',$subcategory);

    }
    public function createAccount(){
        // echo 'Good progress';

        helper(['form','url']);

        $error = $this->validate([

            'firstname' => 'required|max_length[30]',
            'lastname' => 'required|max_length[30]',
            'password' => 'required|min_length[4]'

        ]);

        if(!$error){

            echo view('user/register',['error' => $this->validator]);
            
        }else{

        $user = array(

            'first_name' => $_POST['firstname'],
            'last_name' => $_POST['lastname'],
            'gender' => $_POST['gender'],
            'email' => $_POST['email'],
            'role_id' => $_POST['role'],
            'password' => $_POST['password']

        );    

        $rolemodel = new RoleModel();
        $role_id = $rolemodel->getRoleId($user['role_id']);
        $user['role_id'] = $role_id;

        $usermodel = new UserModel();
        $usermodel->createAccount($user);

        }
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

        $subcategorydetails = array( 'subcategory_name' => $_POST['subcategory'],'category_id' => 4);
        $create_subcategory = new SubcategoryModel();

        if(preg_match("/Men/",$subcategorydetails['subcategory_name'])){
            $category_id = 1;
        }elseif (preg_match("/Women/",$subcategorydetails['subcategory_name'])){
            $category_id = 2;
        }elseif (preg_match("/Children/",$subcategorydetails['subcategory_name'])){
            $category_id = 3;
        }else {
            $category_id = 4;
        }
        $subcategorydetails['category_id'] = $category_id;
        //or put conditional in category model, getCateg_oryId()
        $create_subcategory->save($subcategorydetails);

        $session = \Config\Services::session();
        $session->setFlashdata('success','Subcategory created successfully');

        echo view('user/admin/create_subcategory');

    }
    public function editSubCategory(){
        $subcategory_id = $_POST['subcategory_id'];

        $subcategorydetails = array( 'subcategory_name' => $_POST['subcategory_name'],'category_id' => $_POST['category_id']);
        $create_subcategory = new SubcategoryModel();
    
        $create_subcategory->Update($subcategory_id,$subcategorydetails);

        $session = \Config\Services::session();
        $session->setFlashdata('editsuccess','Subcategory edited successfully');

        echo view('user/admin/admin');

    }
    public function deleteSubcategory($subcategory_id){
        $scmodel = new SubcategoryModel();
        $status['is_deleted'] = 0;
        $scmodel->Update($subcategory_id,$status);

        $session = \Config\Services::session();
        $session->setFlashdata('deletesuccess','Subcategory deleted successfully');

        echo view('user/admin/admin');

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
    public function fetchAllUsers(){

    $usermodel = new UserModel();    
    $users = $usermodel->findAll();
    $session = session();
    $session->set('users',$users);
    
    echo view('user/admin/admin_navbar');
    echo view('user/admin/view_users');

    }
    public function editUser(){
    
        helper(['form','url']);

        $error = $this->validate([

            'firstname' => 'required|max_length[30]',
            'lastname' => 'required|max_length[30]'
        ]);

        $user_id = $_POST['user_id'];

        $usermodel = new UserModel();

        
        if(!$error){
            $user['user_data'] = $usermodel->where('user_id',$user_id);
            $user['error'] = $this->validator;
            echo view('user/admin/edit_user',$user);   
        }else{

            $user =array(
               'first_name' => $_POST['firstname'],
               'last_name' => $_POST['lastname'],
               'email' => $_POST['email'],
               'gender' => $_POST['gender'],
               'role_id' => $_POST['role_id']
            );
            $usermodel = new UserModel();
          
            $usermodel->update($user_id,$user);
            
            $session = \Config\Services::session();
            
            $session->setFlashdata('success','User data updated');

            echo view('user/admin/admin_navbar');
            echo view('user/admin/view_users');
        }

    }

    public function fetchAllSubcategories(){
        $subcategory = new SubcategoryModel();
        $subcategories['subcategories'] = $subcategory->findAll();
       
        echo view('user/admin/admin_navbar');
        echo view('user/admin/view_subcategories',$subcategories);
    }

}
