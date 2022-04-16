<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>CAP - Expedientes</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background: #01AA9E !important">
  <div class="container-fluid">
    <img src="./Views/img/logo-upt.png" class="" width="70" height="50">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/home">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/expedientes">Expedientes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/pacientes">Pacientes</a>
        </li>
      </ul>
      <span class="navbar-text">
        <a href="#" class="nav-link">Cerrar Sesion</a>
      </span>
    </div>
  </div>
</nav>
<div class="container">
    <div class="my-5 shadow p-3">
        <form id="formSh" class="d-flex flex-column align-items-center">
          <div class="d-flex py-3">
            <div class="mx-1">
              <label for="nombre">Nombre:</label>
              <input type="text" name="nombre" id="srnombre">
            </div>
            <div class="mx-1">
              <label for="apellidos">Apellidos:</label>
              <input type="text" name="apellidos" id="srapellidos">
            </div>
            <div>
              <label for="categoria">Categoria</label>
              <select name="categoria" id="categoria"></select>
            </div>
          </div>
          <div class="pt-2 d-flex">
            <button class="btn btn-light fw-bold text-light d-flex align-items-center mx-1" id="search" style="background: #01AA9E !important"><ion-icon name="search-circle-outline"></ion-icon> Buscar</button>
            <button class="btn btn-light fw-bold d-flex align-items-center mx-1" id="clean"><ion-icon name="backspace-outline"></ion-icon> Limpiar</button>
          </div>
          
        </form>
    </div>
    <div class="m-3 shadow p-3">
      <table class="table table-sm table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Contactos</th>
            <th scope="col">Citas</th>
            <th scope="col">Categoria</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody id="bodyExp"></tbody>
      </table>
    </div>
</div>

<!-- Inicio Modal -->
<div class="modal fade" id="modalExp" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <div class="d-flex w-100 justify-content-between align-items-center">
          <div><h5 class="modal-title" id="titleExp"></h5></div>
          <div class="w-25 fw-bold fs-5">EXPEDIENTE CAP</div>
          <div><button" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div>
        </div>
      </div>
      <div class="modal-body">
        <div id="notify" class="mb-3">
          <div id="toastExp" class="toast align-items-center text-white border-0" role="alert" aria-live="assertive" aria-atomic="true">
              <div class="d-flex">
                  <div class="toast-body"></div>
              </div>
          </div>
        </div>
        <div class="d-flex w-100">
        <form id="formExp" class="w-100">
          <div class="d-flex justify-content-center w-100">
            <div>
              <label for="citas">Citas Ralizadas</label>
              <select name="citas" id="citas"></select>
            </div>
            <div class="p-3 d-flex">
              <label for="fecha" class="fs-6 me-2 fw-light">Fecha:</label>
              <p id="dateExp"></p>
            </div>
            <div>
              <div class="fw-light h-25 pb-4 fw-bold text-center">Expediente</div>
              <div class="d-flex">
                <div classp="me-1">
                  <label for="" class="fs-6 fw-light">Normal</label>
                  <input type="radio" name="expediente" checked disabled id="expediente">
                </div>
                <div class="ms-1">
                  <label for="" class="fs-6 fw-light">Especial</label>
                  <input type="radio" name="expediente" disabled id="expediente">
                </div>
              </div>
            </div>
          </div>
          <div class="d-flex text-end">
            <label for="nombre" class="w-25 pe-5">Nombre del Paciente:</label>
            <input class="w-50 me-2" disabled type="text" name="nombre" id="nombre">
            <label for="diagnostico" class="me-1">Diagnostico:</label>
            <input type="text" name="diagnostico" id="diagnostico">
          </div>
          <div class="d-flex">
            <div class="d-flex align-items-center w-25 justify-content-end pe-5 my-3">
              <div class="pe-2">Sexo:</div>
              <label for="sexo" class="ps-1">M</label>
              <input type="radio" checked disabled name="sexo" id="masculino" class="me-1">
              <label for="sexo">F</label>
              <input type="radio" name="sexo" disabled id="femenino" class="pe-1">
            </div>
            <div class="d-flex my-3 me-3">
              <label for="nacimienton" class="pe-2">Fecha de Nacimiento:</label>
              <input class="" disabled type="date" name="nacimiento" id="nacimiento">
            </div>
            <div class="d-flex my-3">
              <label for="edad" class="w-25 pe-2">Edad:</label>
              <input class="" type="text" disabled name="edad" id="edad">
            </div>
          </div>
          <div class="d-flex">      
            <div class="w-25 ms-4">
              <label for="correo">Correo:</label>
              <input type="email" disabled name="correo" id="correo">
            </div>
            <div class="w-25 ms-4">
              <label for="celular">Celular:</label>
              <input type="text" name="celular" disabled id="celular">
            </div>
            <div class="w-25 ms-4">
              <label for="ocupacion">Ocupacion:</label>
              <input type="text" name="ocupacion" disabled id="ocupacion">
            </div>
            <div class="w-25 ms-4">
              <label for="carrera">Carrera:</label>
              <input type="text" name="carrera" disabled id="carrera">
            </div>
          </div>
          <div class="d-flex">
            <div class="ms-5 mt-3">
              <textarea name="observaciones" id="observaciones" style="resize:none" cols="160" rows="9">Observaciones...</textarea>
            </div>
          </div>
        </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" id="saveExp" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>
<!-- Fin Modal -->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="./Views/js/expedientes.js"></script>
</body>
</html>