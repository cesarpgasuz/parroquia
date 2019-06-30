<?php 
function totalpaginas(){
	if(is_file("conect/conect.php")){
		require('conect/conect.php');
	}else{
		require("../conect/conect.php");
	}

    $consulta="SELECT * FROM galeria WHERE estado=1";
    if (!$resultado = $conexion -> query($consulta)) {
      echo "Lo sentimos, este sitio web está experimentando problemas.";
      echo "Error: la ejecucion de la consulta fallo debido a \n";
      echo "Query: ".$consulta."\n";
      echo "Errno: ".$conexion -> connect_errno . "\n";
      echo "Error: ".$conexion -> connect_error . "\n";
      exit;
    }
    $total_items_gal = $resultado -> num_rows;

    $totalpaginas=ceil($total_items_gal/20);
    if ($total_items_gal<20) {
    	$totalpaginas=0;
    }
    $resultado -> free();
    return $totalpaginas;

}

function consultaitems(){
	if(is_file("conect/conect.php")){
		require('conect/conect.php');
	}else{
		require("../conect/conect.php");
	}
    

    if (isset($_GET['pagina_gal'])) {
    	$pagina=$_GET['pagina_gal'];
    	$comienzo=$pagina*20;

    }else{
    	$pagina=0;
    	$comienzo=0;
    }

    $sql="SELECT * FROM galeria WHERE estado=1 order by fecha desc , id desc LIMIT $comienzo,20 ";
    if (!$resultado = $conexion -> query($sql)) {
      echo "Lo sentimos, este sitio web está experimentando problemas.";
      echo "Error: la ejecucion de la consulta fallo debido a \n";
      echo "Query: ".$consulta."\n";
      echo "Errno: ".$conexion -> connect_errno . "\n";
      echo "Error: ".$conexion -> connect_error . "\n";
      exit;
    }
    
    $salida="";
    
    while($row_galeria = $resultado -> fetch_assoc()) {
		$salida.='<div class="col-xs-12 col-sm-3 col-md-3 dbox '.'">
		                    <div class="itemCont">
		                        <a ruta="'.$row_galeria['img'].'" titulo="'.$row_galeria['titulo'].'"
		                         autor="'.$row_galeria['autor'].'" descripcion="'.$row_galeria['comentario'].'" fecha="'.$row_galeria['fecha'].'"
		                          class="showitem" rel="nofollow" href="#" data-toggle="modal"  data-target="#myModalGI">
			                        <div class="thumb">
			                        	<img class="img-responsive center-block" alt="Mist Witches"
			                        	 src="img/galeria/'.$row_galeria['img'].'">
			                        </div>
			                        <div class="itemInfo">
		  	                            <h4>'.$row_galeria['titulo'].'</h4>
			                            <h6>'.$row_galeria['autor'].'</h6>
				                            <p>'.$row_galeria['comentario'].'</p>
				                    </div>
			                    </a>
			                    <button type="button" ruta="'.$row_galeria['img'].'" titulo="'.$row_galeria['titulo'].'"
		                         autor="'.$row_galeria['autor'].'" descripcion="'.$row_galeria['comentario'].'" fecha="'.$row_galeria['fecha'].'"
		                          class="showitem cboton goto" data-toggle="modal"     data-target="#myModalGI">Mostrar</button>
			                </div>
			            </div>';
	


	}
	$resultado -> free();
	return $salida;
}
	
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') 
{   
	$salida=consultaitems();
    echo $salida;
    
}




 ?>