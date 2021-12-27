<?php
namespace App\Models;

use CodeIgniter\Model;

class SubcategoryModel extends Model{

     protected $table = 'tbl_subcategories';
     protected $primaryKey = 'subcategory_id';


     public function getAllSubCategory(){
   
     return $this->findAll();

    }

    public function getSubCategoryId($subcategory){
    $user = $this->asArray()
                 ->where('subcategory_name',$subcategory)
                 ->first();
                 
    return $user['subcategory_id'];
    }

    public function createSubCategory($category_id,$subcategory){
        $db = \Config\Database::connect();
        $builder = $db->table('tbl_subcategories');

        $builder->set('category_id',$category_id);
        $builder->set('subcategory_name',$subcategory);
        $builder->insert();

    }



}