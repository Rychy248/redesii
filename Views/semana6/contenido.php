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
    <h1>S E M A N A - 6</h1>
    <h1>Parciales</h1>
  </div>

    <!-- #Contenido -->
    <div>
    <p>Esta semana fue dedicada a parciales, pero acá una canción más! ;)</p>
    <iframe width="100%" height="600px" src="https://www.youtube.com/embed/KGgOz_gRD_c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  <!-- #Scroll en página -->
  <div>

  </div>


  <!-- #Avance de semanas-->
 
</div>
      </div>
      <div id="features">
      </div>
      <div id="work">

      </div>
      <div id="info">
      <a href="#top" class="up"><i class="fa fa-chevron-up"></i></a>
      <p class="copy">&copy; 2014</p>
      </div>
  </div>
  <script src="https://code.jquery.com/jquery-latest.min.js"></script>
  <script src="js/app.js"></script>