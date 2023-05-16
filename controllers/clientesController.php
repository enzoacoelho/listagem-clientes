<?php


    
    require_once "./models/cliente.php";
  

    class clientesController{
        private $model;

        function __construct()
        {
            $this->model = new ClienteModel;
        }

        public function getAll($data=null){
            $resultData = $this->model->getAll();
            $returnMessage = $data;
            require_once "./views/index.php";
        }

    }
      


?>