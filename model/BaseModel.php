<?php 
    class BaseModel
    {
        protected $pdo;
        public function BaseModel()
        {
            $host='localhost';
            $user='root';
            $pass='';
            $db='mvclab';
            try
            {
                $dsn ="mysql:host=$host;dbname=$db";
                $this->pdo=new PDO($dsn,$user,$pass);
                
            }catch(Exception $e)
            {
                echo $e->getMessage();
                die;

            }
        }


    }

    $obj = new Basemodel;
     






?>