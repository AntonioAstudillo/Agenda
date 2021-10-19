<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Agenda de Contactos</title>
    <script type="text/javascript" src="js/validaciones.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
  </head>
  <body>
     <div class="container mt-3">
        <section id="inicio" class="border p-5">

         <h1 class="text-center">Agenda de Contactos</h1>

         <form action="procesos/insertar.php" method="post" autocomplete="off">

            <h2>Nuevo Contacto</h2>

            <div class="row">
               <div class="col-6">
                  <input class="form-control" id="nombre" type="text" name="nombre" maxlength="10" placeholder="Ingrese nombre">
               </div>

               <div class="col-6">
                  <input class="form-control" id="apellido" type="text" name="apellido"  maxlength="10" placeholder="Ingrese apellido">
               </div>
            </div>

            <div class="row mt-3">
               <div class="col-4">
                  <input class="form-control" id="edad" type="number" name="edad" placeholder="Ingrese edad">
               </div>

               <div class="col-4">
                  <select class="form-control" name="pais">
                     <option value="" disabled>Elige un pais</option>
                     <option value="Mexico">Mexico</option>
                     <option value="Colombia">Colombia</option>
                     <option value="Argentina">Argentina</option>
                     <option value="Peru">Peru</option>
                     <option value="Uruguay">Uruguay</option>
                  </select>
               </div>

               <div class="col-4">
                  <input class="form-control" id="edad" type="text" maxlength="15" name="telefono" placeholder="Ingrese telefono">
               </div>
            </div>

            <div class="row mt-3">
               <div class="col-12">
                  <input class="form-control" id="correo" type="email" name="correo" placeholder="Ingrese correo">
               </div>
            </div>

            <div class="row mt-3">
               <div class="col">
                  <input class="btn btn-primary " type="submit" name="btnGuardar" value="Agregar">
               </div>
            </div>

         </form>
       </section>
     </div>

  </body>
</html>
