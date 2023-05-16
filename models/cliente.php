<?php
    


    require_once "./configuration/connecta.php";

    class ClienteModel extends Connectar{
        private $table;

        function __construct()
        {
            parent::__construct();
            $this->table = 'clientes';
        } 

        function getAll()
        {
            $sqlSelect = $this->connection->query("SELECT * FROM $this->table");
            $resultQuery = $sqlSelect->fetchAll();
            return $resultQuery;
        }

    }



?>