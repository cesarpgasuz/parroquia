$(document).ready(function(){
    
        $('.noticiaslink').click(function(){
            var idnoticia=$(this).attr('name');
            
            $.post('includes/noticia.php',
             { idnoticia },
              function(data) { 
                $(".cuerponoticia").html(data);
                
            });

            });

});
 
