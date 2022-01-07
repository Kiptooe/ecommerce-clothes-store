<?php
namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model{
    
    protected $table = 'tbl_product';
    
    protected $primaryKey = 'product_id';

    protected $allowedFields = ['product_name','product_description','product_image','product_price','available_quantity','subcategory_id','created_at','added_by'];


    public function createProduct(array $product){
        $this->save($product);
        echo 'inserted';
    }

    public function getProducts ($sbcategoryid){
        $products = $this->asArray()->where('subcategory_id',$sbcategoryid)->findAll();
        return $products;
    }
}