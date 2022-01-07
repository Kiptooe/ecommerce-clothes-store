<?php
namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model{
 
     protected $table = 'tbl_categories';
     protected $primaryKey = 'category_id';

    public function createCategory($category){
       
        $db = \Config\Database::connect();
        $builder = $db->table('tbl_categories');
        $builder->set('category_name',$category);
        $builder->insert();

    }

}    