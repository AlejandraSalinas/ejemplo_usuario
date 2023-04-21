<?php
    require_once 'users.php';

    // $usuario1 = new Usuario('Maira', 'Alejandra', 'Salinas', 'Báez');
    // session_start();
    //  echo $nombre_completo->getNombreCompleto();
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Documentación</title>
</head>
<body>
    <table class="table table-dark table-striped">
        <tr class="table-primary">
            <th>ID</th>
            <th>Primer Nombre</th>
            <th>Segundo Nombre</th>
            <th>Primer Apellido</th>
            <th>Segundo Nombre</th>
        </tr>
        <tr>
            <td>1</td>
            <td> <?php echo $usuario1->getPrimerNombre() ?></td>
            <td><?php echo  $usuario1->getsegundoNombre() ?></td>
            <td> <?php echo $usuario1->getPrimerApellido() ?></td>
            <td> <?php echo $usuario1->getSegundoApellido() ?></td>
            <td> <?php echo $usuario1->getNombreCompleto() ?></td>
        </tr>
        <tr>
            <td>2</td>
            <td> <?php echo $usuario2->getPrimerNombre() ?></td>
            <td> <?php echo $usuario2->getsegundoNombre() ?></td>
            <td> <?php echo $usuario2->getPrimerApellido() ?></td>
            <td> <?php echo $usuario2->getSegundoApellido() ?></td>
            <td> <?php echo $usuario2->getNombreCompleto() ?></td>
        </tr>
        <tr>
            <td>3</td>
            <td> <?php echo $usuario3->getPrimerNombre() ?></td>
            <td> <?php echo $usuario3->getsegundoNombre() ?></td>
            <td> <?php echo $usuario3->getPrimerApellido() ?></td>
            <td> <?php echo $usuario3->getSegundoApellido() ?></td>
            <td> <?php echo $usuario3->getNombreCompleto() ?></td>
        </tr>
    </table> 

</body>
</html>