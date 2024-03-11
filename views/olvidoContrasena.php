<!DOCTYPE html>
<html lang="es">
<?php
include '../views/helpers/headLogin.php';
?>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-5">

            </div>
            <div class="col-sm-2">
                <form action="../controllers/envEmail.php" method="post" class="form-box">
                    <div class="text-center">
                        <img src="../resources/imagenes/logo.png" alt="logo" class="img-login">
                        <br>
                        <br>
                        <h1 class="form-tittle2"> ¿Olvido su contraseña?</h1>
                    </div>
                    <br>
                    <div>
                        <h5 class="form-tittle5 text-center"> En breves enviaremos un correo electronico con un enlace
                            para restablecer su contraseña.</h5>
                        <br>
                        <h4 class="Form-tittle4">Correo electronico</h4>
                        <input type="text" required placeholder="" name="email" class="form-control">
                        <br>
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-dark" type="submit">ENVIAR</button>
                    </div>

                    <div class="text-center">
                        <br>
                        <li class="res">
                            <a href="login.php">
                                <p> Ingresar</p>
                            </a>
                        </li>
                    </div>
                </form>

            </div>
            <div class="col-sm-5">

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>

</body>

</html>