<!--start wrapper-->
<div class="wrapper">
    <!-- start page content wrapper-->
    <div class="page-content-wrapper">
        <!-- start page content-->
        <div class="page-content" style="margin-bottom: -3%;">

            <!--start breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Gestor orden de compra </div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0 align-items-center">
                            <li class="breadcrumb-item"><a href="inicio"><ion-icon name="home-outline"></ion-icon></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Consulta orden de compra</li>
                        </ol>

                    </nav>

                </div>
                <!-- <div class="ms-auto">
              <div class="btn-group">
                <button type="button" class="btn btn-outline-primary">Settings</button>
                <button type="button" class="btn btn-outline-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
                  <a class="dropdown-item" href="javascript:;">Another action</a>
                  <a class="dropdown-item" href="javascript:;">Something else here</a>
                  <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
                </div>
              </div>
            </div> -->
            </div>
            <!--end breadcrumb-->
            <div class="btn-group" role="group" aria-label="Basic example">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0 align-items-center">



                        <li class="breadcrumb-item active" aria-current="page"><button type="button" class="btn btn-info px-5" style="color: #fff;" data-bs-toggle="modal" data-bs-target="#ordenCom"><i class="fadeIn animated bx bx-user-plus"></i>Orden de compra</button></li>
                        <li class="breadcrumb-item active" aria-current="page"><button type="button" class="btn btn-info px-5" style="color: #fff;" data-bs-toggle="modal" data-bs-target="#ordenCom2"><i class="fadeIn animated bx bx-user-plus"></i>Orden de compra 22</button></li>
                        
                    </ol>
                </nav>
            </div>
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3"></div>

            </div>

        </div>

        <!-- start page content-->
        <div class="page-content" style="padding: 0.5rem; margin-bottom: -3%;">

            <!--start breadcrumb-->

            <!--end breadcrumb-->

            <hr />
            <h6 class="mb-0 text-uppercase"></h6>
            <hr />
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example2" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>RFC</th>
                                    <th>Dirección</th>
                                    <th>Teléfono</th>
                                    <th>ATN</th>
                                    <th>Correo electrónico</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $verP = ProveedoresC::VerProveedoresC();
                                ?>
                                <?php
                                //abrimos un foreach con la variable respuesta traiga un echo con lo que tenemos como registros en la tabla
                                foreach ($verP as $key => $value) {
                                ?>
                                    <tr>
                                        <td><?php echo $value["nombre"] ?></td>
                                        <td><?php echo $value["rfc"] ?></td>
                                        <td><?php echo $value["direccion"] ?></td>
                                        <td><?php echo $value["telefono"] ?></td>
                                        <td><?php echo $value["atn"] ?></td>
                                        <td><?php echo $value["email"] ?></td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-warning"><i class="fadeIn animated bx bx-edit-alt"></i></button>
                                                <button class="btn btn-danger "><i class="fadeIn animated bx bx-trash-alt"></i></button>
                                            </div>
                                        </td>

                                    </tr <?php } ?> ?>

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page content-->
    </div>

    <!--Start Back To Top Button-->
    <a href="javaScript:;" class="back-to-top"><ion-icon name="arrow-up-outline"></ion-icon></a>
    <!--End Back To Top Button-->

    <!--start overlay-->
    <div class="overlay nav-toggle-icon"></div>
    <!--end overlay-->

</div>

<!-- Modal  Solicitud-->

<div class="modal fade" id="solicitudCom" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Solicitud de compra</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="row">
                <div class="col-xl-7 mx-auto">

                    <hr />
                    <div class="card">
                        <div class="card-body">
                            <div class="p-4 border rounded">
                                <form class="row g-3 needs-validation" novalidate>
                                    <!-- style="background-color: #1b4e88;color: #fff;
                                     padding-bottom: 2%; text-align:center;" -->
                                    <h6 class="mb-0 text-uppercase">VENDOR / SUMINISTRADOR</h6>
                                    <div class="col-md-6">
                                        <label for="validationCustom01" class="form-label">Nombre</label>
                                        <input class="form-control" list="datalistOptions" id="validationCustom01" required>
                                        <datalist id="datalistOptions">
                                            <option value="Mexico">
                                            </option>
                                            <option value="Bolivia">
                                            </option>
                                            <option value="Brasil">
                                            </option>
                                            <option value="Argentina">
                                            </option>
                                            <option value="Russia">
                                            </option>
                                        </datalist>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="validationCustom05" class="form-label">RFC</label>
                                        <input type="text" class="form-control" id="validationCustom05" required>
                                        <div class="invalid-feedback">Favor de rellenar este campo.</div>
                                    </div>

                                    <div class="col-md-3">
                                        <label for="validationCustom05" class="form-label">Teléfono</label>
                                        <input type="text" class="form-control" id="validationCustom05" required>
                                        <div class="invalid-feedback">Please provide a valid zip.</div>
                                    </div>


                                    <div class="col-md-6">
                                        <label for="validationCustom03" class="form-label">Dirección</label>
                                        <input type="text" class="form-control" id="validationCustom03" required>
                                        <div class="invalid-feedback">Favor de rellenar este campo.</div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="validationCustom05" class="form-label">ATN</label>
                                        <input type="text" class="form-control" id="validationCustom05" required>
                                        <div class="invalid-feedback">Please provide a valid zip.</div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="validationCustom05" class="form-label">Email</label>
                                        <input type="text" class="form-control" id="validationCustom05" required>
                                        <div class="invalid-feedback">Please provide a valid zip.</div>
                                    </div>
                                    <div hidden class="col-md-12">
                                        <label for="validationCustom03" class="form-label">Dirección</label>
                                        <input type="text" class="form-control" id="validationCustom03" required>
                                        <div class="invalid-feedback">Please provide a valid city.</div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">

                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-xl-5 mx-auto">

                    <hr />
                    <div class="card">
                        <div class="card-body">
                            <div class="p-4 border rounded">
                                <form class="row g-3 needs-validation" novalidate>
                                    <!-- style="background-color: #1b4e88;color: #fff;
                    padding-bottom: 4%; text-align:center;" -->
                                    <h6 class="mb-0 text-uppercase">SHIP TO /LUGAR DE ENTREGA</h6>
                                    <div class="col-md-4">
                                        <label for="validationCustom01" class="form-label">Lugar/entrega</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationCustom02" class="form-label">ATN</label>
                                        <input type="text" class="form-control" id="validationCustom02" value="" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationCustom01" class="form-label">CP</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>

                                    <div class="col-md-8">
                                        <label for="validationCustom03" class="form-label">Dirección</label>
                                        <input type="text" class="form-control" id="validationCustom03" required>
                                        <div class="invalid-feedback">Please provide a valid city.</div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationCustom03" class="form-label">Teléfono</label>
                                        <input type="text" class="form-control" id="validationCustom03" required>
                                        <div class="invalid-feedback">Please provide a valid city.</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationCustom05" class="form-label">Solicitante</label>
                                        <input type="text" class="form-control" id="validationCustom05" required>
                                        <div class="invalid-feedback">Please provide a valid zip.</div>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="validationCustom05" class="form-label">Email</label>
                                        <input type="text" class="form-control" id="validationCustom05" required>
                                        <div class="invalid-feedback">Please provide a valid zip.</div>
                                    </div>



                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xl-12 mx-auto">

                    <hr />
                    <div class="card">
                        <div class="card-body">
                            <div class="p-4 border rounded">
                                <form class="row g-3 needs-validation" novalidate>


                                    <div class="col-md-2">
                                        <label for="validationCustom01" class="form-label">Requisitioner / Solicitante</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="validationCustom02" class="form-label">Request by/ Firma del supervisor</label>
                                        <input type="text" class="form-control" id="validationCustom02" value="" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="validationCustom02" class="form-label">Ship via / Forma de envio</label>
                                        <input type="text" class="form-control" id="validationCustom02" value="" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="validationCustom02" class="form-label">Incoterms</label>
                                        <input type="text" class="form-control" id="validationCustom02" value="" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationCustom05" class="form-label">Lead Time/ Plazo de entrega</label>
                                        <input type="text" class="form-control" id="validationCustom05" required>
                                        <div class="invalid-feedback">Please provide a valid zip.</div>
                                    </div>

                                    <br>
                                    <br>
                                    <br>
                                    <div class="col-md-4">
                                        <label for="validationCustom02" class="form-label">Project / Proyecto</label>
                                        <input type="text" class="form-control" id="validationCustom02" value="" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="validationCustom04" class="form-label">Insurance included/ Seguro incluido</label>
                                        <select class="form-select" id="validationCustom04" required>
                                            <option selected disabled value="">...</option>
                                            <option>Sí</option>
                                            <option>No</option>

                                        </select>
                                        <div class="invalid-feedback">Please select a valid state.</div>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="validationCustom05" class="form-label">Vendor offer / Oferta suministrador</label>
                                        <input type="text" class="form-control" id="validationCustom05" required>
                                        <div class="invalid-feedback">Please provide a valid zip.</div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationCustom05" class="form-label">Special Instructions / Condiciones Especiales</label>
                                        <input type="text" class="form-control" id="validationCustom05" required>
                                        <div class="invalid-feedback">Please provide a valid zip.</div>
                                    </div>



                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xl-12 mx-auto">

                    <hr />
                    <div class="card" style="margin-top: -3%;">
                        <div class="card-body">
                            <div class="p-4 border rounded">
                                <form class="row g-3 needs-validation" novalidate>

                                    <div class="col-md-2">
                                        <label for="validationCustom01" class="form-label">Requisitioner / Solicitante</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="validationCustom02" class="form-label">Request by/ Firma del supervisor</label>
                                        <input type="text" class="form-control" id="validationCustom02" value="" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="validationCustom02" class="form-label">Ship via / Forma de envio</label>
                                        <input type="text" class="form-control" id="validationCustom02" value="" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="validationCustom02" class="form-label">Incoterms</label>
                                        <input type="text" class="form-control" id="validationCustom02" value="" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="validationCustom05" class="form-label">Lead Time/ Plazo de entrega</label>
                                        <input type="text" class="form-control" id="validationCustom05" required>
                                        <div class="invalid-feedback">Please provide a valid zip.</div>
                                    </div>
                                    <div class="col-md-2" style="margin-top: 2.3%;">
                                        <button class="btn btn-success" name="agregar_registros" title="Agregar fila" value="" onClick="AgregarMas();"><i class="lni lni-plus"></i></button>
                                        <button class="btn btn-danger" name="borrar_registros" title="Eliminar fila" value="Borrar Campos" onClick="BorrarRegistro();"><i class="lni lni-trash"></i></button>
                                    </div>



                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xl-6 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="payment-mode">
                                        <h5 class="mb-3">Req. By: Firma de solicitante</h5>
                                        <img src="assets/images/icons/visa.png" width="150" class="p-2 border bg-light rounded" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="payment-mode">
                                        <h5 class="mb-3">Auth. By: Firma Autoizador</h5>
                                        <img src="assets/images/icons/visa.png" width="150" class="p-2 border bg-light rounded" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-xl-6 mx-auto">
                    <div class="card mb-0">
                        <div class="card-body">
                            <p class="mb-2">Subtotal: <span class="float-end">--</span>
                            </p>
                            <p class="mb-2">Taxes: <span class="float-end">--</span>
                            </p>
                            <p class="mb-2">Shipping: <span class="float-end">--</span>
                            </p>
                            <p class="mb-0">Other/Otros; <span class="float-end">--</span>
                            </p>
                            <p class="mb-0">Moneda: <span class="float-end">--</span>
                            </p>
                            <div class="my-3 border-top"></div>
                            <h5 class="mb-0">Total: <span class="float-end">--</span></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal  Solicitud-->

<div class="modal fade" id="ordenCom" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Orden de compra</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="row">
                <div class="col-xl-7 mx-auto">

                    <hr />
                    <div class="card">
                        <div class="card-body">
                            <div class="p-4 border rounded">
                                <form class="row g-3 needs-validation" novalidate>
                                    <!-- style="background-color: #1b4e88;color: #fff;
                                     padding-bottom: 2%; text-align:center;" -->
                                    <h6 class="mb-0 text-uppercase">VENDOR / SUMINISTRADOR</h6>
                                    <div class="col-md-6">
                                        <label for="validationCustom01" class="form-label">Nombre</label>
                                        <input class="form-control" list="datalistOptions" id="validationCustom01" required>
                                        <datalist id="datalistOptions">
                                            <option value="Mexico">
                                            </option>
                                            <option value="Bolivia">
                                            </option>
                                            <option value="Brasil">
                                            </option>
                                            <option value="Argentina">
                                            </option>
                                            <option value="Russia">
                                            </option>
                                        </datalist>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="validationCustom05" class="form-label">RFC</label>
                                        <input type="text" class="form-control" id="validationCustom05" required>
                                        <div class="invalid-feedback">Favor de rellenar este campo.</div>
                                    </div>

                                    <div class="col-md-3">
                                        <label for="validationCustom05" class="form-label">Teléfono</label>
                                        <input type="text" class="form-control" id="validationCustom05" required>
                                        <div class="invalid-feedback">Please provide a valid zip.</div>
                                    </div>


                                    <div class="col-md-6">
                                        <label for="validationCustom03" class="form-label">Dirección</label>
                                        <input type="text" class="form-control" id="validationCustom03" required>
                                        <div class="invalid-feedback">Favor de rellenar este campo.</div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="validationCustom05" class="form-label">ATN</label>
                                        <input type="text" class="form-control" id="validationCustom05" required>
                                        <div class="invalid-feedback">Please provide a valid zip.</div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="validationCustom05" class="form-label">Email</label>
                                        <input type="text" class="form-control" id="validationCustom05" required>
                                        <div class="invalid-feedback">Please provide a valid zip.</div>
                                    </div>
                                    <div hidden class="col-md-12">
                                        <label for="validationCustom03" class="form-label">Dirección</label>
                                        <input type="text" class="form-control" id="validationCustom03" required>
                                        <div class="invalid-feedback">Please provide a valid city.</div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">

                                        </div>
                                    </div>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-xl-5 mx-auto">

                    <hr />
                    <div class="card">
                        <div class="card-body">
                            <div class="p-4 border rounded">
                                <form class="row g-3 needs-validation" novalidate>
                                    <!-- style="background-color: #1b4e88;color: #fff;
                    padding-bottom: 4%; text-align:center;" -->
                                    <h6 class="mb-0 text-uppercase">SHIP TO /LUGAR DE ENTREGA</h6>
                                    <div class="col-md-4">
                                        <label for="validationCustom01" class="form-label">Lugar/entrega</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationCustom02" class="form-label">ATN</label>
                                        <input type="text" class="form-control" id="validationCustom02" value="" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationCustom01" class="form-label">CP</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>

                                    <div class="col-md-8">
                                        <label for="validationCustom03" class="form-label">Dirección</label>
                                        <input type="text" class="form-control" id="validationCustom03" required>
                                        <div class="invalid-feedback">Please provide a valid city.</div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationCustom03" class="form-label">Teléfono</label>
                                        <input type="text" class="form-control" id="validationCustom03" required>
                                        <div class="invalid-feedback">Please provide a valid city.</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationCustom05" class="form-label">Solicitante</label>
                                        <input type="text" class="form-control" id="validationCustom05" required>
                                        <div class="invalid-feedback">Please provide a valid zip.</div>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="validationCustom05" class="form-label">Email</label>
                                        <input type="text" class="form-control" id="validationCustom05" required>
                                        <div class="invalid-feedback">Please provide a valid zip.</div>
                                    </div>



                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xl-12 mx-auto">

                    <hr />
                    <div class="card">
                        <div class="card-body">
                            <div class="p-4 border rounded">
                                <form class="row g-3 needs-validation" novalidate>


                                    <div class="col-md-2">
                                        <label for="validationCustom01" class="form-label">Requisitioner / Solicitante</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    - <div class="col-md-2">
                                        <label for="validationCustom02" class="form-label">Request by/ Firma del supervisor</label>
                                        <input type="text" class="form-control" id="validationCustom02" value="" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="validationCustom02" class="form-label">Ship via / Forma de envio</label>
                                        <input type="text" class="form-control" id="validationCustom02" value="" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="validationCustom02" class="form-label">Incoterms</label>
                                        <input type="text" class="form-control" id="validationCustom02" value="" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationCustom05" class="form-label">Lead Time/ Plazo de entrega</label>
                                        <input type="text" class="form-control" id="validationCustom05" required>
                                        <div class="invalid-feedback">Please provide a valid zip.</div>
                                    </div>

                                    <br>
                                    <br>
                                    <br>
                                    <div class="col-md-4">
                                        <label for="validationCustom02" class="form-label">Project / Proyecto</label>
                                        <input type="text" class="form-control" id="validationCustom02" value="" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="validationCustom04" class="form-label">Insurance included/ Seguro incluido</label>
                                        <select class="form-select" id="validationCustom04" required>
                                            <option selected disabled value="">...</option>
                                            <option>Sí</option>
                                            <option>No</option>

                                        </select>
                                        <div class="invalid-feedback">Please select a valid state.</div>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="validationCustom05" class="form-label">Vendor offer / Oferta suministrador</label>
                                        <input type="text" class="form-control" id="validationCustom05" required>
                                        <div class="invalid-feedback">Please provide a valid zip.</div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationCustom05" class="form-label">Special Instructions / Condiciones Especiales</label>
                                        <input type="text" class="form-control" id="validationCustom05" required>
                                        <div class="invalid-feedback">Please provide a valid zip.</div>
                                    </div>



                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xl-12 mx-auto">

                    <hr />
                    <div class="card" style="margin-top: -3%;">
                        <div class="card-body">
                            <div class="p-4 border rounded">
                                <form class="row g-3 needs-validation" novalidate>

                                    <div class="col-md-2">
                                        <label for="validationCustom01" class="form-label">Requisitioner / Solicitante</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="validationCustom02" class="form-label">Request by/ Firma del supervisor</label>
                                        <input type="text" class="form-control" id="validationCustom02" value="" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="validationCustom02" class="form-label">Ship via / Forma de envio</label>
                                        <input type="text" class="form-control" id="validationCustom02" value="" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="validationCustom02" class="form-label">Incoterms</label>
                                        <input type="text" class="form-control" id="validationCustom02" value="" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="validationCustom05" class="form-label">Lead Time/ Plazo de entrega</label>
                                        <input type="text" class="form-control" id="validationCustom05" required>
                                        <div class="invalid-feedback">Please provide a valid zip.</div>
                                    </div>
                                    <div class="col-md-2" style="margin-top: 2.3%;">
                                        <button class="btn btn-success" type="button" name="agregar_registros" title="Agregar fila" value="" onClick="AgregarMas();"><i class="lni lni-plus"></i></button>
                                        <button class="btn btn-danger" type="button" name="borrar_registros" title="Eliminar fila" value="Borrar Campos" onClick="BorrarRegistro();"><i class="lni lni-trash"></i></button>
                                    </div>



                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xl-6 mx-auto" style="background-color: #fff;">
                    <div class="card">
                        <div class="card-body" style="padding-top:-1%;">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="mb-0 text-uppercase">Aceptación del pedido/ P.O acknowledgement</h6>
                                    <hr>
                                    <form class="row g-3">

                                        <div class="col-10">
                                            <label class="form-label">Aceptado por:</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-10">
                                            <label class="form-label">Cargo:</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-10">
                                            <label class="form-label">Fecha:</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-10">
                                            <label class="form-label">Firma y sello</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="mb-0 text-uppercase">AUTH. BY: FIRMA AUTORIZADA</h6>
                                    <hr>
                                    <div class="payment-mode">
                                        <h5 class="mb-3">Auth. By: Firma Autorizador</h5>
                                        <img src="vistas/assets/images/icons/visa.png" width="150" class="p-2 border bg-light rounded" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 mx-auto" style="background-color: #fff">
                    <div class="card mb-0">
                        <div class="card-body">
                            <p class="mb-2">Subtotal: <span class="float-end">--</span>
                            </p>
                            <p class="mb-2">Taxes: <span class="float-end">--</span>
                            </p>
                            <p class="mb-2">Shipping: <span class="float-end">--</span>
                            </p>
                            <p class="mb-0">Other/Otros; <span class="float-end">--</span>
                            </p>
                            <p class="mb-0">Moneda: <span class="float-end">--</span>
                            </p>
                            <div class="my-3 border-top"></div>
                            <h5 class="mb-0">Total: <span class="float-end">--</span></h5>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12 mx-auto">

                    <hr />
                    <div class="card" style="margin-top: -3%;">
                        <div class="card-body">
                            <div class="p-4 border rounded">
                                <form class="row g-3 needs-validation" novalidate>

                                    <button class="btn btn-primary" idtype="submit">Submit form</button>



                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>




<div class="modal fade" id="ordenCom2" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Orden de compra</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="row">
                <div class="col-xl-7 mx-auto">

                    <hr />
                    <div class="card">
                        <div class="card-body">
                            <div class="p-4 border rounded">
                <form class="row g-3 needs-validation" novalidate>
                                    <!-- style="background-color: #1b4e88;color: #fff;
                                     padding-bottom: 2%; text-align:center;" -->
                                    <h6 class="mb-0 text-uppercase">VENDOR / SUMINISTRADOR</h6>
                                    <div class="col-md-6">
                                        <label for="validationCustom01" class="form-label">Nombre</label>
                                        <input class="form-control" list="datalistOptions" id="validationCustom01" required>
                                        <datalist id="datalistOptions">
                                            <option value="Mexico">
                                            </option>
                                            <option value="Bolivia">
                                            </option>
                                            <option value="Brasil">
                                            </option>
                                            <option value="Argentina">
                                            </option>
                                            <option value="Russia">
                                            </option>
                                        </datalist>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="validationCustom05" class="form-label">RFC</label>
                                        <input type="text" class="form-control" id="validationCustom05" required>
                                        <div class="invalid-feedback">Favor de rellenar este campo.</div>
                                    </div>

                                    <div class="col-md-3">
                                        <label for="validationCustom05" class="form-label">Teléfono</label>
                                        <input type="text" class="form-control" id="validationCustom05" required>
                                        <div class="invalid-feedback">Please provide a valid zip.</div>
                                    </div>


                                    <div class="col-md-6">
                                        <label for="validationCustom03" class="form-label">Dirección</label>
                                        <input type="text" class="form-control" id="validationCustom03" required>
                                        <div class="invalid-feedback">Favor de rellenar este campo.</div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="validationCustom05" class="form-label">ATN</label>
                                        <input type="text" class="form-control" id="validationCustom05" required>
                                        <div class="invalid-feedback">Please provide a valid zip.</div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="validationCustom05" class="form-label">Email</label>
                                        <input type="text" class="form-control" id="validationCustom05" required>
                                        <div class="invalid-feedback">Please provide a valid zip.</div>
                                    </div>
                                    <div hidden class="col-md-12">
                                        <label for="validationCustom03" class="form-label">Dirección</label>
                                        <input type="text" class="form-control" id="validationCustom03" required>
                                        <div class="invalid-feedback">Please provide a valid city.</div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">

                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-xl-5 mx-auto">

                    <hr />
                    <div class="card">
                        <div class="card-body">
                            <div class="p-4 border rounded">
                                <form class="row g-3 needs-validation" novalidate>
                                    <!-- style="background-color: #1b4e88;color: #fff;
                    padding-bottom: 4%; text-align:center;" -->
                                    <h6 class="mb-0 text-uppercase">SHIP TO /LUGAR DE ENTREGA</h6>
                                    <div class="col-md-4">
                                        <label for="validationCustom01" class="form-label">Lugar/entrega</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationCustom02" class="form-label">ATN</label>
                                        <input type="text" class="form-control" id="validationCustom02" value="" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationCustom01" class="form-label">CP</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>

                                    <div class="col-md-8">
                                        <label for="validationCustom03" class="form-label">Dirección</label>
                                        <input type="text" class="form-control" id="validationCustom03" required>
                                        <div class="invalid-feedback">Please provide a valid city.</div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationCustom03" class="form-label">Teléfono</label>
                                        <input type="text" class="form-control" id="validationCustom03" required>
                                        <div class="invalid-feedback">Please provide a valid city.</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationCustom05" class="form-label">Solicitante</label>
                                        <input type="text" class="form-control" id="validationCustom05" required>
                                        <div class="invalid-feedback">Please provide a valid zip.</div>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="validationCustom05" class="form-label">Email</label>
                                        <input type="text" class="form-control" id="validationCustom05" required>
                                        <div class="invalid-feedback">Please provide a valid zip.</div>
                                    </div>



                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xl-12 mx-auto">

                    <hr />
                    <div class="card">
                        <div class="card-body">
                            <div class="p-4 border rounded">
                                <form class="row g-3 needs-validation" novalidate>


                                    <div class="col-md-2">
                                        <label for="validationCustom01" class="form-label">Requisitioner / Solicitante</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    - <div class="col-md-2">
                                        <label for="validationCustom02" class="form-label">Request by/ Firma del supervisor</label>
                                        <input type="text" class="form-control" id="validationCustom02" value="" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="validationCustom02" class="form-label">Ship via / Forma de envio</label>
                                        <input type="text" class="form-control" id="validationCustom02" value="" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="validationCustom02" class="form-label">Incoterms</label>
                                        <input type="text" class="form-control" id="validationCustom02" value="" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationCustom05" class="form-label">Lead Time/ Plazo de entrega</label>
                                        <input type="text" class="form-control" id="validationCustom05" required>
                                        <div class="invalid-feedback">Please provide a valid zip.</div>
                                    </div>

                                    <br>
                                    <br>
                                    <br>
                                    <div class="col-md-4">
                                        <label for="validationCustom02" class="form-label">Project / Proyecto</label>
                                        <input type="text" class="form-control" id="validationCustom02" value="" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="validationCustom04" class="form-label">Insurance included/ Seguro incluido</label>
                                        <select class="form-select" id="validationCustom04" required>
                                            <option selected disabled value="">...</option>
                                            <option>Sí</option>
                                            <option>No</option>

                                        </select>
                                        <div class="invalid-feedback">Please select a valid state.</div>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="validationCustom05" class="form-label">Vendor offer / Oferta suministrador</label>
                                        <input type="text" class="form-control" id="validationCustom05" required>
                                        <div class="invalid-feedback">Please provide a valid zip.</div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationCustom05" class="form-label">Special Instructions / Condiciones Especiales</label>
                                        <input type="text" class="form-control" id="validationCustom05" required>
                                        <div class="invalid-feedback">Please provide a valid zip.</div>
                                    </div>



                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xl-12 mx-auto">

                    <hr />
                    <div class="card" style="margin-top: -3%;">
                        <div class="card-body">
                            <div class="p-4 border rounded">
                                <form class="row g-3 needs-validation" novalidate>

                                    <div class="col-md-2">
                                        <label for="validationCustom01" class="form-label">Requisitioner / Solicitante</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="validationCustom02" class="form-label">Request by/ Firma del supervisor</label>
                                        <input type="text" class="form-control" id="validationCustom02" value="" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="validationCustom02" class="form-label">Ship via / Forma de envio</label>
                                        <input type="text" class="form-control" id="validationCustom02" value="" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="validationCustom02" class="form-label">Incoterms</label>
                                        <input type="text" class="form-control" id="validationCustom02" value="" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="validationCustom05" class="form-label">Lead Time/ Plazo de entrega</label>
                                        <input type="text" class="form-control" id="validationCustom05" required>
                                        <div class="invalid-feedback">Please provide a valid zip.</div>
                                    </div>
                                    <div class="col-md-2" style="margin-top: 2.3%;">
                                        <button class="btn btn-success" type="button" name="agregar_registros" title="Agregar fila" value="" onClick="AgregarMas();"><i class="lni lni-plus"></i></button>
                                        <button class="btn btn-danger" type="button" name="borrar_registros" title="Eliminar fila" value="Borrar Campos" onClick="BorrarRegistro();"><i class="lni lni-trash"></i></button>
                                    </div>



                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xl-6 mx-auto" style="background-color: #fff;">
                    <div class="card">
                        <div class="card-body" style="padding-top:-1%;">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="mb-0 text-uppercase">Aceptación del pedido/ P.O acknowledgement</h6>
                                    <hr>
                                    <form class="row g-3">

                                        <div class="col-10">
                                            <label class="form-label">Aceptado por:</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-10">
                                            <label class="form-label">Cargo:</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-10">
                                            <label class="form-label">Fecha:</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-10">
                                            <label class="form-label">Firma y sello</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="mb-0 text-uppercase">AUTH. BY: FIRMA AUTORIZADA</h6>
                                    <hr>
                                    <div class="payment-mode">
                                        <h5 class="mb-3">Auth. By: Firma Autorizador</h5>
                                        <img src="vistas/assets/images/icons/visa.png" width="150" class="p-2 border bg-light rounded" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 mx-auto" style="background-color: #fff">
                    <div class="card mb-0">
                        <div class="card-body">
                            <p class="mb-2">Subtotal: <span class="float-end">--</span>
                            </p>
                            <p class="mb-2">Taxes: <span class="float-end">--</span>
                            </p>
                            <p class="mb-2">Shipping: <span class="float-end">--</span>
                            </p>
                            <p class="mb-0">Other/Otros; <span class="float-end">--</span>
                            </p>
                            <p class="mb-0">Moneda: <span class="float-end">--</span>
                            </p>
                            <div class="my-3 border-top"></div>
                            <h5 class="mb-0">Total: <span class="float-end">--</span></h5>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12 mx-auto">

                    <hr />
                    <div class="card" style="margin-top: -3%;">
                        <div class="card-body">
                            <div class="p-4 border rounded">
                                <form class="row g-3 needs-validation" novalidate>

                                    <button class="btn btn-primary" idtype="submit">Submit form</button>



                                </form>
                            </div>
                        </div>
                    </div>

                </div>


            </form>
            </div>

        </div>

    </div>
</div>

</div>



</div>
<!--end wrapper-->

<?php
$borrarU = new UsuariosC();
$borrarU->BorrarUsuariosC();

?>