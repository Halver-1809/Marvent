<!DOCTYPE html>
<html lang="es">
<?php
session_start();
include '../views/helpers/headInventory.php';
include '../models/home.php';
?>
<!--BARRA DE ARIBA-->
<section class="navbar  edit">
  <div class="container-fluid ">
    <div class="col-xxl-4 text-center col-xl-4 col-md-4 col-ms-12 col-12">
      <img src="../resources/imagenes/logo.png" alt="logo" width="80px" height="80px">
    </div>
    <div class="col-xxl-4 text-center  col-xl-4 col-md-4 col-ms-12 col-12">
      <h1>
        EDITAR VENTAS
      </h1>
    </div>
    <div class="col-xxl-4 text-center  col-xl-4 col-md-4 col-ms-12 col-12">
      <p> empleado o
        administrador</p>
    </div>
  </div>
</section>

<section class="container-fluid">
  <div class="row">
    <!--BARRA DE NAVEGACION-->
    <nav class="d-flex col-xxl-12 col-xl-12 col-md-12 edit5 ">
      <h5 class="modal-title" id="exampleModalLabel">Agregar Productos</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

      <div class="modal-body text-lg-center ingresar">
        <form action="../controllers/editarVent" method="POST">
          <p>Precio Total</p>

          <?php

          $id = $_GET['id'];

          include '../models/home.php';

          $sql = "SELECT * from ventas where IdVentas=".$_REQUEST['id'];

          $resultado = $conn->query($sql);
          $row = $resultado->fetch_assoc();
          ?>

          <input type="hidden" name="Id" value="<?php echo $row['IdVentas'];?>">
          <input type="text" name="PrecioTotal" required placeholder="preciotatal" value="<?php echo $row['VentPrecioTotal'] ?>"> 
          <p>Cantidad Total</p>
          <input type="text" name="CantidadTotal" required placeholder="cantidadtotal" value="<?php echo $row['VentCantidadTotal'] ?>">
          <p>Nombre del cliente</p>
          <input type="text" name="ClieNombre" required placeholder="nombreclie" value="<?php echo $row['IdClienteFK'] ?>">
          <p>Nombre de usuario</p>
          <input type="text" name="UsuNombre" required placeholder="nombreusu" value="<?php echo $row['IdUsuariosFK'] ?>">

      </div>
      <div class="modal-footer">
        <a href="sales.php"><button type="button" class="btn btn-secondary"
            data-bs-dismiss="modal">Cancelar</button></a>
        <button type="submit" name="enviar" class="btn btn-primary">Actualizar</button>

      </div>
      </form>
  </div>
  </div>
</section>

<footer class="container-fluid">
  <div class="grupo1 ">
    <img src="../resources/imagenes/logo pero negro.png" alt="icono llamar">
  </div>
  <div class="grupo2 ">
    <a href="https://www.facebook.com"><img src="../resources/imagenes/icono-instagram.png"
        alt="icono de instagram"></a>
    <a href="https://www.instagram.com"><img src="../resources/imagenes/icono-facebook.png"
        alt="icono de icono-facebook"></a>
    <a href="https://twitter.com/twitter"><img src="../resources/imagenes/tiwitter-icono.png"
        alt="icono de tiwtter"></a>
  </div>
</footer>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>