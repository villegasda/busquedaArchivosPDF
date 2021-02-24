<?php
@include('funciones/funciones.php');

?>
<!doctype html>
<html lang="en">
  <head>    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="vistas/plugins/fontawesome-free/css/all.min.css">

    <!-- Mis style -->
    <link rel="stylesheet" href="vistas/css/style.css">
    <link rel="stylesheet" href="vistas/css/boilerplate.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="vistas/dist/css/adminlte.css">
    <!-- jQuery -->
    <script src="vistas/plugins/jquery/jquery.min.js"></script>
    <script src="vistas/dist/js/adminlte.min.js"></script>
    <script src="vistas/dist/js/cns_cbba.js"></script>
<title>Buscador de Certificados de Pacientes Asegurador</title>   
  </head>
  <body>
    <div class="content">
      <div class="col_contenedor_cns col-sm-8 col-md-9 container-fluid gecn_submenu">
          <div class="panel-heading cont126">
            <label for="">Buscador</label>
          </div>
          <div class="panel-body cont126">        
              <form>
                  <div class="form-group">
                      <label for="txtMatricula">Matricula</label>
                      <input type="text" class="form-control" value="901024BVDID" style="width: 200px;" id="txtMatricula" placeholder="Ingrese su matricula">
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
      <br>
      <div class="col_contenedor_cns col-sm-8 col-md-9 container-fluid gecn_submenu" id="buscadorCard" style="display: none; size:500px;">      
        <div class="panel-body cont126">
          <div class="panel panel-info rgAr">								
              <h2 class="panel-heading">
                  <i class="fa fa-file-archive-o"></i>
              Archivos</h2>										
              <table class="table" >
                  <tbody id="buscarPDFS">
                      <tr>
                          <th class="col-md-7">Titulo</th>
                          <th class="col-md-2">Fecha</th>
                          <th class="col-md-1">Tipo</th>
                          <th class="col-md-1">Tamaño</th>	
                          <th class="col-md-1">Imprimir</th>                          
                      </tr>                     
                  </tbody>
              </table>       	
          </div>
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


