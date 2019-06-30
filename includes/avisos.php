<?php

function consultaavisos(){

	if(is_file("conect/conect.php")){
		require('conect/conect.php');
	}else{
		require("../conect/conect.php");
	}
	
    $consulta = "SELECT * FROM avisos WHERE estado=1 order by f_entrada asc, id asc";
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
           $salida.='<li><span class="glyphicon glyphicon-check"></span>'.$row['aviso'].'</li>'; 
        }
    }
    else{
    	$salida.='<li><span class="glyphicon glyphicon-remove"></span>Por el momento no hay ningun aviso disponible.</li>';
    }
    $resultado -> free();
    return $salida;
}
?>