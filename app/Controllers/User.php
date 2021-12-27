<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\RoleModel;

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
        
       
        $user_model = new UserModel();
        $user_data = $user_model->get_user($email,$pwd);
       
        $session = session();
        $session->set('user_details',$user_data);

       /*$role_model = new RoleModel();
       $user_role_data = $role_model->getRole($user_data);*/

       if($user_data['role_id']== 20 ){
           echo view('user/admin/admin');
       }else if($user_data['role_id']==22){
           echo view('user/buyer/buyer');
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
            'role' => $_POST['role'],
            'password' => $_POST['password']

        );    

        $rolemodel = new RoleModel();
        $role_details = $rolemodel->getRoleId($user['role']);
        $user['role'] = $role_details['role_id'];

        $usermodel = new UserModel();
        $usermodel->createAccount($user);

        }
        
    }

    public function homepage(){
        return view('main/homepage.php');
    }
}
