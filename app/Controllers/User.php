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
        
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];
        $user = [];
       
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
       
       /*echo "<pre>";
       print_r($user_role_data);
       
      /*  $session = session();
        $session->set('user',$user);
        return redirect()->to('homepage.php');
       //echo $credentials['email'];*/
    }

    public function createUser(){
        
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];
        $gender = $_POST['gender'];
        $role = $_POST['role'];

        echo $fname;
        exit();
    }

    public function homepage(){
        return view('main/homepage.php');
    }
}
