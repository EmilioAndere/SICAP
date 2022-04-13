<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
    <style>
        body {
            background: #01AA9E;
        }

        #btnLogin {
            background: #01AA9E;
        }
    </style>
</head>
<body>
    <div class="alert" role="alert" id="alert-login"></div>
    <div class="container-md bg-white rounded py-5">
        <div class="position-relative">
            <h2 class="text-center pb-4">Inicio de Sesion CAP</h2>
            <form id="form-login" class="d-flex align-items-center flex-column">
                <div class="">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username">
                </div><br>
                <div>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">
                </div><br>
                <button id="btnLogin" class="btn btn-light w-25">LogIn</button><br>
                <a href="/register" class="text-black">Registrate >>></a>
            </form>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="./Views/js/login.js"></script>
</body>
</html>