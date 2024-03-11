<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTM lOGIN MARVENT</title>
    <link rel="icon" href="../resources/imagenes/logo.png">
    <link rel="stylesheet" href="../resources/css/stylePass.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-5">

            </div>
            <div class="col-sm-2">
                <form action="../controllers/changePas.php" method="post" class="form-box">
                    <div class="text-center">
                        <img src="../resources/imagenes/logo.png" alt="logo" class="img-login">
                        <br>
                        <br>
                        <h1 class="form-tittle2"> RECUPERA TU CONTRASEÑA</h1>
                    </div>
                    <div>
                        <br>
                        <h4 class="Form-tittle4">Nueva Contraseña</h4>
                        <input type="password" required placeholder="" name="changePass" class="form-control">
                        <input type="hidden" name="token" value="<?php echo $_GET["token"]?>">

                        <br>
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-dark" type="submit">ENVIAR</button>
                    </div>
                </form>

            </div>
            <div class="col-sm-5">
                <div class="alert alert-warning" role="alert" id="myAlert">
                    La contraseña debe tener al menos , 1 MAY, 5 MIN, 3 Numeros y 1 Caracter especial
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
        </script>
    <script>
        var alertBox = document.getElementById('myAlert');


        setTimeout(function () {
            alertBox.style.display = 'none';
        }, 10000); 
    </script>
</body>

</html>