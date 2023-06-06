<?php

// if($_SESSION["rol"] != "Administrador" || $_SESSION["rol"]== "Manager" 
// || $_SESSION["rol"] != "Director"){

//     echo '<script>
  
//     window.location = "inicio";
//     </script>';
  
//     return;
  
//   }
?>

<!--start wrapper-->
<div class="wrapper">





    <!-- start page content wrapper-->
    <div class="page-content-wrapper">
        <!-- start page content-->
        <div class="page-content" style="margin-bottom: -3%;">

            <!--start breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Gestor de clientes </div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0 align-items-center">
                            <li class="breadcrumb-item"><a href="inicio"><ion-icon name="home-outline"></ion-icon></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Consulta clientes</li>
                        </ol>

                    </nav>

                </div>
              
            </div>
            <!--end breadcrumb-->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0 align-items-center">

                    <li class="breadcrumb-item active" aria-current="page"><button type="button" class="btn btn-info px-5" style="color: #fff;" data-bs-toggle="modal" data-bs-target="#insertarClientes"><i class="fadeIn animated bx bx-user-plus"></i>Agregar cliente</button></li>


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
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example2" class="table table-striped table-bordered TB">
                            <thead>
                                <tr>
                                    <th>Nombre comercial</th>
                                    <th>Pais</th>
                                    <th>Actividad</th>
                                    <th>Servicios</th>
                                    <th>Distribución</th>
                                    <th>Capacitación</th>                                  
                                    <th>Rfc</th>
                                    <th>Dirección</th>
                                    <th>Contacto compras</th>
                                    <th>Teléfono</th>
                                    <th>Email</th>
                                    <th>Contacto pago</th>
                                    <th>Condiciones de venta</th>
                                    <th>Crédito</th>
                                    <th>Acciones</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $verCli = ClientesC::VerClientesC();

                                foreach ($verCli as $key => $value) {

                                    echo '<tr>
                                            <td>' . $value["nombrecomercial_cli"] . '</td>
                                            <td>' . $value["pais_cli"] . '</td>
                                            <td>' . $value["actividad_cli"] . '</td>
                                            <td>' . $value["servicios_cli"] . '</td>
                                            <td>' . $value["distribucion_cli"] . '</td>
                                            <td>' . $value["capacitacion_cli"] . '</td>
                                           
                                            <td>' . $value["rfc_cli"] . '</td>
                                            <td>' . $value["direccion_cli"] . '</td>
                                            <td>' . $value["contacto_compras"] . '</td>
                                            <td>' . $value["telefono_cli"] . '</td>
                                            <td>' . $value["correo_cli"] . '</td>
                                            <td>' . $value["contacto_pago"] . '</td>
                                            <td>' . $value["condiventa_cli"] . '</td>
                                            <td>' . $value["credito_cli"] . '</td>
                                            ';




                                    //Agregamos la clase BorrarU y un atributo llamado Uid ese atributo sera igual a lo que venga concatenado a value["rol"] id del modelo de la base de datos 
                                    echo ' 
                                            <td>
                                            <div class="btn-group">
                                            <button class="btn btn-warning EditarU" Uid="' . $value["id"] . '"" data-bs-toggle="modal" data-bs-target="#EditarU"><i class="fadeIn animated bx bx-edit-alt"></i></button>

                                            <button class="btn btn-danger BorrarU" Uid="' . $value["id"] . '"  ><i class="fadeIn animated bx bx-trash-alt"></i></button>
                                        </div>
                                            </td>

                                          </tr>';
                                }


                                // $item = null;
                                // $valor = null;

                                // $editarU = UsuariosC::EUsuariosC($item, $valor);

                                ?>



                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page content-->

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



<!-- Modal -->
<div class="modal fade" id="insertarClientes" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <i class="fadeIn animated bx bx-user-plus"></i>
                <h5 class="modal-title">Agregar clientes</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="row">
                <div class="col-xl-12 mx-auto">
                    <hr />
                    <div class="card">
                        <div class="card-body">
                            <div class="p-4 border rounded">
                                <form method="post" role="form" enctype="multipart/form-data" class="row g-3 needs-validation">
                                    <div class="col-md-6">
                                        <label class="form-label">Nombre comercial</label>
                                        <input type="text" class="form-control" name="nombrecomercial_cliN" required>
                                        <div class="valid-feedback">Campo relleno correctamente!</div>
                                        <div class="invalid-feedback">Campo requerido, favor de rellenar!</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="frm-label">País</label>
                                        <input type="text" class="form-control" name="pais_cliN" required>
                                        <div class="valid-feedback">Campo relleno correctamente!</div>
                                        <div class="invalid-feedback">Campo requerido, favor de rellenar!</div>
                                    </div>
                                   
                                    <div class="col-md-6">
                                        <label class="frm-label">Actividad comercial</label>
                                        <input type="text" class="form-control" name="actividad_cliN" required>
                                        <div class="valid-feedback">Campo relleno correctamente!</div>
                                        <div class="invalid-feedback">Campo requerido, favor de rellenar!</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="frm-label">Servicios </label>
                                        <input type="text" class="form-control" name="servicios_cliN" required>
                                        <div class="valid-feedback">Campo relleno correctamente!</div>
                                        <div class="invalid-feedback">Campo requerido, favor de rellenar!</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="frm-label">Distribución</label>
                                        <input type="text" class="form-control" name="distribucion_cliN" required>
                                        <div class="valid-feedback">Campo relleno correctamente!</div>
                                        <div class="invalid-feedback">Campo requerido, favor de rellenar!</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="frm-label">Capacitación</label>
                                        <input type="text" class="form-control" name="capacitacion_cliN" required>
                                        <div class="valid-feedback">Campo relleno correctamente!</div>
                                        <div class="invalid-feedback">Campo requerido, favor de rellenar!</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="frm-label">RFC</label>
                                        <input type="text" class="form-control" name="rfc_cliN" required>
                                        <div class="valid-feedback">Campo relleno correctamente!</div>
                                        <div class="invalid-feedback">Campo requerido, favor de rellenar!</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="frm-label">Dirección</label>
                                        <input type="text" class="form-control" name="direccion_cliN" required>
                                        <div class="valid-feedback">Campo relleno correctamente!</div>
                                        <div class="invalid-feedback">Campo requerido, favor de rellenar!</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="frm-label">Contacto de compras</label>
                                        <input type="text" class="form-control" name="contacto_comprasN" required>
                                        <div class="valid-feedback">Campo relleno correctamente!</div>
                                        <div class="invalid-feedback">Campo requerido, favor de rellenar!</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="frm-label">Teléfono</label>
                                        <input type="text" class="form-control" name="telefono_cliN" required>
                                        <div class="valid-feedback">Campo relleno correctamente!</div>
                                        <div class="invalid-feedback">Campo requerido, favor de rellenar!</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="frm-label">Email</label>
                                        <input type="text" class="form-control" name="correo_cliN" required>
                                        <div class="valid-feedback">Campo relleno correctamente!</div>
                                        <div class="invalid-feedback">Campo requerido, favor de rellenar!</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="frm-label">Contacto pago</label>
                                        <input type="text" class="form-control" name="contacto_pagoN" required>
                                        <div class="valid-feedback">Campo relleno correctamente!</div>
                                        <div class="invalid-feedback">Campo requerido, favor de rellenar!</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="frm-label">Condiciones de venta</label>
                                        <input type="text" class="form-control" name="condiventa_cliN" required>
                                        <div class="valid-feedback">Campo relleno correctamente!</div>
                                        <div class="invalid-feedback">Campo requerido, favor de rellenar!</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="frm-label">Crédito</label>
                                        <input type="text" class="form-control" name="credito_cliN" required>
                                        <div class="valid-feedback">Campo relleno correctamente!</div>
                                        <div class="invalid-feedback">Campo requerido, favor de rellenar!</div>
                                    </div>
                                  
                            
                                    <div class="modal-footer">
                                        <button class="btn btn-primary btn-lg btn-block" type="submit">Agregar</button>
                                    </div>
                                    <?php
                                     $crearCli = new ClientesC();
                                     $crearCli-> CrearClientesC();
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

<!-- Modal Editar Usuarios -->
<div class="modal fade" id="EditarU" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <i class="fadeIn animated bx bx-user-plus"></i>
                <h5 class="modal-title">Editar usuario</h5>
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
                                        <label class="form-label">Usuario</label>
                                        <input type="text" class="form-control" id="usuarioE" name="usuarioE" required>

                                        <input type="hidden" id="Uid" name="Uid">

                                        <div class="valid-feedback">Campo relleno correctamente!</div>
                                        <div class="invalid-feedback">Campo requerido, favor de rellenar!</div>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label">Nombre completo</label>
                                        <input type="text" class="form-control" id="nombreE" name="nombreE" required>
                                        <div class="valid-feedback">Campo relleno correctamente!</div>
                                        <div class="invalid-feedback">Campo requerido, favor de rellenar!</div>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="frm-label">Cargo</label>
                                        <input type="text" class="form-control" id="cargoE" name="cargoE" required>
                                        <div class="valid-feedback">Campo relleno correctamente!</div>
                                        <div class="invalid-feedback">Campo requerido, favor de rellenar!</div>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="frm-label">Correo electrónico</label>
                                        <input type="text" class="form-control" id="correoE" name="correoE" required>
                                        <div class="valid-feedback">Campo relleno correctamente!</div>
                                        <div class="invalid-feedback">Campo requerido, favor de rellenar!</div>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="frm-label">Contraseña</label>
                                        <input type="password" class="form-control" id="claveE" name="claveE" required>
                                        <div class="valid-feedback">Campo relleno correctamente!</div>
                                        <div class="invalid-feedback">Campo requerido, favor de rellenar!</div>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="frm-label">Iniciales Solicitante</label>
                                        <input type="text" class="form-control" id="iniciales_firmaE" name="iniciales_firmaE" required>
                                        <div class="valid-feedback">Campo relleno correctamente!</div>
                                        <div class="invalid-feedback">Campo requerido, favor de rellenar!</div>
                                    </div>

                                    

                                    <!-- <div class="col-md-12">
                                        <label class="form-label">Rol de usuario</label>
                                        <select class="form-select" name="rolE">
                                            <option id="rolE"></option>
                                            <option value="Administracion">Administrador</option>
                                            <option value="Empleado">Empleado</option>
                                            <option value="Director">Director</option>
                                            <option value="Manager">Manager</option>
                                            <option value="Compras">Compras</option>
                                            
                                        </select>
                                        <div class="valid-feedback">Archivo relleno correctamente!</div>
                                        <div class="invalid-feedback"> requerido, favor de rellenar!</div>
                                    </div> -->


                                    <div class="modal-footer">

                                        <button type="submit" class="btn btn-primary btn-lg btn-block">Guardar cambios</button>
                                    </div>
                            </div>

                            <?php
                            //  $actualizarU = new UsuariosC();
                            //  $actualizarU -> ActualizarUsuariosC();


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
// $borrarU = new UsuariosC();
// $borrarU->BorrarUsuariosC();

?>