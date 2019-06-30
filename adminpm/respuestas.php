<?php 

session_start();
if (!isset($_SESSION['conectado'])) {
  header("Location: ../");
}

require_once('../conect/conect.php'); 

if (isset($_GET['Eliminar']) && ($_GET['Eliminar']==1) ) {
      extract($_GET);
      if ((isset($_GET['ID'])) && ($_GET['ID'] != "")) {
        $delete="DELETE FROM respuestas WHERE id='$ID'";
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


$consulta = "SELECT * FROM respuestas order by fecha asc";
if (!$resultado = $conexion -> query($consulta)) {
  echo "Lo sentimos, este sitio web está experimentando problemas.";
  echo "Error: la ejecucion de la consulta fallo debido a \n";
  echo "Query: ".$consulta."\n";
  echo "Errno: ".$conexion -> connect_errno . "\n";
  echo "Error: ".$conexion -> connect_error . "\n";
  exit;
}
$totalRows_respuestas = $resultado -> num_rows;
 

if (isset($_POST['todos'])) {
  unset($_POST);
}

if (isset($_POST['buscar']) and $_POST['buscar']!="") {
  extract($_POST);
  $consulta = "SELECT * from respuestas where nombre like '%$bcampo%' or respuesta like '%$bcampo%'";
  if (!$resultado = $conexion -> query($consulta)) {
    echo "Lo sentimos, este sitio web está experimentando problemas.";
    echo "Error: la ejecucion de la consulta fallo debido a \n";
    echo "Query: ".$consulta."\n";
    echo "Errno: ".$conexion -> connect_errno . "\n";
    echo "Error: ".$conexion -> connect_error . "\n";
    exit;
  }
  $totalRows_respuestas = $resultado -> num_rows;
}

?>
<!DOCTYPE html>
<html lang="ES">
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
        <li><a href="noticias.php">Noticias</a></li>
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
  Respuestas (<?php echo $totalRows_respuestas; ?>) 
</h1>
<div id="buscar" style="float:right; margin-right:90px; margin-top:-44px;">
    <form action="#" method="post" >
       <input type="text" name="bcampo">
       <input class="myboton btn btn-info" type="submit" value="Buscar" name="buscar">
       <input type="submit" class="myboton btn btn-info" value="Todos" name="todos">
    </form>
</div>
    
    
    <div class="container">
    <div class="row">
		<div class="stepwizard">
       	    <div class="stepwizard-row setup-panel">
                <div class="stepwizard-step">
                    
                </div>
       		</div>
		</div>


<form name="fomr1" action="#" method="post">


    <div class="row setup-content" id="step-1">
        <div class="col-xs-12">
				

              
				<div class="grid_12">
					<div class="mytables table-responsive">
					    
					<table class="table table-hover">
					  <thead>
  					  <tr>
  					    <td>Fecha</td>
  					    <td>Nombre</td>
  					    <td>Comentario</td>
  					    <td>Eliminar</td>
  					 </tr>
           </thead>
           <tbody>

					<script>
            function b(clave){
					    v=confirm('¿Está seguro de eliminar el Registro?');
					    if(v==true){
					      location.href="respuestas.php?Eliminar=1&ID="+clave;
					      }
					  }
            
					</script>
					<?php
           
           while ($row_respuestas = $resultado -> fetch_assoc()){ ?>

 					  <tr>
					    <td style="font-weight:bold;">
					    <?php echo $row_respuestas['fecha']; ?></td>
					    <td class="normal">
					    <?php echo iconv("ISO-8859-1","UTF-8",$row_respuestas['nombre']); ?></td>
              <td class="normal">
              <?php echo iconv("ISO-8859-1","UTF-8",$row_respuestas['respuesta']); ?></td>
              <td>
  				      <div class="myboton btn btn-danger">
  					      <a onclick="b('<?php echo $row_respuestas['id']; ?>')" href="#">
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