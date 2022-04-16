<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>CAP - Pacientes</title>
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
          <a class="nav-link" href="/expedientes">Expedientes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/pacientes">Pacientes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/citasw">Citas</a>
        </li>
      </ul>
      <span class="navbar-text">
        <a href="#" class="nav-link">Cerrar Sesion</a>
      </span>
    </div>
  </div>
</nav>
<div class="container">
    <div class="my-5 shadow p-3 w-100">
        <form id="formSh" class="d-flex flex-column align-items-center w-100">
          <div class="d-flex py-3 w-50">
            <div class="mx-5 w-50">
                <div class="d-flex mx-1 my-2">
                    <label for="nombre" class="w-25">Nombre:</label>
                    <input type="text" class="ms-2" name="nombre" id="srnombre">
                </div>
                <div class="d-flex mx-1 my-2">
                    <label for="apellidos" class="w-25">Apellidos:</label>
                    <input type="text" class="ms-2" name="apellidos" id="srapellidos">
                </div>
            </div>
            <div class=" w-50">
              <div class="d-flex align-items-center my-2 w-100">
                <label class="w-50" for="categoria">Categoria</label>
                <select name="categoria" id="categoria">
                    <option value=""></option>
                    <option value="1">Alumno</option>
                    <option value="3">Maestro</option>
                    <option value="2">Externo</option>
                </select>
              </div>
              <div class="d-flex align-items-center my-2 w-100">
                <label for="tipo" class="w-50">Tipo Expediente</label>
                <select class="" name="tipo" id="tipo">
                    <option value=""></option>
                    <option value="1">Normal</option>
                    <option value="2">Especial</option>
                </select>
              </div>
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
            <th scope="col">Telefono</th>
            <th scope="col">Carrera</th>
            <th scope="col">Categoria</th>
            <th scope="col">Tipo</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody id="bodyPac"></tbody>
      </table>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="modalPaciente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/pacientes/">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Personal
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="d-flex align-items-center my-2">
                    <div>
                      <label for="nombre">Nombre:</label>
                      <input type="text" name="nombre" id="nombre">
                    </div>
                    <div>
                      <label for="apellidos">Apellidos:</label>
                      <input type="text" name="apellidos" id="apellidos">
                    </div>
                  </div>
                  <div class="d-flex align-items-center my-2">
                    <div class="w-50">
                      <label for="nacimiento">Fecha Nacimiento:</label><br>
                      <input type="date" class="w-100" name="nacimiento" id="nacimiento">
                    </div>
                    <div class="w-50 d-flex ms-2 align-items-center">
                      <div class="">
                        Sexo:
                      </div>
                      <div class="w-100">
                        <div class="d-flex align-items-center ms-3 w-100">
                          <input type="radio" name="sexo" id="masculino">
                          <label for="masculino">M</label>
                          <input type="radio" class="ms-2" name="sexo" id="femenino">
                          <label for="femenino">F</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <label for="direccion">Direccion:</label><br>
                    <input type="text" name="direccion" id="direccion" class="w-100">
                  </div>
                  <div class="d-flex">
                    <div>
                      <label for="telefono">Telefono:</label>
                      <input type="text" name="telefono" id="telefono">
                    </div>
                    <div>
                      <label for="correo">Correo:</label>
                      <input type="text" name="correo" id="correo">
                    </div>
                  </div>
                  <div class="d-flex">
                    <div class="w-50 me-2">
                      <label for="civil">Estado Civil:</label><br>
                      <select name="civil" id="civil" class="w-100">
                        <option value="Soltero">Soltero</option>
                        <option value="Casado">Casado</option>
                        <option value="Viudo">Viudo</option>
                        <option value="Divorciado">Divorciado</option>
                      </select>
                    </div>
                    <div class="w-50">
                      <label for="carrera">Carrera:</label>
                      <input type="text" name="carrera" id="carrera">
                    </div>
                  </div>
                  <div>
                    <label for="ocupaciones">Ocupaciones:</label><br>
                    <input type="text" name="ocupaciones" id="ocupaciones" class="w-100">
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Descripcion
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="d-flex w-100">
                    <div class="w-25 mx-1">
                      <label for="categoria">Categoria:</label>
                      <select name="categoria" id="categoria" class="w-100">
                        <option value="1">Alumno</option>
                        <option value="3">Maestro</option>
                        <option value="2">Externo</option>
                      </select>
                    </div>
                    <div class="w-50 mx-1">
                      <label for="tipo">Tipo Expediente</label><br>
                      <select name="tipo" id="tipo" class="w-100">
                        <option value="1">Normal</option>
                        <option value="2">Especial</option>
                      </select>
                    </div>
                    <div>
                      <label for="status">Status</label>
                      <select name="status" id="status">
                        <option value="3">Alta</option>
                        <option value="4">En Atencion</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Observaciones
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="w-100">
                    <textarea name="desc" id="desc" class="w-100" cols="30" rows="10"></textarea>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" id="changePaciente" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- Fin Modal -->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="./Views/js/pacientes.js"></script>
</body>
</html>