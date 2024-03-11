<!DOCTYPE html>
<html lang="es">
<?php
session_start();
include '../views/helpers/headInventory.php';
include '../models/home.php';
?>
<!--BARRA DE ARIBA-->
<header>
    <nav class="navbar navbar-expand-md navbar-light">
        <div class="container nav">

            <div class="col ">
                <img class="nav-link" src="../resources/imagenes/logo pero negro.png" alt="">


            </div>

            <div class="col ">
                <h1 class="text-cenetr">EDITAR CLIENTES</h1>


            </div>

            <div class="col  ">
                <form class="d-flex">
                    <button class="btn btn-light" type="button" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z">
                            </path>
                            <path fill-rule="evenodd"
                                d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z">
                            </path>
                        </svg></button>
                </form>




            </div>


        </div>
    </nav>
</header>
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">CERRAR SESIÓN </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ¿Seguro que desea cerrar session?
            </div>
            <div class="modal-footer text-center">
                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">ATRAS</button>
                <a href="../controllers/closeSession.php"><button type="button"
                        class="btn btn-warning">CERRAR</button></a>
            </div>
        </div>
    </div>
</div>
</div>
</div>


<section class="container-fluid">
    <div class="row">
        <!--BARRA DE NAVEGACION-->
        <nav class="d-flex col-xxl-12 col-xl-12 col-md-12 edit5 ">


            <div class="modal-body text-lg-center ingresar">
                <form action="../controllers/editarClie.php" method="POST">
                    <?php

                    $id = $_GET['id'];

                    include '../models/home.php';

                    $sql = "SELECT * from cliente where IdCliente=$id";

                    $resFiltro = $conn->query($sql);
                    $row_filtro = $resFiltro->fetch_array();
                    ?>

                    <input type="hidden" name="Id" value="<?php echo $row_filtro['IdCliente']; ?>">
                    <p>Cedula </p>
                    <input type="text" name="ClieCedula" required placeholder="cedula"
                        value="<?php echo $row_filtro['ClieCedula'] ?>">
                    <p>Nombre Del Cliente</p>
                    <input type="text" name="ClieNombre" required placeholder="nombre"
                        value="<?php echo $row_filtro['ClieNombre'] ?>">
                    <p>Telefono Personal</p>
                    <input type="text" name="ClieTelPersonal" required placeholder="telefono"
                        value="<?php echo $row_filtro['ClieTelPersonal'] ?>">
                    <p>Direccion</p>
                    <input type="text" name="ClieDireccion" required placeholder="direccion"
                        value="<?php echo $row_filtro['ClieDireccion'] ?>">
                    <p>Email </p>
                    <input type="text" name="ClieEmailPersonal" required placeholder="email"
                        value="<?php echo $row_filtro['ClieEmailPersonal'] ?>">
                    <div class="botones">
                        <a href="client.php"><button type="button" class="btn btn-secondary"
                                data-bs-dismiss="modal">Cancelar</button></a>
                        <button type="submit" name="enviar" class="btn btn-primary">Actualizar</button>

                    </div>
            </div>

            </form>
    </div>
    </div>
</section>

<footer class="row" id="row-pie">
    <div class="container">
        <div class="row">
            <div class=" col grupo2 text-center">
                <a href="https://www.facebook.com/"><img src="../resources/imagenes/icono-facebook.png"
                        alt="Facebook"></a>
                <a href="https://www.instagram.com/"><img src="../resources/imagenes/icono-instagram.png"
                        alt="Instagram"></a>
                <a href="https://twitter.com/"><img src="../resources/imagenes/tiwitter-icono.png" alt="Twitter"></a>
            </div>
        </div>
    </div>
    <div class="pie-bajo">
        <p class="text-center"> &copy; 2023 Copyright <a href="#row-contacto">Generado por: MARVENT</a> </p>
    </div>
</footer>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>