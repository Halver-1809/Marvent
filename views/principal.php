<!DOCTYPE html>
<html lang="es">
<?php
session_start();
if(!$_SESSION['UsuEmail'])
{
  header('location:../views/login.php');
}
?>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRINCIPAL</title>
  <link rel="shortcut icon" href="../resources/imagenes/logo.png" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="../resources/css/principal.css?v=1.1">
</head>


<header>
  <nav class="navbar navbar-expand-md navbar-light">
    <div class="container nav">
   
       <div class="col ">
        <img class="nav-link" src="../resources/imagenes/logo pero negro.png" alt="">


       </div>

       <div class="col ">
        <h1 class="text-cenetr">PRINCIPAL</h1>


       </div>

       <div class="col  ">
          <form class="d-flex">
            <button class="btn btn-light"type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"></path>
        <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"></path>
      </svg></button>
          </form>
        
     


       </div>

         
    </div>
  </nav>
</header>

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">CERRAR SESIÓN </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ¿Seguro que desea cerrar session?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">ATRAS</button>
        <a href="../controllers/closeSession.php"><button type="button" class="btn btn-warning">CERRAR</button></a>
      </div>
    </div>
  </div>
</div>
      </div>
    </div>

<main>
    <body>
    <div class="row" id="row-modulos">

    

<div class="container py-5" >
<div class="row">

   
  </div>
 <div class="row row-cols-1 row-cols-md-2 g-4" id="row-modulos">

  <div class="col text-center">
    <div class="card">
    <img src="../resources/imagenes/caja.png" alt="Modulo">
      <div class="card-body">
        <h5 class="card-title">INVENTARIO</h5>
        <p class="card-text">Registrara los productos, y a su vez los mostrara ordenadamente en una 
          tabla la cual podra buscar en los productos ya registrados cuantos tiene en existencia.</p>
          <a href="inventory.php"><button class="btn btn-light" type="submit">Ir a inventario</button></a>
      </div>
    </div>
  </div>
  <div class="col text-center rr1">
    <div class="card">
    <img src="../resources/imagenes/persona.png" alt="Modulo">
      <div class="card-body">
        <h5 class="card-title">CLIENTES</h5>  
        <p class="card-text">Podra registrar la informacion necesaria de los clientes segun el criterio del administrador
          le permitira poder buscar a uno en especifico.</p>
           <a href="client.php"><button class="btn btn-light" type="submit">Ir a clientes</button></a>
      </div>
    </div>
  </div>
  <div class="col text-center">
    <div class="card">
    <img src="../resources/imagenes/carro.png" alt="Modulo">
      <div class="card-body">
        <h5 class="card-title">PROVEEDORES</h5>
        <p class="card-text">Permitira registrar y guardar los proveedores que tiene el usuario permitiendole
           buscarlos y poder contactarlos con mas facilidad.</p>
           <a href="providers.php"><button class="btn btn-light" type="submit">Ir a proveedores</button></a>
      </div>
    </div>
  </div>
  <div class="col text-center rr1">
    <div class="card">
    <img src="../resources/imagenes/canasta1.png" alt="Modulo">
      <div class="card-body">
        <h5 class="card-title">VENTAS</h5>
        <p class="card-text">Permitira hacer una venta donde se agregaran los productos que se van a vender el cliente, 
          mostrando la cantidad de productos vendidos y el precio total.</p>
          <a href="sales.php"></a><button class="btn btn-light" type="submit">Ir a ventas</button>
      </div>
    </div>
  </div>
</div>
</div>
</div>

    <footer class="row" id="row-pie">
    <div class="container">
      <div class="row">

        

        <div class=" col grupo2 text-center">
          <a href="https://www.facebook.com/"><img src="../resources/imagenes/icono-facebook.png" alt="Facebook"></a>
          <a href="https://www.instagram.com/"><img src="../resources/imagenes/icono-instagram.png" alt="Instagram"></a>
          <a href="https://twitter.com/"><img src="../resources/imagenes/tiwitter-icono.png" alt="Twitter"></a>
          

        </div>

        


      </div> 




    </div>

    <div class="pie-bajo">
      <p class="text-center"> &copy; 2023 Copyright <a href="#row-contacto">Generado por: MARVENT</a> </p>
    </div>


  </footer>
        
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


    </body>
</main>
</html>