<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Producto</title>

    <link rel="shortcut icon" href="/css/icon.png/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="container mt-5">
    <div class="row">
    <div class="col-sm-6 offset-sm-3">
    <div class="alert alert-danger text-center">
    <p>¿Desea eliminarlo del registro?</p>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <form action="../../includes/_functions.php" method="POST">
            <input type="hidden" name="accion" value="eliminar_producto">
            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
            <input type="submit" name="" value="eliminar" class="btn btn-success">
            <a href="./" class="btn btn-danger">cancelar</a>
        </div>
    </div>

    
</body>
    </html>