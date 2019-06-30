<?php

function consultacomentarios(){

	if(is_file("conect/conect.php")){
		require('conect/conect.php');
	}else{
		require("../conect/conect.php");
	}
	
	$consulta = "SELECT * FROM comentarios order by fecha desc, id desc";
    if (!$resultado = $conexion -> query($consulta)) {
      echo "Lo sentimos, este sitio web está experimentando problemas.";
      echo "Error: la ejecucion de la consulta fallo debido a \n";
      echo "Query: ".$consulta."\n";
      echo "Errno: ".$conexion -> connect_errno . "\n";
      echo "Error: ".$conexion -> connect_error . "\n";
      exit;
    }
    $registros = $resultado -> num_rows;

    $salida="";

    if ($registros > 0) {
    	
    	while($row = $resultado -> fetch_assoc()) {
    		extract($row);
	    	$consulta2 = "SELECT * FROM respuestas where id_comentario=$id order by respuestas.fecha desc";
		    if (!$resultado2 = $conexion -> query($consulta2)) {
		      echo "Lo sentimos, este sitio web está experimentando problemas.";
		      echo "Error: la ejecucion de la consulta fallo debido a \n";
		      echo "Query: ".$consulta2."\n";
		      echo "Errno: ".$conexion -> connect_errno . "\n";
		      echo "Error: ".$conexion -> connect_error . "\n";
		      exit;
		    }
		    $registros2 = $resultado2 -> num_rows;
		    $salida.=
					'<div class="comentario">
						<div class="row comentario-cuerpo clearfix">
							<div class="col-xs-2 col-sm-1 comentario-img">
								<img src="img/default.png">
							</div>
							<div class="col-xs-10 col-sm-11 comentario-res clearfix">
								<div class="comentario-fecha">'.
									$row['fecha'].'
								</div>'.
								$row['comentario'].'
							</div>
						</div>
						<div class="row comentario-pie clearfix">
							<div class="col-xs-6 comentario-por">'.
								$row['nombre'].'
							</div>
							<div class="col-xs-6 comentario-responder clearfix">
								<button class="cboton cboton2 bresponder" exp="'.$id.'" quien="'.$nombre.'">Responder</button>
							</div>
						</div>
					</div>';

			if ($registros2 > 0) {
    			while($row2 = $resultado2 -> fetch_assoc()) {
    				$salida.=
						'<div class="comentario rcomentario clearfix">
							<div class="row comentario-cuerpo clearfix">
								<div class="col-xs-2 comentario-img">
									<img src="img/default.png">
								</div>
								<div class="col-xs-10 comentario-res clearfix">'.
									$row2['respuesta'].'
								</div>
							</div>
							<div class="row comentario-pie clearfix">
								<div class="col-xs-6 comentario-por">'.
									$row2['nombre'].'
								</div>
								<div class="col-xs-6 comentario-fecha">'.
									$row2['fecha'].'
								</div>
							</div>
						</div>';
				}
    		}
	    }
    }
    else{
    	$salida.='<div class="comentario">
						<div class="row comentario-cuerpo">
							<div class="col-xs-12 sincomentarios">
								Se el primero en escribir Tu experiencia.
							</div>
						</div>
				</div>';

    }

    
    $resultado -> free();
    $resultado2 -> free();
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

    extract($_POST);
    if ((isset($nombre)) and (isset($experiencia)) and (!is_null($nombre)) and (!is_null($experiencia))) {
    	if (isset($respuesta) and $respuesta!=0 and !is_null($respuesta)) {

    		$insert = "INSERT INTO respuestas (fecha, nombre, respuesta, id_comentario)
		        VALUES (CURRENT_DATE(), '$nombre', '$experiencia', $respuesta)";

			if (!$conexion -> query($insert)) {
		      echo "Lo sentimos, este sitio web está experimentando problemas.";
		      echo "Error: la ejecucion de la consulta fallo debido a \n";
		      echo "Query: ".$insert."\n";
		      echo "Errno: ".$conexion -> connect_errno . "\n";
		      echo "Error: ".$conexion -> connect_error . "\n";
		      exit;
		    }

			
	    }else{
		    
		    $insert2 = "INSERT INTO comentarios (fecha, nombre, comentario)
		        VALUES (CURRENT_DATE(), '$nombre', '$experiencia')";

		    if (!$conexion -> query($insert2)) {
		      echo "Lo sentimos, este sitio web está experimentando problemas.";
		      echo "Error2: la ejecucion de la consulta fallo debido a \n";
		      echo "Query2: ".$insert2."\n";
		      echo "Errno2: ".$conexion -> connect_errno . "\n";
		      echo "Error2: ".$conexion -> connect_error . "\n";
		      exit;
		    }
		    
	    }
    }
    
    sleep(1);//retrasamos la petición 3 segundos


    $salida=consultacomentarios();
    echo $salida;
       
    
}
?>