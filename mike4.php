<?php
ob_start();
?>
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
  <title>Página Principal</title>

  <style>
    h1 {
      text-align: center;
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
    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 50%;
      background-color: #282a36;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      color: white;
    }
    h2 {
      font-family: 'so this is it', sans-serif;
      text-shadow: 0 1 1 black;
      text-align: center;
      color: #ff79c6;
      margin-bottom: 15px;
    }
    form {
      display: flex;
      flex-direction: column;
    }
    label {
      font-size: 16px;
      margin-bottom: 5px;
    }
    input[type="text"] {
      padding: 8px;
      margin-bottom: 10px;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      background-color: #44475a;
      color: #fff;
    }
    input[type="submit"] {
      padding: 10px;
      background-color: #50fa7b;
      border: none;
      color: #282a36;
      font-size: 16px;
      border-radius: 5px;
      cursor: pointer;
      transition: background 0.3s;
    }
    input[type="submit"]:hover {
      background-color: #3ae374;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-light" style="background-color: rgb(191, 196, 201);">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.html" style="color: rgb(0, 15, 150);">Inicio</a>

      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: black;">Unidad 1 <span class="caret"></span></a>
            <ul class="dropdown-menu">
               <li><a href="index.html">practica 1</a></li>
              <li><a href="mike2.php">practica 2</a></li>
              <li><a href="mike3.php">practica 3</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: black;">Unidad 2 <span class="caret"></span></a>
            <ul class="dropdown-menu">
               <li><a href="mike4.php">practica 4</a></li>
              <li><a href="mike5.php">practica 5</a></li>
              <li><a href="pokemonsq.html">practica 6</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: black;">Unidad 3 <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="movie.html">Peliculas API</a></li><br>
              <li><a href="dragonb.html">Dragon Ball API</a></li><br>
              <li><a href="hrptt.html">Pagina Final API</a></li><br>
              <li><a href="mike03.html">práctica 10</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="jumbotron" style="background-color: rgb(210, 221, 231);">
    <h1 class="display-4" style="color: rgb(0, 75, 136); font-family: 'Break Love', sans-serif;">
      4-A de Programación TM
    </h1>
    <hr class="my-4" style="border-color: #658181;">
    <p class="lead text-center" style="color: black; font-family: 'Jomolhari', sans-serif;">
      Implementa Base de Datos Relacionales en un Sistema de Información
    </p>
  </div>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Número de Control</th>
        <th>Nombre</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Edad</th>
        <th>Colonia</th>
        <th>Especialidad</th>
        <th>Género</th>
        <th>Correo</th>
        <th>Teléfono</th>
        <th>Fecha de Ingreso</th>
      </tr>
    </thead>
    <tbody>
      <?php 
        error_reporting(E_ALL);
        ini_set('display_errors',1);

        $username = "root";
        $password = "";
        $servername = "localhost";
        $database = "miraculous";

        $conexion = new mysqli($servername, $username, $password, $database);

        if ($conexion->connect_error) {
          die("Conexión fallida: " . $conexion->connect_error);
        }

        $sql = "
          SELECT
            a.numero_control,
            a.nombre,
            a.apellido_paterno,
            a.apellido_materno,
            e.edad,
            c.nombre_colonias,
            es.nombre_especialidad,
            g.nombre_genero,
            a.correo,
            a.telefono,
            a.fecha_ingreso
          FROM alumnos a
          JOIN edades e ON a.id_edad = e.id
          JOIN colonias c ON a.id_colonia = c.id
          JOIN especialidades es ON a.id_especialidad = es.id
          JOIN generos g ON a.id_genero = g.id
        ";

        $resultado = $conexion->query($sql);

        if ($resultado->num_rows > 0) {
          while ($row = $resultado->fetch_assoc()) {
            echo "<tr>
              <td>{$row['numero_control']}</td>
              <td>{$row['nombre']}</td>
              <td>{$row['apellido_paterno']}</td>
              <td>{$row['apellido_materno']}</td>
              <td>{$row['edad']}</td>
              <td>{$row['nombre_colonias']}</td>
              <td>{$row['nombre_especialidad']}</td>
              <td>{$row['nombre_genero']}</td>
              <td>{$row['correo']}</td>
              <td>{$row['telefono']}</td>
              <td>{$row['fecha_ingreso']}</td>
            </tr>";
          }
        } else {
          echo "<tr><td colspan='11' class='text-center'>No hay registros aún.</td></tr>";
        }

        $conexion->close();
      ?>
    </tbody>
  </table>
</body>
</html>
