<?php
namespace App\Models;

use CodeIgniter\Model;
use App\Models\CategoryModel;
use App\Models\ProductModel;

class SubcategoryModel extends Model{

     protected $table = 'tbl_subcategories';
     protected $primaryKey = 'subcategory_id';
     protected $allowedFields = ['subcategory_id','subcategory_name','category_id','is_deleted'];   

     public function getAllSubCategory(){
   
     return $this->findAll();

    }
    public function getProducts($category_id){
       
        $products = $this->asArray()->join('tbl_subcategories.category_id = tbl_categories.category_id','category_id')
                                    ->join('tbl_subcategories.subcategory_id = tbl_product.subcategory_id','subcategory_id','INNERJOIN')
                                    ->where('category_id',$category_id)
                                    ->findAll();
                print_r($products);
                exit();                    
    }

    public function getSubCategories($category_id){
       $sbcategories = $this->asArray()->where('category_id',$category_id)->findAll();
        return $sbcategories;
   
       }

    public function getSubCategoryId($subcategory){
    $user = $this->asArray()
                 ->where('subcategory_name',$subcategory)
                 ->first();
                 
    return $user['subcategory_id'];
    }



}