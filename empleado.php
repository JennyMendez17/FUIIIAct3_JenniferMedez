<?php

include("con_db.php");

if (isset($_POST ['empleado'])) {
	if ( strlen($_POST['nombre']) >= 1 && strlen($_POST['apellidos']) >= 1  ) {     
        $nombre = trim($_POST['nombre']);
        $apellidos = trim($_POST['apellidos']);
        $ventas = trim($_POST['ventas']);
        $inventario = trim($_POST['inventario']);
        $horas = trim($_POST['horas']);
        $consulta ="INSERT INTO empleado ( nombre, apellidos, ventas, inventario, horas) VALUES ('$nombre','$apellidos','$ventas', '$inventario','$horas')";
        $resultado = mysqli_query($conex,$consulta);
        if ($resultado) {
        	?>
        	<h3 class="ok"> ¡Tu registro ha sido procesado!</h3>
        	<?php
        } else {
        	?>
        	<h3 class="bad"> ¡Ups ha ocurrido un error!</h3>
        	<?php
        }
   }    else {
   	        ?>
   	        <h3 class="bad"> ¡Por favor complete los campos que se solicitan!</h3>
            <?php
   }
}

?>