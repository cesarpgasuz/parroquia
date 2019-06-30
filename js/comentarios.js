$(document).ready(function(){
    
    $(".infoexp").hide();

    $('.bresponder').click(function(){
        $('#respuesta-exp').val($(this).attr('exp'));
        message = $("<span class='before'>Respondiendo a "+$(this).attr('quien')+"... <label  id='respuesta-exp-reset'>X</label> </span>");
        showMessageexp(message);
        $('#respuesta-exp-reset').click(function(){
            $('#respuesta-exp').val('');
            message = $("<span class='before'>comentario cancelado</span>");
            showMessageexp(message);
        });
    });

    

        //al enviar el formulario
        $('#enviarexp').click(function(){

            if(($("#nombre-exp").val()=='') || ($("#experiencia").val()=='')){
                message = $("<span class='error'>Error campos vacios.</span>");
                showMessageexp(message);
            }else{

                    var formData = new FormData($("#formexperiencia")[0]);
                    var message = ""; 
                    $.ajax({
                        url: 'includes/comentarios.php',  
                        type: 'POST',
                        data: formData,
                        cache: false,
                        contentType: false,
                        processData: false,
                        beforeSend: function(){
                            message = $("<span class='before'>Enviado comentario, por favor espere...</span>");
                            showMessageexp(message);    
                            
                        },
                        success: function(data){
                            message = $("<span class='success'>Comentario enviado, Gracias.</span>");
                            showMessageexp(message);
                            $(".modal-body-exp").html(data);
                            $("#experiencia").val('');
                            $("#respuesta-exp").val('');

                            $('.bresponder').click(function(){
                                $('#respuesta-exp').val($(this).attr('exp'));
                                message = $("<span class='before'>Respondiendo a "+$(this).attr('quien')+"... <label  id='respuesta-exp-reset'>X</label> </span>");
                                showMessageexp(message);
                                $('#respuesta-exp-reset').click(function(){
                                    $('#respuesta-exp').val('');
                                    message = $("<span class='before'>comentario cancelado</span>");
                                    showMessageexp(message);
                                });
                            });
                            
                        },
                        error: function(){
                            message = $("<span class='error'>Ha ocurrido un error.</span>");
                            showMessageexp(message);
                        }
                    });
            }
        });
   
    
    
    
})
 
//como la utilizamos demasiadas veces, creamos una función para 
//evitar repetición de código
function showMessageexp(message){
    $(".infoexp").html("");
    $(".infoexp").html(message);
    $(".infoexp").fadeIn('slow');
}
 
