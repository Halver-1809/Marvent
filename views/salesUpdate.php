<!DOCTYPE html>
<html lang="es">
<?php
session_start();
if (!$_SESSION['UsuEmail']) {
    header('location:../views/login.php');
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="GESTION DE INVENTARIO DE MINIMERCADOS">
    <meta name="keywords" content="durabilidad, facilidad, inventario">
    <title>VENTAS</title>
    <link rel="icon" href="../resources/imagenes/logo.png">
    <link rel="stylesheet" href="../resources/css/SalUp.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="container nav">

                <div class="col ">
                    <img class="nav-link" src="../resources/imagenes/logo pero negro.png" alt="">


                </div>

                <div class="col ">
                    <h1 class="text-cenetr">VENTAS</h1>


                </div>

                <div class="col  ">
                    <form class="d-flex">
                        <button class="btn btn-light" type="button" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">ATRAS</button>
                    <a href="../controllers/closeSession.php"><button type="button"
                            class="btn btn-warning">CERRAR</button></a>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm"></div>
            <div class="col-sm text-center">

                <h2>DATOS DEL CLIENTE</h2>
                <hr>
                <p>Por favor ingrese el numero de documento del cliente. </p>
                <br>
            </div>
            <div class="col-sm"></div>
        </div>
        <div class="row">
            <div class="col-sm"></div>
            <div class="col-sm text-center">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Cedula de Ciudadania</label>
                    <input type="number" name="doc" class="form-control" id="doc">
                    <br>
                    <button class="btn btn-dark" onclick="BuscarUser()">Buscar</button>
                    <a href="sales.php" class="btn btn-dark">Regresar</a>
                </div>
            </div>
            <div class="col-sm"></div>
        </div>
        <div class="container bg-warning text-center" id="info-message" style="display: none;">
            <h3> <i class="bi bi-exclamation-triangle-fill"></i>Atención.</h3>
            <hr>
            <p>El campo documento esta vacio.</p>
            <br>
        </div>
        <br>
        <div class="container">
            <div class="row" style="background-color: #F4EBDF;">
                <div class="col-sm">
                    <br>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nombre</label>
                        <input type="text" name="ClieNombre" class="form-control" id="ClieNombre" readonly>

                    </div>
                </div>
                <div class="col-sm">
                    <br>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Telefono personal</label>
                        <input type="text" name="ClieTelPersonal" class="form-control" id="ClieTelPersonal" readonly>

                    </div>
                </div>
            </div>
            <div class="row" style="background-color: #F4EBDF;">
                <div class="col-sm">
                    <br>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Dirreción</label>
                        <input type="text" name="ClieDireccion" id="CLieDireccion" class="form-control" readonly>

                    </div>
                </div>
                <div class="col-sm">
                    <br>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Correo</label>
                        <input ttype="text" name="ClieEmailPersonal" id="ClieEmailPersonal" class="form-control"
                            id="exampleInputEmail1" readonly>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <br>
    <br>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm">
            </div>
            <div class="col-sm text-center">
                <h2>Detalle Factura</h2>
                <hr>
                <p>Por favor ingrese el nombre del Producto del cliente. </p>
                <br>
            </div>
            <div class="col-sm">

            </div>
        </div>
        <div class="row">
            <div class="col-sm"></div>
            <div class="col-sm text-center">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre del producto</label>
                    <input type="text" name="prod" class="form-control" id="prod">
                    <br>
                    <button class="btn btn-dark" onclick="BuscarProd()">Buscar</button>

                </div>
            </div>
            <div class="col-sm"></div>
        </div>

        <div class="container" style="background-color: #F4EBDF;">
            <div class="row">
                <div class="col-sm">
                    <br>
                    <div class="mb-3">
                        <input type="text" name="IdProducto" id="IdProducto" class="form-control "
                            placeholder="Codigo del Producto" readonly>

                    </div>
                </div>
                <div class="col-sm">
                    <br>
                    <div class="mb-3">
                        <input type="text" name="ProdNombreProducto" id="ProdNombreProducto" class="form-control"
                            placeholder="Nombre del Producto">

                    </div>
                </div>
                <div class="col-sm">
                    <br>
                    <div class="mb-3">
                        <input type="text" name="ProdPrecio" id="ProdPrecio" class="form-control"
                            placeholder="Precio unitario" readonly>
                    </div>
                </div>
                <div class="col-sm">
                    <br>
                    <div class="mb-3">
                        <input type="text" name="ProdMarca" id="ProdMarca" class="form-control"
                            placeholder="Marca producto" readonly>
                    </div>
                </div>
                <div class="col-sm">
                    <br>
                    <div class="mb-3">
                        <input type="text" name="ProdFechaExpedicion" id="ProdFechaExpedicion" class="form-control"
                            placeholder="Fecha expiración" readonly>
                    </div>
                </div>
                <div class="col-sm">
                    <br>
                    <div class="mb-3">
                        <input type="number" name="ProdCantidad" id="ProdCantidad" class="form-control"
                            placeholder="Cantidad en unidades">
                    </div>
                </div>
                <div class="col-sm">
                    <br>
                    <div class="mb-3">
                        <button class="btn btn-dark" onclick="AgregarFact()"><i
                                class="bi bi-plus-circle"></i>&nbsp;&nbsp;&nbsp;Agregar</button>
                    </div>
                </div>
            </div>
            <br>
        </div>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8 text-center">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>
                                    Codigo
                                </th>
                                <th>
                                    Nombre
                                </th>
                                <th>
                                    Precio
                                </th>
                                <th>
                                    Marca
                                </th>
                                <th>
                                    Fecha Expiración
                                </th>
                                <th>
                                    Cantidad U/N
                                </th>
                            </tr>
                        </thead>
                        <tbody id="cuerpo-tabla">

                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="5">Suma Total</td>
                                <td id="idTotal"></td>
                            </tr>
                        </tfoot>
                    </table>
                    <div>
                        <button class="btn btn-dark" onclick="EnviarVenta()">Hacer Venta</button>

                    </div>
                    <br>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
    </div>

    <footer class="container-fluid">
        <div class="grupo1 ">
            <img src="../resources/imagenes/logo pero negro.png" alt="icono llamar">
        </div>
        <div class="grupo2 ">
            <a href="https://www.facebook.com"><img src="../resources/imagenes/icono-facebook.png"
                    alt="icono de instagram"></a>
            <a href="https://www.instagram.com"><img src="../resources/imagenes/icono-instagram.png"
                    alt="icono de icono-facebook"></a>
            <a href="https://twitter.com/twitter"><img src="../resources/imagenes/tiwitter-icono.png"
                    alt="icono de tiwtter"></a>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"
        integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>


</body>

<script>

    function BuscarUser() {
        let documento = $('#doc').val();
        if (documento) {
            $('#info-message').hide('400');
            consultarUser(documento);
        } else {
            $('#info-message').show('400');
            return false;
        }
    }

    function BuscarProd() {
        let nombreP = $('#prod').val();
        if (nombreP) {
            $('#info-message').hide('400');
            consultarProd(nombreP);
        } else {
            $('#info-message').show('400');
            return false;
        }
    }

    function consultarUser(documento) {

        $.ajax({

            url: '../controllers/consultarUser.php?doc=' + documento,
            data: {},
            type: 'GET',
            dataType: 'json',

            success: function (json) {
                $('#ClieNombre').val(json['2']);
                $('#ClieTelPersonal').val(json['3']);
                $('#CLieDireccion').val(json['4']);
                $('#ClieEmailPersonal').val(json['5']);
            },

            error: function (xhr, status) {
                alert('Disculpe, existió un problema');
            },
            complete: function (xhr, status) {
            }
        });
    }


    function consultarProd(nombreP) {

        $.ajax({
            url: '../controllers/consultarProd.php?prod=' + nombreP,
            data: {},
            type: 'GET',
            dataType: 'json',

            success: function (json) {
                $('#IdProducto').val(json['0']);
                $('#ProdNombreProducto').val(json['1'])
                $('#ProdPrecio').val(json['2']);
                $('#ProdMarca').val(json['3']);
                $('#ProdFechaExpedicion').val(json['4']);
            },

            error: function (xhr, status) {
                alert('Disculpe, existió un problema');
            },

            complete: function (xhr, status) {

            }
        });
    }

    function ActualizarSumaTotal() {
        var sumaTotal = 0;

        $('#cuerpo-tabla tr').each(function () {
            var montoTotal = parseFloat($(this).find('td:last').text());

            sumaTotal += montoTotal;
        });


        $('#idTotal').text(sumaTotal.toFixed(0));
    }

    function AgregarFact() {

        var idProducto = $('#IdProducto').val();
        var nombreProducto = $('#ProdNombreProducto').val();
        var precioProducto = parseFloat($('#ProdPrecio').val());
        var marcaProducto = $('#ProdMarca').val();
        var fechaExpiracionProducto = $('#ProdFechaExpedicion').val();
        var cantidadProducto = parseInt($('#ProdCantidad').val());


        var montoTotal = precioProducto * cantidadProducto;


        var nuevaFila = '<tr>' +
            '<td>' + idProducto + '</td>' +
            '<td>' + nombreProducto + '</td>' +
            '<td>' + precioProducto.toFixed(0) + '</td>' +
            '<td>' + marcaProducto + '</td>' +
            '<td>' + fechaExpiracionProducto + '</td>' +
            '<td>' + cantidadProducto + '</td>' +
            '<td>' + montoTotal.toFixed(0) + '</td>' +
            '</tr>';


        $('#cuerpo-tabla').append(nuevaFila);
        ActualizarSumaTotal();

    }

    function EnviarVenta() {
        var documentoCliente = $('#doc').val(); 
        var precioTotal = parseFloat($('#idTotal').text()); 
        var correoSesion = <?php echo json_encode($_SESSION['UsuEmail']); ?>; 


        console.log("Correo de sesión:", correoSesion);

        if (!documentoCliente || isNaN(precioTotal) || precioTotal <= 0) {
            alert('Por favor, complete los campos correctamente.');
            return;
        }

        $.ajax({
            url: '../controllers/buscarIdClie.php',
            method: 'GET',
            data: { documentoCliente: documentoCliente },
            success: function (idCliente) {
                if (idCliente !== '') {
                        
                    $.ajax({
                        url: '../controllers/buscarIdUsu.php',
                        method: 'GET',
                        data: { correoSesion: correoSesion },
                        success: function (idUsuario) {
                            if (idUsuario !== '') {

                                $.ajax({
                                    url: '../controllers/generarVenta.php',
                                    method: 'POST',
                                    data: { precioTotal: precioTotal, idCliente: idCliente, idUsuario: idUsuario },
                                    success: function (response) {

                                        window.location.href = '../views/sales.php?message=success';
                                    },
                                    error: function (xhr, status) {
                                        alert('Error al hacer la venta.');
                                    }
                                });
                            } else {
                                alert('No se encontró el ID del usuario.');
                            }
                        },
                        error: function (xhr, status) {
                            alert('Error al buscar el ID del usuario.');
                        }
                    });
                } else {
                    alert('No se encontró el cliente.');
                }
            },
            error: function (xhr, status) {
                alert('Error al buscar el ID del cliente.');
            }
        });
    }
</script>

</HTml>