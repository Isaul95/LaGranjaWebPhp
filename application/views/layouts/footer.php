
<!-- jQuery 3 -->
<script src="<?php echo base_url();?>assets/template/jquery/jquery.min.js"></script>
<!-- Highcharts -->
<script src="<?php echo base_url();?>assets/template/highcharts/highcharts.js"></script>
<script src="<?php echo base_url();?>assets/template/highcharts/exporting.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>assets/template/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/template/bootstrap/css/bootstrap.css"></script>
<script src="<?php echo base_url();?>assets/template/jquery-ui/jquery-ui.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url();?>assets/template/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url();?>assets/template/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/template/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<!--FONT AWESOME, CARGA DE ICONOS PARA LOS BOTONES-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<!-- DataTables Export -->
<script src="<?php echo base_url();?>assets/template/datatables-export/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url();?>assets/template/datatables-export/js/buttons.flash.min.js"></script>
<script src="<?php echo base_url();?>assets/template/datatables-export/js/jszip.min.js"></script>
<script src="<?php echo base_url();?>assets/template/datatables-export/js/pdfmake.min.js"></script>
<script src="<?php echo base_url();?>assets/template/datatables-export/js/vfs_fonts.js"></script>
<script src="<?php echo base_url();?>assets/template/datatables-export/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url();?>assets/template/datatables-export/js/buttons.print.min.js"></script>
<script src="<?php echo base_url();?>assets/template/datatables-export/css/buttons.dataTables.min.css"></script>
<!-- Toastr -->
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>assets/template/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/template/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>assets/template/dist/js/demo.js"></script>
<!-- Sweet Alert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<!-- Time picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.13.16/jquery.timepicker.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.13.16/jquery.timepicker.min.js"></script>


<script>

    $(document).ready(function(){

//  1.-  Vista ruta     ===>>    views\admin\permisos\list.php
        $('#tbl_permisos').DataTable( {
            "language" : language_espaniol,
          });


//   2.- Vista ruta       ====>>>   views\admin\usuarios\list.php
        $('#tbl_usuarios').DataTable( {
            "language" : language_espaniol,
          });



    })




// ES EL LENGUAJE DE LAS TABLAS DE INGLES => ESPAÑOL DataTable()
// *********   VAR PARA CAMBIAR DE IDIOMA AL ESPAÑOL EL DataTable **********
    var language_espaniol = {
      "lengthMenu": "Mostrar _MENU_ registros por pagina",
      "zeroRecords": "No se encontraron resultados en su busqueda",
      "searchPlaceholder": "Buscar Registros",
      "info": "Total: _TOTAL_ registros",
      "infoEmpty": "No Existen Registros",
      "infoFiltered": "(filtrado de un total de _MAX_ registros)",
      "search": "Buscar:",
      "paginate": {
        "first": "Primero",
        "last": "Último",
        "next": "Siguiente",
        "previous": "Anterior"
      }, /* TODO ESTO ES PARA CAMBIAR DE IDIOMA */
    }

    var base_url = '<?php echo base_url();?>';

</script>




<!-- $(document).ready(function(){
    /*  ADD LA PARTE SUPERIOR LA BUSKEDA Y LA PAGHINACION  */
$('#btn_RegistroPago').DataTable( {
 "order": [[ 5, "asc" ]], //ordenar de forma ascendente

 }
});
        }) -->




<script src="<?php echo base_url();?>assets/template/dist/js/js-granja/archivos.js"></script>
<!-- <script src="<?php echo base_url();?>assets/template/dist/js/js-granja/registroPago.js"></script> -->
<script src="<?php echo base_url();?>assets/template/dist/js/js-granja/registroPago.js"></script>
<script src="<?php echo base_url();?>assets/template/dist/js/js-granja/Finanzas/formatoregistroDePagos.js"></script>
<!-- <script src="<?php echo base_url();?>assets/template/dist/js/js-granja/Alumnos/darAltaBaucherPago.js"></script> -->
<!-- <script src="<?php echo base_url();?>assets/template/dist/js/js-granja/Administrador_AsignarPermisosRoles/Permisos.js"></script> -->
<!-- <script src="<?php echo base_url();?>assets/template/dist/js/js-granja/Finanzas/habilitarAlumnos.js"></script> -->
<!-- ===========================  Administrativos =============================--->
<!-- ===========================  Periodo escolar =============================--->
<!-- <script src="<?php echo base_url();?>assets/template/dist/js/js-granja/Administrativos/PeriodoEscolar.js"></script> -->
<!-- ===========================  Licenciatura =============================--->
<!-- <script src="<?php echo base_url();?>assets/template/dist/js/js-granja/Administrativos/Carreras.js"></script> -->
<!-- ===========================  Profesores =============================--->
<!-- <script src="<?php echo base_url();?>assets/template/dist/js/js-granja/Administrativos/Profesores.js"></script> -->
<!-- ===========================  Alumnos  =============================--->
<!-- <script src="<?php echo base_url();?>assets/template/dist/js/js-granja/Administrativos/Alumnos.js"></script> -->
<!-- ===========================  Materias  =============================--->
<!-- <script src="<?php echo base_url();?>assets/template/dist/js/js-granja/Administrativos/Materias.js"></script> -->
<!-- ========== Documentos de Alumnos (constancias, boleta, horarios etc,)=========  -->
<!-- <script src="<?php echo base_url();?>assets/template/dist/js/js-granja/Administrativos/DocumentacionAlumnos.js"></script> -->
<!-- ========== Calificaciones de alumnos x parte del administrador =========  -->
<!-- <script src="<?php echo base_url();?>assets/template/dist/js/js-granja/Administrativos/CalificacionesAlumnosAdmin.js"></script> -->
<!-- ========== Hacer el horario del profesor =========  -->
<!-- <script src="<?php echo base_url();?>assets/template/dist/js/js-granja/Administrativos/HacerHorarioProfesor.js"></script> -->
<!-- ========== Subir planeación del profesor =========  -->
<!-- <script src="<?php echo base_url();?>assets/template/dist/js/js-granja/Profesores/PlaneacionProfesores.js"></script> -->
<!--  Horarioalumno ------------------------>
<!-- <script src="<?php echo base_url();?>assets/template/dist/js/js-granja/Administrativos/HorarioAlumno.js"></script> -->

<!--  ==================== EVALUACION ALUMNO A DOCENTE ========================  -->
<script src="<?php echo base_url();?>assets/template/dist/js/js-granja/Cajero/evaluacion_Alum_docente.js"></script>

<!-- ===== ULTIMOS TRAMITES ENVIOS DE OFICIOS DE SERVICIO SOCIAL, TITULACION Y PRACTICAS PROFESIONALES   ====  -->
<!-- <script src="<?php echo base_url();?>assets/template/dist/js/js-granja/Alumnos/proceso_final.js"></script> -->












<!--  SON LAS LIGAS K SE ESTAN AGREGARNDO PARA LOS MODULOS DE LA POLLERIA LA GRANJA    -->


<!-- Productos -->
<script src="<?php echo base_url();?>assets/template/dist/js/js-granja/Administrativos/productos/Productos.js"></script>

<!-- Apertura -->
<script src="<?php echo base_url();?>assets/template/dist/js/js-granja/Administrativos/apertura/Apertura.js"></script>

<!-- Gastos -->
<script src="<?php echo base_url();?>assets/template/dist/js/js-granja/Administrativos/gastos/Gastos.js"></script>

<!-- Producto Externo -->
<script src="<?php echo base_url();?>assets/template/dist/js/js-granja/productoExterno/ProductoExterno.js"></script>

<!-- Producto Locales -->
<script src="<?php echo base_url();?>assets/template/dist/js/js-granja/Administrativos/locales/Locales.js"></script>

<!-- Realizar corte de caja x parte del cajero -->
<script src="<?php echo base_url();?>assets/template/dist/js/js-granja/Cajero/corte_caja.js"></script>

<!-- Realizar una venta -->
<script src="<?php echo base_url();?>assets/template/dist/js/js-granja/Ventas/Ventas.js"></script>
