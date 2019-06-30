<?php 
	require('conect/conect.php');
	require('includes/comentarios.php');
    $showcomentarios=consultacomentarios();
    require('includes/galeria.php');
    $showgaleria=consultaitems();
    require('includes/avisos.php');
    $showavisos=consultaavisos();
    require('includes/noticias.php');
    $shownoticias=consultanoticias();
    require('includes/noticia.php');
    $shownoticia=consultanoticia();

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1 user-scalable=no">
	<title>Parroquia San Pedro Apóstol</title>
	<link rel="shortcut icon" type="image/x-icon" href="img/logo.ico" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilo2.css">
</head>

<body id="inicio">
<header class='main-w'>
	<nav class="navbar navbar-default navbar-wrapper menu">
		<div class="container-fluid">
	    
		    <div class="navbar-header">
		      <a class="navbar-brand" href="#inicio">
		      	<span class="titulo">
		      		&nbsp Parroquia San Pedro Apóstol &nbsp<i class="glyphicon glyphicon-off"></i>
		      	</span>
		      </a>
		    </div>

		    <div class="collapse navbar-collapse">
		    	<ul class="nav navbar-nav navbar-right">
		        	<li><a href="#historia">Historia</a></li>
		          	<li><a href="#turismo">Sacerdotes</a></li>
		          	<li><a href="#galeria">Galería</a></li>   
		          	<li><a href="#" data-toggle="modal" data-target="#myModalE">Experiencias</a></li>
		          	<li><a href="#contacto">Notaria</a></li>
		        </ul>
		    </div>
		</div>
	</nav>
	
</header>
<div class="container main-w">
	<div class="row">
		<div class="banner col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<figure class="effect-julia">
				<img class='hidden-xs' src="img/banner1.jpg" alt="img22">
				<img class='visible-xs' src="img/banner4.JPG" alt="img22">
				<figcaption>
					<h2 class="hidden-xs">Parroquia <span>San Pedro Apóstol</span> </h2>
					<h2 class="visible-xs tituloxs">Parroquia <span>San Pedro Apóstol</span> </h2>
					<div class="hidden-xs">
						<p><span><label class='glyphicon glyphicon-pencil'></label>&nbsp!Compártenos tu experiencia¡</span></p>
						<p><span><label class='glyphicon glyphicon-camera'></label>&nbsp!Sube tus fotos¡</span></p>
						<p><span><label class='glyphicon glyphicon-globe'></label>&nbsp!Visítanos¡</span></p>
					</div>
				</figcaption>			
			</figure>
		</div>
	</div>
</div>

<section class="cuerpo main-w">
	<div class="container">
		<div class="row">
<!-- --------------------------------BIENVENIDA-------------------------------------------- -->			
			<div class="bienvenida col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h1 class="bh1">! Bienvenidos ¡</h1>		
				<p class="bp">
					Mineral de pozos, es una localidad del municipio de San Luis de la Paz, en el estado de Guanajuato, México,
					 que tuvo un gran auge minero, cuyo declive ocasiono el despoblamiento de la localidad que presento signos
					  de abandono a lo largo de un siglo. En 1982 es declarado Zona de Monumentos con setenta inmuebles y el 
					  16 de febrero de 2012 es catalogado como “Pueblo Mágico de México” como parte del programa federal que 
					  reconoce a los pueblos con una gran riqueza cultural, gastronómica o artística. Dentro de esta hermosa localidad se 
					  encuentra la Parroquia de San Pedro Apóstol que data del año "1610" en la cual también se encuentra la milagrosa imagen 
					  del Señor de los Trabajos cuya festividad tiene un gran auge de turismo religioso con visitantes provenientes desde todo México.
				</p>
				<div class="bfecha">21/10/2018</div>
			</div>

<!-- --------------------------------FEACTURES--------------------------------------------------------------- -->
			<div class="feactures row">
				<div class="feacture  col-md-4 col-xs-12 col-sm-6">
					<div class="fdimg col-xs-3">
						<img src="img/historia.png" class="fimg ">	
					</div>
					<div class="fcontainer col-xs-9">
						<h1 class="fh1">Historia.</h1>
						<div class="fdescripccion">Conoce desde los orígenes del pueblo hasta la creación de la Parroquia.</div>
						<a href="#historia" class="flink">ver más.&nbsp <span class="glyphicon glyphicon-hand-up"></span></a>
					</div>
				</div>
				<div class="feacture col-md-4 col-xs-12 col-sm-6">
					<div class="fdimg col-xs-3">
						<img src="img/comollegar.png" class="fimg ">	
					</div>
					<div class="fcontainer col-xs-9">
						<h1 class="fh1">Experiencias.</h1>
						<div class="fdescripccion">Ve los comentarios, experiencias y testimonios de quienes han tenido la fortuna de visitar este hermoso templo.</div>
						<a href="#" class="flink" data-toggle="modal" data-target="#myModalE">ver más.&nbsp <span class="glyphicon glyphicon-hand-up"></span></a>
					</div>
				</div>
				<div class="feacture col-md-4 col-xs-12 col-sm-6">
					<div class="fdimg col-xs-3">
						<img src="img/galeria.png" class="fimg ">	
					</div>
					<div class="fcontainer col-xs-9">
						<h1 class="fh1">Galería.</h1>
						<div class="fdescripccion">Sube tus fotos, y disfruta de la colección de imágenes y videos de este mágico lugar.</div>
						<a href="#galeria" class="flink">ver más.&nbsp <span class="glyphicon glyphicon-hand-up"></span></a>
					</div>
				</div>
				<div class="feacture col-md-4 col-xs-12 col-sm-6">
					<div class="fdimg col-xs-3">
						<img src="img/lugares.png" class="fimg ">	
					</div>
					<div class="fcontainer col-xs-9">
						<h1 class="fh1">Sacerdotes.</h1>
						<div class="fdescripccion">Conoce los diferentes sacerdotes o encargados de la Parroquia San Pedro Apóstol de Mineral de Pozos en los últimos años.</div>
						<a href="#turismo" class="flink">ver más.&nbsp <span class="glyphicon glyphicon-hand-up"></span></a>
					</div>
				</div>
				<div class="feacture col-md-4 col-xs-12 col-sm-6 hidden-xs">
					<div class="fdimg col-xs-3">
						<img src="img/experiencias.png" class="fimg ">	
					</div>
					<div class="fcontainer col-xs-9 " >
						<h1 class="fh1">Notaria.</h1>
						<div class="fdescripccion">Conoce horarios y políticas de nuestra parroquia de San Pedro Apóstol.</div>
						<a href="#notaria" class="flink">ver más.&nbsp <span class="glyphicon glyphicon-hand-up"></span></a>
					</div>
				</div>
				<div class="feacture col-md-4 col-xs-12 col-sm-6">
					<div class="fdimg col-xs-3">
						<img src="img/contactar.png" class="fimg ">	
					</div>
					<div class="fcontainer col-xs-9">
						<h1 class="fh1">Contactar.</h1>
						<div class="fdescripccion">Deja tus comentarios o sugerencias para mejorar tu experiencia en nuestro sitio.</div>
						<a href="#contacto" class="flink">ver más.&nbsp <span class="glyphicon glyphicon-hand-up"></span></a>
					</div>
				</div>
			</div>	
 <!-- --------------------------------Noticias---------------------------------------------------------------- -->	
			<div id="noticias" class="noticias col-xs-12 col-sm-12 col-md-12 col-lg-12">
				

				<div class="entradas col-xs-12 col-sm-12 col-md-3 col-lg-3">
					<h3 class="hh3 entradastitulo">
						Entradas.
					</h3>
					<div class="mnoticias">
						<?php 
							echo $shownoticias;
						 ?>
					 </div>
				</div>	

				<div class="noticia col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<h1 class="hh1 titulonoticias">Noticias.</h1>	
					<div class="cuerponoticia">
					<?php 
						echo $shownoticia;
					 ?>
					 </div>
				</div>
				<div class="comentariosnoticias col-xs-12 col-sm-12 col-md-3 col-lg-3">
					<h3 class="hh3 avisostitulo">
						Avisos.
						
					</h3>
					<div class="avisos">
						<ul>
							<?php 
								echo $showavisos;
							 ?>
						</ul>
					</div>

				</div>	
			
							
			</div>
			
<!-- --------------------------------HISTORIA---------------------------------------------------------------- -->	
			<div id="historia" class="historia col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h1 class="hh1">Historia.</h1>	
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<h3 class="hh3">
						Orígenes del pueblo.
					</h3>
					<p class="hp">
						En la segunda parte del tomo VII de la obra de don Pedro Gonzales “breve estudio de antigüedades de Guanajuato” nos dice que ya se conocía el lugar y se explotaban las minas por los naturales de estas tierra, y marca como fecha de la fundación del pueblo en 1585 con el nombre de : <span class='hspan'>”Palmar de los Pozos”</span>.
					</p>
					<p class="hp">
						Dicho nombre es en razón de los pequeños tiros de 5 o 6 metros que abundaban en la localidad, de los cuales se extraía mercurio y sobre todo cinabrio y por las palmas que abundaban en estas lomas llanas y pelonas.
					</p>
					<p class="hp">
						Las adiciones al nombre de palmar de pozos es el de <span class='hspan'>San Pedro</span>, en honor del príncipe de los apóstoles y a cuyo patrocinio se dejó este pueblo. Lo de vega es probable que obedezca al nombramiento que se otorgó a Juan Calderón de la Vega teniente de alcalde mayor y alguacil mayor de las minas de Xichu y <span class='hspan'>Palmar de los Pozos</span> al constituirse el presidio. 
					</p>
				</div>	
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<h3 class="hh3">
						La creación de la Parroquia.
					</h3>
					<p class="hp">
						El curato fue erigido en principios del siglo XVII en 1611 por el VII Obispo de Michoacán don Baltazar de Covarrubias y Muñoz fruto de las visitas pastorales que efectuó en la diócesis. Dejando la parroquia en manos del Pbro. Dionisio Raso Sotomayor, según datos del mismo creador de la parroquia en su informe de 1619.
					</p>
					<p class="hp">
						La implantación de la fe en nuestras tierras, está marcada indudablemente por la doctrina del concilio de Trento, en ella leemos el papel fundamental de la persona del obispo para el crecimiento de la fe, es él el primer responsable evangelización en este pueblo.
					</p>
					<p class="hp">
						Sin olvidar también que el interés por estos territorios obedece a circunstancias muy precisas:
						<ul>
							<li>El avance, aunque lento, de los conquistadores con el fin de anexar más tierras a la corona Española.</li>
							<li>El descubrimiento de yacimientos importante de metales preciosas más al norte (Zacatecas y Guanajuato).</li>
							<li>La pacificación y cristianización de los indómitos Chichimecas</li>
						</ul>		
    				</p>
				</div>
				<div class="col-xs-12 col-sm-12 cold-md-12 col-lg-12">
					<h3 class="hh3">
						Primeros pasos en el obispado en Michoacán.
					</h3>
					<p class="hp">
						Para 1619 y el panorama se presenta de la siguiente manera: 8 españoles, 60Indios (Otomíes y pames) y 6 negros. En el censo de 1631 La población es de 150-160 personas de confesión, hay 3 minas y labores y estancias de ganado que son: Ortega, Manzanares, Estancia a Media Legua más (hoy extinta), la Carbonera y rancho de Juan Cano.
						La peste que azotó al país y que de manera particular asedio a la diócesis de Michoacán término con pueblos completos e imposibilito Las visitas pastorales que no se volvieron a dar hasta 1682 Por el Obispo Juan ortega montañés y cuya información es muy Detallada sobre como se va configurando la parroquia.
					</p>
					<p class="hp">
						El pueblo fiel participaban en todas las funciones religiosas (Procesiones, cuaresmales y novenas); Las campanas de las iglesias, cuyo tañer indicaba los momentos de oración y de La celebración eucarística, marcaban también no el ritmo diario de los pueblos y ciudades; etc.
						La vida ordinaria contaba con abundantes recursos piadosos, múltiples cofradías en honor de santísimo, a la virgen María, a los Santos, etc., Así mismo, se realizaba la efectiva vivencia de las obras de caridad, insignia distintiva del auténtico espíritu cristiano.
					</p>
					<p class="hp">
						Como consta en el archivo parroquial, la cofradía de la virgen del rosario se constituyó En 1632, la de nuestra Señora de la soledad y del Santo entierro en 1662 y la cofradía de santísimo sacramento en 1672, se sabe También de la de San José y de las ánimas.
						Los informes de las visitas pastorales del siglo XVIII, contienen además de los datos del estado material Y espiritual de la parroquia, la descripción del clima, de su ubicación geográfica, la variedad de su fauna Y de su flora, de lo que se cultiva y de que recursos cuentan las gentes para sobrevivir.
					</p>
					<p class="hp">
						La atención pastoral de la diócesis de Michoacán, tan extensa, se vio obstaculizada por la secularización de las doctrinas de los religiosos en 1757, la expulsión de los jesuitas en 1767 y la guerra de independencia que tuvo como escenario algunas ciudades del territorio diocesano es verdad que no hubo participación directa del pueblo en esta última, pero todas las parroquias resistieron sus consecuencias.
						En 1862 encontramos el último informe de la parroquia formando parte del obispado de Michoacán. En ella leemos: la población de la parroquia es de indios otomíes en su mayor parte: Hay algunos pames, y poca gente de raza española. Asciende la de todo el territorio parroquia a 10,000 habitantes que viven en la cabecera y en 4 haciendas de labor y algunos ranchos. Son atendidos por el cura beneficiario, vicario parroquial y un vicario fijo en la Hacienda de Santa Anna y lobos. 
					</p>

					<h3 class="hh3">
						Consolidación de la parroquia en el obispado de León.
					</h3>
					<p class="hp">
						Por la bula Catholicae Romanae Eclesiae, del 26 de enero de 1863, Michoacán fue elevado a sede metropolitana, quedando como sufragáneas la diócesis de San Querétaro, San Luis Potosí y de León creada también por el Papa Pio IX por la bula Gravissium Sollicitudinis del 26 de enero de 1863 y ejecutada el 14 de febrero de 1864. Dichos cambios repercutieron o a la parroquia ya que a partir de entonces formará parte de la nueva diócesis de León.
						La segunda mitad del siglo xix está marcado por la inestabilidad de la república naciente. Para la iglesia en México Marcó un periodo de crisis iniciada por el despojo de sus bienes por la reforma de Juárez (1857), sacudida violentamente por la revolución (1910 –1920) y desangrada por la persecución religiosa (1926 –1929) la guerra cristera, contrariamente a lo que los agresores esperaban, no hizo otra cosa que avivar y confirmar en la fe a toda una nación, que conoció el ejemplo tan elocuente de fe de los católicos mexicanos.
						A este respecto, conviene destacar aunque sea sobriamente , que los moradores de estas regiones; Michoacán, Jalisco Y Guanajuato se unieron a esta lucha por la libertad en la práctica de su fe y tuvieron una notable participación, brindando incluso múltiples testimonios fehacientes de mártires anónimos y conocidos, como es el caso del Padre Contreras .
						El período del porfiriato o (1877 –1910) significó para pozos el auge nunca antes conocido con la llegada del capital extranjero (Francia, España y Alemania) el cual trajo consigo nuevas fuentes de trabajo que fue aprovechando no sólo por los moradores, sino por una cantidad considerable de personas que acudían de otros estados de la república (Guanajuato, Zacatecas, Estado de México e Hidalgo).
					</p>
					<p class="hp">
						El ferrocarril, la planta de luz, el teléfono, el correo y el telégrafo, ponían a la vanguardia y a la modernidad este pueblo minero que cambiaba en su fisonomía con construcciones y casonas producto de la bonanza del momento.
						Eclesiásticamente se desataba nuevos retos: Por un lado la atención a estos grupos y la creación de nuevas haciendas (Carbonera, La Cebada y Purísima) así como el mejoramiento y embellecimiento de los recintos sagrados. Es éste el momento en que prosperara y culto al Sr. De los trabajos.
						Lamentablemente, la bonanza terminó con la expulsión de Porfirio Díaz del país y por las revueltas ocasionadas por la revolución; hay que sumar la caída del precio de la plata, la caída de la bolsa de Nueva York (1929) y la cada vez más baja producción de las minas.
					</p>
					<p class="hp">
						Si bien en 1940 se busca el último intento por volver a echar andar las minas, todo lo cual será un fracaso; el expolio y la migración de los que en otro tiempo llegaron por trabajo convertiría al pueblo en un lugar deshabitado.
						Poco a poco pozos se repoblara por gente de las rancherías y se volverá al cultivo de la tierra, la ganadería, la migración a los estados unidos y en el caso de las mujeres, a una industria textil en mínima escala.
					</p>

					<h3 class="hh3">
						Crecimiento y fructificación de la parroquia (Diócesis de Celaya).
					</h3>
					<p class="hp">
						Ya en un clima de renovado entusiasmo posconciliar, nace a la vida de la iglesia la diócesis de Celaya, su santidad Pablo VI, por la bula Scribae illi evangelico, fechada en Roma a 13 de octubre de 1973, creó la diócesis de Celaya, dándose a conocer la noticia a México el 8 de diciembre del mismo año.
						El delegado apostólico, Mario Pío Gaspari ejecutó la bula y dio posesión canónica de la nueva diócesis a Mons. Álvarez Tena, el 18 de abril de 1974.
						La parroquia de San Pedro formaba ahora parte de la nueva diócesis que muy pronto tuvo que ceder territorio para la creación de la parroquia en la antigua vicaría fijan de San Sebastián del Salitre (1978).
					</p>
					<p class="hp">
						Pbro. Leonardo Celio López que por 18 años guio la parroquia además del mantenimiento del templo busco la formación cristiana del pueblo –catequesis, cursillos y acólitos; por su parte el Pbro. Arturo Segura en su breve paso por la parroquia alentó a los trabajos por el embellecimiento del templo y de la casa parroquial; Pbro. Felipe Obrajero impulso los grupos parroquiales y coros.
						El Pbro. Juan Manuel Betancourt (2001–2006) buscó la organización y consolidación de los grupos, esfuerzos que fueron secundados por el Pbro. Narciso Colunga Lugo (2006 –2011); es en este periodo cuando la parroquia se dio territorio al crearse la parroquia de nuestra Sra. De Lourdes en Fracciones (2008).
						Bajo la dirección del Pbro. José Dimas Rangel (2011) la parroquia conto con 24 comunidades y con los grupos parroquiales de : Adoración nocturna, Arcoíris, Catequesis, Coros, Cursillistas, Guadalupanos, Liturgia, Sanjuaneros (San Pedro), Sanjuaneros (vizcaínos), Orden San Pedro, Pastoral familiar, Pequeños Hermanos de María, Renovación y La milicia de San Miguel arcángel.
					</p>
				</div>	
			
							
			</div>
<!-- --------------------------------INTERMEDIO------------------------------------------------------------------ -->
			<div class="intermedio">
				<figure class="effect-sarah col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<img src="img/banner2.jpg ">
					<figcaption>
						<h2>Señor de los <span>Trabajos</span></h2>
						<p>Parroquia San Pedro Apóstol, Mineral de Pozos, Gto.</p>
					</figcaption>			
				</figure>
				<div class="idescripcion col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<h2 class="ih2">Señor de los Trabajos.</h2>		
					<p class="ip">

						El Señor de los Trabajos actualmente comparte capilla con San Pedro Apóstol patrono del pueblo, pero es a esta imagen a la cual el pueblo de Mineral de Pozos y muchos otros de la Ciudad de México tienen una gran devoción, ya que después del cierre de las minas de este lugar, las personas que se marchaban oraban a esta imagen para pedir la bendición de encontrar trabajo una vez marchándose, y así fue muchas de las personas tuvieron que migrar a la Ciudad de México, donde se establecieron y encontraron el trabajo que ya no tenían en este pueblo, a esta hermosa imagen se le estaba preparando su propia capilla, que de haberse terminado hubiera sido mucha más grande que la de San Pedro Apóstol, pero por asares del destino o simplemente porque Dios así lo quiso, esta capilla hasta la fecha esta inconclusa y seguirá así por cuestiones culturales. Su fiesta es celebrada el jueves de la Ascensión del Señor, es una fiesta muy grande ya que muchos buscan un favor especial en esta imagen, atrayendo a personas de todas partes de la Republica e incluso a muchos devotos que llegan desde Estados Unidos.
					</p>
					
				</div>
				<p class="ip ip2 col-xs-12 col-sm-12 col-md-12 col-lg-12">
						Existen muchas leyendas a cerca de como llego esta imagen. Cuentan algunos que era de  un lugar muy cercano y pertenecía a un rico hacendado, la imagen iba de visita por muchos lugares y llego a este pueblo, al querer llevársela de nuevo al lugar del que venía, la imagen se hizo tan pesada que ya no pudieron cargarla, muchos fueron los intentos por llevarse de vuelta a esta imagen al lugar a donde pertenecía, pero al no poder levantarla más, los dueños intuyeron que era aquí donde esta imagen quería estar, por lo tanto la imagen fue donada a la parroquia de este lugar donde los mineros quedaron a cargo de ella. La verdadera historia no la conocemos por completo, pero son estas leyendas tan magnificas unas de grandes riquezas de este pueblo.
				</p>
				<div class="center">
					<center>
					<div id="myCarousel" class="carousel slide">    
						      <!-- Carousel items -->   
						<div class="carousel-inner">       
						 	<div class="item active">          
						 		<h1 class="slideh1">C. de San Antonio de Padua.</h1>		
						 		<p>Santuario de estilo barroco admirable por su estructura de piedra caliche.</p>
						 		<span class="fecha">(1595).</span>
						 	</div>       
							<div class="item">          
								<h1 class="slideh1">C. del Sr. de los Trabajos.</h1>		
						 		<p>Santuario que los trabajadores levantaron para honrar a su patrono.</p>
						 		<span class="fecha">Construcción inconclusa del siglo XIX.</span>
							</div>
							<div class="item">          
								<h1 class="slideh1">Capilla de la V de Guadalupe.</h1>		
						 		<p>Edificio construido con piedra caliche y cantera ubicada en el barrio de la Vizcaina</p>
						 		<span class="fecha">(1900-1910).</span>
							</div>
							<div class="item">          
								<h1 class="slideh1">Parroquia de San Pedro.</h1>		
						 		<p>Construida en la época del porfiriato, con un estilo neoclásico, edificada con piedra y cantera rosa.</p>
							</div>
							<div class="item">          
								<h1 class="slideh1">Casa Santa.</h1>		
						 		<p>También llamada capilla de San Francisco de Asís. Tiene un estilo ecléctico y los materiales utilizados son piedra y cantera.</p>
							</div>         
							
						</div>    <!-- Carousel nav -->  
						<ol class="carousel-indicators">       
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>       
							<li data-target="#myCarousel" data-slide-to="1" ></li>       
							<li data-target="#myCarousel" data-slide-to="2" ></li> 
							<li data-target="#myCarousel" data-slide-to="3" ></li>       
							<li data-target="#myCarousel" data-slide-to="4" ></li>    
						</ol> 
					</center>
				</div>
			</div>

<!-- --------------------------------TURISMO------------------------------------------------------------------ -->	
			<div  class="turismo col-xs-12 col-sm-12 col-md-12 col-lg-12">
				
					<div class="col-sm-12">
						<table id="turismo" class="table table-striped">
		                    <caption class="gh1">Sacerdotes (1657 - actualmente). </caption>
		                    <thead>
		                      <tr>
		                        <th><i class="glyphicon glyphicon-user"></i>Nombre</th>
		                        <th><i class="glyphicon glyphicon-time"></i>Inicio</th>
		                        <th><i class="glyphicon glyphicon-time"></i>Fin</th>
		                      </tr>
		                    </thead>
		                    <tbody>
		                    	<tr>
		                        <th>P. Dionicio Rito Sotomayor</th>
		                        <th>1611</th>
		                        <th>1631</th>
		                      </tr>
		                      <tr>
		                        <th>Diego Ordoñez de Peralta</th>
		                        <th>1631</th>
		                        <th>1637</th>
		                      </tr>
		                      <tr>
		                        <th>Andres de Ledesma</th>
		                        <th>1638</th>
		                        <th>1641</th>
		                      </tr>
		                      <tr>
		                        <th>Diego Bravo</th>
		                        <th>1641</th>
		                        <th>1675</th>
		                      </tr>
		                      <tr>
		                        <th>B. Juan De Salas</th>
		                        <th>1675</th>
		                        <th>1677</th>
		                      </tr>
		                      <tr>
		                        <th>B. Rodrigo De Arias</th>
		                        <th>1677</th>
		                        <th>1681</th>
		                      </tr>
		                      <tr>
		                        <th>Dr. Nicolas Ramirez Moreno</th>
		                        <th>1681</th>
		                        <th>1682</th>
		                      </tr>
		                      <tr>
		                        <th>B. A. De Salas</th>
		                        <th>1682</th>
		                        <th>1684</th>
		                      </tr>
		                      <tr>
		                        <th>B. Ignacio Gonzales Espindola De Contreras</th>
		                        <th>ENE 1684</th>
		                        <th>AGO 1684</th>
		                      </tr>
		                      <tr>
		                        <th>B. Lorenzo De Salas Zapata</th>
		                        <th>1684</th>
		                        <th>1691</th>
		                      </tr>
		                      <tr>
		                        <th>Dr. Nicolas R. Moreno</th>
		                        <th>1691</th>
		                        <th>1692</th>
		                      </tr>
		                      <tr>
		                        <th>B. Lorenzo Zapata</th>
		                        <th>1692</th>
		                        <th>1693</th>
		                      </tr>
		                      <tr>
		                        <th>B. Jose Lopez Marroquin</th>
		                        <th>1693</th>
		                        <th>1709</th>
		                      </tr>
		                      <tr>
		                        <th>B. Jose Espinoza</th>
		                        <th>1709</th>
		                        <th>1710</th>
		                      </tr>
		                      <tr>
		                        <th>Dr. Ignacio Zamarripa</th>
		                        <th>1710</th>
		                        <th>1728</th>
		                      </tr>
		                      <tr>
		                        <th>B. Jose Ramos Sandoval Y Meza</th>
		                        <th>1728</th>
		                        <th>1742</th>
		                      </tr>
		                      <tr>
		                        <th>Lic. Carlos Toral</th>
		                        <th>1742</th>
		                        <th>1757</th>
		                      </tr>
		                      <tr>
		                        <th>B. Ignacio Gonzales Ortega</th>
		                        <th>1757</th>
		                        <th>1763</th>
		                      </tr>
		                      <tr>
		                        <th>B. Antonio Canalejo</th>
		                        <th>1763</th>
		                        <th>1767</th>
		                      </tr>
		                      <tr>
		                        <th>B. Tomas Javier Peralta</th>
		                        <th>1767</th>
		                        <th>1768</th>
		                      </tr>
		                      <tr>
		                        <th>B. Juan Martinez</th>
		                        <th>1768</th>
		                        <th>1771</th>
		                      </tr>
		                      <tr>
		                        <th>B. Manuel Ortega</th>
		                        <th>1771</th>
		                        <th>1776</th>
		                      </tr>
		                      <tr>
		                        <th>B. Agustin Robelo</th>
		                        <th>1776</th>
		                        <th>1790</th>
		                      </tr>
		                      <tr>
		                        <th>B. Ignacio Otegui</th>
		                        <th>1790</th>
		                        <th>1792</th>
		                      </tr>
		                      <tr>
		                        <th>B. Jose Maria Zarco</th>
		                        <th>1792</th>
		                        <th>1813</th>
		                      </tr>
		                      <tr>
		                        <th>B. Luis Gonzales De Carega</th>
		                        <th>1813</th>
		                        <th>1828</th>
		                      </tr>
		                      <tr>
		                        <th>B. Ignacio Borbontin</th>
		                        <th>1828</th>
		                        <th>1832</th>
		                      </tr>
		                      <tr>
		                        <th>B. Ignacio Nuñez Borbotin</th>
		                        <th>1832</th>
		                        <th>1836</th>
		                      </tr>
		                      <tr>
		                        <th>B. Ignacio Nuñez Sotomayor</th>
		                        <th>1832</th>
		                        <th>1836</th>
		                      </tr>
		                      <tr>
		                        <th>B. Cayetano Salas</th>
		                        <th>1836</th>
		                        <th>1858</th>
		                      </tr>
		                      <tr>
		                        <th>Lic. Jose Maria Gutierrez</th>
		                        <th>1858</th>
		                        <th>1861</th>
		                      </tr>
		                      <tr>
		                        <th>Pbro. Arcadio Ulloa</th>
		                        <th>1861</th>
		                        <th>1862</th>
		                      </tr>
		                      <tr>
		                        <th>Pbro. Pedro E. Peaflor</th>
		                        <th>1862</th>
		                        <th>1875</th>
		                      </tr>
		                      <tr>
		                        <th>Pbro. Pascual Raygosa</th>
		                        <th>1875</th>
		                        <th>1877</th>
		                      </tr>
		                      <tr>
		                        <th>Pbro. Luis G. Sierra</th>
		                        <th>1877</th>
		                        <th>1885</th>
		                      </tr>
		                      <tr>
		                        <th>Pbro. Jose Ma. Porfirio Lopez</th>
		                        <th>1885</th>
		                        <th>1887</th>
		                      </tr>
		                      <tr>
		                        <th>Pbro. Maximo Arias</th>
		                        <th>1887</th>
		                        <th>1893</th>
		                      </tr>
		                      <tr>
		                        <th>Pbro. Jose Ma. Porfirio Lopez</th>
		                        <th>1893</th>
		                        <th>1897</th>
		                      </tr>
		                      <tr>
		                        <th>Pbro. Aurelio Ayala</th>
		                        <th>1897</th>
		                        <th>1900</th>
		                      </tr>
		                      <tr>
		                        <th>Pbro. Jose Maria Esquivel</th>
		                        <th>1900</th>
		                        <th>1901</th>
		                      </tr>
		                      <tr>
		                        <th>Pbro. Mariano Pastor</th>
		                        <th>1901</th>
		                        <th>1901</th>
		                        </tr>
		                      <tr>
		                        <th>Pbro. Miguel Pedroza</th>
		                        <th>1901</th>
		                        <th>1908</th>
		                      </tr>
		                      <tr>
		                        <th>Pbro. J. Guadalupe Huerta</th>
		                        <th>1905</th>
		                        <th>1908</th>
		                      </tr>
		                      <tr>
		                        <th>Pbro. Mariano Pastor</th>
		                        <th>1905</th>
		                        <th>1908</th>
		                      </tr>
		                      <tr>
		                        <th>Pbro. Federico Contreras</th>
		                        <th>1909</th>
		                        <th>1931</th>
		                      </tr>
		                      <tr>
		                        <th>Pbro. Tomas Garcia Yaez</th>
		                        <th>1931</th>
		                        <th>1936</th>
		                      </tr>
		                      <tr>
		                        <th>Pbro. J. Jesus Quiroz</th>
		                        <th>1936</th>
		                        <th>1936</th>
		                      </tr>
		                      <tr>
		                        <th>Pbro. Ignacio Gutierrez Orozco</th>
		                        <th>1936</th>
		                        <th>1937</th>
		                      </tr>
		                      <tr>
		                        <th>Pbro. Jose De La Luz Duran</th>
		                        <th>1937</th>
		                        <th>1940</th>
		                      </tr>
		                      <tr>
		                        <th>Pbro. Antonio Gutierrez Ramirez</th>
		                        <th>1940</th>
		                        <th>1968</th>
		                      </tr>
		                      <tr>
		                        <th>Pbro. Manuel Villegas Lugo</th>
		                        <th>1973</th>
		                        <th>1973</th>
		                      </tr>
		                      <tr>
		                        <th>Pbro. Leonardo Celio Lopez</th>
		                        <th>1973</th>
		                        <th>1991</th>
		                      </tr>
		                      <tr>
		                        <th>Pbro. Arturo Ramirez Segura</th>
		                        <th>1991</th>
		                        <th>1994</th>
		                      </tr>
		                      <tr>
		                        <th>Pbro. Felipe Obrajero Campuzano</th>
		                        <th>1994</th>
		                        <th>2001</th>
		                      </tr>
		                      <tr>
		                        <th>Pbro. Juan Manuel Betancourt</th>
		                        <th>2001</th>
		                        <th>2006</th>
		                      </tr>
		                      <tr>
		                        <th>Pbro. Narcizo Colunga Lugo</th>
		                        <th>2006</th>
		                        <th>2011</th>
		                      </tr>
		                      <tr>
		                        <th>Pbro. Jose Dimas Godinez Rangel</th>
		                        <th>2011</th>
		                        <th>2015</th>
		                      </tr>
		                      <tr>
		                        <th>Pbro. Jose Jesus Jasso Abundis</th>
		                        <th>2015</th>
		                        <th>Actualmente</th>
		                      </tr>
		                    </tbody>
		                  </table>
					</div>
				</div> 
			</div>
<!-- --------------------------------GALERIA------------------------------------------------------------------- -->
			<div id="galeria" class="galeria col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h1 class="gh1">Galería.</h1>		
				<p class="gp">
					Esta Parroquia, es un hermoso lugar para visitar y tomar las mejores fotos, ayúdanos a hacer más grande esta galería compartiéndonos tus fotos.
				</p>
				<div class="gspan">Las fotos están moderadas, tu contribución no aparecerá hasta ser aprobada por el administrador. </div>
				<div class="glView">
					<div class="subirimagen">
		            	<button class="cboton" data-toggle="modal"     data-target="#myModalSI">
							<span class='glyphicon glyphicon-picture' aria-hidden="true"></span>
							Subir Imágen.	
						</button>
		            </div>

		           	<div class="imgSwitch">
				    	<?php 
				    		echo $showgaleria;
				    	 ?>
			            <div class="loadit">
			            	<button id="loadmore" max="<?php echo totalpaginas(); ?>" pagina="0" type="button" class="cboton">
			            		<i class="glyphicon glyphicon-refresh"></i>
			            		Cargar Más
			            	</button>
			            </div>
					</div>
				</div>
			</div>


		</div>
	</div>
</section>

<footer class='main-w' id='contacto'>
	<div class="container">
		<div class="row">
			<section class="contacto col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h2 class="ch2">Notaria Parroquial.</h2>
				<p class="cp">
					Dirección: Calle Recreo #2, Mineral de Pozos Guanajuato. <br>
					Teléfono: 014422930060. <br>
					Correo: notariaparroquiapozos@outlook.com 
				</p>

				<div class="notaria col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<h3 class="hh3">Horarios de atención</h3>
					<span class="diasnotaria">Lunes, Martes, Jueves y Sábado.</span>
					<ul>
						<li>De 9:00 a.m. a 2:00 p.m. y 5:00 p.m. a 7:00 p.m.</li>
					</ul>
					<span class="diasnotaria">Miércoles.</span>
					<ul>
						<li>No hay Servicio.</li>
					</ul>
					<span class="diasnotaria">Viernes y Domingo.</span>
					<ul>
						<li>De 9:00 a.m. a 3:00 p.m.</li>
					</ul>
					

					<h3 class="hh3">Celebraciones Parroquiales</h3>
						<span class="diasnotaria">Lunes</span>
						<ul>
							<li>7:00 p.m. Santa misa a la Divina Providencia y Sr. de los Trabajos</li>
						</ul>
						<span class="diasnotaria">Jueves</span>
						<ul>
							<li>9:00 a.m. Exposición del Santísimo.</li>
							<li>6:00 p.m. Hora Santa.</li>
							<li>7:00 p.m. Santa Misa.</li>
						</ul>
						<span class="diasnotaria">Sábado</span>
						<ul>
							<li>9:00 a.m. Exposición del Santísimo.</li>
							<li>7:00 p.m. Santa Misa.</li>
						</ul>
						<span class="diasnotaria">Domingo</span>
						<ul>
							<li>7.00 a.m. Santa Misa</li>
							<li>1.00 p.m. Santa Misa</li>
							<li>7.00 p.m. Santa Misa</li>
						</ul>
					
					<h3 class="hh3">Requisitos de Presentación de niños</h3>
					<p class="cp">
						<ul>
							<li> Solo en Sábado. </li>	
						</ul>
					</p>
					

				</div>
				<div class="notaria col-xs-12 col-sm-12 col-md-6 col-lg-6" id="notaria">
					<h3 class="hh3">Requisitos para bautismo</h3>
					<p class="cp">
						<ul>
							<li> Acta de nacimiento del bebe. </li>
							<li> Boleta de Matrimonio por la iglesia de los Padrinos. <br>
							     Si son solteros, boleta de bautismo</li>
							<li> Comprobante de pláticas de Papás y Padrinos. </li>
							<li> Platicas de las 10:30 a.m. a 12:30 p.m. (Solo una plática). <br> 
							     Favor de presentar Credencial de Elector</li>
							<li> Si son de fuera traer un permiso de la parroquia a la que pertenecen. </li>
							<li> Boleta y Celebración: $250.00</li>
						</ul>
					</p>
					
					<h3 class="hh3">Requisitos de Presentación de novios</h3>
					<p class="cp">
						<ul>
							<li> Acta de matrimonio civil de los novios original (copia). </li>
							<li> Boleta de bautismo y confirmación recientes (con una antigüedad no más de 7 meses). </li>
							<li> Presentar 4 testigos de preferencia los padres o en su caso la presencia de hermanos, tíos, abuelos o primos. </li>
							<li> Una fotografía tamaño infantil de cada uno de los contrayentes. </li>
							<li> Que uno de los dos pertenezca a esta parroquia. </li>
							<li> Boleta de matrimonio por la iglesia de los padrinos de velación. </li>
							<li> Costo de la presentación de $2000.00 si algún contrayente pertenece a otra parroquia se envía un documento y su costo es de $100.00. </li>
							<li> Libros $120.00 para pláticas. </li>
							<li> Asistir a las pláticas pre-matrimoniales los días sábado y domingo. </li>
							<li> Nota: Se les pide presentar los documentos para revisarlos antes de renovarlos las presentaciones se agendan después de revisarlos según la agenda de los padres y disponibilidad de contrayentes.</li>
						</ul>
					</p>
				</div>
				<center>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<span class="notan">
							Escríbenos dejamos tus comentarios, sugerencias o cualquier cosa que nos quieras decir para mejorar tu experiencia.
						</span>
						<br>
						<a href="https://web.facebook.com/profile.php?id=100009124470263" class="facebook"><img class="facebook" src="img/facebook.png"></a>
						<button class="cboton" data-toggle="modal"     data-target="#myModal">
							<span class='glyphicon glyphicon-envelope' aria-hidden="true"></span>
							&nbsp&nbsp Contactar.	
						</button>
						<a href="https://www.instagram.com/parroquia.san.pedro.apostol/?hl=es-la" class="facebook"><img class="facebook" src="img/instagram.png"></a>
				    </div>
				    
					
				</center>
				
			</section>
		    
    	</div>
    </div>		
</footer>

<!-- Modal Contacto--> 
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">    
	<div class="modal-dialog modal-dialog-cont">       
		<div class="modal-content">          
			<div class="modal-header">             
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					X
				</button>
				<h4 class="modal-title" id="myModalLabel">                
					Contactar.
				</h4>          
			</div>          
			<form name="contacto" id="formcontacto" >
				<div class="modal-body">  
					<div class="form-group">
			        	<span class="glyphicon glyphicon-pencil icon-input"></span> 
			            <input name="nombre" type="text" class="form-control" id="nombre-cont" placeholder="Nombre" required >
			        </div>
			        <div class="form-group">
			        	<span class="glyphicon glyphicon-pencil icon-input"></span> 
			            <input name="email" type="email" class="form-control" id="email-cont" placeholder="Email" required >
			        </div>
			        <div class="form-group">
			        	<span class="glyphicon glyphicon-pencil icon-input"></span> 
			            <input name="asunto" type="text" class="form-control" id="asunto-cont" placeholder="Asunto" required >
			        </div>
		           	<div class="form-group">
		           		<span class="glyphicon glyphicon-comment icon-input"></span>
				    	<textarea name="mensaje" required rows="5" class="form-control" id="mensaje-cont" placeholder="Mensaje" ></textarea>
				    </div>
				    <div class="form-group">
		           		<div class="mensajes-contactar"></div>
				    </div>
				</div>          
				<div class="modal-footer">             
					<input type="reset" value="Borrar" class="cboton cboton2" >
					<input type="button" id="contactar" value="Enviar" class="cboton cboton2"  >
				</div>       
			</form>
		</div><!-- /.modal-content --> 
	</div><!-- /.modal -->
</div>




<!-- Modal Experiencias--> 
<div class="container modal fade" id="myModalE" tabindex="-2" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">    
	<div class="row modal-dialog modal-dialog-exp ">       
		<div class="modal-content modal-content-exp">          
			<div class="modal-header modal-header-exp clearfix">             
				

				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					X
				</button>
				<h4 class="modal-title" id="myModalLabel">                
					Experiencias.

				</h4>          
				<form enctype="multipart/form-data" name="formexperiencia" id="formexperiencia">
					<div class="form-group col-xs-12 ">
					<span class="glyphicon glyphicon-pencil icon-input"></span> 
		            <input name="nombre" type="text" class="form-control" id="nombre-exp" placeholder="Nombre" required >
		            <input name="respuesta" type="hidden" class="form-control" id="respuesta-exp" >

		            </div>
		            <div class="form-group col-xs-12 ">
			    	<span class="glyphicon glyphicon-comment icon-input"></span>
			    	<input name="experiencia" type="text" class="form-control" id="experiencia" placeholder="Mi experiencia en Mineral de Pozos" required >
			    	</div>
			    	<div class="form-group col-xs-12 ">
			    	<input type="button" name="enviarexp" id="enviarexp" value="Compartir" class="cboton"  >
			    	</div>
				</form>
				<div class="infoexp"></div>
			</div>          
				<div class="modal-body modal-body-exp">  
					
					<?php 
						 echo $showcomentarios;
					?>
							
				</div>          
			
		</div><!-- /.modal-content --> 
	</div><!-- /.modal -->
</div>

<!-- Modal Galeria--> 
<div class="modal fade" id="myModalGI" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">    
	<div class="modal-dialog modal-dialog-galeria">       
		<div class="modal-content modal-content-galeria">          
			<div class="modal-body modal-galeria">  
				<div class="mostrar-img row">
					<div class="col-xs-12 link-box-gal">
			            <a class="close close-reveal-modal" data-dismiss="modal" aria-hidden="true">X</a>
			    	</div>
				    <img class="col-xs-12 col-sm-7 showitemmodal" src="img/galeria/0xkmknrenW.jpg" alt="" />
				    <div class="col-xs-12 col-sm-5 img-left">
					    <div class="description-box">
						   <h4 id="tituloitem">Lobo ruso</h4>
						   <p id="descripcionitem">Es increible</p>
				            <span class="autor" id="autoritem">daniel</span>
				            <span class="fecha" id="fechaitem">11/08/2016</span>
					    </div>
					</div>
				</div>
			</div>          

		</div><!-- /.modal-content --> 
	</div><!-- /.modal -->
</div>


<!-- Modal SUbir img--> 
<div class="modal fade" id="myModalSI" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">    
	<div class="modal-dialog modal-dialog-cont">       
		<div class="modal-content">          
			<div class="modal-header">             
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					X
				</button>
				<h4 class="modal-title" id="myModalLabel">                
					Subir Imágen.
				</h4>          
			</div>          
			<form enctype="multipart/form-data" id="formsimg">
				<div class="modal-body">  
					<p>Las fotos están moderadas: Tu contribución no aparecerá hasta haber sido aprobada por el Administrador.</p>
					<div class="form-group">
						<input class="form-control" name="imagen" id="imagen" type="file" placeholder="Foto">
					</div>
					<div class="form-group">
			        	<span class="glyphicon glyphicon-pencil icon-input"></span> 
			            <input name="titulo" type="text" class="form-control" id="titulo-gal" placeholder="Título" required >
			        </div>
					<div class="form-group">
			        	<span class="glyphicon glyphicon-pencil icon-input"></span> 
			            <input name="autor" type="text" class="form-control" id="autor-gal" placeholder="Nombre o Aútor" required >
			        </div>
			        <div class="form-group">
			        	<span class="glyphicon glyphicon-pencil icon-input"></span> 
			            <input name="email" type="email" class="form-control" id="email-gal" placeholder="Email" required >
			        </div>
			        <div class="form-group">
		           		<span class="glyphicon glyphicon-comment icon-input"></span>
				    	<textarea name="descripcion" required rows="5" class="form-control" id="descripcion-gal" placeholder="Descripción" ></textarea>
				    </div>
				    <div class="form-group">
				    	<div class="mensajes-subir-imagen"></div> 
				    </div> 
				</div>          
				<div class="modal-footer">             
					<input type="reset" value="Borrar" class="cboton cboton2" >
					<input type="button" value="Subir" id="subimg" class="cboton cboton2"  >
				</div>      

			</form>
		</div><!-- /.modal-content --> 
	</div><!-- /.modal -->
</div>


<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/noticia.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/comentarios.js"></script>
<script type="text/javascript" src="js/loadmore.js"></script>
<script type="text/javascript" src="js/subirimg.js"></script>
<script type="text/javascript" src="js/contactar.js"></script>

<script src="js/jquery.cookie.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		var altura = $('.menu').offset().top;
		$(window).on('scroll', function(){
			if ( $(window).scrollTop() > altura+100 ){
				$('.menu').addClass('menu-fixed');
				$('.menu').addClass('transition');
			} else {
				$('.menu').removeClass('menu-fixed');
			}
		});
	});

	$('#myCarousel').carousel({interval:5000});
	$('.modal-dialog-cont').draggable();
	


	$(function() {
        $('a[href*=#]:not([href=#])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html,body').animate({
                scrollTop: target.offset().top
              }, 1000);
              return false;
            }
          }
        });

      });
</script>
<script type="text/javascript">
	$(function(){
		$('.showitem').click(function(){
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


	});
</script>
</body>
</html>