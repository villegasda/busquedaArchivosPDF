<?php
@include('../funciones/funciones.php');

class Buscador{
    public $cod_afiliado;
    public function buscadorCarpetasAfiliados(){
        $ruta_completa="../temp/".$this->cod_afiliado;
        obtener_estructura_directorios($ruta_completa);
    }
}

if(isset($_POST['buscadorArchivo'])){
    $buscadorCertificado = new Buscador();
    $buscadorCertificado->cod_afiliado = $_POST['txtMatricula'];
    $buscadorCertificado->buscadorCarpetasAfiliados();
}

?>