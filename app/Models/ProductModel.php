<?php
namespace App\Models;

use CodeIgniter\Model;
use App\Models\SubcategoryModel;

class ProductModel extends Model{
    
    protected $table = 'tbl_product';
    
    protected $primaryKey = 'product_id';

    protected $allowedFields = ['product_name','product_description','product_image','product_price','available_quantity','subcategory_id','created_at','added_by'];


    public function createProduct(array $product){
        $this->save($product);

        $sbctgry = new SubcategoryModel;
        $subcategories['subcategories'] = $sbctgry->findAll();
        
        echo view('user/admin/create_product',$subcategories);

    }

    public function getProducts ($sbcategoryid){
        $products = $this->asArray()->where('subcategory_id',$sbcategoryid)->findAll();
        return $products;
    }

    public function getProduct($productid){
        $product = $this->asArray()->where('product_id',$productid)->first();
        return $product;
    }
}