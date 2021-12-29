<?php
namespace App\Models;
use CodeIgniter\Model;

class RoleModel extends Model{

    protected $table = 'tbl_roles';
    protected $primaryKey = 'role_id';

  
    function getRoleId($role){
        $user=$this->asArray()
                   ->where('role_name',$role)
                   ->first();

        return $user['role_id'];
    }

    

    function createRole($role){

        $db = \Config\Database::connect();
        $builder = $db->table('tbl_roles');

        $builder->set('role_name',$role);
        $builder->insert();
        
    }

  /*function createRole( $email,$role){

        $this->insert('email',$email);
        $this->insert('role_name',$role);
           
    }*/


}