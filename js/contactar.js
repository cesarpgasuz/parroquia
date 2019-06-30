$(document).ready(function(){
    
    $(".mensajes-contactar").hide();
        
        //al enviar el formulario
        $('#contactar').click(function(){

            if(($("#nombre-cont").val()=='') || ($("#asunto-cont").val()=='') || ($("#email-cont").val()=='') || ($("#mensaje-cont").val()=='')){
                message = $("<span class='error'>Error campos vacios.</span>");
                showMessageC(message);
            }else{

                   //información del formulario
                    var formData = new FormData($("#formcontacto")[0]);

                    var message = ""; 
                    //hacemos la petición ajax  
                    $.ajax({
                        url: 'includes/contactar.php',  
                        type: 'POST',
                        // Form data
                        //datos del formulario
                        data: formData,
                        //necesario para subir archivos via ajax
                        cache: false,
                        contentType: false,
                        processData: false,
                        //mientras enviamos el archivo
                        beforeSend: function(){
                            message = $("<span class='before'>Enviado Mensaje, por favor espere...</span>");
                            showMessageC(message);  
                            
                            
                        },
                        //una vez finalizado correctamente
                        success: function(data){
                            message = $("<span class='success'>Mensaje enviado, Gracias.</span>");
                            showMessageC(message);
                            
                            $("#nombre-cont").val('');
                            $("#asunto-cont").val('');
                            $("#email-cont").val('');
                            $("#mensaje-cont").val('');
                            
                        },
                        //si ha ocurrido un error
                        error: function(){
                            message = $("<span class='error'>Ha ocurrido un error.</span>");
                            showMessageC(message);
                        }
                    });
            }
        });
   
    
    
    
})
 
//como la utilizamos demasiadas veces, creamos una función para 
//evitar repetición de código
function showMessageC(message){
    $(".mensajes-contactar").html("");
    $(".mensajes-contactar").html(message);
    $(".mensajes-contactar").fadeIn('slow');
}
 
