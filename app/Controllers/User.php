<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\RoleModel;
use App\Models\CategoryModel;
use App\Models\SubcategoryModel;
use App\Models\ProductModel;
use App\Models\PaymentModel;
use App\Models\OrderModel;
use App\Models\OrderdetailsModel;
use App\Models\WalletModel;

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
    public function showProduct($productid){
        $pmodel = new ProductModel();
        $product['product'] = $pmodel->getProduct($productid);

        echo view('user/buyer/buyer_navbar');
        echo view('user/buyer/singleproduct',$product);

    }
    public function createOrder(){

        date_default_timezone_set('Africa/Nairobi');

        $quantity = $_POST['quantity'];
        $orderdetails['product_id'] = $_POST['product_id'];
        $orderdetails['product_price'] = $_POST['product_price'];
        $order['order_amount'] = ($orderdetails['product_price'] * $quantity);
        $order['paymenttype_id'] = $_POST['payment_id'];
        
        $session = session();
        $user = $session->get('user_details');
        $order['customer_id'] = $user['user_id'];
        $order['order_status'] = 'pending';
        $order['created_at'] = date(DATE_ATOM,time());
        $ordermodel = new OrderModel();
        $ordermodel->save($order);

        $builder = $ordermodel->builder();

        $created_order = $ordermodel->orderBy('order_id','desc')->first();// Possibility of assigning incorrect order if concurrent orders are made at similar time period

        $orderdetails['order_id'] = $created_order['order_id'];

        $orderdetails['orderdetails_total'] = $order['order_amount'];

        $orderdetails['order_quantity'] = $quantity;
        $orderdetails['created_at'] = date(DATE_ATOM,time());

        $orderdetmdl = new OrderdetailsModel();

        $orderdetmdl->save($orderdetails);

        $wmdl = new WalletModel();

        $user_id = $user['user_id'];

        $wallet = $wmdl->findWallet($user_id);

        $wallet_id = $wallet['wallet_id'];
        //modify date
    
        if($wallet['amount_available']<=0){
            echo'<script> alert(Wallet balance is 0)</script>';
          
        }else{
            $wallet['amount_available'] = $wallet['amount_available'] - $order['order_amount'];

            $account['amount_available'] =  $wallet['amount_available'];
            $account['updated_at'] = date(DATE_ATOM,time());
            // print_r($account);
            // exit;

            $wmdl->update($wallet_id,$account);//Modify to record transaction first before updating wallet ? update wallet balance

            $order_id = $created_order['order_id'];

            $purchase['order_status'] = 'paid';
            $purchase['updated_at'] = date(DATE_ATOM,time());

            $ordermodel->update($order_id,$purchase);

            echo '<script> alert("Purchase successfull, welcome again!"); </script>';

            $ctgrymdl = new CategoryModel();

            $categories['categories'] = $ctgrymdl->findAll();

            echo view('user/buyer/buyer_navbar');
            echo view('user/buyer/buyer',$categories);


        }
        

    }

}
