<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{

    protected $table = 'tbl_users';
    protected $primaryKey = 'user_id';

    protected $allowedFields = ['first_name','last_name','email','password','gender','role_id'];

    function get_user( $email,$password){        
        
        $user=$this->asArray()
                   ->where('email',$email)
                   ->where('password',$password)
                   ->first();

                   //$check_pwd = password_verify( $password,$user['password']);    
                    //add conditinal fr handling wrong email, wrong password
        if(!$user){
            return 'Wrong credentials!';
        }
        else{
            return $user;

        }      
    }
    public function createAccount(array $user){
        $this->save($user);
        echo 'Inserted';
    }



    // function createUser($fname,$lname,$email,$pwd,$roleid){
    //     $db = \Config\Database::connect();
    //     $builder = $db->table('tbl_users'); 
           
        
    //     $builder->set('first_name',$fname);
    //     $builder->set('last_name',$lname);
    //     $builder->set('email',$email);
    //     $builder->set('password',$pwd);
    //     $builder->set('role_id',$roleid);
    //     $builder->insert();

    //     echo 'Inserted';
    // }


}