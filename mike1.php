<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.cdnfonts.com/css/break-love" rel="stylesheet" />
  <link href="https://fonts.cdnfonts.com/css/jomolhari-2" rel="stylesheet" />
  <title>Proyecto Base de Datos</title>
</head>
<body>

  <nav class="navbar navbar-light" style="background-color: rgb(191, 196, 201);">
    <div class="container-fluid">
      <a class="navbar-brand" href="#" style="color: rgb(0, 15, 150);">Inicio</a>

      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: black;">
              Unidad 1 <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="mk.html">practica 1</a></li>
              <li><a href="mike2.php">practica 2</a></li>
              <li><a href="mike3.php">practica 3</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: black;">
              Unidad 2 <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="mike4.php">practica 4</a></li>
              <li><a href="mike5.php">practica 5</a></li>
              <li><a href="pokemonsq.html">practica 6</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: black;">
              Unidad 3 <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="movie.html">Peliculas API</a></li>
              <li><a href="dragonb.html">Personajes Dragon Ball Api</a></li>
              <li><a href="hrptt.html">Proyecto Final</a></li>
              <li><a href="mike10.php">practica 10</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="jumbotron" style="background-color: rgb(210, 221, 231);">
    <h1 class="display-4 text-center" style="color: rgb(0, 75, 136); font-family: 'Break Love', sans-serif;">
      4-A De Programación TM.
    </h1>

    <style>
      h1 {
        text-align: center;
        color: white;
        margin-bottom: 20px;
      }
      table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 50px;
        border-radius: 10px;
      }
      th, td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
      }
      tr:nth-child(even) {
        background-color: skyblue;
        color: black;
      }
      tr:nth-child(odd) {
        background-color: white;
        color: black;
      }
      th {
        background-color: #ff3eff;
        color: white;
      }
    </style>

    <?php
      $username = "root";
      $password = "";
      $servername = "localhost";
      $database = "miraculous"; "

      $conexion = new mysqli($servername, $username, $password, $database);
      if ($conexion->connect_error) {
          die("Conexión fallida: " . $conexion->connect_error);
      }

      $sql = "SELECT * FROM miraculous"; 
      $resultado = $conexion->query($sql);
    ?>

    <div class="container">
      <h1>Datos</h1>
      <?php if ($resultado && $resultado->num_rows > 0): ?>
        <table>
          <tr>
            <th>id</th>
            <th>nombre</th>
            <th>apellido</th>
            <th>poder</th>
          </tr>
          <?php while ($fila = $resultado->fetch_assoc()): ?>
            <tr>
              <td><?php echo $fila['id']; ?></td>
              <td><?php echo $fila['nombre']; ?></td>
              <td><?php echo $fila['apellido']; ?></td>
              <td><?php echo $fila['poder']; ?></td>
            </tr>
          <?php endwhile; ?>
        </table>
      <?php else: ?>
        <p>No hay datos.</p>
      <?php endif; ?>
    </div>

    <hr class="my-4" style="border-color: #658181;">
    <p class="lead text-center" style="color: black; font-family: 'Jomolhari', sans-serif;">
      Implementa Base De Datos Relacionales En Un Sistema De Información
    </p>
    <p class="text-center" style="color: black; font-family: 'Jomolhari', sans-serif;">
      Rondan Romero
    </p>
  </div>

  <div class="row" style="display: flex;">
    <div class="col-sm-4">
      <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
        <div class="card-header">Práctica 1</div>
        <div class="card-body">
          <h5 class="card-title">Hola quiero pozole</h5>
          <p class="card-text">hello.</p>
        </div>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
        <div class="card-header">Práctica 2</div>
        <div class="card-body">
          <h5 class="card-title">Hola quiero pozole</h5>
          <p class="card-text">hello.</p>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
