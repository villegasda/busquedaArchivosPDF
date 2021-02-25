$("#txtMatricula").change(function() {
   // alert('ENTRO');
});

$("#btnBuscar").click(function(){
    var txtMatricula = $("#txtMatricula").val();
    var copia = $("#txtcopia").val();
    var captcha = $("#captcha").val();
    if(txtMatricula!="" && copia == captcha){       
        var datos = new FormData();
        datos.append("buscadorArchivo","buscadorArchivo");
        datos.append("txtMatricula",txtMatricula);
        $.ajax({
            url: "ajax/directorios.ajax.php",
            type: "POST",
            data: datos,
            cache: false,
            contentType: false,
            processData: false,
            success: function(respuesta) {

                if(respuesta != "error"){

                    //console.log(respuesta);
                    $("#buscadorCard").show();
                    $("#buscarPDFS").append(respuesta);              			
                    // swal.close();
                    $("#btnBuscar").attr("disabled","disabled");
                   // $("#btnBuscar").attr("style","background-color:#e9ecef !important");     

                }
                else{
                    swal.fire({
						
                        title: "¡No tienes ningun certificado disponible!",
                        icon: "error",
                        allowOutsideClick: false,
                        confirmButtonText: "¡Aceptar!"
                    
                    }).then((result)=> {
                        if (result.value) {
                            location.reload();
                        }
                    }) 
                }           
            },
            error: function(error){
                swal.fire({
						
                    title: "¡Ups hubo un error en el Servidor!!!",
                    icon: "error",
                    allowOutsideClick: false,
                    confirmButtonText: "¡Intente de nuevo!"
                
                }).then((result)=> {
                    if (result.value) {
                        location.reload();
                    }
                }) 
            }
        });
    }
    else{
        //alert("Los Datos No Coinciden")
        swal.fire({
						
            title: "¡Los datos no coinciden o estan vacios!",
            icon: "error",
            allowOutsideClick: false,
            confirmButtonText: "¡Revisar!"
        
        }).then((result)=> {
            if (result.value) {
                location.reload();
            }
        }) 
    }

});
$("#btnReset").click(function(){
    $("#txtMatricula").val("");
    $("#buscadorCard").hide();
    $("#buscarPDFS").html("");
    location.reload();

});

$(document).on("click","button.certificado-alta",function(){
    $("#fichaResultadoPDF").html("Certificado de Alta");
    var txtMatricula = $("#txtMatricula").val();
    var btn = this.id;    
    $('#ver-pdf').modal({       
        show:true,        
        backdrop:'static'

    });   
    
    PDFObject.embed("temp/"+txtMatricula+"/"+btn+"", "#view_pdf");
});

$(document).on("click","button.certificado-medico",function(){
    $("#fichaResultadoPDF").html("Certificado Medico");
    var txtMatricula = $("#txtMatricula").val();
    var btn = this.id;    
    $('#ver-pdf').modal({
        show:true,
        backdrop:'static'

    });
    PDFObject.embed("temp/"+txtMatricula+"/"+btn+"", "#view_pdf");
});

$(document).on("click","button.consentimiento",function(){
    $("#fichaResultadoPDF").html("Concentimiento");
    var txtMatricula = $("#txtMatricula").val();
    var btn = this.id;    
    $('#ver-pdf').modal({
        show:true,
        backdrop:'static'

    });
    PDFObject.embed("temp/"+txtMatricula+"/"+btn+"", "#view_pdf");
});

$(document).on("click","button.ficha-epidemiologica",function(){
    $("#fichaResultadoPDF").html("Ficha Epidemiologica");
    var txtMatricula = $("#txtMatricula").val();
    var btn = this.id;    
    $('#ver-pdf').modal({
        show:true,
        backdrop:'static'

    });
    PDFObject.embed("temp/"+txtMatricula+"/"+btn+"", "#view_pdf");
});

$(document).on("click","button.formularioIncapacidad",function(){
    $("#fichaResultadoPDF").html("Formulario de Incapacidad");
    var txtMatricula = $("#txtMatricula").val();
    var btn = this.id;    
    $('#ver-pdf').modal({
        show:true,
        backdrop:'static'

    });
    PDFObject.embed("temp/"+txtMatricula+"/"+btn+"", "#view_pdf");
});

$(document).on("click","button.resultado-laboratorio",function(){
    $("#fichaResultadoPDF").html("Resultado de Laboratorio");
    var txtMatricula = $("#txtMatricula").val();
    var btn = this.id;    
    $('#ver-pdf').modal({
        show:true,
        backdrop:'static'

    });
    PDFObject.embed("temp/"+txtMatricula+"/"+btn+"", "#view_pdf");
});

