<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Bienvenido</title>
</head>
<body>

    <form id="datos" name="datos" action="<?php echo base_url(); ?>index.php/datos/registrar">
        Nombre: <input name="nombre" type="text"> <br>
        Telefono: <input name="telefono" type="text"> <br>
        Correo: <input name="correo" type="text"> <br>
    </form>

</body>
</html>
