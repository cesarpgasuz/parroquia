<?php
//comprobamos que sea una petición ajax
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') 
{   
    require('../conect/conect.php');
    
    
     //obtenemos el archivo a subir
    $file = $_FILES['imagen']['name'];
    $extension = pathinfo($file, PATHINFO_EXTENSION);
    $extension = strtolower($extension);
    
    //comprobamos si existe un directorio para subir la imagen
    //si no es así, lo creamos
    if(!is_dir("../img/galeria/")) 
        mkdir("../img/galeria/", 0777);
    
    function generaClave(){
        $cadena ="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
        $longitudCadena=strlen($cadena);
        $Clave = "";
        $longitudClave=10;
        for($i=1 ; $i<=$longitudClave ; $i++){
          $pos=rand(0,$longitudCadena-1);
          $Clave .= substr($cadena,$pos,1);
        }
        return $Clave;
    }

    $consulta = "SELECT img FROM galeria";
    if (!$resultado = $conexion -> query($consulta)) {
      echo "Lo sentimos, este sitio web está experimentando problemas.";
      echo "Error: la ejecucion de la consulta fallo debido a \n";
      echo "Query: ".$consulta."\n";
      echo "Errno: ".$conexion -> connect_errno . "\n";
      echo "Error: ".$conexion -> connect_error . "\n";
      exit;
    }

    while($row=$resultado -> fetch_assoc()){ 
        $nombre=generaClave(); 
        if($row['img']==$nombre){
          generaClave();
        }else{
          break;
        }    
    } 

    
    $img=$nombre.'.'.$extension;

    extract($_POST);
    $descripcion=nl2br($descripcion);
    $insert = "INSERT INTO galeria (fecha, img, autor, titulo, comentario, email)
        VALUES (CURRENT_DATE(), '$img', '$autor', '$titulo', '$descripcion', '$email')";

    if (!$conexion -> query($insert)) {
        echo "Lo sentimos, este sitio web está experimentando problemas.";
        echo "Error: la ejecucion de la consulta fallo debido a \n";
        echo "Query: ".$insert."\n";
        echo "Errno: ".$conexion -> connect_errno . "\n";
        echo "Error: ".$conexion -> connect_error . "\n";
        exit;
    }

    //comprobamos si la imagen ha subido
    if ($file && move_uploaded_file($_FILES['imagen']['tmp_name'],"../img/galeria/".$img)){
       sleep(1);//retrasamos la petición 3 segundos
       
    }
}else{
    throw new Exception("Error Procesando Respuesta", 1);   
}