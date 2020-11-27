<?php

    class ControladorSolicitudes{

    

    /*=============================================
	MOSTRAR SOLICITUDES
	=============================================*/

	static public function ctrMostrarSolicitudes($item, $valor){

		$tabla = "solicitud";
		
		$respuesta = ModeloSolicitudes::mdlMostrarSolicitudes($tabla, $item, $valor);

		return $respuesta;

	}
	
	/*=============================================
	CREAR SOLICITUD
	=============================================*/
	
	static public function ctrCrearSolicitud(){

		if(isset($_POST["nuevoCodigo"])){


			/*=============================================
			ACTUALIZAR EL TOTAL DE SOLICITUDES REALIZADAS POR CADA USUARIO
			=============================================*/

			$tablaUsuarios = "usuarios";

			$item = "iduser";
			$valor = $_POST["idSolicitante"];

			$traerUsuario = ModeloUsuarios::mdlMostrarUsuarios($tablaUsuarios, $item, $valor);

			var_dump($traerUsuario["solicitudes"]);

			$item1 = "solicitudes";
			// $valor1 = ""; Crear array con foreach

			$solicitudesUsuario = ModeloUsuarios::mdlActualizarSolicitudes($tablaUsuarios, $item1, $valor1, $valor); 
			
			// if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevaCiudad"]) &&
			// 	preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoCodigo"]) &&
			// 	preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevArea_personal"])){

			// 	$tabla = "solicitud";

			// 	$datos = array("codigo" => $_POST["nuevoCodigo"],
			// 	"id_usuario" => $_POST["idSolicitante"],
			// 	"ciudad" => $_POST["nuevaCiudad"],
			// 	"formacion" => $_POST["nuevaFormacion"],
			// 	"otra_formacion" => $_POST["otraformacion"],
			// 	"genero" => $_POST["nuevoGenero"],
			// 	"exp_lab" => $_POST["nuevaExp_lab"],
			// 	"tiempo_exp" => $_POST["nuevoTiempo_exp"],
			// 	"ciudad_labor" => $_POST["nuevaciudadLabor"],
			// 	"tipo_salario" => $_POST["nuevoSalario"],
			// 	"monto_salario" => $_POST["otroSalario"],
			// 	"tipo_contrato" => $_POST["nuevoTipo_contrato"],
			// 	"otra_duracion" => $_POST["otra_duracion"],
			// 	"observaciones" => $_POST["observaciones"],
			// 	"motivo" => $_POST["nuevoMotivo"],
			// 	"cargo_solicitado" => $_POST["nuevoCargo"],
			// 	"area_personal" => $_POST["nuevArea_personal"],
			// 	"tipo_ingreso" => $_POST["nuevo_ingreso"],
			// 	"horario" => $_POST["nuevoHorario"],
			// 	"nombre_ceco" => $_POST["nuevoNombre_ceco"],
			// 	"ti_pc" => $_POST["pc"],
			// 	"pc_observaciones" => $_POST["pc_observaciones"],
			// 	"ti_telefono" => $_POST["telefono"],
			// 	"tel_observaciones" => $_POST["tel_observaciones"],
			// 	"ti_correo" => $_POST["correo"],
			// 	"correo_observaciones" => $_POST["correo_observaciones"],
			// 	"ti_observaciones" => $_POST["ti_observaciones"]);

			// 	$respuesta = ModeloSolicitudes::mdlIngresarSolicitud($tabla, $datos);
				
			// 	if ($respuesta == "ok"){
					
			// 		echo '<script>
			
			// 	swal.fire({

					
			// 			title: "La solicitud ha sido guardado correctamente",
			// 			text: "",
			// 			icon: "success",
			// 			button: "Cerrar",
			// 			showConfirmButton: true,
			// 			confirmButtonText: "Cerrar",
			// 			closeOnConfirm: false
							
					
			// 		}).then(function(result){

			// 			if(result.value){

			// 			window.location = "solicitudes";
			// 		}	
			// 	});
			
			// </script>';

			// }



			// }else {
				
			// 	echo '<script>
			
			// swal.fire({

					
			// 		title: "No se pudo guardar la solicitud, por favor verifique los datos registrados.",
			// 		text: "",
			// 		icon: "error",
			// 		button: "Cerrar",
			// 		showConfirmButton: true,
			// 		confirmButtonText: "Cerrar",
			// 		closeOnConfirm: false
							
					
			// 	}).then(function(result){

			// 		if(result.value){

			// 			window.location = "solicitudes";
			// 		}	
			// 	});
			
			// </script>';

			// }


		}

	}


}    
