$(document).ready(function(){
 
    var cont=0;
    $(".mensajes-subir-imagen").hide();
    //queremos que esta variable sea global
    var fileExtension = "";
    //función que observa los cambios del campo file y obtiene información
    $('#imagen').change(function()
    {
        //obtenemos un array con los datos del archivo
        var file = $("#imagen")[0].files[0];
        //obtenemos el nombre del archivo
        var fileName = file.name;
        //obtenemos la extensión del archivo
        fileExtension = fileName.substring(fileName.lastIndexOf('.') + 1);
        //obtenemos el tamaño del archivo
        var fileSize = file.size;
        //obtenemos el tipo de archivo image/png ejemplo
        var fileType = file.type;
        //mensaje con la información del archivo
        showMessage("<span class='info'>Archivo a subir: "+fileName+", peso total: "+fileSize+" bytes.</span>");
    });
 
    //al enviar el formulario
    $('#subimg').click(function(){


        if ($('#imagen').val()=="" || $('#titulo-gal').val()=="" || $('#email-gal').val()=="" || $('#autor-gal').val()=="" || $('#descripcion-gal').val()=="") {
            message="";
            if ($('#imagen').val()=="") {
                message =$("<span class='error'>Por favor selecciona un archivo.</span>");
            }else{
                message =$("<span class='error'>Campos requeridos.</span>");
            }
            showMessage(message); 

        }else{

            if (!isImage(fileExtension)) {
                message = $("<span class='error'>El archivo no es una imágen</span>");
                showMessage(message); 
            }else{
                //información del formulario
                var formData = new FormData($("#formsimg")[0]);

                var message = ""; 
                //hacemos la petición ajax  
                $.ajax({
                    url: 'includes/subirimg.php',  
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
                        message = $("<span class='before'>Subiendo la imágen, por favor espere...</span>");
                        showMessage(message);
                        $('#imagen').val('');
                        $('#autor-gal').val('');
                        $('#descripcion-gal').val('');
                        $('#titulo-gal').val('');
                        $('#email-gal').val('');     
                    },
                    //una vez finalizado correctamente
                    success: function(data){
                        cont++;
                        message = $("<span class='success'>"+cont+" Foto(s) subida correctamente.</span>");
                        showMessage(message);

                        
                    },
                    //si ha ocurrido un error
                    error: function(){
                        message = $("<span class='error'>Ha ocurrido un error.</span>");
                        showMessage(message);
                    }
                });
            }
        }
       
    });
})
 
//como la utilizamos demasiadas veces, creamos una función para 
//evitar repetición de código
function showMessage(message){
    $(".mensajes-subir-imagen").html("").show();
    $(".mensajes-subir-imagen").html(message);
}
 
//comprobamos si el archivo a subir es una imagen
//para visualizarla una vez haya subido
function isImage(extension)
{
    switch(extension.toLowerCase()) 
    {
        case 'jpg': case 'gif': case 'png': case 'jpeg':
            return true;
        break;
        default:
            return false;
        break;
    }
}