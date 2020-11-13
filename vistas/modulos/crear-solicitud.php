  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Crear solicitud</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
              <li class="breadcrumb-item active">Crear solicitud</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header" style="background:#20c997;">
                <h3 class="card-title">REQUISICIÓN DE PERSONAL A DESARROLLO HUMANO</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
            <form role="form" method="post">
                <div class="card-body">

                <div class="row">
                  <div class="form-group col-md-4 ">
                  <label for="id_usuario"></label>
                    <input type="text" class="form-control" id="nuevoSolicitante" name="nuevoSolicitante" value="<?php echo $_SESSION["nombre"]; ?>" readonly>
                    <input type="hidden" name="idSolicitante" value="<?php echo $_SESSION["iduser"]?>">
                    <small id="id_usuarioHelp" class="form-text text-muted text-center">Nombre del solicitante</small>
                  </div>
                  <div class="form-group col-md-4 ">
                    <label for="codigo"></label>
                      <?php

                        $item = null;
                        $valor = null;

                        $solicitudes = ControladorSolicitudes::ctrMostrarSolicitudes($item, $valor);

                        if (!$solicitudes){
                          
                          echo '<input type="text" class="form-control" id="nuevoCodigo" name="nuevoCodigo" value="10001" readonly>
                          <small id="codigoHelp" class="form-text text-muted text-center">Codigo solicitud</small>';


                        }else{
                          
                          foreach ($solicitudes as $key => $value) {
                            
                          }
                          
                          $codigo = $value["codigo"] + 1;

                            echo '<input type="text" class="form-control" id="nuevoCodigo" name="nuevoCodigo" value="'.$codigo.'" readonly>
                            <small id="codigoHelp" class="form-text text-muted text-center">Codigo solicitud</small>';

                        }

                      ?>
                  </div>
                  <div class="form-group col-md-4 ">
                    <label for="ciudad"></label>
                    <select class="form-control" name="nuevaCiudad" id="ciudad" required="">
                      <option>Seleccione Ciudad/Municipio</option>
                      <option value="Bogotá">Bogotá</option>
                      <option value="Sopo">Sopo</option>
                      <option value="Medellin">Medellin</option>
                      <option value="Barranquilla">Barranquilla</option>
                      <option value="Cartagena">Cartagena</option>
                      <option value="Cali">Cali</option>
                      <option value="Bucaramanga">Bucaramanga</option>
                    </select>
                    <small id="ciudadHelp" class="form-text text-muted text-center">Seleccione Ciudad/Municipio</small>
                  </div>
                </div>
                <div class="row">
                <div class="form-group col-md-4 ">
                  <label for="tipo_ingreso"></label>
                    <select class="form-control" name="nuevo_ingreso" id="nuevo_ingreso" required="">
                    <option>Seleccione el tipo de ingreso</option>
                    <?php

                      $item = null;
                      $valor = null;

                      $traertipoIngreso = ControladorIngresos::ctrMostrarTiposingresos($item, $valor);

                      foreach ($traertipoIngreso as $key => $value) {
                        
                        echo'<option value="'.$value["id"].'">'.$value["ingreso"].'</option>';

                      }

                    ?>
                    </select>
                    <small id="tipo_ingresoHelp" class="form-text text-muted text-center">Seleccione el tipo de ingreso</small>
                  </div>
                  <div class="form-group col-md-4 ">
                    <label for="horario"></label>
                    <select class="form-control" name="nuevoHorario" id="nuevoHorario" required="">
                      <option>Seleccione el horario</option>
                      <?php

                        $item = null;
                        $valor = null;

                        $traerHorario = ControladorHorarios::ctrMostrarHorarios($item, $valor);
                        
                        foreach ($traerHorario as $key => $value) {
                          
                          echo'<option value="'.$value["id"].'">'.$value["horario"].'</option>';
                        }
                        
                      ?>
                    </select>
                    <small id="horarioHelp" class="form-text text-muted text-center">Seleccione el horario</small>
                  </div>
                  <div class="form-group col-md-4 ">
                    <label for="nombre_ceco"></label>
                    <select class="form-control" name="nuevoNombre_ceco" id="nuevoNombre_ceco" required="">
                      <option>Seleccione el centro de costo</option>
                      <?php

                        $item = null;
                        $valor = null;

                        $traerCecos = ControladorCentros::ctrMostrarCentros($item, $valor);
                        
                        foreach ($traerCecos as $key => $value) {
                          
                          echo'<option value="'.$value["id"].'">'.$value["codigo"].''.$value["nombre"].'</option>';
                        }
                        
                      ?>
                    </select>
                    <small id="nombre_cecoHelp" class="form-text text-muted text-center">Seleccione el Codigo del centro de costo</small>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-4 ">
                    <label for="area_personal"></label>
                    <select class="form-control" name="nuevArea_personal" id="nuevArea_personal" required="">
                      <option>Seleccione el Area de personal</option>
                      <option value=">Mano de obra directa">Mano de obra directa</option>
                      <option value="Mano de obra indirecta">Mano de obra indirecta</option>
                      <option value="Administración">Administración</option>
                      <option value="Comercial">Comercial</option>
                    </select>
                    <small id="area_personalHelp" class="form-text text-muted text-center">Seleccione el Area de personal</small>
                  </div>
                  <div class="form-group col-md-4 ">
                    <label for="cargo_solicitado"></label>
                    <input type="text" class="form-control" name="nuevoCargo" id="nuevoCargo" placeholder="Cargo solicitado" required="">
                    <small id="cargo_solicitadoHelp" class="form-text text-muted text-center">Cargo solicitado</small>
                  </div>
                  <div class="form-group col-md-4 ">
                    <label for="motivo"></label>
                    <input type="text" class="form-control" name="nuevoMotivo" id="nuevoMotivo" placeholder="Motivo de la solicitud" required="">
                    <small id="motivoHelp" class="form-text text-muted text-center">Motivo de la solicitud</small>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-4 ">
                    <label for="formacion"></label>
                    <select class="form-control" name="nuevaFormacion" id="nuevaFormacion" placeholder="Formación academica" required="">
                      <option>Seleccione la formación academica</option>
                      <option value=">Bachiller">Bachiller</option>
                      <option value="Tecnico">Tecnico</option>
                      <option value="Tecnologo">Tecnologo</option>
                      <option value="Profesional">Profesional</option>
                      <option value="Posgrado">Posgrado</option>
                      <option value="Otros">Otros</option>
                    </select>
                    <small id="formacionHelp" class="form-text text-muted text-center">Seleccione la formación academica</small>
                  </div>
                  <div class="form-group col-md-4 ">
                    <label for="otra_formacion"></label>
                    <input type="text" class="form-control" name="otraformacion" id="otraformacion" placeholder="Otra formación academica">
                    <small id="otraHelp" class="form-text text-muted text-center">Formación adicional si aplica</small>
                  </div>
                  <div class="form-group col-md-4 ">
                    <label for="genero"></label>
                    <select class="form-control" name="nuevoGenero" id="nuevoGenero" required="">
                      <option>Seleccione el genero</option>
                      <option value=">Masculino">Masculino</option>
                      <option value="Femenino">Femenino</option>
                      <option value="Indiferente">Indiferente</option>
                    </select>
                    <small id="generoHelp" class="form-text text-muted text-center">Seleccione el genero</small>
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-md-4 ">
                    <label for="exp_lab"></label>
                    <select class="form-control" name="nuevaExp_lab" id="nuevaExp_lab" required="">
                      <option>Requiere experiencia laboral</option>
                      <option value=">Si">Si</option>
                      <option value="No">No</option>
                    </select>
                    <small id="exp_labHelp" class="form-text text-muted text-center">Requiere experiencia laboral</small>
                  </div>
                  <div class="form-group col-md-4 ">
                    <label for="tiempo_exp"></label>
                    <input type="text" class="form-control" name="nuevoTiempo_exp" id="nuevoTiempo_exp" placeholder="Ejemplo: 12 Meses" required="">
                    <small id="tiempo_expHelp" class="form-text text-muted text-center">Tiempo de experiencia</small>
                  </div>

                  <div class="form-group col-md-4 ">
                    <label for="experiencia_en"></label>
                    <textarea class="form-control" rows="2" placeholder="Requiere experiencia en:"></textarea>
                    <small id="experiencia_enHelp" class="form-text text-muted text-center">"Requiere experiencia en</small>
                  </div>
                </div>

                <div class="row">
                <div class="form-group col-md-4 ">
                <label for="ciudad_labor"></label>
                    <select class="form-control" name="nuevaciudadLabor" id="nuevaciudadLabor" required="">
                      <option>Ciudad/Municipio donde laborará</option>
                      <option value="Bogotá">Bogotá</option>
                      <option value="Sopo">Sopo</option>
                      <option value="Medellin">Medellin</option>
                      <option value="Barranquilla">Barranquilla</option>
                      <option value="Cartagena">Cartagena</option>
                      <option value="Cali">Cali</option>
                      <option value="Bucaramanga">Bucaramanga</option>
                    </select>
                    <small id="ciudad_laborHelp" class="form-text text-muted text-center">Ciudad/Municipio donde laborará</small>
                  </div>
                  <div class="form-group col-md-4 ">
                  <label for="tipo_salario"></label>
                    <select class="form-control" name="nuevoSalario" id="nuevoSalario" required="">
                    <option>Seleccione la asignación salarial</option>
                      <option value="Salario minimo legal vigente">Salario minimo legal vigente</option>
                      <option value="Salario minimo integral">Salario minimo integral</option>
                      <option value="Salario minimo VITALIS S.A.C.I.">Salario minimo VITALIS S.A.C.I.</option>
                      <option value="Otro">Otro</option>
                    </select>
                    <small id="tipo_salarioHelp" class="form-text text-muted text-center">Seleccione la asignación salarial</small>
                  </div>
                  <div class="form-group col-md-4 ">
                    <label for="tipo_contrato"></label>
                    <select class="form-control" name="nuevoTipo_contrato" id="nuevoTipo_contrato" required="">
                     <option>Seleccione el tipo de contrato</option>
                      <option value="Fijo a tres meses">Fijo a tres meses</option>
                      <option value="Indefinido">Indefinido</option>
                      <option value="Aprendizaje">Aprendizaje</option>
                      <option value="Otra duración">Otra duración</option>
                    </select>
                    <small id="tipo_contratoHelp" class="form-text text-muted text-center">Seleccione el tipo de contrato</small>
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-md-12">
                    <label for="observaciones"></label>
                    <textarea class="form-control" rows="2" placeholder="OBSERVACIONES"></textarea>
                  </div>
                </div>
                

              </div>
                <!-- /.card-body -->
                
              
             </div>
             <!-- /.card -->

             <!-- Input addon -->
              <div class="card card-primary">
                <div class="card-header" style="background:#20c997;">
                  <h3 class="card-title">HERRAMIENTAS TECNOLOGICAS</h3>
                </div>
                <div class="card-body">
                  
                    <div class="row">
                        <h4>PC</h4>
                        <div class="form-group col-md-4">
                          <input type="radio" name="pc" id="pc_Si">
                          <label for="pc_Si">SI</label>
                          <br>

                          <input type="radio" name="pc" id="pc_No">
                          <label for="pc_No">NO</label>                      
                        </div>

                      
                        <h4>Teléfono</h4>
                        <div class="form-group col-md-3">
                          <input type="radio" name="telefono" id="tel_Si">
                          <label for="tel_Si">SI</label>
                          <br>

                          <input type="radio" name="telefono" id="tel_No">
                          <label for="tel_No">NO</label>
                      </div>

                      
                        <h4>Correo</h4>
                        <div class="form-group col-md-2">
                          <input type="radio" name="correo" id="correoSi">
                          <label for="correoSi">SI</label>
                            <br>

                          <input type="radio" name="correo" id="correoNo">
                          <label for="correoNo">NO</label>
                      </div>
                    </div>

                    <div class="row">
                    <div class="form-group col-md-4">
                      <label for="pc_observaciones"></label>
                      <textarea class="form-control" rows="2" placeholder="ESPECIFICACIONES PARA EL PC"></textarea>
                    </div>

                    <div class="form-group col-md-4">
                      <label for="tel_observaciones"></label>
                      <textarea class="form-control" rows="2" placeholder="ESPECIFICACIONES PARA EL TELEFONO"></textarea>
                    </div>

                    <div class="form-group col-md-4">
                      <label for="correo_observaciones"></label>
                      <textarea class="form-control" rows="2" placeholder="ESPECIFICACIONES PARA EL CORREO"></textarea>
                    </div>
                  </div>

                  <div class="row">
                  <div class="form-group col-md-12">
                    <label for="ti_observaciones"></label>
                    <textarea class="form-control" rows="2" placeholder="OBSERVACIONES GENERALES PARA TI"></textarea>
                  </div>
                </div>
                </div>
                <!-- /.card-body -->

                    <div class="card-footer text-center">
                      <button type="submit" class="btn btn-primary">Guardar solicitud</button>
                    </div>
             </form>
              </div>
            <!-- /.card -->

          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>