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
                //console.log(respuesta);
                $("#buscadorCard").show();
                $("#buscarPDFS").append(respuesta);              			
                swal.close();
            }
        });
    }
    else{
        alert("Los Datos No Coinciden")
        location.reload();
    }

});
$("#btnReset").click(function(){
    $("#txtMatricula").val("");
    $("#buscadorCard").hide();
    $("#buscarPDFS").html("");
    location.reload();

});


$(document).on("click", "button[title='certificado-alta-2.pdf']", function() {
    alert("entro aqui");

/*     swal.fire({
        text: 'Procesando...',
        allowOutsideClick: false,
        allowEscapeKey: false,
        allowEnterKey: false,
        onOpen: () => {
            swal.showLoading()
        }
    }); */

    $('#ver-pdfs').modal({
        show:true,
        backdrop:'static'

    });
    
    PDFObject.embed("../temp/455226BSAID/certificado-alta-2.pdf", "#vermark"); //viewpdf    vermark
    //PDFObject.embed("../temp/455226BSAID/certificado-alta-2.pdf", "#buscarPDFS"); 
    //PDFObject.embed("../temp/certificado-alta-2.pdf", "#view_pdf");
   // PDFObject.embed("/pdf/sample-3pp.pdf", "#example1");</script>
	
	/* var idFicha = $(this).attr("idFicha");
	var code = $(this).data("code");

	var datos = new FormData();

	datos.append("fichaEpidemiologicaPDF", "fichaEpidemiologicaPDF");
	datos.append("idFicha", idFicha);

	swal.fire({
        text: 'Procesando...',
        allowOutsideClick: false,
        allowEscapeKey: false,
        allowEnterKey: false,
        onOpen: () => {
            swal.showLoading()
        }
    });

	$.ajax({

		url: "ajax/fichas.ajax.php",
		type: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		//dataType: "string",
		success: function(respuesta) {

			//Para cerrar la alerta personalizada de loading
			//console.log("esta es la respuestaMark: " + (respuesta));
			//var aux = respuesta.split("<br />")[0];
			//var aux = auxliar(respuesta);
			//alert(aux);
			swal.close();

			$('#ver-pdf').modal({
				show:true,
				backdrop:'static'

			});
			console.log(respuesta);
			

			PDFObject.embed("temp/"+code+"/ficha-epidemiologica-"+idFicha+".pdf", "#view_pdf");

		}

	}); */

});
