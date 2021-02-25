<?php
require_once "./extensiones/tcpdf/tcpdf.php";
@include('funciones/funciones.php');
?>
<!doctype html>
<html lang="en">
  <head>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <!-- Mis style -->
    <link rel="stylesheet" href="vistas/css/style.css">
    
    <title>Buscador de Certificados de Pacientes Asegurador</title>

          <!--=====================================
        PLUGINS CSS
        ======================================-->
      <!--  BOOSTRAP -->
      <link rel="stylesheet" href="vistas/plugins/bootstrap/css/bootstrap.min.css">
      <!--  Bootstrap -->
      <script src="vistas/plugins/jquery/jquery.min.js"></script>
      <script src="vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

      <!-- Font Awesome Icons -->
      <link rel="stylesheet" href="vistas/plugins/fontawesome-free/css/all.min.css">


      <!-- Google Font: Source Sans Pro -->
      <!--<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">-->

      <!-- DataTables -->
      <link rel="stylesheet" href="vistas/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
      <link rel="stylesheet" href="vistas/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
      <link rel="stylesheet" href="vistas/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

      <!-- SweetAlert 2 -->
      <link rel="stylesheet" href="vistas/plugins/sweetalert2/themes/bootstrap-4.css">

      <!-- Toastr -->
      <link rel="stylesheet" href="vistas/plugins/toastr/toastr.min.css">

      <!-- iCheck for checkboxes and radio inputs -->
      <link rel="stylesheet" href="vistas/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

      <!-- Daterange picker --> 
      <link rel="stylesheet" href="vistas/plugins/daterangepicker/daterangepicker.css">

      <link rel="stylesheet" href="vistas/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">

      <!--=====================================
      PLUGINS JAVASCRIPT
      ======================================-->

      


      <!-- jQuery -->
      <script src="vistas/plugins/jquery/jquery.min.js"></script>

      <!-- jQuery Validation -->
      <script src="vistas/plugins/jquery-validation/jquery.validate.min.js"></script>

      <!-- Bootstrap 4 -->
      <script src="vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

      <!-- FastClick -->
      <script src="vistas/plugins/fastclick/fastclick.js"></script>

      <!-- DataTables -->
      <script src="vistas/plugins/datatables/jquery.dataTables.min.js"></script>
      <script src="vistas/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
      <script src="vistas/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
      <script src="vistas/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
      <script src="vistas/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
      <script src="vistas/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
      <script src="vistas/plugins/jszip/jszip.min.js"></script>    
      <script src="vistas/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
      <script src="vistas/plugins/datatables-buttons/js/buttons.print.min.js"></script>
      <script src="vistas/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
      <script src="vistas/plugins/datatables-scroller/js/dataTables.scroller.min.js"></script>

      <!-- SweetAlert 2 -->
      <script src="vistas/plugins/sweetalert2/sweetalert2.min.js"></script>

      <!-- Toastr -->
      <script src="vistas/plugins/toastr/toastr.min.js"></script>

      <!-- iCheck 1.0.1 -->
      <!-- <script src="vistas/plugins/iCheck/icheck.min.js"></script> -->

      <!-- InputMask -->
      <script src="vistas/plugins/moment/moment.min.js"></script>
      <script src="vistas/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>

      <!-- JQueryNumber -->
      <script src="vistas/plugins/jqueryNumber/jqueryNumber.min.js"></script>

      <!-- Daterange picker --> 
      <script src="vistas/plugins/daterangepicker/moment.min.js"></script>
      <script src="vistas/plugins/daterangepicker/daterangepicker.js"></script>

      <!-- MomentJS --> 
      <script src="vistas/plugins/moment/moment.min.js"></script>

      <!-- ChartJS --> 
      <script src="vistas/plugins/chart.js/Chart.js"></script>

      <!-- Numeral.js 2.0.6 --> 
      <script src="vistas/plugins/numeral.js/numeral.js"></script>

      <!-- PDF Objetct --> 
      <script src="vistas/plugins/pdf_object/pdfobject.js"></script>

  </head>
  <body>
    <div class="container">
      <div class="row-cols-auto">
          <div class="col">
            <label for="">Buscador 901024BVDID</label>        
          </div> 
          <form>
              <div class="form-group col-4">
                  <label for="txtMatricula">Matricula</label>
                  <input type="text" class="form-control mayuscula" value="896202AAYID" id="txtMatricula" placeholder="Ingrese su matricula">
                  <label for="error" id="error"></label>                   
              </div>
              <div class="form-group col-2">
                <input type="text" class="form-control captcha" name="captcha" id="captcha" value=<?php echo codigo_captcha(); ?> readonly>                  
              </div>
              <div class="form-group col-2">
                <input type="text" class="form-control mayuscula" name="txtcopia" id="txtcopia">
              </div>
              <div class="form-group col-6">
                <button type="button" class="btn btn-primary" id="btnBuscar" name="btnBuscar">Buscar</button>
                <button type="button" class="btn btn-success" id="btnReset" name="btnReset">Nueva Busqueda</button>
              </div>
          </form>
      </div>
      <div class="row-cols-auto" id="buscadorCard" style="display: none;">      
        <div class="col">								
            <h2 class="rgAr">
            <i class="far fa-file-archive"></i> Archivos
            </h2>										
            <table class="table" >
                <tbody id="buscarPDFS">
                    <tr>
                        <th class="col-md-auto">Titulo</th>
                        <th class="col-md-auto">Fecha</th>
                        <th class="col-md-auto">Tipo</th>
                        <th class="col-md-auto">Tamaño</th>	
                        <th class="col-md-auto">Imprimir</th>                          
                    </tr>                     
                </tbody>
            </table>       	
        </div>
      </div>                
    </div>

    <div id="ver-pdf" class="modal fade" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="fichaResultadoPDF" aria-hidden="true">  
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!--=====================================
            CABEZA DEL MODAL
            ======================================-->
            <div class="modal-header bg-gradient-info">
              <h5 class="modal-title" id="fichaResultadoPDF">Ficha Generada Resultado Covid19</h5>        
              <button type="button" class="close btnCerrarReporte" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>

            <!--=====================================
            CUERPO DEL MODAL
            ======================================-->

            <div class="modal-body">          
              <div id="view_pdf">


              </div>
            </div>

            <!--=====================================
            PIE DEL MODAL
            ======================================-->

            <div class="modal-footer">
              <button type="button" class="btn btn-default float-left btnCerrarReporte" data-dismiss="modal">
                <i class="fas fa-times"></i>
                Cerrar
              </button>
            </div>
        </div>
      </div>
    </div>

<!--================================================================================-->

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="vermark">
  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>




    <!--=====================================
VENTANA MODAL PARA MOSTRAR REPORTE PDF
======================================-->

    <div id="ver-pdfs" class="modal fade" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="fichaPDF" aria-hidden="true">
      
      <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <!--=====================================
            CABEZA DEL MODAL
            ======================================-->

            <div class="modal-header bg-gradient-info">

              <h5 class="modal-title" id="fichaPDF">Formulario de Impresiones</h5>
            
              <button type="button" class="close btnCerrarReporte" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>

            </div>

            <!--=====================================
            CUERPO DEL MODAL
            ======================================-->

            <div class="modal-body">
              
              <div id="viewpdf">
          

              </div>

            </div>

            <!--=====================================
            PIE DEL MODAL
            ======================================-->

            <div class="modal-footer">

              <button type="button" class="btn btn-default float-left btnCerrarReporte" data-dismiss="modal">

                <i class="fas fa-times"></i>
                Cerrar

              </button>

            </div>

        </div>

      </div>

    </div>
    <script src="js/funciones.js"></script>
  </body>
</html>


