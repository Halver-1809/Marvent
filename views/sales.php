<!DOCTYPE html>
<html lang="es">

<head>
    <!--METADATOS-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="GESTION DE INVENTARIO DE MINIMERCADOS">
    <meta name="keywords" content="durabilidad, facilidad, inventario">
    <!--TITULO-->
    <title>VENTAS</title>
    <!--favicon-->
    <link rel="icon" href="../resources/imagenes/logo.png">
    <!--LINKS-->
    <link rel="stylesheet" href="../resources/css/style1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <!--LINK DE ICONOS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

</head>
<?php
session_start();
if (!$_SESSION['UsuEmail']) {
    header('location:../views/login.php');
}


?>

<body>
    <!--BARRA DE ARIBA-->
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
    <nav class="container-fluid">
        <div class="row">
            <!--BARRA DE NAVEGACION-->
            <nav class="d-flex col-xxl-3 col-xl-3 col-md-5 h-5 edit2">
                <div class="navegation d-grid  justify-content-center align-items-end col-md-4 col-sm-4">
                    <a href="principal.php"><button><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                <path
                                    d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z" />
                            </svg> Principal</button></a>
                    <a href="inventory.php"><button><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-card-checklist" viewBox="0 0 16 16">
                                <path
                                    d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                                <path
                                    d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z" />
                            </svg> Inventario</button></a>
                    <a href="providers.php"><button><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-bus-front" viewBox="0 0 16 16">
                                <path
                                    d="M5 11a1 1 0 1 1-2 0 1 1 0 0 1 2 0Zm8 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0Zm-6-1a1 1 0 1 0 0 2h2a1 1 0 1 0 0-2H7Zm1-6c-1.876 0-3.426.109-4.552.226A.5.5 0 0 0 3 4.723v3.554a.5.5 0 0 0 .448.497C4.574 8.891 6.124 9 8 9c1.876 0 3.426-.109 4.552-.226A.5.5 0 0 0 13 8.277V4.723a.5.5 0 0 0-.448-.497A44.303 44.303 0 0 0 8 4Zm0-1c-1.837 0-3.353.107-4.448.22a.5.5 0 1 1-.104-.994A44.304 44.304 0 0 1 8 2c1.876 0 3.426.109 4.552.226a.5.5 0 1 1-.104.994A43.306 43.306 0 0 0 8 3Z" />
                                <path
                                    d="M15 8a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1V2.64c0-1.188-.845-2.232-2.064-2.372A43.61 43.61 0 0 0 8 0C5.9 0 4.208.136 3.064.268 1.845.408 1 1.452 1 2.64V4a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1v3.5c0 .818.393 1.544 1 2v2a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5V14h6v1.5a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-2c.607-.456 1-1.182 1-2V8ZM8 1c2.056 0 3.71.134 4.822.261.676.078 1.178.66 1.178 1.379v8.86a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 11.5V2.64c0-.72.502-1.301 1.178-1.379A42.611 42.611 0 0 1 8 1Z" />
                            </svg> Proveedores</button></a>
                    <a href="client.php"><button><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-person-fill-add" viewBox="0 0 16 16">
                                <path
                                    d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path
                                    d="M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Z" />
                            </svg> Cliente</button></a>
                    <a href="sales.php"><button><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                <path
                                    d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z" />
                                <path
                                    d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                            </svg> Venta</button></a>
                </div>
            </nav>
            <!--MOSTAR DATOS Y BUSCARLOS-->
            <div class="col-xxl-9 col-xl-9 col-md-7 edit5">
                <!--boton de buscar-->
                <div class="uno">
                    <div class="text-md-center text-ms-start">
                        <main>
                            <div class="container py-4 text-center">
                                <div class="row g-4">
                                    <div class="col-auto">
                                        <label for="num_registros" class="col-form-label">Mostrar: </label>
                                    </div>
                                    <div class="col-auto">
                                        <select name="num_registros" id="num_registros" class="form-select">
                                            <option value="5">5</option>
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select>
                                    </div>
                                    <div class="col-auto">
                                        <label for="num_registros" class="col-form-label">registros </label>
                                    </div>
                                    <div class="col-5"></div>
                                    <div class="col-auto">
                                        <label for="campo" class="col-form-label">Buscar: </label>
                                    </div>
                                    <div class="col-auto">
                                        <input type="text" name="campo" id="campo" class="form-control">
                                    </div>
                                    <div class="col-auto">
                                        <a href="../views/salesUpdate.php"><button class="btn btn-dark">Registar
                                                Venta</button></a>
                                    </div>
                                </div>
                                <div class="row py-4">
                                    <div class="col">
                                        <table class="table table-sm table-bordered table-striped">
                                            <thead>
                                                <th class="sort asc">Id Ventas</th>
                                                <th class="sort asc">Precio Total</th>
                                                <th class="sort asc">Cantidad Total</th>
                                                <th class="sort asc">Nombre del cliente</th>
                                                <th class="sort asc">Nombre del suario</th>
                                                <th></th>
                                                <th></th>
                                            </thead>
                                            <!-- El id del cuerpo de la tabla. -->
                                            <tbody id="content">
                                            </tbody>
                                        </table>
                                        <?php
                                        $message = $_GET['message'] ?? '';

                                        if ($message === 'success') {
                                            echo "<div class='alert alert-success' id='myAlert' role='alert'>Venta realizada con éxito.</div>";
                                        } elseif ($message === 'error') {
                                            echo "<div class='alert alert-danger' role='alert'>Error al realizar la venta. Por favor, inténtelo de nuevo.</div>";
                                        }
                                        ?>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <label id="lbl-total"></label>
                                        </div>
                                        <div class="col-6" id="nav-paginacion"></div>
                                        <input type="hidden" id="pagina" value="1">
                                        <input type="hidden" id="orderCol" value="0">
                                        <input type="hidden" id="orderType" value="asc">
                                    </div>
                                </div>
                        </main>

                        <script>
                            /* Llamando a la función getData() */
                            getData()
                            /* Escuchar un evento keyup en el campo de entrada y luego llamar a la función getData. */
                            document.getElementById("campo").addEventListener("keyup", function () {
                                getData()
                            }, false)
                            document.getElementById("num_registros").addEventListener("change", function () {
                                getData()
                            }, false)
                            /* Peticion AJAX */
                            function getData() {
                                let input = document.getElementById("campo").value
                                let num_registros = document.getElementById("num_registros").value
                                let content = document.getElementById("content")
                                let pagina = document.getElementById("pagina").value
                                let orderCol = document.getElementById("orderCol").value
                                let orderType = document.getElementById("orderType").value
                                if (pagina == null) {
                                    pagina = 1
                                }
                                let url = "../controllers/load4.php"
                                let formaData = new FormData()
                                formaData.append('campo', input)
                                formaData.append('registros', num_registros)
                                formaData.append('pagina', pagina)
                                formaData.append('orderCol', orderCol)
                                formaData.append('orderType', orderType)
                                fetch(url, {
                                    method: "POST",
                                    body: formaData
                                }).then(response => response.json())
                                    .then(data => {
                                        content.innerHTML = data.data
                                        document.getElementById("lbl-total").innerHTML = 'Mostrando ' + data
                                            .totalFiltro +
                                            ' de ' + data.totalRegistros + ' registros'
                                        document.getElementById("nav-paginacion").innerHTML = data.paginacion
                                    }).catch(err => console.log(err))
                            }

                            function nextPage(pagina) {
                                document.getElementById('pagina').value = pagina
                                getData()
                            }
                            let columns = document.getElementsByClassName("sort")
                            let tamanio = columns.length
                            for (let i = 0; i < tamanio; i++) {
                                columns[i].addEventListener("click", ordenar)
                            }

                            function ordenar(e) {
                                let elemento = e.target
                                document.getElementById('orderCol').value = elemento.cellIndex
                                if (elemento.classList.contains("asc")) {
                                    document.getElementById("orderType").value = "asc"
                                    elemento.classList.remove("asc")
                                    elemento.classList.add("desc")
                                } else {
                                    document.getElementById("orderType").value = "desc"
                                    elemento.classList.remove("desc")
                                    elemento.classList.add("asc")
                                }
                                getData()
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <footer class="row" id="row-pie">
            <div class="container">
                <div class="row">
                    <div class=" col grupo2 text-center">
                        <a href="https://www.facebook.com/"><img src="../resources/imagenes/icono-facebook.png"
                                alt="Facebook"></a>
                        <a href="https://www.instagram.com/"><img src="../resources/imagenes/icono-instagram.png"
                                alt="Instagram"></a>
                        <a href="https://twitter.com/"><img src="../resources/imagenes/tiwitter-icono.png"
                                alt="Twitter"></a>
                    </div>
                </div>
            </div>
            <div class="pie-bajo">
                <p class="text-center"> &copy; 2023 Copyright <a href="#row-contacto">Generado por: MARVENT</a> </p>
            </div>
        </footer>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
        </script>
    <script>
        var alertBox = document.getElementById('myAlert');


        setTimeout(function () {
            alertBox.style.display = 'none';
        }, 5000); 
    </script>
    </main>
</body>

</html>