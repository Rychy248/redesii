 
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
    <!--#HEADER, T??TULO Y E INDICE -->
  <div>
    <h1>Modelo OSI</h1>
    <h1>S E M A N A - 4</h1>
    <h1>Modelo Osi</h1>
    <ol>
      <li><a href="#definicion">Definici??n</a></li>
      <li><a href="#historia">Historia</a></li>
      <li><a href="#referencia">Modelo de referencia OSI</a></li>
      <li>
        <a href="#arquitectura">Arquitectura de capas
          <ul>
            <li>Capa 1: Capa f??sica</li>
            <li>Capa 2: Capa de enlace de datos</li>
            <li>Capa 3: Capa de red</li>
            <li>Capa 4: Capa de transporte</li>
            <li>Capa 5: Capa de sesi??n</li>
            <li>Capa 6: Capa de presentaci??n</li>
            <li>Capa 7: Capa de aplicaci??n</li>
          </ul>
        </a>
      </li>
      <li><a href="#nemotecnica">Regla nemot??cnica</a></li>
      <li>
        <a href="#unidades">Unidades de datos
          <ul>
            <li><a href="#pdu">N-PDU</li>
            <li><a href="#idu">N-IDU</li>
          </ul>
        </a>
      </li>
      <li><a href="#transmision">Transmisi??n de los datos</a></li>
      <li><a href="#formato">Formato de los datos</a></li>
      <li>
        <a href="#operaciones">Operaciones sobre los datos
          <ul>
            <li><a href="#bloqueo">Bloqueo y desbloqueo</li>
            <li><a href="#concatenacion">Concatenaci??n y separaci??n</li>
          </ul>
        </a>
      </li>
      <li><a href="#tarea">Tarea de la semana</a></li>
    </ol>    
  </div>

  <!-- #Contenido -->
  <div>
    <h2 id="definicion" class="titulo2 modal-title col-2 text-center ">Definici??n</h2>
    <p>El modelo de interconexi??n de sistemas abiertos (ISO/IEC 7498-1), conocido como ???modelo OSI???, (en ingl??s, Open Systems Interconnection) es un modelo de referencia para los protocolos de la red (no es una arquitectura de red), creado en el a??o 1980 por la Organizaci??n Internacional de Normalizaci??n. Se ha publicado desde 1983 por la Uni??n Internacional de Telecomunicaciones (UIT) y, desde 1984, la Organizaci??n Internacional de Normalizaci??n (ISO) tambi??n lo public?? con est??ndar. Su desarrollo comenz?? en 1977.</p>
    <p>Es un est??ndar que tiene por objetivo conseguir interconectar sistemas de procedencia distinta para que estos pudieran intercambiar informaci??n sin ning??n tipo de impedimentos debido a los protocolos con los que estos operaban de forma propia seg??n su fabricante.</p>
    <p>El modelo OSI est?? conformado por 7 capas o niveles de abstracci??n. Cada uno de estos niveles tendr?? sus propias funciones para que en conjunto sean capaces de poder alcanzar su objetivo final. Precisamente esta separaci??n en niveles hace posible la intercomunicaci??n de protocolos distintos al concentrar funciones espec??ficas en cada nivel de operaci??n.</p>
    <p>El modelo OSI no es la definici??n de una topolog??a ni un modelo de red en s?? mismo. Tampoco especifica ni define los protocolos que se utilizan en la comunicaci??n, ya que estos est??n implementados de forma independiente a este modelo. Lo que realmente hace OSI es definir la funcionalidad de ellos para conseguir un est??ndar.</p>
  </div>
  <!-- #Contenido -->
  <div>
    <h2 id="historia" class="titulo2 modal-title col-2 text-center">Historia</h2>
    <p>A principios de 1980 el desarrollo de redes origin?? desorden en muchos sentidos. Se produjo un enorme crecimiento en la cantidad y tama??o de las redes. A medida que las empresas tomaban conciencia de las ventajas de usar tecnolog??as de conexi??n, las redes se agregaban o expand??an a casi la misma velocidad con la que se introduc??an las nuevas tecnolog??as de red.</p>
    <p>A mediados de 1980, estas empresas comenzaron a sufrir las consecuencias de la r??pida expansi??n. De la misma forma en que las personas que no hablan un mismo idioma tienen dificultades para comunicarse, las redes que utilizaban diferentes especificaciones e implementaciones no pod??an intercambiar informaci??n. El mismo problema surg??a con las empresas que desarrollaban tecnolog??as de conexiones propietarias (una tecnolog??a es llamada ??propietaria?? cuando su implementaci??n, (ya sea de software o hardware) est?? sujeta a un copyright. Esto supone que una empresa controla esta tecnolog??a y las empresas que quieran utilizarla en sus sistemas tienen que pagar derechos por su uso). Las tecnolog??as de conexi??n que respetaban reglas propietarias en forma estricta no pod??an comunicarse con tecnolog??as que usaban reglas propietarias diferentes e incluso con las que usaban reglas de conexi??n copyleft.</p>
    <p>Para enfrentar el problema de incompatibilidad de redes, la ISO investig?? modelos de conexi??n como la red de Digital Equipment Corporation (DECnet), la Arquitectura de Sistemas de Red (Systems Network Architecture, SNA) y TCP/IP, a fin de encontrar un conjunto de reglas aplicables de forma general a todas las redes. Con base en esta investigaci??n, la ISO desarroll?? un modelo de red para ayudar a los fabricantes a crear redes que sean compatibles con otras redes.</p>
  </div>
  <!-- #Contenido -->
  <div>
    <h2 id="referencia" class="titulo2 modal-title col-5 text-center">Modelo de referencia OSI</h2>
    <p>Es un est??ndar desarrollado en 1980 por la ISO,1??? una federaci??n global de organizaciones que representa aproximadamente a 160 pa??ses. El n??cleo de este est??ndar es el modelo de referencia OSI, una normativa formada por siete capas que define las diferentes fases por las que deben pasar los datos para viajar de un dispositivo a otro sobre una red de comunicaciones</p>.
    <p>Siguiendo el esquema de este modelo se crearon numerosos protocolos. El advenimiento de protocolos m??s flexibles donde las capas no est??n tan desmarcadas y la correspondencia con los niveles no era tan clara puso a este esquema en un segundo plano. Sin embargo se usa en la ense??anza como una manera de mostrar c??mo puede estructurarse una ??pila?? de protocolos de comunicaciones.4</p>???
    <p>El modelo especifica el protocolo que debe usarse en cada capa, y suele hablarse de modelo de referencia ya que se usa como una gran herramienta para la ense??anza de comunicaci??n de redes</p>.
    <p>Debe recordarse siempre que es un modelo, una construcci??n te??rica, por ende no tiene un correlato directo con el mundo real. Se trata de una normativa estandarizada ??til debido a la existencia de muchas tecnolog??as, fabricantes y compa????as dentro del mundo de las comunicaciones, y al estar en continua expansi??n, se tuvo que crear un m??todo para que todos pudieran entenderse de alg??n modo, incluso cuando las tecnolog??as no coincidieran. De este modo, no importa la localizaci??n geogr??fica o el lenguaje utilizado- todo el mundo debe atenerse a unas normas m??nimas para poder comunicarse entre s??. Esto es sobre todo importante cuando hablamos de la red de redes, es decir, Internet</p>.
    <p>El modelo es el modelo de red descriptivo, que fue creado por la Organizaci??n internacional para la Estandarizaci??n en el a??o 1980. Reconoci?? que era necesario crear un modelo de red que pudiera ayudar a los dise??adores de red a implementar redes que pudieran comunicarse y trabajar en conjunto y por lo tanto, elaboraron el modelo de referencia OSI. El n??cleo de este est??ndar es el modelo de referencia OSI, una normativa formada por siete capas que define las diferentes fases por las que deben pasar los datos para viajar de un dispositivo a otro sobre una red de comunicaciones. El modelo especifica el protocolo que debe ser usado en cada capa, y suele hablarse de modelo de referencia ya que es usado como una gran herramienta para la ense??anza de comunicaci??n de redes</p>.
    <p>Existen diversos protocolos de acuerdo a c??mo se espera que sea la comunicaci??n. Este conjunto de protocolos se denomina TCP/IP. TCP/IP se ha convertido en el est??ndar de-facto para la conexi??n en red corporativa. Las redes TCP/IP son ampliamente escalables, para lo que TCP/IP puede utilizarse tanto para redes peque??as como grandes</p>.
    <p>TCP/IP es un conjunto de protocolos encaminados que puede ejecutarse en distintas plataformas de software y casi todos los sistemas operativos de red lo soportan como protocolo de red predeterminado. Protocolos miembro de la pila TCP/IP. FTP, SMTP, UDP, IP, ARP. TCP corre en varias capas del modelo OSI Protocolo de Internet. Es un protocolo no orientado a conexi??n usado tanto por el origen como por el destino para la comunicaci??n de datos a trav??s de una red de paquetes conmutados. Los datos en una red basada en IP son enviados en bloques conocidos como paquetes o datagramas</p>.

    <table class="wikitable">
      <caption>Capas del Modelo OSI</caption>
      <tbody>
        <tr>
          <th>N??mero</th>
          <th>Nombre</th>
          <th>Responsabilidad</th>
          <th>Descripci??n</th>
        </tr>
        <tr>
          <td>Capa 7</td>
          <td>Aplicaci??n</td>
          <td>Responsable de los servicios de red para las aplicaciones</td>
          <td>
            Difiere de las dem??s capas debido a que no proporciona servicios a
            ninguna otra capa OSI, sino solamente a aplicaciones que se encuentran
            fuera del modelo OSI. La capa de aplicaci??n establece la disponibilidad
            de los potenciales socios de comunicaci??n, sincroniza y establece
            acuerdos sobre los procedimientos de recuperaci??n de errores y control
            de la integridad de los datos. Esta garantiza que la informaci??n que
            env??a la capa de aplicaci??n de un sistema pueda ser le??da por la capa de
            aplicaci??n de otro. De ser necesario, la capa de presentaci??n traduce
            entre varios formatos de datos utilizando un formato com??n.
          </td>
        </tr>
        <tr>
          <td>Capa 6</td>
          <td>Presentaci??n</td>
          <td>
            Transforma el formato de los datos y proporciona una interfaz est??ndar
            para la capa de aplicaci??n
          </td>
          <td>
            Su objetivo es encargarse de la representaci??n de la informaci??n, de
            manera que aunque distintos equipos puedan tener diferentes
            representaciones internas de caracteres n??meros, sonido o im??genes, los
            datos lleguen de manera reconocibles. Esta capa es la primera en
            trabajar m??s el contenido de la comunicaci??n que en como se establece la
            misma. En ella se tratan aspectos tales como la sem??ntica y la sintaxis
            de los datos transmitidos, ya que distintas computadoras pueden tener
            diferentes formas de manejarlas. Por lo tanto, podemos resumir
            definiendo a esta capa como la encargada de manejar las estructuras de
            datos abstractas y realizar las conversiones de representaci??n de datos
            necesarias para la correcta interpretaci??n de los mismos.
          </td>
        </tr>
        <tr>
          <td>Capa 5</td>
          <td>Sesi??n</td>
          <td>
            Establece, administra y finaliza las conexiones entre las aplicaciones
            locales y las remotas
          </td>
          <td>
            Esta capa tambi??n permite cifrar los datos y comprimirlos. Como su
            nombre lo implica, la capa de sesi??n establece, administra y finaliza
            las sesiones entre dos hosts que se est??n comunicando. La capa de sesi??n
            proporciona sus servicios a la capa de presentaci??n. Tambi??n sincroniza
            el di??logo entre las capas de presentaci??n de los dos hosts y administra
            su intercambio de datos.
            <p>
              Adem??s de regular la sesi??n, la capa de sesi??n ofrece disposiciones
              para una eficiente transferencia de datos, clase de servicio y un
              registro de excepciones acerca de los problemas de la capa de sesi??n,
              presentaci??n y aplicaci??n. Pero este protocolo debe transportarse
              entre m??quinas a trav??s de otros protocolos. Con SAP, los servidores
              permiten a los enrutadores crear y mantener una base de datos con la
              informaci??n actualizada de los servidores de la interred. La capa de
              transporte segmenta los datos originados en el host emisor y los
              reensambla en una corriente de datos dentro del sistema del host
              receptor.
            </p>
          </td>
        </tr>
        <tr>
          <td>Capa 4</td>
          <td>Transporte</td>
          <td>
            Proporciona transporte confiable y control del flujo a trav??s de la red
          </td>
          <td>
            El l??mite entre la capa de transporte y la capa de sesi??n puede
            imaginarse como el l??mite entre los protocolos de aplicaci??n y los
            protocolos de flujo de datos. Mientras que las capas de aplicaci??n,
            presentaci??n y sesi??n est??n relacionadas con asuntos de aplicaciones,
            las cuatro capas inferiores se encargan del transporte de datos. TCP
            crea conexiones a trav??s de las cuales puede enviar flujos de datos. El
            protocolo garantiza que los datos ser??n entregados en su destino sin
            errores y en el mismo orden en que se transmitieron.
          </td>
        </tr>
        <tr>
          <td>Capa 3</td>
          <td>Red</td>
          <td>
            Responsable del direccionamiento l??gico y el dominio del enrutamiento
          </td>
          <td>
            Su misi??n es conseguir que los datos lleguen desde el origen al destino
            aunque no tengan conexi??n directa. IPX/SPX Es una familia de protocolos
            de red desarrollados por novell y utilizado por su sistema operativo de
            red netware. El IPX Es un protocolo de datagramas r??pido orientados a
            comunicaciones sin conexi??n que se encarga de transmitir datos a trav??s
            de la red, incluyendo en cada paquete la direcci??n de destino. La capa
            de enlace de datos proporciona tr??nsito de datos confiable a trav??s de
            un enlace f??sico.
          </td>
        </tr>
        <tr>
          <td>Capa 2</td>
          <td>Enlace de Datos</td>
          <td>
            Proporciona direccionamiento f??sico y procedimientos de acceso a medios
          </td>
          <td>
            Al hacerlo, la capa de enlace de datos se ocupa del direccionamiento
            f??sico, la topolog??a de red, el acceso a la red, la notificaci??n de
            errores, entrega ordenada de tramas y control de flujo. Ethernet define
            las caracter??sticas de cableado y se??alizaci??n de nivel f??sico y los
            formatos de tramas de datos del nivel de enlace de datos. FDDI
            Proporciona un 100 Mbits/s ??ptico est??ndar para la transmisi??n de datos
            en una red de ??rea local.
          </td>
        </tr>
        <tr>
          <td>Capa 1</td>
          <td>F??sica</td>
          <td>
            Define todas las especificaciones el??ctricas y f??sicas de los
            dispositivos
          </td>
          <td>
            La capa f??sica define las especificaciones el??ctricas, mec??nicas, de
            procedimiento y funcionales para activar, mantener y desactivar el
            enlace f??sico entre sistemas finales.
            <p>
              Las caracter??sticas tales como niveles de voltaje, temporizaci??n de
              cambios de voltaje, velocidad de datos f??sicos, distancias de
              transmisi??n m??ximas, conectores f??sicos y otros atributos similares
              son definidos por las especificaciones de la capa f??sica. Bluetooth es
              una especificaci??n industrial para Redes Inal??mbricas de ??rea Personal
              que posibilita la transmisi??n de voz y datos entre diferentes
              dispositivos. ADSL Consiste en una transmisi??n anal??gica de datos
              digitales apoyado en el par sim??trico de cobre que lleva la l??nea
              telef??nica convencional. USB Es un est??ndar industrial desarrollado en
              los a??os 1990 que define los cables, conectores y protocolos usados en
              un bus para conectar , comunicar y proveer de alimentaci??n el??ctrica
              entre ordenadores, perif??ricos y dispositivos electr??nicos.
            </p>
            <p>
              Consiste en una transmisi??n anal??gica de datos digitales apoyada en el
              par sim??trico de cobre que lleva la l??nea telef??nica convencional.
            </p>
          </td>
        </tr>
      </tbody>
    </table>

  
  </div>
  <!-- #Contenido -->
  <div>
    <h2 id="arquitectura" class="titulo2 modal-title col-4 text-center">Arquitectura de capas</h2>

      <h3 id="capa1">Capa 1: Capa f??sica</h3>
      <p>Es la capa m??s baja del modelo OSI. Es la que se encarga de la topolog??a de red y de las conexiones globales de la computadora hacia la red, se refiere tanto al medio f??sico como a la forma en la que se transmite la informaci??n y de las redes.></sup>???</p>
      <p>Sus principales funciones se pueden resumir como:</p>
      <ul>
          <li>Definir el medio o medios f??sicos por los que va a viajar la comunicaci??n: cable de pares trenzados (o no, como en RS232/EIA232), cable coaxial, gu??as de onda, aire, fibra ??ptica.</li>
          <li>Definir las caracter??sticas materiales (componentes y conectores mec??nicos) y el??ctricas (niveles de tensi??n) que se van a usar en la transmisi??n de los datos por los medios f??sicos.</li>
          <li>Definir las caracter??sticas funcionales de la interfaz (establecimiento, mantenimiento y liberaci??n del enlace f??sico).</li>
          <li>Transmitir el flujo de bits a trav??s del medio.</li>
          <li>Manejar las se??ales el??ctricas del medio de transmisi??n, polos en un enchufe, etc.</li>
          <li>Garantizar la conexi??n (aunque no la fiabilidad de dicha conexi??n).</li>
      </ul>

      <h3 id="capa2">Capa 2: Capa de enlace de datos</h3>
      <p>Esta capa se ocupa del direccionamiento f??sico, del acceso al medio, de la detecci??n de errores, de la distribuci??n ordenada de tramas y del control del flujo.</p>???
      <p>Es uno de los aspectos m??s importantes que revisar en el momento de conectar dos ordenadores, ya que est?? entre la capa 1 y 3 como parte esencial para la creaci??n de sus protocolos b??sicos (MAC, IP), para regular la forma de la conexi??n entre computadoras, determinando el paso de tramas (unidad de medida de la informaci??n en esta capa, que no es m??s que la segmentaci??n de los datos traslad??ndolos por medio de paquetes), verificando su integridad, y corrigiendo errores</p>.
      <p>Por lo cual es importante mantener una excelente adecuaci??n al medio f??sico (los m??s usados son el cable UTP, par trenzado o de 8 hilos), con el medio de red que redirige las conexiones mediante un enrutador</p>.
      <p>Dadas estas situaciones cabe recalcar que el dispositivo que usa la capa de enlace es el Switch que se encarga de recibir los datos del enrutador y enviar cada uno de estos a sus respectivos destinatarios (servidor -> computador cliente o alg??n otro dispositivo que reciba informaci??n como tel??fonos m??viles, tabletas y diferentes dispositivos con acceso a la red, etc.), dada esta situaci??n se determina como el medio que se encarga de la correcci??n de errores, manejo de tramas, protocolizaci??n de datos (se llaman protocolos a las "reglas de cortes??a" o convenciones que debe seguir cualquier capa del modelo OSI)</p>.
      
      <h3 id="capa3">Capa 3: Capa de red</h3>
      <p>Se encarga de identificar el enrutamiento existente entre una o m??s redes. Las unidades de datos se denominan paquetes, y se pueden clasificar en protocolos enrutables y protocolos de enrutamiento.</p>
      <p>Enrutables: viajan con los paquetes (IP, IPX, APPLETALK)</p>
      <p>Enrutamiento: permiten seleccionar las rutas (RIP, IGRP, EIGRP, OSPF, BGP)</p>
      <p>El objetivo de la capa de red es hacer que los datos lleguen desde el origen al destino, aun cuando ambos no est??n conectados directamente sino que utilicen dispositivos intermedios. Los dispositivos que facilitan tal tarea se denominan encaminadores o enrutadores, aunque es m??s frecuente encontrarlo con el nombre en ingl??s routers. Los routers trabajan en esta capa, aunque pueden actuar como switch de nivel 2 en determinados casos, dependiendo de la funci??n que se le asigne. Los firewalls act??an sobre esta capa principalmente, para descartar direcciones de determinadas m??quinas o limitar el acceso a ciertas de ellas.</p>
      <p>En este nivel se realiza el direccionamiento l??gico y la determinaci??n de la ruta de los datos hasta su receptor final.</p>
      
      <h3 id="capa4">Capa 4: Capa de transporte</h3>
      <p>Capa encargada de efectuar el transporte de los datos (que se encuentran dentro del paquete) de la m??quina origen a la de destino, independientemente del tipo de red f??sica que est?? utilizando.9???</p>
      <p>La PDU (unidad de informaci??n) de la capa 4 se llama Segmento o Datagrama, dependiendo de si corresponde a TCP o UDP, el primero orientado a conexi??n (transmisi??n verificada, eventualmente retransmitida) y el otro sin conexi??n (pueden perderse algunos datos por el camino).10??? Trabajan, por lo tanto, con puertos l??gicos y junto con la capa red dan forma a los conocidos como Sockets IP:Puerto (ejemplo: 191.16.200.54:80).</p>
      
      <h3 id="capa5">Capa 5: Capa de sesi??n</h3>
      <p>Esta capa es la que se encarga de mantener y controlar el enlace establecido entre dos computadores que est??n transmitiendo datos de cualquier ??ndole. Por lo tanto, el servicio provisto por esta capa es la capacidad de asegurar que, dada una sesi??n establecida entre dos m??quinas, la misma se pueda efectuar para las operaciones definidas de principio a fin, reanud??ndolas en caso de interrupci??n.??? En muchos casos, los servicios de la capa de sesi??n son parcial o totalmente prescindibles.<p>
      
      <h3 id="capa6">Capa 6: Capa de presentaci??n</h3>
      <p>El objetivo es encargarse de la representaci??n de la informaci??n, de manera que, aunque distintos equipos puedan tener diferentes representaciones internas de caracteres, los datos lleguen de manera reconocible.12???</p>
      <p>Esta capa es la primera en trabajar m??s el contenido de la comunicaci??n que el c??mo se establece la misma. En ella se tratan aspectos tales como la sem??ntica y la sintaxis de los datos transmitidos, ya que distintas computadoras pueden tener diferentes formas de manejarlas. Por ejemplo, un mismo sitio web puede adecuar la presentaci??n de sus datos seg??n se acceda desde un computador convencional, una tableta, o un tel??fono inteligente.</p>
      <p>Esta capa tambi??n permite cifrar los datos y comprimirlos. Por lo tanto, podr??a decirse que esta capa act??a como un traductor.</p>
      
      <h3 id="capa7">Capa 7: Capa de aplicaci??n</h3>
      <p>Ofrece a las aplicaciones la posibilidad de acceder a los servicios de las dem??s capas y define los protocolos que utilizan las aplicaciones para intercambiar datos, como correo electr??nico (Post Office Protocol y SMTP), gestores de bases de datos y servidor de ficheros (FTP). Hay tantos protocolos como aplicaciones distintas y puesto que continuamente se desarrollan nuevas aplicaciones el n??mero de protocolos crece sin parar.13???</p>
      <p>Cabe aclarar que el usuario normalmente no interact??a directamente con el nivel de aplicaci??n. Suele interactuar con programas que a su vez interact??an con el nivel de aplicaci??n pero ocultando la complejidad subyacente.</p>
  </div>

  <!-- #Contenido -->
  <div>
    <h2 id="nemotecnica" class="titulo2 modal-title col-3 text-center">Regla nemot??cnica</h2>
    <p>A fin de facilitar el aprendizaje y memorizaci??n de los nombres de las capas que componen el modelo; una regla sencilla consiste en memorizarlas como una sigla nemot??cnica: FERTSPA, que en ingl??s sonar??a como First Spa, primer spa en castellano, el cual se define de la siguiente manera:</p>
    <dl><dd><b>F</b>??sica</dd>
    <dd><b>E</b>nlace</dd>
    <dd><b>R</b>ed</dd>
    <dd><b>T</b>ransporte</dd>
    <dd><b>S</b>esi??n</dd>
    <dd><b>P</b>resentaci??n</dd>
    <dd><b>A</b>plicaci??n</dd>
    </dl>
  </div>
  <!-- #Contenido -->
  <div>
    <h2 id="unidades" class="titulo2 modal-title col-3 text-center">Unidades de datos</h2>
      <p>El intercambio de informaci??n entre dos capas OSI consiste en que cada capa en el sistema fuente le agrega informaci??n de control a los datos, y cada capa en el sistema de destino analiza y quita la informaci??n de control de los datos como sigue:</p>
      <p>Si una computadora (A) desea enviar datos a otra (B), en primer t??rmino los datos deben empaquetarse a trav??s de un proceso denominado encapsulamiento, es decir, a medida que los datos se desplazan a trav??s de las capas del modelo OSI, reciben encabezados, informaci??n final y otros tipos de informaci??n.</p>
      <h3 id="pdu">N-PDU</h3>
      <p>La unidad de datos de protocolo (N-PDU) es la informaci??n intercambiada entre entidades pares, es decir, dos entidades pertenecientes a la misma capa pero en dos sistemas diferentes, utilizando una conexi??n N-1.</p>
      <h3 id="idu">N-IDU</h3>
      <p>La Unidad de Datos de Interfaz (N-IDU): es la informaci??n transferida entre dos niveles adyacentes, es decir, dos capas contiguas.</p>
  </div>

  <!-- #Contenido -->
  <div>
    <h2 id="transmision" class="titulo2 modal-title col-4 text-center">Transmisi??n de los datos</h2>
    <p>La capa de aplicaci??n recibe el mensaje del usuario y le a??ade una cabecera constituyendo as?? la PDU de la capa de aplicaci??n. La PDU se transfiere a la capa de aplicaci??n del modo destino, este elimina la cabecera y entrega el mensaje al usuario.</p>
    <p>Para ello ha sido necesario todo este proceso:</p>
    <ol>
      <li>Ahora hay que entregar la PDU a la capa de presentaci??n para ello hay que a??adirle la correspondiente cabecera ICI y transformarla as?? en una IDU, la cual se transmite a dicha capa.</li>
      <li>La capa de presentaci??n recibe la IDU, le quita la cabecera y extrae la informaci??n, es decir, la SDU, a esta le a??ade su propia cabecera (PCI) constituyendo as?? la PDU de la capa de presentaci??n.</li>
      <li>Esta PDU es transferida a su vez a la capa de sesi??n mediante el mismo proceso, repiti??ndose as?? para todas las capas.</li>
      <li>Al llegar al nivel f??sico se env??an los datos que son recibidos por la capa f??sica del receptor.</li>
      <li>Cada capa del receptor se ocupa de extraer la cabecera, que anteriormente hab??a a??adido su capa hom??loga, interpretarla y entregar la PDU a la capa superior.</li>
      <li>Finalmente, llegar?? a la capa de aplicaci??n, la cual entregar?? el mensaje al usuario.</li>
    </ol>
  </div>
  <!-- #Contenido -->
  <div>
    <h2 id="formato" class="titulo2 modal-title col-3 text-center">Formato de los datos</h2>
    <p>Otros datos reciben una serie de nombres y formatos espec??ficos en funci??n de la capa en la que se encuentren, debido a como se describi?? anteriormente la adhesi??n de una serie de encabezados e informaci??n final. Los formatos de informaci??n son los que muestra el gr??fico:</p>
    <img alt="PDUs.PNG" src="//upload.wikimedia.org/wikipedia/commons/f/fc/PDUs.PNG" decoding="async" width="546" height="331" data-file-width="546" data-file-height="331">
  </div>

  <!-- #Contenido -->
  <div>
    <h2 id="operaciones" class="titulo2 modal-title col-4 text-center">Operaciones sobre los datos</h2>
      <p>En determinadas situaciones es necesario realizar una serie de operaciones sobre las PDU y as?? facilitar su transporte, debido a que son demasiado grandes o bien porque son demasiado peque??as y estar??amos desaprovechando la capacidad del enlace.</p>
      <h3 id="bloqueo">Bloqueo y desbloqueo</h3>
        <p>El bloqueo hace corresponder varias (p)-SDU en una (p)-PDU.</p>
        <p>El desbloqueo identifica varias (p)-SDU que est??n contenidas en una (p)-PDU.</p>
      <h3 id="concatenacion">Concatenaci??n y separaci??n</h3>
        <p>La concatenaci??n es una funci??n-(N) que realiza el nivel-(N) y que hace corresponder varias (N)-PDU en una sola (N-1)-SDU.</p>
        <p>La separaci??n identifica varias (N)-PDU que est??n contenidas en una sola (N-1)-SDU.</p>
  </div>
  <div>
    <h2 id="tarea" class="titulo2 modal-title col-3 text-center">Tarea de la semana</h2>
    <h3>Infograf??a sobre el Modelo OSI</h3>
    <div style="position: relative; width: 70%; height: 0; padding-top: 250.0000%;
       padding-bottom: 48px; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;
        border-radius: 8px; will-change: transform;">
      <iframe loading="lazy" style="position: absolute; width: 60%; height: 50%; top: 0; left: 0; border: none; padding: 0;margin: 0;"
      src="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAEmZY-K0-A&#x2F;view?embed">
      </iframe>
    </div>
    <a href="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAEmZY-K0-A&#x2F;view?utm_content=DAEmZY-K0-A&amp;utm_campaign=designshare&amp;utm_medium=embeds&amp;utm_source=link" target="_blank" rel="noopener">Redes de Computadoras I Modelo OSI,</a> enlace a canva.

  </div>
  <!-- #Scroll en p??gina -->
  <!-- #Avance de semanas-->

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



  <nav aria-label="Page navigation example">
  <ul class="pagination text-center pagination justify-content-center">
    <li class="page-item"><a class="page-link" href="?controller=semana3&&action=contenido">semana 3</a></li>
    <li class="page-item"><a class="page-link" href="?controller=semana4&&action=contenido">semana 4</a></li>
    <li class="page-item"><a class="page-link" href="?controller=semana5&&action=contenido">semana 5</a></li>
  
  </ul>
</nav>

</div>
