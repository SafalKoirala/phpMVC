<?php 
    class BaseController
    {
        protected $view;
        public function LoadModel($model)
        {
            $modelClass = ucfirst($model)."Model";
            require_once("model/{$modelClass}.php");
            $modelObject = new $modelClass();
           // var_dump($modelObject);
            return $modelObject;
        }
        protected function display($data){
            extract($data);
            require_once("view/{$this->view}.php");
        }
    }
//  $obj = new BaseController;
// $obj->LoadModel('base');


?>