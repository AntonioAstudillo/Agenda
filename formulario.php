<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Agenda de Contactos</title>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <script type="text/javascript" src="js/validaciones.js"></script>
  </head>
  <body>
      <section id="inicio">

        <h1>Agenda de Contactos</h1>

        <form action="procesos/insertar.php" method="post">

        <h2>Nuevo Contacto</h2>

        <input id="nombre" type="text" name="nombre" maxlength="10" placeholder="Ingrese su nombre">

        <input id="apellido" type="text" name="apellido"  maxlength="10" placeholder="Ingrese su apellido">

        <input id="telefono" type="number"  name="telefono" placeholder="Ingrese su telefono">

        <input id="correo" type="email" name="correo" placeholder="Ingrese su correo">

        <input id="edad" type="number" name="edad" placeholder="Ingrese su edad">

        <input type="submit" name="btnGuardar" value="Aceptar">



        </form>
      </section>
  </body>
</html>
