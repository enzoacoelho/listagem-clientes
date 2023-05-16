<?php
   
     
   
   require_once('./controllers/clientsController.php');
   $controller = new clientesController();
   

   $action = !empty($_GET['a']) ? $_GET['a'] : 'getAll';   
   $controller->{$action}();

?>