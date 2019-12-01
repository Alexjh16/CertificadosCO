<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Registro</title>
</head>
<body class="body-class">
<img class="imagen" src="img/C.O.png" width="11%" height="18%">
<div class="d-flex justify-content-center spaces-campo">
<div class="col col-lg-6">
<form class="container card" action="" method="post">
  <div class="form-row">
    <div class="form-group col-md-8">
      <label class="labels" for="">Nombres</label>
      <input type="text" class="form-control" placeholder="Nombres">
    </div>
    <div class="form-group col-md-4">
      <label for="">Apellidos</label>
      <input type="text" class="form-control" placeholder="Apellidos">
    </div>
  </div>
     <div class="form-group">
         <label for="">Email</label>
         <input type="text" class="form-control" placeholder="Example@gmail.com">
     </div>
<div class="form-row">
  <div class="form-group col-md-6">
    <label for="">Password</label>
    <input type="password" class="form-control" placeholder="*********">
  </div>
    <div class="form-group col-md-6">
      <label for="">Confirm Password</label>
      <input type="text" class="form-control" placeholder="*********">
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="">Ficha</label>
      <input type="number" class="form-control" placeholder="18031833584">
    </div>
    <div class="form-group col-md-6">
      <label for="">Documento</label>
      <input type="number" class="form-control" placeholder="Documento">
    </div>
  </div>
  <div class="form-group">
         <label for="">Foto de Perfil</label>
         <input type="file" class="form-control">
     </div>
<div class="text-center">
  <button type="submit" class="btn btn-info">Registrarse</button>
  <button class="btn btn-info"><a href="index.php">Volver</a></button>
</div>
<div class="text-center">
    <a href="Login.php"><b>¿Ya tiene cuenta? Solo Inicia Sesión</b></a>
</div>
</form>
</div>
</div>
</body>
</html>