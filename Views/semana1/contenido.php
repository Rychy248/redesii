
	<link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>
	<link href="css/font-awesome.min.css" rel="stylesheet">


<script>




  var fix = "fix",
    hdr = $('header').height();

$(window).load(function() { // Doing it this way because of some bugs with the nav

  function down() {
    if( $(window).scrollTop() > hdr ) {
      $("nav").addClass(fix);
      $(".nav-logo").addClass(fix);
      $(".nav-items").addClass(fix);
    } else {
      $("nav").removeClass(fix);
      $(".nav-logo").removeClass(fix);
      $(".nav-items").removeClass(fix);
    }
  }

  function activateLink(event){
    var pos = $(document).scrollTop();
    var whiteSpace = 100;
    $('.nav-items a').each(function () {
        var link = $(this);
        var section = $(link.attr("href"));
        if (section.position().top <= pos + whiteSpace && section.position().top + section.height() > pos + whiteSpace) {
            $(".nav-items a").removeClass("active");
            link.addClass("active");
        }
        else{
            link.removeClass("active");
        }
    });
  };
  //Init down() and activateLink()
    down();
    activateLink();

  //Init down() on scroll
  $(window).on("scroll", function() {
    down();
    activateLink();
  });

});




/***************** Smooth Scrolling ******************/

$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top -85
        }, 1000);
        return false;
      }
    }
  });
});
</script>

<style>
  /* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 400;
  src: local('Lato Regular'), local('Lato-Regular'), url(https://fonts.gstatic.com/s/lato/v11/8qcEw_nrk_5HEcCpYdJu8BTbgVql8nDJpwnrE27mub0.woff2) format('woff2');
  unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 400;
  src: local('Lato Regular'), local('Lato-Regular'), url(https://fonts.gstatic.com/s/lato/v11/MDadn8DQ_3oT6kvnUq_2r_esZW2xOQ-xsNqO47m55DA.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215, U+E0FF, U+EFFD, U+F000;
}
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 700;
  src: local('Lato Bold'), local('Lato-Bold'), url(https://fonts.gstatic.com/s/lato/v11/rZPI2gHXi8zxUjnybc2ZQFKPGs1ZzpMvnHX-7fPOuAc.woff2) format('woff2');
  unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 700;
  src: local('Lato Bold'), local('Lato-Bold'), url(https://fonts.gstatic.com/s/lato/v11/MgNNr5y1C_tIEuLEmicLmwLUuEpTyoUstqEm5AMlJo4.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215, U+E0FF, U+EFFD, U+F000;
}
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 900;
  src: local('Lato Black'), local('Lato-Black'), url(https://fonts.gstatic.com/s/lato/v11/t85RP2zhSdDjt5PhsT_SnlKPGs1ZzpMvnHX-7fPOuAc.woff2) format('woff2');
  unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 900;
  src: local('Lato Black'), local('Lato-Black'), url(https://fonts.gstatic.com/s/lato/v11/lEjOv129Q3iN1tuqWOeRBgLUuEpTyoUstqEm5AMlJo4.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215, U+E0FF, U+EFFD, U+F000;
}




/* ================================
 Global Styles
================================ */

@font-face {
  font-family: 'Zodiaclaw';
  src: url('../fonts/zodiaclaw.ttf');
  src: url('../fonts/zodiaclaw.ttf')  format('truetype');
}

*, *:before, *:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
body {
	margin: 0;
	font: 1em/1.5 "Lato";
	color: #444134;
}
html {background: #fff}
::selection {
	background: #ff512f;
	color: #fff;
}

header,
nav,
.image,
.up {
	text-align: center;
}

p {
	letter-spacing: .6px;
}


/* ================================
 Header
================================ */
header {
  height: 350px;
  padding-top: 50px;
  color: #f7f8ee;
  background: -webkit-radial-gradient(2.03% 90.07%, circle, #ff512f, transparent 100%), -webkit-radial-gradient(97.97% 10.95%, circle, #f09819, transparent 100%), -webkit-radial-gradient(50% 50%, circle, #c31c73, #c31c73 100%);
  background: -moz-radial-gradient(2.03% 90.07%, circle, #ff512f, rgba(255,0,0,0) 100%), -moz-radial-gradient(97.97% 10.95%, circle, #f09819, rgba(255,0,0,0) 100%), -moz-radial-gradient(50% 50%, circle, #c31c73, #c31c73 100%);
  background: -o-radial-gradient(2.03% 90.07%, circle, #ff512f, transparent 100%), -o-radial-gradient(97.97% 10.95%, circle, #f09819, transparent 100%), -o-radial-gradient(50% 50%, circle, #c31c73, #c31c73 100%);
  background: radial-gradient(circle at 2.03% 90.07%, #ff512f, rgba(255,0,0,0) 100%),radial-gradient(circle at 97.97% 10.95%, #f09819, rgba(255,0,0,0) 100%),radial-gradient(circle at 50% 50%, #c31c73, #c31c73 100%);
}
a[href="#wrapper"] {
	display: block;
	width: 30px;
	height: 50px;
	margin: 0 auto;
	outline: 0 none;
}
a:focus {
	outline: 0 none;
}
header p {
	margin: 5px;
}
.mouse {
	position: relative;
	border: 2px solid #fff;
	border-radius: 16px;
	height: 50px;
	width: 30px;
	margin: 85px auto 0;
	z-index: 3;
}

.mouse .wheel {
	position: relative;
	border-radius: 10px;
	background: #fff;
	width: 4px;
	height: 10px;
	top: 4px;
	margin-left: auto;
	margin-right: auto;
	-webkit-animation-name: drop;
	-webkit-animation-duration: 1s;
	-webkit-animation-timing-function: linear;
	-webkit-animation-delay: 0s;
	-webkit-animation-iteration-count: infinite;
	-webkit-animation-play-state: running;
	animation-name: drop;
	animation-duration: 1s;
	animation-timing-function: linear;
	animation-delay: 0s;
	animation-iteration-count: infinite;
	animation-play-state: running;
}

@-webkit-keyframes drop	{
	0%   { top:5px;  opacity: 0;}
	30%  { top:10px; opacity: 1;}
	100% { top:25px; opacity: 0;}
}

@keyframes drop	{
	0%   { top:5px;  opacity: 0;}
	30%  { top:10px; opacity: 1;}
	100% { top:25px; opacity: 0;}
}


/* ================================
 Navigation
================================ */
header,
nav {
  width: 100%;
}

nav {
	height: 100px;
	padding: 10px 25px;
	z-index: 2;
	margin-top: -100px;
	transition: .7s ease-out;
}

nav.fix {
	background-image: -webkit-linear-gradient(top, #1abc9c 60%, rgba(26,188,156,.85));
	background-image:    -moz-linear-gradient(top, #1abc9c 60%, rgba(26,188,156,.85));
	background-image:      -o-linear-gradient(top, #1abc9c 60%, rgba(26,188,156,.85));
	background-image:         linear-gradient(to bottom, #1abc9c 60%, rgba(26,188,156,.85));
	position: fixed;
	top: 100px;
	height: 80px;
	box-shadow: 0 3px 4px rgba(26,188,156,.2);
	z-index: 5;
}

.nav-logo,
.nav-items {
	display: inline-block;
	text-align: center;
}

.nav-items {
	width: 33.333%;
	position: relative;
	transition: .4s ease-in;
}
.nav-items.fix {
	top:-15px;
}
.nav-logo {
	opacity: 0;
	color: #fff;
	transform: translateY(-3599px);
	transition: .3s ease-out;
}
.nav-logo.fix {
	opacity: 1;
	transform: translateY(0);
	margin: -15px 0 0;
	font-size: 60px;
	font-weight: 300;
	letter-spacing: 0;
	font-family: "Zodiaclaw";
	cursor: pointer;
}
.nav-logo.fix:hover {
	color: #16a085;
}

.nav-items a {
	width: 30%;
	font-size: 1em; 
	text-decoration: none;
	font-weight: bold;
	line-height: 17px;
	text-transform: uppercase;
	/* color: #fff; */
  color: black;
	display: inline-block;
	margin: 0 5px;
	border: 2px solid transparent;
	border-bottom: 1px solid #fff;
	padding: 15px;
	transition: .5s ease-in-out;
}
.nav-items a:hover {
	border: 2px solid #fff;
	background: #fff;
	color: #777;
    border-radius: 30px;
    transition: .4s;
}
.active {
	border: 2px solid #fff !important;
	border-radius: 30px !important;
}

/* ================================
 Wrapper
================================ */
.wrapper {
  background: #fff;
  padding: 60px 90px 50px;
  transition: .5s ease-out;
}

/* ==================
 Image div
================== */
.image {
	width: 49%;
	height: 300px;
	margin-bottom: 40px;
	color: #ecf0f1;
	font-size: 32px;
	line-height: 300px;
	letter-spacing: .8px;
	background: #bdc3c7;
	float: left;
}

.image.i {
	margin-left: 2%;
}

.wrapper p {
     margin-bottom: 25px;
}
.up {
	display: block;
	color: #fff;
	width: 50px;
	height: 50px;
	font-size: 18px;
	line-height: 46px;
	background: #1abc9c;
	border-radius: 50%;
	transition: .4s;
}

.up:hover {
	background: #fff;
	color: #1abc9c;
}

p.copy {
	color: #bbb;
	float: right;
}
</style>





	<header id="top">
	  <!-- <p>Recreated <i class="fa fa-heart-o"></i> by Kelvin</p>
	  <p>Scroll down</p> -->

	  <a href="#wrapper">
		  <div class="mouse">
			<div class="wheel"></div>
		  </div>
	  </a>
	</header>
	<nav>
		<div class="nav-items">
			<a href="?controller=semana1&&action=contenido">Semana 1</a>
			<a href="?controller=semana2&&action=contenido">Semana 2</a>
			<a href="?controller=semana3&&action=contenido">Semana 3</a>
			<a href="?controller=semana4&&action=contenido">Semana 4</a>
			<a href="?controller=semana5&&action=contenido">Semana 5</a>
			<a href="?controller=semana6&&action=contenido">Semana 6</a>
		</div>
    
		<h1 class="nav-logo">sticky</h1>
    
		<div class="nav-items">
      <a href="?controller=semana7&&action=contenido">Semana 7</a>
      <a href="?controller=semana8&&action=contenido">Semana 8</a>
      <a href="?controller=semana9&&action=contenido">Semana 9</a>
      <a href="?controller=semana10&&action=contenido">Semana 10</a>
      <a href="?controller=semana11&&action=contenido">Semana 11</a>
      <a href="?controller=semana12&&action=contenido">Semana 12</a>
	  	</div>
	</nav>
	<div class="wrapper" id="wrapper">
		<div id="home">

      <div>

  <div>
    <h1 style="color: red;">S E M A N A - 1</h1>
    <h2 style="color: black;">Introducción de las Redes de Computadoras</h2>
    <ul class="bo" >
      <li style="color: black; text-decoration:none">Definición</li>
      <li style="color: black; text-decoration:none">Origenes y evolución</li>
      <li style="color: black; text-decoration:none">ARPANET</li>
      <li style="color: black; text-decoration:none">Conceptos Básicos de Redes</li>
      <li style="color: black; text-decoration:none">Tarea de la semana</li>
    </ul>
  </div>

  <!-- #Contenido -->
  <div>
    <h2 id="definicion" class="titulo2 modal-title col-2 text-center ">Definición</h2>
    <p class="text-justify">Una red de computadoras (también llamada red de ordenadores o red informática) es un conjunto de equipos nodos y software conectados entre sí por medio de dispositivos físicos que envían y reciben impulsos eléctricos, ondas electromagnéticas o cualquier otro medio para el transporte de datos, con la finalidad de compartir información, recursos y ofrecer servicios.
    Como en todo proceso de comunicación, se requiere de un emisor, un mensaje, un medio y un receptor. La finalidad principal para la creación de una red de ordenadores es compartir los recursos y la información en la distancia, asegurar la confiabilidad y la disponibilidad de la información, aumentar la velocidad de transmisión de los datos y reducir el costo. Un ejemplo es Internet, el cual es una gran red de millones de ordenadores
    ubicados en distintos puntos del planeta interconectados básicamente para compartir información y recursos.</p>
    
    <p class="text-justify text-center">La estructura y el modo de funcionamiento de las redes informáticas actuales están definidos en varios estándares, siendo el más importante y extendido de todos ellos el modelo TCP/IP utilizado como base para el modelo de referencia OSI. Este último, concibe cada red como estructurada en siete capas con funciones concretas pero relacionadas entre sí (en TCP/IP se habla de cuatro capas). Debe recordarse que el modelo de referencia OSI es una abstracción teórica, que facilita la comprensión del tema, si bien se permiten ciertos desvíos respecto a dicho modelo.
    Existen multitud de protocolos repartidos por cada capa, los cuales también están regidos por sus respectivos estándares.</p>
  </div>  
  <!-- #Contenido -->
  <div>
    <h2 id="origenes" class="titulo2">Origenes</h2>
    <p>En el video se habla sobre el origen y evolución de las redes</p>
    <iframe style="margin-left: 90px;" width="70%" height="500px" src="https://www.youtube.com/embed/BJeuWQ3f2q0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
  <!-- #Contenido -->
  <div>
    <h2 id="arpanet" class="titulo2 modal-title col-2 text-center">ARPANET</h2>
    <p class="text-justify">
    ARPANET fue una red de computadoras creada por encargo del Departamento de Defensa de los Estados Unidos (DOD) para utilizarla como medio de comunicación entre las diferentes instituciones académicas y estatales. El primer nodo fue creado en la Universidad de California en Los Ángeles (UCLA), y fue la espina dorsal de Internet hasta 1990, tras finalizar la transición al modelo de protocolos TCP/IP, iniciada en 1983.
    ARPANET son las siglas de Advanced Research Projects Agency Network, es decir, la Red de la Agencia de Proyectos de Investigación Avanzada,1​ organismo conocido ahora como Agencia de Proyectos de Investigación Avanzados de Defensa.
    </p>
    <h3 class="titulo3 modal-title col-1 text-center">Origen</h3>
    <p class="text-justify">El concepto de una red de ordenadores, capaz de comunicar usuarios en distintas computadoras,
    fue formulado en abril de 1963 por Joseph C. R. Licklider, de Bolt, Beranek y Newman (BBN),
    en una serie de notas que discutían la idea de «red galáctica». En octubre del mismo año,
    Licklider fue convocado por la ARPA (Agencia de Investigación de Proyectos Avanzados),
    organismo perteneciente al DOD. En este foro, convenció a Ivan Sutherland y Robert «Bob»
    Taylor de la importancia del concepto antes de abandonar la Agencia, y antes de que se iniciara
    trabajo alguno. Mientras tanto, en la RAND Corporation desde 1958, Paul Baran estaba trabajando en
    una red segura de comunicaciones capaz de sobrevivir a un ataque con armas nucleares, con fines militares.</p>
    
    <p class="text-justify">Sus resultados se publicaron a partir de 1960, y en ellos se describían dos ideas clave:
    El uso de una red descentralizada con múltiples caminos entre dos puntos;</p>
    <ul>
    <li>La división de mensajes completos en fragmentos que seguirían caminos distintos.</li>
    <li>La red estaría capacitada para responder ante sus propios fallos.</li>
    </ul>
    <p class="text-justify">El resumen final de este esquema se presentó
    en 1962 y se publicó en 1964. En la misma época, Leonard Kleinrock ya trabajaba en el concepto de almacenar y
    reenviar mensajes en su tesis doctoral en el Instituto Tecnológico de Massachusetts (MIT). Esto incluía un
    importante análisis de la teoría de colas aplicada a las redes de comunicaciones (publicado como libro en 1964).
    Su trabajo aún no incluía la idea de fragmentación en paquetes de datos.
    Por último, Donald Davies, del National Physical Laboratory (NPL), comenzó a relacionar todos estos conceptos
    en 1965, después de asistir a una conferencia en el Reino Unido sobre multiplexación en el tiempo.
    Su investigación tuvo lugar independientemente de los trabajos de Baran, de los que no tuvo conocimiento
    hasta 1966. Casualmente, fue Davies quien empezó a usar el término «paquete».
    En este estado de las cosas, cuatro centros de investigación independientes
    (DARPA, la RAND, el MIT y el NPL del Reino Unido) serían los primeros nodos experimentales de ARPANET.
    Mientras todo esto ocurría, la ARPA y Taylor seguían interesados en crear una red de computadoras.
    Al final de 1967, Taylor contactó a Lawrence G. Roberts (del Laboratorio Lincoln, en el MIT) con el objeto de que liderase el proyecto de creación de la nueva red. Roberts ya conocía a Davies gracias a la mencionada conferencia sobre multiplexación. El concepto original de Roberts consistía en utilizar la técnica de multiplexación en el tiempo, uniendo máquinas directamente con cables telefónicos. En una de las primeras reuniones (1967), muchos participantes no estaban dispuestos a que sus computadoras tuvieran que gestionar líneas telefónicas. Uno de estos participantes, Wesley A. Clark, tuvo la idea de usar pequeñas computadoras separados solo para gestionar los enlaces de comunicaciones. Esta idea permitió descargar de trabajo a las computadoras principales, además de aislar la red de la distinta naturaleza de cada computadora. Sobre esta base comenzó el diseño inicial de ARPANET. Roberts presentó su primer plan en un simposio de 1967. En este mismo evento se encontraba presente Roger Scantlebury, colaborador de Davies. Gracias a este
    encuentro discutieron la idea de la conmutación de paquetes, y permitió a Roberts conocer el trabajo de Baran.</p>
    
    <h3 class="titulo3 modal-title col-3 text-center">Nacimiento de ARPANET</h3>
    <p class="text-justify">En el verano de 1968, ya existía un plan completo y aprobado por ARPA de manera que se celebró un concurso con
    140 potenciales proveedores. Sin embargo, solamente doce de ellos presentaron propuestas. En 1969, el contrato se
    adjudicó a la empresa Bolt, Beranek y Newman (conocida como BBN Technologies o simplemente BBN) con quienes había trabajado Licklider, creador del concepto de «red galáctica». El 29 de octubre de 1969 se transmite el primer mensaje a través de ARPANET y en menos de un mes (21 de noviembre) se establece el primer enlace entre la Universidad de California, los Ángeles y el Instituto de Investigaciones de Stanford.2​
    La oferta de BBN seguía el plan de Roberts rápidamente. Las pequeñas computadoras se denominaron «procesadores de la interfaz de mensajes» (IMP). Estos implementaban la técnica de almacenar y reenviar, y utilizaban un módem telefónico para conectarse a otros equipos (a una velocidad de 50 kbits por segundo). Las computadoras centrales se conectaban a los IMP mediante puertos en serie a medida.
    Los IMP se implementaron inicialmente con computadoras DDP-516 de Honeywell. Contaban con 24 KB de memoria principal con capacidad para conectar un máximo de cuatro computadoras centrales, y comunicarlas con otros seis IMP remotos.
    BBN tuvo disponible todo el hardware y el software necesario en tan solo nueve meses.</p>
  </div>
  <!-- #Contenido -->
  <div>
    <h2 id="conceptos" class="titulo2  col-3 text-center">Conceptos Básicos de Redes</h2>
    <ol>
      <li><h3 class="titulo3 modal-title col-2 text-center">Internet</h3>
        <p class="text-justify">Empezamos por la base, ¿qué es Internet? Podemos definirla como un conjunto descentralizado de redes de comunicación que están interconectadas entre sí, lo que permite navegar de una a otra sin problemas.</p>
        <p class="text-justify">Su base está en la familia de protocolos TCP/IP, que garantiza que las redes físicas heterogéneas que la componen formen una red lógica única de alcance mundial. Como sabrán muchos de nuestros lectores sus orígenes se remontan a 1969, fecha en la que surgió ARPANET, la primera conexión entre computadoras.<p>
      </li>
      <li><h3 class="titulo3 modal-title col-2 text-center" >Tarjeta de red</h3>
        <p class="text-justify">Es un componente informático con forma de tarjeta que se conecta en la placa base de un ordenador y que cuenta con los componentes necesarios para que el equipo se conecte a Internet o a una red local, ya sea de forma inalámbrica o cableada.</p>
        <p class="text-justify">Las tarjetas de red actuales cuentan con soporte tanto de conexiones cableadas (Ethernet) como inalámbricas (Wi-Fi).</p>
      </li>
      <li><h3 class="titulo3 modal-title col-1 text-center">Router</h3>
      <p class="text-justify">Es un dispositivo externo que actúa como sistema encargado de establecer la conexión a Internet, ya sea de forma inalámbrica o cableada.</p>
      <p class="text-justify">Para llevar a cabo su trabajo envía y recibe de forma constante paquetes de datos, lo que le permite interconectar subredes. Dicho de una manera sencilla, es el encargado de establecer la comunicación y la coordinación entre el PC que se conecta a una página web o servicio y el servidor que aloja esa web o presta dicho servicio.</p>
      </li>
      <li><h3 class="titulo3 modal-title col-1 text-center">HTML</h3>
      <p class="text-justify">Es un lenguaje de marcado que se utiliza para el desarrollo de páginas de Internet. Estas siglas se refieren a «HyperText Markup Language», y es un estándar que sirve como estructura y código básico para la definición del contenido de una página web.</p>
      <p class="text-justify">Dicho de una manera más sencilla, es el estándar que se ha impuesto en la visualización de páginas web, el que todos los navegadores actuales han adoptado y el que ha hecho posible que Internet sea una red global unificada.</p>
      </li>
      <li><h3 class="titulo3 modal-title col-3 text-center">World Wide Web</h3>
      <p class="text-justify">Es un sistema estandarizado de distribución de documentos de hipertexto o hipermedia interconectados y accesibles a través de Internet. Su creación fue posible gracias al HTML, como dijimos anteriormente.</p>
      <p class="text-justify">Con un navegador web podemos visualizar páginas web que pueden contener textos, imágenes, vídeos u otros contenidos multimedia, y navega a través de esas páginas usando hiperenlaces, que permiten acceder a diferentes recursos referenciados de forma directa. En resumen, es la base de la navegación moderna en Internet que todos conocemos, y que permite saltar de un lado a otro a través de enlaces.</p>
      </li>
    </ol>
  </div>
  <!-- #Contenido -->
  <div>
    <h2 id="tarea"class="titulo2 modal-title col-3 text-center" >Tarea de la semana</h2>
    <p>Tarea de la semana Infografía de la linea del tiempo de las redes de las computadoras</p>
    <div>
      <p class="text-justify"><a href="https://www.easel.ly/browserEasel/13434669" target="_blank">Ver infografía trabajada</a></p>
      <iframe width="613" height="792" frameborder="0" scrolling="no" style="overflow-y:hidden;" src="https://www.easel.ly/index/embedFrame/easel/13434669"></iframe>
    </div>
    <div>
      <img src="../../assets/img/infografia.jpg" class="img-fluid img-thumbnail" alt="Infografia">
    </div>
  </div>
  <div>

  </div>
</div>
	  	</div>
	  	<div id="features">
	  	</div>
	  	<div id="work">

	  	</div>
	  	<div id="info">
		  <a href="#top" class="up"><i class="fa fa-chevron-up"></i></a>
		  <p class="copy">&copy; 2021 Ryhy &copy; 2021  Willy</p>

	  	</div>
	</div>
	<script src="https://code.jquery.com/jquery-latest.min.js"></script>
	<script src="js/app.js"></script>



    <a href="#definicion">| Definición | </a>
    <a href="#origenes">Origenes y evolución | </a>
    <a href="#arpanet">ARPANET | </a>
    <a href="#conceptos">Conceptos Básicos de Redes | </a>
    <a href="#tarea">Tarea de la semana | </a>
    <br>
  </div>
<br>
<br>
<br>
  <!-- #Avance de semanas-->

  <nav aria-label="Page navigation example">
  <ul class="pagination text-center pagination justify-content-center">
    <li class="page-item"><a class="page-link" href="?controller=semana1&&action=contenido">semana 1</a></li>
    <li class="page-item"><a class="page-link" href="?controller=semana2&&action=contenido">semana 2</a></li>
  
  </ul>
</nav>

</div>
