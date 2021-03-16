<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Vive feliz</title>
</head>
<body>
  <div class="container">
    <form action="print.php" method="POST" enctype="multipart/form-data">
      <h1 class="text-center text-success">NUEVO ARRENDATARIO</h1><br>
      <label class="form-label" for="nombre"> Nombre : <br></label>
      <input class="form-control" type="text" name="nombre"><br>
      <label class="form-label" for="apellido"> Apellido : <br></label>
      <input class="form-control" type="text" name="apellido"><br>
      <label class="form-label" for="rut"> Rut : <br></label>
      <input class="form-control" type="text" name="rut"><br>
      <label class="form-label" for="meses"> Meses : <br></label>
      <input class="form-control" type="text" name="meses"><br>
      <label class="form-label" for="monto"> Monto : <br></label>
      <input class="form-control" type="text" name="monto"><br>
      <label class="form-label" for="direccion"> Dirección : <br></label>
      <input class="form-control" type="text" name="direccion"><br>

      <div class="d-flex justify-content-around">
      <input class="btn btn-success" type="submit" name="save" value="Guardar" />
      <input class="btn btn-warning" type="submit" name="load" value="Leer"/>
      <input class="btn btn-primary" type="submit" value="Crear PDF" name="crear">
      </div>
    </form>
  </div>
</body>
</html>