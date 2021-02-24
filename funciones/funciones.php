<?php
/**
 * Funcion que muestra la estructura de carpetas a partir de la ruta dada.
 */

function obtener_estructura_directorios($ruta){
    // Se comprueba que realmente sea la ruta de un directorio    
    if (is_dir($ruta)){
        // Abre un gestor de directorios para la ruta indicada
        $gestor = opendir($ruta);
        echo "<ol>";
        $iden=1;
        // Recorre todos los elementos del directorio
        while (($archivo = readdir($gestor)) !== false)  {                
            $ruta_completa = $ruta . "/" . $archivo;
            // Se muestran todos los archivos y carpetas excepto "." y ".."
            if ($archivo != "." && $archivo != "..") {
                // Si es un directorio se recorre recursivamente
                if (is_dir($ruta_completa)) {
                    //echo "<button class='btn btn-outline-success'  data-toggle='tooltip' title='".$archivo."'><i class='fas fa-file-pdf'></i></button>";
                    //obtener_estructura_directorios($ruta_completa);
                } else {
                    //$id = explode(".",$archivo)[0];
                   echo "<li><button class='btn btn-outline-primary' id='btn-".$iden."' data-toggle='tooltip' title='".$archivo."'><i class='fas fa-file-pdf'></i></button>  ".$archivo."</li>";
                   $iden++;
                }
            }
        }
        
        // Cierra el gestor de directorios
        closedir($gestor);
        echo "</ol>";
    } else {
        echo "No es una ruta de directorio valida<br/>";
    }   

}

function codigo_captcha(){

    $k="";
    $paramentros="1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $maximo=strlen($paramentros)-1;
  
    for($i=0; $i<5; $i++){
  
      $k.=$paramentros{mt_rand(0,$maximo)};
  
    }
  
    return $k;
  
  }
?>