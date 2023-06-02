<!--start wrapper-->
<div class="wrapper">





    <!-- start page content wrapper-->
    <div class="page-content-wrapper">
        <!-- start page content-->
        <div class="page-content" style="margin-bottom: -3%;">

            <!--start breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Gestor de proveedores </div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0 align-items-center">
                            <li class="breadcrumb-item"><a href="inicio"><ion-icon name="home-outline"></ion-icon></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Consulta proveedores</li>
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
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0 align-items-center">

                    <!-- <li class="breadcrumb-item active" aria-current="page"><button type="button" class="btn btn-info px-5" style="color: #fff;" data-bs-toggle="modal" data-bs-target="#insertarP"><i class="fadeIn animated bx bx-user-plus"></i>Agregar proveedor</button></li> -->


                </ol>
            </nav>

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
                        <table id="example2" class="table table-striped table-bordered TB">
                        <thead>
                                <tr>
                                    <th>Estado</th>
                                    <th>Solicitante</th>
                                    <th>Plazo de entrega</th>
                                    <th>Suministrador</th>
                                    <th>ATN</th>
                                    <th>Referencia suministrador</th>
                                    <th>Descripción</th>
                                    <th>Cantidad</th>
                                    <th>Precio Unitario</th>
                                    <th>Subtotal</th>
                                    <th>Taxes</th>
                                    <th>Shipping</th>
                                    <th>Otros</th>
                                    <th>Total</th>
                                    <th>Moneda</th>
                                   
                                    <th>Acciones</th>
                               
                            </thead>
                            <tbody>
                                <!-- -------------------------------------------------------------------------- -->
                                <!--                      Vista de datos de tabla solicitud                     -->
                                <!-- -------------------------------------------------------------------------- -->
                                <?php
                                $item = null;
                                $valor = null;
                                $verS = SolicitudC::VerSolicitudC($item, $valor);
                                ?>
                                <?php
                                /* -------------------------------------------------------------------------- */
                                /*abrimos un foreach con la variable respuesta traiga un echo con lo que tenemos
                                  como registros en la tabla                                                  */
                                /* -------------------------------------------------------------------------- */

                                foreach ($verS as $key => $value) {
                                    echo'
                                    </tr>';
                                ?>
                                    <tr>
                                    <td><?php 
                                        if($value['estado'] == 1){
                                            echo ' <button class="btn btn-secondary btn-block" type="submit">En proceso</button>';
                                            
                                        }if($value['estado'] == 2){
                                            echo ' <button class="btn btn-success btn-block" type="submit">Aprobada</button>';
                                        }if($value['estado'] == 3){
                                            echo ' <button class="btn btn-danger btn-block" type="submit">Rechazada</button>';
                                        }
                                        
                                        ?></td>

                                        <td><?php echo $value["solicitante_soli"] ?></td>
                                        <td><?php echo $value["plazo_entr"] ?></td>
                                        <td><?php echo $value["nombre"] ?></td>
                                        <td><?php echo $value["atn"] ?></td>
                                        <td><?php echo $value["ref_suministrador"] ?></td>
                                        <td><?php echo $value["descripcion"] ?></td>
                                        <td><?php echo $value["cantidad"] ?></td>
                                        <td><?php echo $value["precio_unitario"] ?></td>
                                        <?php $texto = $value["otros_soli"];
                                        $decimal = floatval($texto);;
                                        ?>
                                        <td><?php echo $value["subtotal_soli"] ?></td>
                                        <td><?php echo $value["taxes"] ?></td>
                                        <td><?php echo $value["pago_envio_soli"] ?></td>
                                        <td><?php echo $value["otros_soli"] ?></td>
                                        <?php $texto = $value["total_soli"];
                                        $decimal = number_format($texto, 2, ".", "");
                                        ?>
                                        <td><?php echo $decimal ?></td>
                                        <td><?php echo $value["moneda"] ?></td>
                                        
                                       
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-warning"><i class="fadeIn animated bx bx-edit-alt"></i></button>
                                                <button class="btn btn-danger " title="Eliminar solicitud"><i class="fadeIn animated bx bx-trash-alt"></i></button>
                                                <button class="btn btn-secondary " title="PDF"><i class="bi bi-file-earmark-pdf"></i></button>
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



<!-- Modal insertar proveedores -->
<div class="modal fade" id="insertarP" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <i class="fadeIn animated bx bx-user-plus"></i>
                <h5 class="modal-title">Agregar proveedor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="row">
                <div class="col-xl-12 mx-auto">

                    <hr />
                    <div class="card">
                        <div class="card-body">
                            <div class="p-4 border rounded">
                                <form method="post" role="form" enctype="multipart/form-data" class="row g-3 needs-validation">
                                    <div class="col-md-12">
                                        <label class="form-label">Nombre proveedor</label>
                                        <input type="text" class="form-control" name="nombreN" required>
                                        <div class="valid-feedback">Campo relleno correctamente!</div>
                                        <div class="invalid-feedback">Campo requerido, favor de rellenar!</div>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label">Rfc</label>
                                        <input type="text" class="form-control" name="rfcN" required>
                                        <div class="valid-feedback">Campo relleno correctamente!</div>
                                        <div class="invalid-feedback">Campo requerido, favor de rellenar!</div>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="frm-label">Dirección</label>
                                        <input type="text" class="form-control" name="direccionN" required>
                                        <div class="valid-feedback">Campo relleno correctamente!</div>
                                        <div class="invalid-feedback">Campo requerido, favor de rellenar!</div>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="frm-label">Teléfono</label>
                                        <input type="number" class="form-control" name="telefonoN" required>
                                        <div class="valid-feedback">Campo relleno correctamente!</div>
                                        <div class="invalid-feedback">Campo requerido, favor de rellenar!</div>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="frm-label">Atn</label>
                                        <input type="text" class="form-control" name="atnN" required>
                                        <div class="valid-feedback">Campo relleno correctamente!</div>
                                        <div class="invalid-feedback">Campo requerido, favor de rellenar!</div>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="frm-label">Correo eletrónico</label>
                                        <input type="email" class="form-control" name="emailN" required>
                                        <div class="valid-feedback">Campo relleno correctamente!</div>
                                        <div class="invalid-feedback">Campo requerido, favor de rellenar!</div>
                                    </div>


                                    <div class="modal-footer">

                                        <button class="btn btn-primary btn-lg btn-block" type="submit">Agregar</button>
                                    </div>
                                    <?php
                                    $crearP = new ProveedoresC();
                                    $crearP->CrearProveedoresC();

                                    ?>

                            </div>
                            </form>
                        </div>
                    </div>




                </div>

            </div>
        </div>
    </div>
</div>
<!-- Fin modal isnertar proveedores -->


<!-- Modal editar proveedores -->
<div class="modal fade" id="EditarP" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <i class="fadeIn animated bx bx-user-plus"></i>
                <h5 class="modal-title">Editar proveedores</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="row">
                <div class="col-xl-12 mx-auto">

                    <hr />
                    <div class="card">
                        <div class="card-body">
                            <div class="p-4 border rounded">
                                <form method="post" role="form" enctype="multipart/form-data" class="row g-3 needs-validation">
                                    <div class="col-md-12">
                                        <label class="form-label">Nombre proveedor</label>
                                        <input type="text" class="form-control" id="nombreE" name="nombreE" required>
                                        <div class="valid-feedback">Campo relleno correctamente!</div>

                                        <input type="hidden" id="Pid" name="Pid">

                                        <div class="invalid-feedback">Campo requerido, favor de rellenar!</div>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label">Rfc</label>
                                        <input type="text" class="form-control" id="rfcE" name="rfcE" required>
                                        <div class="valid-feedback">Campo relleno correctamente!</div>
                                        <div class="invalid-feedback">Campo requerido, favor de rellenar!</div>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="frm-label">Direccion</label>
                                        <input type="text" class="form-control" id="direccionE" name="direccionE" required>
                                        <div class="valid-feedback">Campo relleno correctamente!</div>
                                        <div class="invalid-feedback">Campo requerido, favor de rellenar!</div>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="frm-label">Teléfono</label>
                                        <input type="number" class="form-control" id="telefonoE" name="telefonoE" required>
                                        <div class="valid-feedback">Campo relleno correctamente!</div>
                                        <div class="invalid-feedback">Campo requerido, favor de rellenar!</div>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="frm-label">Atn</label>
                                        <input type="text" class="form-control" id="atnE" name="atnE" required>
                                        <div class="valid-feedback">Campo relleno correctamente!</div>
                                        <div class="invalid-feedback">Campo requerido, favor de rellenar!</div>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="frm-label">Correo eletrónico</label>
                                        <input type="text" class="form-control" id="emailE" name="emailE" required>
                                        <div class="valid-feedback">Campo relleno correctamente!</div>
                                        <div class="invalid-feedback">Campo requerido, favor de rellenar!</div>
                                    </div>


                                    <div class="modal-footer">

                                        <button class="btn btn-primary btn-lg btn-block" type="submit">Guardar cambios</button>
                                    </div>

                            </div>


                            <?php

                            $actualizarP = new ProveedoresC();
                            $actualizarP->ActualizarProveedoresC();

                            ?>

                            </form>
                        </div>
                    </div>




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