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

      <!-- SweetAlert 2 -->
      <link rel="stylesheet" href="vistas/plugins/sweetalert2/themes/bootstrap-4.css">


      <!--=====================================
      PLUGINS JAVASCRIPT
      ======================================-->


      <!-- jQuery -->
      <script src="vistas/plugins/jquery/jquery.min.js"></script>

      <!-- Bootstrap 4 -->
      <script src="vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

      <!-- SweetAlert 2 -->
      <script src="vistas/plugins/sweetalert2/sweetalert2.min.js"></script>

      <!-- PDF Objetct --> 
      <script src="vistas/plugins/pdf_object/pdfobject.js"></script>

  </head>
  <body>
  
    <div class="container">
      <div class="row-cols-auto">
      <?php //echo "ejs. 901024BVDID, 896202AAYID"?>
          <div class="col-auto">
            <label for=""><h4 style="background-color: #e9ecef; padding: 15px;">Buscador de Certificados Covid-19</h4></label>        
          </div> 
          <form>
              <div class="form-group col-5">
                  <label for="txtMatricula">Ingrese su Matricula</label>
                  <input type="text" class="form-control mayuscula" value="" id="txtMatricula" placeholder="Ingrese su matricula">
                  <label for="error" id="error"></label>                   
              </div>
              <div class="form-group col-2">
                <input type="text" class="form-control captcha" name="captcha" id="captcha" value=<?php echo codigo_captcha(); ?> readonly>                  
              </div>
              <div class="form-group col-2">
                <input type="text" class="form-control mayuscula" name="txtcopia" id="txtcopia">
              </div>
              <div class="form-group col-6">
                <button type="button" class="btn btn-success" id="btnBuscar" name="btnBuscar">Buscar</button>
                <button type="button" class="btn btn-nuevo" id="btnReset" name="btnReset">Nueva Busqueda</button>
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
    <script src="js/funciones.js"></script>
  </body>
</html>


