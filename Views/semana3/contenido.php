
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

@-webkit-keyframes drop {
  0%   { top:5px;  opacity: 0;}
  30%  { top:10px; opacity: 1;}
  100% { top:25px; opacity: 0;}
}

@keyframes drop {
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
  <!--#HEADER, TÍTULO Y E INDICE -->
  <div>
    <h1>S E M A N A - 3</h1>
    <h1>Topología de redes</h1>
    <ol>
      <li >Fisica</li>
      <li>Logica</li>
      <li>Uso De Las Redes De Computadoras</li>
      <li>Aplicaciones en los negocios</li>
      <li>Aplicaciones Domesticas</li>
      <li>Tarea de la semana</li>
    </ol>
  </div>
  </div>

  <!-- #Contenido -->
  <div>
    <h2 id="fisica" class="titulo2 modal-title col-1 text-center">Física</h2>
    <p class="text-justify">Se refiere a las conexiones físicas e identifica cómo se interconectan los terminales y dispositivos de infraestructura, como los routers, los switches y los puntos de acceso inalámbrico. Las topologías físicas generalmente son punto a punto o en estrella.</p class="text-justify">
  </div>
  <!-- #Contenido -->
  <div>
    <h2 id="logica" class="titulo2 modal-title col-1 text-center">Lógica</h2>
    <p class="text-justify">Se refiere a la forma en que una red transfiere tramas de un nodo al siguiente. Esta disposición consta de conexiones virtuales entre los nodos de una red. Los protocolos de capa de enlace de datos definen estas rutas de señales lógicas. La topología lógica de los enlaces punto a punto es relativamente simple, mientras que los medios compartidos ofrecen métodos de control de acceso al medio diferentes.</p class="text-justify">
    <p class="text-justify">La capa de enlace de datos “ve” la topología lógica de una red al controlar el acceso de datos a los medios. Es la topología lógica la que influye en el tipo de trama de red y control de acceso a los medios que se utilizan.</p class="text-justify">
  </div>
  <!-- #Contenido -->
  <div>
    <h2 id="usos" class="titulo2 modal-title col-5 text-center">Usos de las redes de Computadoras</h2>
    <p class="text-justify">El objetivo básico de una red de computadoras es enlazar dos o más dispositivos para que exista comunicación entre ellos o para compartir información, es decir,  hacer que todos los programas, datos y equipos estén disponibles para cualquiera de la red que lo solicite, sin importar la localización del sistema y del usuario</p class="text-justify"> 
    <h3>Principales objetivos de las redes de computadoras:</h3>
    <ul>
      <li>Compartir programas y archivos:</li>
        <p class="text-justify">Los programas y sus archivos de datos se pueden guardar en un servidor de archivos, al que pueden accesar muchos usuarios de la red a la misma vez.<p class="text-justify">
      <li>Compartir recursos de Red:</li>
        <p class="text-justify">Los recursos de la red incluyen impresoras, scaners y dispositivos de almacenamiento que se pueden compartir en la red, proporcionando enlaces de comunicación que permitan a  los usuarios interactuar y compartir dispositivos. <p class="text-justify">
      <li>Expansión económica de la Organización:</li>
        <p class="text-justify">Las redes proporcionan una forma económica de aumentar el número de computadoras de una organización o institución, al permitir la conexión de estaciones de trabajo que dan paso al intercambio de información y optimizan el desarrollo de las diferentes actividades de la empresa.  <p class="text-justify">
      <li>Proporcionar una alta fiabilidad:</li>
        <p class="text-justify">El contar con fuentes alternativas de suministro, permite que  todos los archivos puedan duplicarse en dos o tres máquinas, de tal manera que si una no se encuentra disponible, podría utilizarse algunas de las copias. La presencia de múltiples CPU significa que si una de ellas deja de funcionar, las otras pueden ser capaces de encargarse de su trabajo, aunque se tenga un rendimiento global menor.<p class="text-justify">
      <li>Poderoso medio de comunicación:</li>
        <p class="text-justify">Las redes proporcionan un medio de comunicación entre personas que se encuentran muy alejadas entre sí.<p class="text-justify">
      <li>Aumentar la velocidad de transmisión de los datos:</li>
        <p class="text-justify">Esto se logra a través del envío y recibimiento de impulsos eléctricos, ondas electromagnéticas o cualquier otro medio para el transporte de datos.<p class="text-justify">
    </ul>
  </div>
 
  <!-- #Contenido -->
  <div>
    <h2 id="negocios" class="titulo2 modal-title col-4 text-center">Aplicaciones en los negocios</h2>
    <p class="text-justify">Las empresas también pueden utilizar las redes sociales de la publicidad en forma de anuncios publicitarios y de texto. Dado que las empresas operan a nivel mundial, las redes sociales pueden hacer que sea más fácil mantener el contacto con personas en todo el mundo.</p class="text-justify">
  </div>
  <!-- #Contenido -->
  <div>
    <h2 id="domesticas" class="titulo2 modal-title col-4 text-center">Aplicaciones domésticas</h2>
    <p class="text-justify">Una red doméstica es la conexión de dos o más computadoras, impresoras y otros dispositivos en tu hogar. Con una red doméstica, todo el hogar puede compartir una conexión de Internet con varios dispositivos para que todas las personas puedan tener acceso a Internet al mismo tiempo. Puedes compartir el acceso a impresoras, archivos, carpetas y otros dispositivos hardware como los sistemas de juego. Hay dos tipos de redes, la red alámbrica y Wi-Fi (red inalámbrica), entre cada dispositivo. En tu casa puedes tener dispositivos conectados con cables o dispositivos inalámbricos.</p class="text-justify">
  </div>
  <!-- #Contenido -->
  <div>
    <h2 id="tarea" class="titulo2 modal-title col-3 text-center">Tarea de la semana</h2>
    <h3>Captura de Red en Cisco</h3>
    <p class="text-justify"><i>Crear una red wiffi utilizando computadoras y moviles, Cisco Packet tracer y enviar su archivo almacenado en la nube</i></p class="text-justify">
    <a href="https://drive.google.com/file/d/1TBYVVGaNq4Whm4GXXaBTCKBcnOGaiBR1/view?usp=sharing " target="_blank">Enlace del proyecto en DRIVE</a>
    <div>
    <img src="assets/img/semana3.png" style="border-radius: 4px; padding: 5px; width: 100%;" alt="Captura de cisco Packed Tracer">
    </div>
  </div>
  <div>

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




      <a href="#fisica">| Física |</a>
      <a href="#logica">Lógica |</a>
      <a href="#usos">Usos de las redes de Computadoras |</a>
      <a href="#negocios">Aplicaciones en los negocios |</a>
      <a href="#domesticas">Aplicaciones domésticas |</a>
      <a href="#tarea">Tarea de la semana |</a>
  </div>
<br>
<br>
<br>
  <!-- #Avance de semanas-->

  <nav aria-label="Page navigation example">
  <ul class="pagination text-center pagination justify-content-center">
    <li class="page-item"><a class="page-link" href="?controller=semana2&&action=contenido">semana 2</a></li>
    <li class="page-item"><a class="page-link" href="?controller=semana3&&action=contenido">semana 3</a></li>
    <li class="page-item"><a class="page-link" href="?controller=semana4&&action=contenido">semana 4</a></li>
  
  </ul>
</nav>


</div>
