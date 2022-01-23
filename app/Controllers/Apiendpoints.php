<?php
namespace App\Controllers;

use App\Models\UserModel;
use App\Models\ProductModel;
use App\Models\OrderModel;
use App\Models\CategoryModel;
use App\Models\SubcategoryModel;

use CodeIgniter\RESTful\ResourceController;

class Apiendpoints extends ResourceController
{
    
    protected $format = 'json';

    public function users()
    {
        $usersModel = new UserModel();
        $users = $usersModel->findAll();
        return $this->respond($users);
    }

    public function usersByGender($gender)
    {
   
        $usersModel = new UserModel();
        $users = $usersModel->where('gender', $gender)->find();
        return $this->respond($users);
    }
    public function usersById($user_id)
    {
        $usersModel = new UserModel();
        $users = $usersModel->where('user_id', $user_id)->find();
        return $this->respond($users);
    }
    public function usersByEmail($email)
    {
        $usersModel = new UserModel();
        $users = $usersModel->where('email', $email)->findAll();
        return $this->respond($users);
    }

    public function products()
    {
        $prodmodel = new ProductModel();
        $products = $prodmodel->findAll();
        return $this->respond($products);
    }

    public function productById($productid){

        $prodmodel = new ProductModel();
        $product = $prodmodel->where('product_id',$productid)->find();

        return $this->respond($product);
    }

    public function productByName($name){

        $prodmodel = new ProductModel();
        $product = $prodmodel->where('product_name',$name)->find();

        return $this->respond($product);
    }

    public function productBySubcategory($subcategory){

        $scmdl = new SubcategoryModel();
        $subcategory_data = $scmdl->where('subcategory_name',$subcategory)->find();

        $pmdl = new ProductModel();
        $products = $pmdl->where('subcategory_id',$subcategory_data['subcategory_id']);

        return $this->respond($products);
    }
    public function subcategoriesBycategory($category){

        $cmdl = new CategoryModel();
        $category_data = $cmdl->$this->asArray()->where('category_name',$category)->find();

        $scmdl = new SubcategoryModel();
        $subcategories = $scmdl->where('category_id',$category_data['category_id']);

        return $this->respond($subcategories);
    }


}
    // public function transaction()
    // {
    // $ordermodel=new OrderModel();
    // $orders=$ordermodel->findAll();
    // return $this->respond($orders);
    // }
    // public function transactionDetails()
    // {
    // $ordersmodel= new CartModel();
    // $order=$ordersmodel->findAll();
    // return $this->respond($order);
    // }    