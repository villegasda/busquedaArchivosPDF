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
                $("#buscadorCard").show();
                $("#buscarPDFS").html(respuesta);              			
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

$(document).on("click","#btn-1",function(){
    alert($(this).tittle());
    $('#ver-pdf').modal({
        show:true,
        backdrop:'static'
    
    });
});

$(document).on("click","#btn-2",function(){
    alert($(this).val());
    $('#ver-pdf').modal({
        show:true,
        backdrop:'static'
    
    });
});

$(document).on("click","#btn-3",function(){
    alert($(this).val());
    $('#ver-pdf').modal({
        show:true,
        backdrop:'static'
    
    });
});
$(document).on("click","#btn-4",function(){
    alert();
    $('#ver-pdf').modal({
        show:true,
        backdrop:'static'
    
    });
});
$(document).on("click","#btn-5",function(){
    alert($(this).val());
    $('#ver-pdf').modal({
        show:true,
        backdrop:'static'
    
    });
});
$(document).on("click","#btn-6",function(){
    alert($(this).val());
    $('#ver-pdf').modal({
        show:true,
        backdrop:'static'
    
    });
});