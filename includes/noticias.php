<?php

function consultanoticias(){

	if(is_file("conect/conect.php")){
		require('conect/conect.php');
	}else{
		require("../conect/conect.php");
	}
	
    
    $consulta = "SELECT * FROM noticias WHERE estado=1 order by fecha desc, id desc LIMIT 0,8";
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
            $fecha=explode('-', $row['fecha']);
            switch ($fecha[1]) {
                case 1:                    $fecha[1]="Ene";                    break;
                case 2:                    $fecha[1]="Feb";                    break;
                case 3:                    $fecha[1]="Mar";                    break;
                case 4:                    $fecha[1]="Abr";                    break;
                case 5:                    $fecha[1]="May";                    break;
                case 6:                    $fecha[1]="Jun";                    break;
                case 7:                    $fecha[1]="Jul";                    break;
                case 8:                    $fecha[1]="Ago";                    break;
                case 9:                    $fecha[1]="Sep";                    break;
                case 10:                    $fecha[1]="Oct";                    break;
                case 11:                    $fecha[1]="Nov";                    break;
                case 12:                    $fecha[1]="Dic";                    break;
                default:                    $fecha[1]="Ene";                    break;
            }
        	$salida.='<div class="entrada noticiaslink" name="'.$row['id'].'">
                        <div class="fecha">
                            <span class="dia">'.$fecha[2].'</span>
                            <span class="mesaño">'.$fecha[1].' '.$fecha[0].'</span>
                        </div>
                        <div class="tituloentrada">'.$row['titulo'].'</div>
                    </div>';
	    }
    }
    else{
    	$salida.='<li>Por el momento no hay noticias disponibles.</li>';
    }
    $resultado -> free();
    return $salida;
}
?>
