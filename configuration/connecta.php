<! Conexão ao Bando de Dados >

<?php
     
     define ('Host', 'localhost');
     define ('DATABASENAME', 'curso-php-enzo');
     define ('USER', 'root');
     define ('PASSWORD', 'root');
    
     class Connectar {
        protected $connection;

        function __construct()
        {
            $this->connectDataBase();

        }

        function connectDataBase()
        {
            try
            {
                $this->connection = new PDO('mysql:host='.HOST.';dbname='.DATABASENAME, USER, PASSWORD);
            }
            catch(PDOException $e)
            {
                echo "Error!".$e->getMessage();
                die();

            }

        }
    }
?>
