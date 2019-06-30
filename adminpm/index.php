<?php
session_start();
require_once('../conect/conect.php'); 


$consulta = "SELECT * FROM usuarios";
if (!$resultado = $conexion -> query($consulta)) {
  echo "Lo sentimos, este sitio web está experimentando problemas.";
  echo "Error: la ejecucion de la consulta fallo debido a \n";
  echo "Query: ".$consulta."\n";
  echo "Errno: ".$conexion -> connect_errno . "\n";
  echo "Error: ".$conexion -> connect_error . "\n";
  exit;
}
$totalRows_usuarios = $resultado -> num_rows;

while ($row_usuarios = $resultado -> fetch_assoc()){
  if ((isset($_POST['usuario']) and isset($_POST['pass']) and $_POST['pass']==$row_usuarios['contraseña'] and $_POST['usuario']==$row_usuarios['nombre'])  or isset($_SESSION['conectado']) ) {
    $_SESSION['conectado']='si';
    break;
  }
}


if (isset($_SESSION['conectado']) and $_SESSION['conectado']=="si") {
  
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
    

    <!-- HTML5 shim anad Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
        <li><a href="#">Inicio</a></li>
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
    
<h1 style="margin-left: 30px;">Bienvenido al Sistema de Administración</h1>
    
    
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
            <br><br>
            <p>Puedes utilizar nuestro menú para hacer las siguientes Acciones;</p>
            <ul>
              <li>Buscar registros en avisos, noticias, galeria y comentarios</li>
              <li>Añadir avisos y noticias</li>
              <li>Mostrar u Ocultar avisos, noticias o imagenes</li>
              <li>Ver las imagenes enviadas a la Galeria</li>
              <li>Eliminar avisos, noticias, imagenes, comentarios y respuestas</li>
            </ul>
            <br><br><br><br><br><br><br><br>
            
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
  
  </body>
</html>

<?php } else {

if (isset($_POST['enviar'])) { ?>

<script type="text/javascript">
  alert('¡Usuario o Contraseña incorrecta! \n Intente de nuevo');
</script>

<?php
}
?>


<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Parroquia San Pedro Apostol - Mineral de Pozos.</title>
  
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/mystyle.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
   
  </head>
  <body>
  
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
      <a class="navbar-brand" href="../"><span class="glyphicon glyphicon-off"></span> Salir</a>
    </div>

  </div><!-- /.container-fluid -->
</nav>
  
    <section class="banner-po-ta">
      <div class="container">
          <div class="row">
              <div class="col-md-12 blanco">
                  <center>

                    <h4 class="title-po-ta" style="margin-top:80px;">Panel Administración</h4>
                         <form  method="post"  action="#" style="border: white 1px;  width: 40%;  padding: 25px;  background: rgba(0,0,0,0.4);  border-style: groove;  border-radius: 5px;">
                          <label for="usuario" style="  float: left;  font-size: 18px;">Usuario:</label><br>
                          <input type="text" id="usuario" name="usuario" placeholder="Usuario" required style="  border-radius: 5px;  width: 100%;  margin-bottom: 25px;  padding-left: 13px; color:black;" >
                          <br>
                          <label for="pass" style="  float: left;  font-size: 18px;">Contraseña:</label><br>
                          <input type="password" id="pass" name="pass" placeholder="Contraseña" required style="  border-radius: 5px;  width: 100%;  margin-bottom: 25px; color:black;  padding-left: 13px;" ><br>
                          <center><input style="  background: darkslategrey;  padding: 10px;  width: 50%;  font-size: 16px;  margin-top: 15px;" type="submit" name="entrar" value="Entrar"></center>
                        </form>
                  </center>
                </div>
            </div>
        </div>
    </section>
    
    
 




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
   
    
    
  </body>
</html>
<?php } ?>