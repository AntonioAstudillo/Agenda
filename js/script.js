$(document).ready(function() {
    $('#tabla').DataTable({
      "searching": false,
      "emptyTable":"No hay datos que mostrar",
      "language":{
            "emptyTable":"No hay datos que mostrar",
            "lengthMenu": 'Mostrar Datos _MENU_',
            "info":'Mostrando _END_ de _MAX_ reportes',
            "infoEmpty":'Mostrando 0 de 0 entradas',
            "processing":"Procesando...",
            "paginate":{
               "first":'Primero',
               "last":'Ultimo',
               "next":'Siguiente',
               "previous":'Anterior'
            },
         },
   });
} );
