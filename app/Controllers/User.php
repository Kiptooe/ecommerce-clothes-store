<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\RoleModel;
use App\Models\CategoryModel;
use App\Models\SubcategoryModel;
use App\Models\ProductModel;

class User extends BaseController
{
    public function index()
    {
        //echo 'This is a user class';
        echo view('user/index.php');
    }
    public function show($page){

        // echo $page;exit();
        echo view('user/'.$page);
    }
   /* public function register($page){
        echo view('user/'.$page);
    }*/
    public function processLogin(){
        
        helper(['form','url']);

        $error = $this->validate([

            'email' => 'required|valid_email',
            'password' =>'required|min_length[4]'

        ]);
        if(!$error){
            echo view('user/login',['error' => $this->validator]);
        }else{

    
        $email = $_POST['email'];
        $pwd = $_POST['password'];
        
        $session = session();

        $user_model = new UserModel();
        $user_data = $user_model->get_user($email,$pwd);

        if($user_data==1){
            $session->setFlashData('email_error','Email is not registered');
            echo view('user/login');
        }elseif ($user_data==2){
            $session->setFlashdata('password_error','Password is wrong');
            echo view('user/login');
        }
        
        $ctmodel = new CategoryModel();
        $categories['categories'] = $ctmodel->asArray()->findAll();

        $session->set('user_details',$user_data);

       /*$role_model = new RoleModel();
       $user_role_data = $role_model->getRole($user_data);*/

       if($user_data['role_id']== 20 ){
           echo view('user/admin/admin');
       }else if($user_data['role_id']==22){
           echo view('user/buyer/buyer_navbar');
           echo view('user/buyer/buyer',$categories);
       }else if($user_data['role_id']==21){
           echo view('user/api/api_user');
       }
    }
       /*echo "<pre>";
       print_r($user_role_data);
       
      /*  $session = session();
        $session->set('user',$user);
        return redirect()->to('homepage.php');
       //echo $credentials['email'];*/
    }

    public function processRegistration(){
        
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
    public function logout(){
        $session = session();
        $session->destroy('user_details');
        echo view('user/index');
    }

    public function homepage(){
        return view('main/homepage.php');
    }

    // public function displayProducts($categoryid){
    //     $scmodel = new SubcategoryModel();
    //     $products['products'] = $scmodel->getProducts($categoryid);

    //     return view('main/homepage.php');
    // }
         public function displaySubcategories($categoryid){
         $scmodel = new SubcategoryModel();
         $subcategories['subcategories'] = $scmodel->getSubcategories($categoryid);

         echo view('user/buyer/buyer_navbar');
         echo view('user/buyer/subcategories',$subcategories);

     }

     public function displayProducts($subcategoryid){
        $pmodel = new ProductModel();
        $products['products'] = $pmodel->getProducts($subcategoryid);

        echo view('user/buyer/buyer_navbar');
        echo view('user/buyer/products',$products);

    }

}
