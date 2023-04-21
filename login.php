<?php
    // $sql = "SELECT * FROM usuario WHERE user_personas = $user_personas AND $password_personas";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Iniciar Sección</title>
</head>

<body class="m-3">
    <div class="container  p-5 mb-2 bg-body-secondary border border-black">
        <p class="text-center">INICIAR SESIÓN</p>
        <div class="row-mb-5">
            <div class="col-mb-6">
                <form action="views.php">
                    <label for="" class="form-label">Usuario</label>
                    <input type="text" class="form-control border border-danger" id="">

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control border border-danger"  id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary border border-black">Enviar</button>

                </form>
            </div>
        </div>
    </div>
</body>
</html>