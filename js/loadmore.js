$(document).ready(function(){

    if ($('#loadmore').attr('max')==0) {
      $('#loadmore').css({'display':'none'});
    }
     $('#loadmore').on('click',function(){

        var pagina = $(this).attr('pagina'); 
        parseInt(pagina);
        pagina++;
        var dataString = 'pagina_gal='+pagina;
            $.ajax({
                url: 'includes/galeria.php',  
                type: 'GET',
                        // Form data
                        //datos del formulario
                data: dataString,
                      //necesario para subir archivos via ajax
                cache: false,
                contentType: false,
                processData: false,
                        //mientras enviamos el archivo
                        //una vez finalizado correctamente
                success: function(data){
                    $('.loadit').before(data);
                    pagina.toString();
                    $('#loadmore').attr('pagina',pagina);

                    var a = $('.showitem').click(function(){
                            var ruta = $(this).attr('ruta');
                            var autor = $(this).attr('autor');
                            var titulo = $(this).attr('titulo');
                            var descripcion = $(this).attr('descripcion');
                            var fecha = $(this).attr('fecha');

                            $('.showitemmodal').attr('src',('img/galeria/'+ruta));
                            $('#tituloitem').html(titulo);
                            $('#fechaitem').html(fecha);
                            $('#descripcionitem').html(descripcion);
                            $('#autoritem').html(autor);

                            
                        });
                    var b = $(function(){
                              if($('#grid').attr('class')=='grid grid-active'){
                                    var default_view = 'grid';  
                                }else{
                                    var default_view = 'list';
                                }
                              if($.cookie('view') !== 'undefined'){
                                  $.cookie('view', default_view, { expires: 7, path: '/' });
                              } 
                              function get_grid(){
                                  $('.list').removeClass('list-active');
                                  $('.grid').addClass('grid-active');
                                  $('.todo').animate({opacity:0},function(){
                                      $('.todo').removeClass('dbox-list');
                                      $('.todo').addClass('dbox');
                                      $('.todo').stop().animate({opacity:1});
                                  });
                              }
                              function get_list(){
                                  $('.grid').removeClass('grid-active');
                                  $('.list').addClass('list-active');
                                  $('.todo').animate({opacity:0},function(){
                                      $('.todo').removeClass('dbox');
                                      $('.todo').addClass('dbox-list');
                                      $('.todo').stop().animate({opacity:1});
                                  });
                              }
                              if($.cookie('view') == 'list'){ 
                                  $('.grid').removeClass('grid-active');
                                  $('.list').addClass('list-active');
                                  $('.todo').animate({opacity:0});
                                  $('.todo').removeClass('dbox');
                                  $('.todo').addClass('dbox-list');
                                  $('.todo').stop().animate({opacity:1}); 
                              } 

                              if($.cookie('view') == 'grid'){ 
                                  $('.list').removeClass('list-active');
                                  $('.grid').addClass('grid-active');
                                  $('.todo').animate({opacity:0});
                                      $('.todo').removeClass('dboxlist');
                                      $('.todo').addClass('dbox');
                                      $('.todo').stop().animate({opacity:1});
                              }

                              $('#list').click(function(){   
                                  $.cookie('view', 'list'); 
                                  get_list()
                              });

                              $('#grid').click(function(){ 
                                  $.cookie('view', 'grid'); 
                                  get_grid();
                              });

                              /* filter */
                              $('.menuSwitch ul li').click(function(){
                                  var CategoryID = $(this).attr('category');
                                  $('.menuSwitch ul li').removeClass('cat-active');
                                  $(this).addClass('cat-active');
                                  
                                  $('.todo').each(function(){
                                      if(($(this).hasClass(CategoryID)) == false){
                                         $(this).css({'display':'none'});
                                      };
                                  });
                                  $('.'+CategoryID).fadeIn('slow'); 
                                  
                              });
                          });
                    
                    if ((pagina+2)>$('#loadmore').attr('max')) {
                        $('#loadmore').hide();
                    }
       
                },
                      //si ha ocurrido un error
                error: function(){
                }
            });
        
        

        
    });
});
 
