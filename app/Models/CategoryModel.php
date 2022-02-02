<?php
namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model{
 
     protected $table = 'tbl_categories';
     protected $primaryKey = 'category_id';
     protected $allowedFields = ['category_id','category_name','is_deleted'];

    public function createCategory($category){
       
        $db = \Config\Database::connect();
        $builder = $db->table('tbl_categories');
        $builder->set('category_name',$category);
        $builder->insert();

        echo view('user/admin/create_category');
    }

}    