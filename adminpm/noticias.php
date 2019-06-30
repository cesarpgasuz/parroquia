<?php 

session_start();
if (!isset($_SESSION['conectado'])) {
  header("Location: ../");
}

require_once('../conect/conect.php'); 


if (isset($_POST['nuevanoticia'])) {
   //obtenemos el archivo a subir
    $file = $_FILES['imagen']['name'];
    $extension = pathinfo($file, PATHINFO_EXTENSION);
    $extension = strtolower($extension);

    //comprobamos si existe un directorio para subir la imagen
    //si no es así, lo creamos
    if(!is_dir("../img/noticias/")) 
        mkdir("../img/noticias/", 0777);
    

    $consulta = "SELECT img FROM noticias";
    if (!$resultado = $conexion -> query($consulta)) {
      echo "Lo sentimos, este sitio web está experimentando problemas.";
      echo "Error: la ejecucion de la consulta fallo debido a \n";
      echo "Query: ".$consulta."\n";
      echo "Errno: ".$conexion -> connect_errno . "\n";
      echo "Error: ".$conexion -> connect_error . "\n";
      exit;
    }
    
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

    while ($row_Recordset1 = $resultado -> fetch_assoc())     { 
        $nombre=generaClave(); 
        if($row_Recordset1['img']==$nombre){
          generaClave();
        }else{
          break;
        }    
    } 

    
  $img=$nombre.'.'.$extension;

  extract($_POST);
  $noticia=nl2br($noticia);
  $insert = "INSERT INTO noticias (fecha, autor, titulo, noticia, img)
    VALUES (CURRENT_DATE(), '$autor', '$titulo', '$noticia', '$img')";
  if (!$conexion -> query($insert)) {
    echo "Lo sentimos, este sitio web está experimentando problemas.";
    echo "Error: la ejecucion de la consulta fallo debido a \n";
    echo "Query: ".$consulta."\n";
    echo "Errno: ".$conexion -> connect_errno . "\n";
    echo "Error: ".$conexion -> connect_error . "\n";
    exit;
  }
  
  if ($file && move_uploaded_file($_FILES['imagen']['tmp_name'],"../img/noticias/".$img)){
    $resultado -> free();
  }
  
}


if (isset($_GET['Eliminar']) && ($_GET['Eliminar']==1) ) {
      extract($_GET);
      if ((isset($_GET['ID'])) && ($_GET['ID'] != "")) {
        $consulta="SELECT * FROM noticias WHERE id='$ID'";
        if (!$resultado = $conexion -> query($consulta)) {
          echo "Lo sentimos, este sitio web está experimentando problemas.";
          echo "Error: la ejecucion de la consulta fallo debido a \n";
          echo "Query: ".$consulta."\n";
          echo "Errno: ".$conexion -> connect_errno . "\n";
          echo "Error: ".$conexion -> connect_error . "\n";
          exit;
        }
        
        $row_g = $resultado -> fetch_assoc();
        $imgn='../img/noticias/'.$row_g['img'];
        unlink($imgn);
        
        $delete="DELETE FROM noticias WHERE id='$ID'";
        if (!$conexion -> query($delete)) {
          echo "Lo sentimos, este sitio web está experimentando problemas.";
          echo "Error: la ejecucion de la consulta fallo debido a \n";
          echo "Query: ".$consulta."\n";
          echo "Errno: ".$conexion -> connect_errno . "\n";
          echo "Error: ".$conexion -> connect_error . "\n";
          exit;
        }
        
        
      }
}

if (isset($_GET['Activar']) && ($_GET['Activar']==1) ) {
      extract($_GET);
      if ((isset($_GET['ID'])) && ($_GET['ID'] != "")) {
        $update="UPDATE noticias SET estado=1 WHERE id='$ID'";
        if (!$conexion -> query($update)) {
          echo "Lo sentimos, este sitio web está experimentando problemas.";
          echo "Error: la ejecucion de la consulta fallo debido a \n";
          echo "Query: ".$consulta."\n";
          echo "Errno: ".$conexion -> connect_errno . "\n";
          echo "Error: ".$conexion -> connect_error . "\n";
          exit;
        }
        
      }
}

if (isset($_GET['Desactivar']) && ($_GET['Desactivar']==1) ) {
      extract($_GET);
      if ((isset($_GET['ID'])) && ($_GET['ID'] != "")) {
        $update="UPDATE noticias SET estado=0 WHERE id='$ID'";
        if (!$conexion -> query($consulta)) {
          echo "Lo sentimos, este sitio web está experimentando problemas.";
          echo "Error: la ejecucion de la consulta fallo debido a \n";
          echo "Query: ".$consulta."\n";
          echo "Errno: ".$conexion -> connect_errno . "\n";
          echo "Error: ".$conexion -> connect_error . "\n";
          exit;
        }
        
      }
}

$consulta = "SELECT * FROM noticias order by estado desc, fecha desc";
if (!$resultado = $conexion -> query($consulta)) {
  echo "Lo sentimos, este sitio web está experimentando problemas.";
  echo "Error: la ejecucion de la consulta fallo debido a \n";
  echo "Query: ".$consulta."\n";
  echo "Errno: ".$conexion -> connect_errno . "\n";
  echo "Error: ".$conexion -> connect_error . "\n";
  exit;
}
$totalRows_noticias = $resultado -> num_rows;

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Administración</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/mystyle.css" rel="stylesheet">
    <link href="../css/estiloadmon.css" rel="stylesheet">
    <link href="../css/Modal.css" rel="stylesheet">

    
  </head>
  <body>
  <style type="text/css">
            li.dropdown.open > a.dropdown-toggle{
              background: none;  color: white;  border: solid 1px; border-bottom: none;
            }
            li.dropdown.open > a.dropdown-toggle:focus{
              background: none;  color: white;  border: solid 1px; border-bottom: none;
            }
            li.dropdown.open > a.dropdown-toggle:hover{
              background: none;  color: white;  border: solid 1px; border-bottom: none;
            }
            

         </style> 

  <nav class="navbar navbar-default navbar-wrapper menu">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-off"></span> Parroquia San Pedro Apostol</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    
     
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">Inicio</a></li>
        <li><a href="avisos.php">Avisos</a></li>
        <li><a href="#">Noticias</a></li>
        <li><a href="galeria.php">Galeria</a></li>
        
         <li class="dropdown">
         <a class="dropdown-toggle"  data-toggle="dropdown" href="#">Experiencias<span class="caret"></span>       
         </a>       
         <ul class="dropdown-menu">          
         <li><a href="comentarios.php">Comentarios</a></li>          
         <li><a href="respuestas.php">Respuestas</a></li>          
         </ul>    
         </li> 
        
        <li><a href="salir.php">Salir</a></li>
       
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<section class="banner" style="background: url(../img/fondo5.jpg) repeat center center; -webkit-background-size: cover; -moz-background-size: cover;-o-background-size: cover;height: 100px;width: 100%;position: relative;">
    	
</section>
    
<h1 style="margin-left: 30px;">
  Noticias (<?php echo $totalRows_noticias; ?>) 
  <div class="myboton btn btn-info">
    <a href="#" data-reveal-id="modal-nuevanoticia">
        Nuevo
    </a>
</div>
  
</h1>


    <div class="container">
    <div class="row">
		<div class="stepwizard">
       	    <div class="stepwizard-row setup-panel">
                <div class="stepwizard-step">
                    
                </div>
       		</div>
		</div>



<!-- INSERTAR NUEV AVISO -->
          <div id="modal-nuevanoticia" class="reveal-modal nuevanoticia">
            <div class="titulonuevoaviso">
              <h3>Nueva Noticia.</h3>
              <input type="button" class="close-reveal-modal cerrarnuevoaviso" value="X" name="cerrar">
            </div>
             <div class="description-box formnuevoaviso">
                <form action="#" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <input class="form-control" name="imagen" id="imagen" type="file" placeholder="Foto">
                  </div>
                  <div class="form-group">
                      <input name="titulo" type="text" class="form-control" placeholder="Título" required >
                  </div>
                  <div class="form-group">
                      <input name="autor" type="text" class="form-control" placeholder="Autor" required >
                  </div>
                 <div class="form-group">
                    <textarea name="noticia" required rows="5" class="form-control" placeholder="Noticia" ></textarea>
                </div>
                  <center>
                    <input type="submit" class="myboton btn btn-info" value="Enviar" name="nuevanoticia">
                  </center>
                </form>
             </div>
             
              
          </div>
<!-- INSERTAR NUEV AVISO -->



<form name="fomr1" action="#" method="post">


    <div class="row setup-content" id="step-1">
        <div class="col-xs-12">
				

              
				<div class="grid_12">
					<div class="mytables table-responsive">
					    
					<table class="table table-hover">
					  <thead>
  					  <tr>
  					    <td>Fecha</td>
                <td>Titulo</td>
  					    <td>Autor</td>
  					    <td>Noticia</td>
                <td>Imagen</td>
                <td>Estado</td>
                <td>Eliminar</td>
  					 </tr>
           </thead>
           <tbody>

					<script>
            		  function b(clave){
					    v=confirm('¿Está seguro de eliminar la Noticia?');
					    if(v==true){
					      location.href="noticias.php?Eliminar=1&ID="+clave;
					      }
					  }
            function activar(clave){
              v=confirm('¿Está seguro de Activar la Noticia?');
              if(v==true){
                location.href="noticias.php?Activar=1&ID="+clave;
                }
            }
            function desactivar(clave){
              v=confirm('¿Está seguro de Desactivar la Noticia?');
              if(v==true){
                location.href="noticias.php?Desactivar=1&ID="+clave;
                }
            }
					</script>



          

					<?php
           
           while ($row_noticias = $resultado -> fetch_assoc()){ ?>

            <div id="modal-<?php echo $row_noticias['id'];  ?>" class="reveal-modal">

             <div class="description-box">
              <img src="../img/noticias/<?php echo $row_noticias['img'];  ?>">
             </div>
             <div class="link-box">
              <a class="close-reveal-modal">Cerrar</a>
              <div style="clear:both;"></div>
             </div>
            </div><!-- modal-End -->

					  <tr>
					    <td style="font-weight:bold;">
					    <?php echo $row_noticias['fecha']; ?></td>
					    <td class="normal">
                <?php echo $row_noticias['titulo']; ?>
              </td>
              <td class="normal">
                <?php echo $row_noticias['autor']; ?>
              </td>
              <td class="normal">
                <?php echo $row_noticias['noticia']; ?>
              </td>
              
					    <td>
                <div class="myboton btn btn-info">
                <a href="#" data-reveal-id="modal-<?php echo $row_noticias['id'];  ?>">
                  Ver 
                </a>
                </div>
              </td>
              <td>
                <?php 
                    if ($row_noticias['estado']==0) {
                 ?>
                  <div class="myboton activar btn btn-danger">
                  <a onclick="activar('<?php echo $row_noticias['id']; ?>')" href="#">
                    Activar
                  </a>
                </div>
                <?php 
                  }else{
                    ?>
                  <div class="myboton desactivar btn btn-success">
                  <a onclick="desactivar('<?php echo $row_noticias['id']; ?>')" href="#">
                    Desactivar
                  </a>
                </div>
                <?php
                  }
                 ?>
                    
                 
                
              </td>

					    <td>
  				      <div class="myboton btn btn-danger">
  					      <a onclick="b('<?php echo $row_noticias['id']; ?>')" href="#">
  					      Eliminar
  					      </a>
  					      </div>
					    </td>
					  </tr>
					<?php } $resultado -> free(); ?>
					</tbody>
					</table>
					</div>
					</div>

            
        </div>
    </div>
    
</form>

</div>
</div>
    
<section class="desarrolladores" style="margin-top: 50px;">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <ul class="list-unstyled">
          <li>Front-end &nbsp | &nbsp Back-end i_daniel</a></li>
          <li>Copyright 2018</li>
       </ul>
      </div>
    </div>
  </div>
</section>
    



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
	
    <!-- MOdal -->
<script src="../js/jquery-migrate-1.2.1.min.js"></script>
<script src="../js/jquery.reveal.js"></script>


  </body>
</html>