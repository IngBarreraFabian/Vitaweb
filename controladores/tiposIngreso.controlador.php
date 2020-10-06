<?php

class ControladorIngresos{

    static public function ctrCrearIngreso(){

        if (isset($_POST["editarIngreso"])){

            if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarIngreso"])){

                $tabla = "tiposdeingreso";

                $datos = $_POST["EditarIngreso"];

                $respuesta = ModeloIngresos::mdlEditarIngreso($tabla, $datos);

                if ($respuesta == "ok") {
                    
                    echo '<script>
			
				swal.fire({

					
						title: "El tipo de ingreso ha sido modificado correctamente",
						text: "",
						icon: "success",
						button: "Cerrar",
						showConfirmButton: true,
						confirmButtonText: "Cerrar",
						closeOnConfirm: false
							
					
					}).then(function(result){

						if(result.value){

						window.location = "tiposIngreso";
					}	
				});
			
			</script>';
                }

            }else {
                
                echo '<script>
			
					swal.fire({

					
					title: "El tipo de ingreso no puede ir vacio o llevar caracteres especiales",
					text: "",
					icon: "error",
					button: "Cerrar",
					showConfirmButton: true,
					confirmButtonText: "Cerrar",	
					
					}).then(function(result){

					if(result.value){

						window.location = "tiposIngreso";
					}	
					});
			
					</script>';
	
           }

        }
	}
	
	/*=============================================
	MOSTRAR TIPOS DE INGRESOS
    =============================================*/	

	static public function ctrMostrarTiposingresos($item, $valor){

		$tabla = "tiposdeingreso";

		$respuesta = ModeloIngresos::mdlMostrarTiposingresos($tabla, $item, $valor);

		return $respuesta;
	}
	
	/*=============================================
	EDITAR TIPOS DE INGRESOS
    =============================================*/	
	static public function ctrEditarIngreso(){

        if (isset($_POST["editarIngreso"])){

            if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarIngreso"])){

                $tabla = "tiposdeingreso";

				$datos = array("ingreso"=>$_POST["editarIngreso"],
								"id"=>$_POST["idTipoingreso"]);

                $respuesta = ModeloIngresos::mdlEditarIngreso($tabla, $datos);

                if ($respuesta == "ok") {
                    
                    echo '<script>
			
				swal.fire({

					
						title: "El tipo de ingreso ha sido guardado correctamente",
						text: "",
						icon: "success",
						button: "Cerrar",
						showConfirmButton: true,
						confirmButtonText: "Cerrar",
						closeOnConfirm: false
							
					
					}).then(function(result){

						if(result.value){

						window.location = "tiposIngreso";
					}	
				});
			
			</script>';
                }

            }else {
                
                echo '<script>
			
					swal.fire({

					
					title: "El tipo de ingreso no puede ir vacio o llevar caracteres especiales",
					text: "",
					icon: "error",
					button: "Cerrar",
					showConfirmButton: true,
					confirmButtonText: "Cerrar",	
					
					}).then(function(result){

					if(result.value){

						window.location = "tiposIngreso";
					}	
					});
			
					</script>';
	
           }

        }
	}
}