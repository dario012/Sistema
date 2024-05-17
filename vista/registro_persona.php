<?php 
if (!empty($_POST["btnregistro"])) {
	# code...
	if (!empty($_POST["Primer_Nombre"]) and !empty($_POST["Otros_Nombre"]) and !empty($_POST["Primer_Apellido"]) and !empty($_POST["Segundo_Apellido"]) and !empty($_POST["Tipos_identificacion"]) and !empty($_POST["Numero_identificacion"]) and !empty($_POST["Pais_Empleo"]) and !empty($_POST["Emai"]) and !empty($_POST["Fecha_Ingreso"]) and !empty($_POST["Area"]) ) {
	     
	     $Primer_Nombre = $_POST["Primer_Nombre"];
	     $Otros_Nombre = $_POST["Otros_Nombre"];
	     $Primer_Apellido = $_POST["Primer_Apellido"];
	     $Segundo_Apellido = $_POST["Segundo_Apellido"];
	     $Tipos_identificacion = $_POST["Tipos_identificacion"];
	     $Numero_identificacion = $_POST["Numero_identificacion"];
	     $Pais_Empleo = $_POST["Pais_Empleo"];
	     $Email = $_POST["Email"];
	     $Fecha_Ingreso = $_POST["Fecha_Ingreso"];
	     $Area = $_POST["Area"];
          
          $sql = $conexion->querry("insert into dato1(Primer_Nombre,Otros_Nombre,Primer_Apellido,Segundo_Apellido,Tipos_identificacion,Numero_identificacion,Pais_Empleo,Emai,Fecha_Ingreso,Area)value('$Primer_Nombre','$Otros_Nombre','$Primer_Apellido','$Segundo_Apellido','$Tipos_identificacion','$Numero_identificacion','$Pais_Empleo','$Email','$Fecha_Ingreso','$Area') ");
          if ($sql==1) {
          	echo '<div class="alert alert-success">Empleado Registrado Correctamente</div>';
          } else {
          	echo '<div class="alert alert-danger">Empleado No Registrado</div>';
          }
          

	
	}

}
 ?>