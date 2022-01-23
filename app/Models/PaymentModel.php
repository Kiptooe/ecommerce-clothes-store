<?php
namespace App\Models;

use CodeIgniter\Model;

class PaymentModel extends Model{
    
    protected $table = 'tbl_paymenttypes';
    
    protected $primaryKey = 'paymenttypes_id';

    protected $allowedFields = ['paymenttype_name','description','is_deleted'];

    
}