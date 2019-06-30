<?php

function consultanoticia($idnoticia=0){

	if(is_file("conect/conect.php")){
		require('conect/conect.php');
	}else{
		require("../conect/conect.php");
	}
	
    if ($idnoticia==0) {
    	$consulta = "SELECT * FROM noticias WHERE estado=1 order by fecha desc, id desc LIMIT 0,1";
    }else{
		$consulta = "SELECT * FROM noticias WHERE id=$idnoticia";
	}

	if (!$resultado = $conexion -> query($consulta)) {
      echo "Lo sentimos, este sitio web está experimentando problemas.";
      echo "Error: la ejecucion de la consulta fallo debido a \n";
      echo "Query: ".$consulta."\n";
      echo "Errno: ".$conexion -> connect_errno . "\n";
      echo "Error: ".$conexion -> connect_error . "\n";
      exit;
    }
    $totalcom = $resultado -> num_rows;

    $salida="";

    if ($totalcom > 0) {
    	
    	while($row = $resultado -> fetch_assoc()){
 		    
	    	$salida.='<img class="imgnoticia" src="img/noticias/'.$row['img'].'">
					<h3 class="hh3 titulonoticia">'.
						$row['titulo']
					.'</h3>
					<p class="hp descripcionnoticia">'.
						$row['noticia']	
					.'</p>
					<div class="pienoticia">
						<div class="autornoticia" id="autoritem"><i class="glyphicon glyphicon-user"></i>'.$row['autor'].'</div>
				    	<div class="fechanoticia" id="fechaitem"><i class="glyphicon glyphicon-calendar"></i>'.$row['fecha'].'</div>
					</div>';
  	    }
    }
    else{
    	$salida.='<div class="comentario">
						<div class="row comentario-cuerpo">
							<div class="col-xs-12 sincomentarios">
								No hay noticia disponibles.
							</div>
						</div>
				</div>';

    }
    $resultado -> free();
    return $salida;
}


//comprobamos que sea una petición ajax
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') 
{   
    if(is_file("conect/conect.php")){
		require('conect/conect.php');
	}else{
		require("../conect/conect.php");
	}

    $idnoticia=$_POST['idnoticia'];
    
    $salida=consultanoticia($idnoticia);
    
    echo $salida;
        
}
?>