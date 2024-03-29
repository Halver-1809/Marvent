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
                <form action="../controllers/validar.php" method="post" class="form-box">
                    <div class="text-center">
                        <h1 class="form-title">Marvent</h1>
                        <img src="../resources/imagenes/logo.png" alt="logo" class="img-login">
                        <br>
                        <br>
                        <h1 class="form-tittle2"> Iniciar sesion </h1>
                    </div>
                    <br>
                    <div>
                        <h3 class="form-title3">USUARIO</h3>
                        <input type="text" required placeholder="" name="usuario" class="form-control">
                        <br>
                        <h3 class="form-title3">CONTRASEÑA</H3>
                        <input type="password" required placeholder="" name="contrasena" class="form-control">
                        <br>
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-dark" type="submit">INGRESAR</button>
                    </div>

                    <div class="text-center">
                        <br>
                        <li class="res">
                            <a href="registrarse.php">
                                <p> Registrarme</p>
                            </a>
                        </li>
                        <li class="olv">
                            <a href="olvidoContrasena.php">
                                <p> ¿Olvido su contraseña?</p>
                            </a>
                        </li>
                    </div>
                </form>
            </div>
            <div class="col-sm-5">
                <?php
                if (isset($_GET['message'])) {
                    ?>
                    <div class="alert alert-warning" role="alert" id="myAlert">
                        <?php
                        switch ($_GET['message']) {
                            case 'ok':
                                echo 'Por favor revisa tu correo.';
                                break;
                                case 'success_password':
                                    echo 'Ingresa sesión con tu nueva contraseña';
                                    break;

                            default:
                                echo 'Algo salio mal intenta de nuevo.';
                                break;
                        }
                        ?>
                        <div class="progress-bar"></div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>
    <script>
    var alertBox = document.getElementById('myAlert');

   
    setTimeout(function() {
        alertBox.style.display = 'none';
    }, 5000); 
</script>
</body>

</html>
