<?php
	include("../menu.php");
?>

<head>
  <meta charset="utf-8">
  <title>Registro</title>
  <script src="/js/validaciones.js"></script>
</head>
<body>

<form action='/php/usuarios/enviarregistro.php' method='POST' class='formulario' onsubmit="return validaremail();" oninput="return validartelefono();">
	<h1>Complete el formulario</h1>
  <h5>Los campos con un * son obligatorios</h5>
    <input type='text' maxlength="20" id="nombre" name='nombre' placeholder='Nombre*' required>
    <input type='text' maxlength="20" id="apellido" name='apellido' placeholder='Apellido*' required>
    <input type='email' maxlength="40" id="email" name='email' placeholder='Email*' required>
    <input type='password' maxlength="20" id="clave" name='clave' placeholder='Contraseña*' required>
    <input type="date" name="fecha" max="2017-06-01" placeholder="Fecha de nacimiento*" required>
    <input type='text' maxlength="15" id="telefono" name='telefono' placeholder='Telefono*' required>
    <input type='submit' value='Registrarse'>
    <input type='reset' value='Cancelar'>
</form>

<h6>.</h6>

</body>
</html>