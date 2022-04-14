<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./Views/css/home.css">
    <title>CAP - Home</title>
    <style>
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background: #01AA9E !important">
  <div class="container-fluid">
      <!-- <a class="navbar-brand" href="#"> -->
        <img src="./Views/img/logo-upt.png" class="" width="70" height="50">
      <!-- </a> -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/expedientes">Expedientes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pacientes</a>
        </li>
      </ul>
      <span class="navbar-text">
        <a href="#" class="nav-link">Cerrar Sesion</a>
      </span>
    </div>
  </div>
</nav>
<div id="contenedor">
  <h1 id="title">CAP</h1>
</div>
</body>
<script>

function readCookie(name) {
    var nameEQ = name + "="; 
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
      var c = ca[i];
      while (c.charAt(0)==' ') c = c.substring(1,c.length);
      if (c.indexOf(nameEQ) == 0) {
        return decodeURIComponent( c.substring(nameEQ.length,c.length) );
      }
    }
    return null;
}



</script>
</html>