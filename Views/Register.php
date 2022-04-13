<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="alert" role="alert" id="alert-login"></div>
    <form id="formReg" method="POST">
        <label for="">Nombre</label>
        <input type="text" id="nombre" name="nombre"></input>
        <label for="">Apellidos</label>
        <input type="text" id="apellidos" name="apellidos"></input>
        <label for="">Usuario</label>
        <input type="text" id="user" name="user"></input>
        <label for="">Password</label>
        <input type="password" id="pass" name="pass"></input>
        <button id="btnReg">Registrar</button>
    </form>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="./Views/js/register.js"></script>
</html>