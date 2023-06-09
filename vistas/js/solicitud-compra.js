/* -------------------------------------------------------------------------- */
/*               Agregando campos de productos inputs dinamicos               */
/* -------------------------------------------------------------------------- */

function addInput(elem, type) {

  var inputs = $("." + type);

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
                        <td scope="row"><button class="btn btn-danger" onclick="removeInput(` +inputs.length + `,'inputSummary')" title="Eliminar fila"><i class="lni lni-trash"></i></button></td>
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
