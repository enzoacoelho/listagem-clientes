<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
</head>
<title> Clientes</title>

<body>
   <h1>Lista de Clientes</h1>
   <div class="content">
      <table class="table">
         <thead>
            <tr>
               <th>ID</th>
               <th>Nome</th>
               <th>Email</th>
               <th>Telefone</th>
            </tr>
         </thead>
         <tbody>
            <?php foreach($resultData as $line): ?>
              <tr>
                 <td><?=$line['ClienteID'] ?></td>
                 <td><?=$line['NomeCliente'] ?></td>
                 <td><?=$line['Email'] ?></td>
                 <td><?=$line['Telefone'] ?></td>
              </tr>
              <?php endforeach; ?>
         </tbody>
      </table>
   </div>   

</body>

</html>