<?php
@include('funciones/funciones.php');

?>
<!doctype html>
<html lang="en">
  <head>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <link rel="stylesheet" href="vista/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="css/style.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Buscador de Certificados de Pacientes Asegurador</title>

    <!-- PDF Objetct --> 
    <!--<script src="vistas/plugins/pdf_object/pdfobject.js"></script>   -->
  </head>
  <body>
    <div class="content">
      <div class="card" style="width: 600px;">
          <div class="card-header" align="center">
            <label for="">Buscador</label>
          </div>
          <div class="card-body">        
              <form>
                  <div class="form-group">
                      <label for="txtMatricula">Matricula</label>
                      <input type="text" class="form-control" style="width: 200px;" id="txtMatricula" placeholder="Ingrese su matricula">
                      <label for="error" id="error"></label>                   
                  </div>
                  <br>
                  <div class="form-group">
                    <input type="text" class="form-control captcha" style="width: 100px;" name="captcha" id="captcha" value=<?php echo codigo_captcha(); ?> readonly>
                    <input type="text" class="form-control" style="width: 100px;" name="txtcopia" id="txtcopia">                  
                  </div>
                  <br>               
                  <button type="button" class="btn btn-primary" id="btnBuscar" name="btnBuscar">Buscar</button>
                  <button type="button" class="btn btn-danger" id="btnReset" name="btnReset" >Reset</button>
              </form>
          </div>
      </div>
      <div class="card" id="buscadorCard" style="width: 600px;display: block;">
          <div class="card-header">
              <label for="">Todos los Certificados</label>
          </div>
          <div class="card-body" id="buscarPDFS">

          </div>
      </div>
    </div>


    <!--=====================================
VENTANA MODAL PARA MOSTRAR REPORTE PDF
======================================-->

    <div id="ver-pdf" class="modal fade" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="fichaPDF" aria-hidden="true">
      
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


    <script src="vista/jquery/jquery.js"></script>
    <script src="js/funciones.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
</html>