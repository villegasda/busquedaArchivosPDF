<?php
/**
 * Funcion que muestra la estructura de carpetas a partir de la ruta dada.
 */

function obtener_estructura_directorios($ruta){
    // Se comprueba que realmente sea la ruta de un directorio    
    if (is_dir($ruta)){
        // Abre un gestor de directorios para la ruta indicada
        $gestor = opendir($ruta);
        //echo "<tr>";
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
                        //$nombreArchivo = substr((explode(".",$archivo)[0]),0, strlen(explode(".",$archivo)[0])-3);
                        $nombreArchivo = substr($archivo,0,strrpos($archivo, "-"));
                   echo "<tr>
                            <td>";
                                if($nombreArchivo=="certificado-alta"){
                                    echo "Certificado de Alta";
                                }
                                else if($nombreArchivo=="certificado-medico"){
                                    echo "Certificado Medico";
                                }
                                else if($nombreArchivo=="consentimiento"){
                                    echo "Consentimiento Medico";
                                }
                                else if($nombreArchivo=="ficha-epidemiologica"){
                                    echo "Ficha Epidemiologica";
                                }
                                else if($nombreArchivo=="formularioIncapacidad"){
                                    echo "Formulario de Incapacidad";
                                }
                                else if($nombreArchivo=="resultado-laboratorio"){
                                    echo "Resultado de Laboratorio";
                                }
                         echo "</td>
                            <td>
                                ".date("d M Y",filemtime($ruta_completa))."
                            </td>
                            <td>
                                <i class='fas fa-file-pdf fa-2x'></i>
                            </td>
                             <td>
                                ".(int)(filesize($ruta_completa)/1024)." KB
                            </td>
                            <td>
                                <button class='btn btn-outline-danger ".$nombreArchivo."' id='".$archivo."' data-toggle='tooltip' title='".$nombreArchivo."'><i class='fas fa-print'></i></button>
                            </td>
                        </tr>";                   
                }
            }
        }
        
        // Cierra el gestor de directorios
        closedir($gestor);
        //echo "</tr>";
    } else {
        echo "error";
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