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
  <form action="print.php" method="POST" enctype="multipart/form-data">
    <h1>DATOS DEL ESTUDIANTE</h1><br>
    <label for="nombre"> Nombre : <br></label>
    <input type="text" name="nombre"><br>
    <label for="apellido"> Apellido : <br></label>
    <input type="text" name="apellido"><br>
    <label for="carrera"> Carrera : <br></label>
    <input type="text" name="carrera"><br>

    <input type="submit" name="save" value="Guardar" />
    <input type="submit" name="load" value="Leer"/>
    <input type="submit" value="Crear PDF" name="crear"><br>
  </form>
</body>
</html>