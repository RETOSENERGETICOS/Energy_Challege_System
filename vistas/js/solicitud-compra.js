/* -------------------------------------------------------------------------- */
/*               Agregando campos de productos inputs dinamicos               */
/* -------------------------------------------------------------------------- */

function addInput(elem, type) {

  var inputs = $("." + type);

  console.log("inputs",inputs.length);

  if (type == "inputSummary") {
    $(elem).before(
      `

            <div class="table-responsive inputSummary">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col-3">Acciones</th>
                        <th style="width:13%;">Solicitante</th>
                        <th style="width: 50%;">Descripción</th>
                        <th style="width:10%;">Cantidad</th>
                        <th>Precio unitario</th>
                        <th>Tasa</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody >
                    <tr>
                        <td scope="row"><button class="btn btn-danger quitarProducto"  title="Eliminar fila"><i class="lni lni-trash"></i></button></td>
                        <td>
                            <div class="col-md-12">
                            
                                <input type="text" class="form-control" name="solicitanteN_` +
        inputs.length +
        `" required>
                                
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
                            
                                <input type="text" class="form-control" name="descripN_` +
        inputs.length +
        `"  required>
                                
                            </div>
                        </td>
                        <td>
                            <div class="col-md-10">
                                
                                <input type="text" class="form-control" name="cantN_` +
        inputs.length +
        `"  required>
                            
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
                                
                                <input type="text" class="form-control" name="precuniN_` +
        inputs.length +
        `"  required>
                                
                            </div>
                        </td>
                        <td>
                        <div class="col-md-12">
                            
                            <input type="text" class="form-control" name="tasaN_` +
        inputs.length +
        `" required>
                            
                        </div>
                    </td>
                        <td>
                            <div class="col-md-12">
                                
                                <input type="text" class="form-control" name="totalN_` +
        inputs.length +
        `" required>
                                
                            </div>
                        </td>

                    </tr>
                </tbody>
            </table>`
    );
  }

  

  $('[name="'+type+'"]').val(inputs.length+1);
}

/* -------------------------------------------------------------------------- */
/*                 Remover filas al formulario de productos                   */
/* -------------------------------------------------------------------------- */

function removeInput(index, type) {
  var inputs = $("." + type);

  if (inputs.length > 1) {
    inputs.each(i => {
      if (i == index) {
        $(inputs[i]).remove();
        // var num;
        // num = inputs.length;
        // inputs.length ;
        // console.log(inputs);
        // console.log(index);
        // console.log(num);

        
      }
    });
    $('[name="'+type+'"]').val(inputs.length-1);

  } //else{
  //      fncNotie(3,"At least one entry must exist");
  //  } index = numero de posicion,  inputs = toda la tabla que genera, type = inputSummary
}




/* -------------------------------------------------------------------------- */
/*                        AGREGANDO INPUTS DINAMICOS PRUEBA 2                 */
/* -------------------------------------------------------------------------- */
var nunProducto = 0;

    $(".btnAgregarProducto").click(function(){
        numProducto++;

        $(".nuevoProducto").append(

         
                           ' <table class="table table-bordered">'+
                               ' <thead>'+
                                   ' <tr>'+
                                        '<th scope="col-3">Acciones</th>'+
                                        '<th style="width:13%;">Referencia</th>'+
                                       ' <th style="width: 50%;">Descripción</th>'+
                                        '<th style="width:10%;">Cantidad</th>'+
                                        '<th>Precio unitario</th>'+
                                        '<th>Tasa</th>'+
                                       '<th>Subtotal</th>'+
                                ' </tr>'+
                            ' </thead>'+
                            ' <tbody>'+

                                '<tr>'+
                                        // <!-- -------------------------------------------------------------------------- -->
                                        // <!--removeInput para eliminar filas de solicitud  boton danger                  -->
                                        // <!-- -------------------------------------------------------------------------- -->
                                    // ' <input type="hidden" name="inputSummary" value="1">'+
                                    ' <td><button class="btn btn-danger"  title="Eliminar fila"><i class="lni lni-trash"></i></button></td>'+
                                    ' <td>'+
                                        '<div class="col-md-12">'+

                                            '  <input type="text" class="form-control" id="solicitanteN'+numProducto+'" name="solicitanteN" required>'+

                                    '     </div>'+
                                    '</td>'+
                                      ' <td>'+
                                        ' <div class="col-md-12">'+

                                            ' <input type="text" class="form-control" id="descripN'+numProducto+'" name="descripN" required>'>+

                                        '</div>'+
                                    ' </td>'+
                                    '<td>'+
                                           '<div class="col-md-10">'+

                                            ' <input type="text" class="form-control" id="cantN'+numProducto+'" name="cantN" required>'+

                                           '</div'+
                                    ' </td>'+
                                    '<td>'+
                                        ' <div class="col-md-12">'+

                                            ' <input type="text" class="form-control" id="precuniN'+numProducto+'" name="precuniN" required>'+

                                          ' </div'+
                                    ' </td>'+
                                    ' <td>'+
                                        ' <div class="col-md-12"'+

                                            ' <input type="text" class="form-control" id="tasaN'+numProducto+'" name="tasaN" required>'+

                   
                                        ' </div>'+
                                    '</td'>+
                                    '<td'>+
                                           '<div class="col-md-12">'+

                                            '<input type="text" class="form-control" id="totalN'+numProducto+'" name="totalN" required>'+

                                        '</div>'+
                                      ' </td>'+

                                '</tr>'+
                            ' </tbody'+
                          ' </table'
                  
                    // <!-- -------------------------------------------------------------------------- -->
                    // <!-- addInput agrega filas a tabla de prouctos                                  -->
                    // <!-- -------------------------------------------------------------------------- -->

                
              
        );

    })
    



    
     /* -------------------------------------------------------------------------- */
     /*                 VALIDACION DE ARCHIVOS SOLICITUD DE COMPRA                 */
     /* -------------------------------------------------------------------------- */

    document.getElementById("solicitante").addEventListener("submit", function(event) {
        var checkbox1 = document.getElementById("novalido1");
        var checkbox2 = document.getElementById("novalido2");
        var checkbox3 = document.getElementById("novalido3");
        var inputfile1 = document.getElementById("cuadro_msoliN");
        var inputfile2 = document.getElementById("ofertaprovN");
        var inputfile3 = document.getElementById("especiftecN");


        if (inputfile1.files.length === 0 && !checkbox1.checked ) {
          event.preventDefault(); // Evitar el envío del formulario si el checkbox no está marcado
          
          // Mostrar SweetAlert
          Swal.fire({
            icon: 'warning',
            title: 'Aviso',
            text: 'Documento obligatorio, favor de marcar como no valido, para continuar proceso.',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Aceptar'
          });
        }

        if (inputfile2.files.length === 0 && !checkbox2.checked ) {
            event.preventDefault(); // Evitar el envío del formulario si el checkbox no está marcado
            
            // Mostrar SweetAlert
            Swal.fire({
              icon: 'warning',
              title: 'Aviso',
              text: 'Documento obligatorio, favor de marcar como no valido, para continuar proceso.',
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'Aceptar'
            });
          }

          if (inputfile3.files.length === 0 && !checkbox3.checked ) {
            event.preventDefault(); // Evitar el envío del formulario si el checkbox no está marcado
            
            // Mostrar SweetAlert
            Swal.fire({
              icon: 'warning',
              title: 'Aviso',
              text: 'Documento obligatorio, favor de marcar como no valido, para continuar proceso.',
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'Aceptar'
            });
          }
      });


      /* -------------------------------------------------------------------------- */
      /*                                 TRAER DATOS                                */
      /* -------------------------------------------------------------------------- */

      $(".TB").on("click", ".btnVistaSolicitud", function(){

        var idSolicitud = $(this).attr("idSolicitud");

        var datos = new FormData();
        datos.append("idSolicitud", idSolicitud);

        $.ajax({

        url:"ajax/solicitudA.php",
        method: "POST",
        data: datos,
        cache:false,
        contentType:false,
        proccesData:false,
        dataType:"json",
        success:function(repuesta){
            
        }

        })

      })