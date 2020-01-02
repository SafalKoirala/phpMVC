<?php 
    
    class UserController extends BaseController
    {
        public function showList()
        {
            $this->view ='user/list';
            $model = $this->loadModel('user');
            $users = $model->ListUsers();
            $data=['users'=>$users];
            $this->display($data);
            

        }
    }
$obj =  new UserController;
$obj->showList();

?>