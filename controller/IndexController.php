<?php 
    class IndexController extends BaseController
    {
        public function index()
        {
            $this->view ='home';
            $data =['message'=>'HOME PAGE'];
            $this->display($data);
        }
    }

?>