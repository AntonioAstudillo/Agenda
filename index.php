<?php require_once 'procesos/mostrarDatos.php';

if(isset($_POST['buscar']) &&  !empty($_POST['buscar'])){
   $nombre = $_POST['buscar'];
   $resultado = buscar($nombre);
}else if(isset($_POST['restaurar'])){
   $resultado = mostrarTodo();
}else{
   $resultado = mostrarTodo();
}
?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Agenda de Contactos</title>
    <!-- <link rel="stylesheet" type="text/css" href="css/estilos.css"> -->
    <script type="text/javascript" src="js/validaciones.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.css"/>
  </head>
  <body>
     <div class="container-fluid">
        <nav class="navbar navbar-light bg-light">
           <a class="navbar-brand" href="#">
             Agenda Contactos
          </a>
       </nav>
      <div class="container-fluid mt-3">
         <form action="#" method="post">
            <div class="row mb-3 d-flex  justify-content-around">
               <div class="col-3">
                  <a class="boton-nuevo" href="formulario.php">+ Nuevo</a>
               </div>

               <div class="">
                  <input class="form-control" type="text" name="buscar" placeholder="Buscar...">
               </div>

               <div class="col-3">
                  <input class="btn btn-light" type="submit" name="btnBuscar" value="Buscar Registro">
                  <input class="btn btn-light" type="submit" name="restaurar" value="Restaurar">
               </div>
            </div>
         </form>
      </div>
        <section class="seccion-agenda">
           <table id="tabla" class="table table-sm" class="display">
               <thead>
                   <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Operaciones</th>
                   </tr>
               </thead>
               <tbody>
                   <?php while($fila = $resultado->fetch_assoc()): ?>
                       <tr>
                         <td scope="row"><?php echo $fila['id']; ?></td>
                         <td><?php echo $fila['nombre']; ?></td>
                         <td><?php echo $fila['apellido']; ?></td>
                         <td><?php echo $fila['telefono']; ?></td>
                         <td><?php echo $fila['correo']; ?></td>
                         <td><?php echo $fila['edad']; ?></td>
                         <td>
                            <a href="procesos/actualizar.php?id=<?php echo $fila['id'];?>">Modificar</a>
                            <a href="procesos/eliminar.php?id=<?php echo $fila['id'];?>" onclick="return Eliminar();">Eliminar</a>
                         </td>

                       </tr>
                  <?php endwhile; ?>
               </tbody>
           </table>
       </section>
     </div>


      <footer class="page-footer font-small stylish-color-dark pt-4">
         <div class="footer-copyright text-center py-3">© <?php echo Date('Y'); ?>  Copyright:
            <a href="https://github.com/AntonioAstudillo">  Antonio Astudillo</a>
         </div>
      </footer>
  </body>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" charset="utf-8"></script>
  <script src="js/script.js"></script>
</html>
