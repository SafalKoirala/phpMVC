<?php 
   require_once("BaseModel.php");

class UserModel extends BaseModel
{
    public function ListUsers()
    {
        $st=$this->pdo->prepare("select * from users");
        $st->execute();
        $users = $st->fetchall();
       // print_r($users);
        return $users;

    }
}


// $obj1 = new Usermodel;
// $obj1->ListUsers();
?>