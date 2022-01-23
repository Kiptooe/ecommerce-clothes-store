<?php
namespace App\Models;

use CodeIgniter\Model;

class WalletModel extends Model{
    
    protected $table = 'tbl_wallet';
    
    protected $primaryKey = 'wallet_id';

    protected $allowedFields = ['user_id','amount_available','created_at','updated_at','is_deleted'];

    public function findWallet($userid){
       $wallet = $this->asArray()->where('user_id',$userid)->first();
       return $wallet;
    }


    
}