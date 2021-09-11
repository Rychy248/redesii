<div>
  <!--#HEADER, TÍTULO Y E INDICE -->
  <div>
    <h1>Introducción de las Redes de Computadoras</h1>
    <ul class="bo">
      <li><a href="#definicion">Definición</a></li>
      <li><a href="#origenes">Origenes y evolución</a></li>
      <li><a href="#arpanet">ARPANET</a></li>
      <li><a href="#conceptos">Conceptos Básicos de Redes</a></li>
      <li><a href="#tarea">Tarea de la semana</a></li>
    </ul>
  </div>

  <!-- #Contenido -->
  <div>
    <h2 id="definicion" class="titulo2">Definición</h2>
    <p>Una red de computadoras (también llamada red de ordenadores o red informática) es un conjunto de equipos nodos y software conectados entre sí por medio de dispositivos físicos que envían y reciben impulsos eléctricos, ondas electromagnéticas o cualquier otro medio para el transporte de datos, con la finalidad de compartir información, recursos y ofrecer servicios.
    Como en todo proceso de comunicación, se requiere de un emisor, un mensaje, un medio y un receptor. La finalidad principal para la creación de una red de ordenadores es compartir los recursos y la información en la distancia, asegurar la confiabilidad y la disponibilidad de la información, aumentar la velocidad de transmisión de los datos y reducir el costo. Un ejemplo es Internet, el cual es una gran red de millones de ordenadores
    ubicados en distintos puntos del planeta interconectados básicamente para compartir información y recursos.</p>
    
    <p>La estructura y el modo de funcionamiento de las redes informáticas actuales están definidos en varios estándares, siendo el más importante y extendido de todos ellos el modelo TCP/IP utilizado como base para el modelo de referencia OSI. Este último, concibe cada red como estructurada en siete capas con funciones concretas pero relacionadas entre sí (en TCP/IP se habla de cuatro capas). Debe recordarse que el modelo de referencia OSI es una abstracción teórica, que facilita la comprensión del tema, si bien se permiten ciertos desvíos respecto a dicho modelo.
    Existen multitud de protocolos repartidos por cada capa, los cuales también están regidos por sus respectivos estándares.</p>
  </div>  
  <!-- #Contenido -->
  <div>
    <h2 id="origenes" class="titulo2">Origenes</h2>
    <p>En el video se habla sobre el origen y evolución de las redes</p>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/BJeuWQ3f2q0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
  <!-- #Contenido -->
  <div>
    <h2 id="arpanet" class="titulo2">ARPANET</h2>
    <p>
    ARPANET fue una red de computadoras creada por encargo del Departamento de Defensa de los Estados Unidos (DOD) para utilizarla como medio de comunicación entre las diferentes instituciones académicas y estatales. El primer nodo fue creado en la Universidad de California en Los Ángeles (UCLA), y fue la espina dorsal de Internet hasta 1990, tras finalizar la transición al modelo de protocolos TCP/IP, iniciada en 1983.
    ARPANET son las siglas de Advanced Research Projects Agency Network, es decir, la Red de la Agencia de Proyectos de Investigación Avanzada,1​ organismo conocido ahora como Agencia de Proyectos de Investigación Avanzados de Defensa.
    </p>
    <h3 class="titulo3">Origen</h3>
    <p>El concepto de una red de ordenadores, capaz de comunicar usuarios en distintas computadoras,
    fue formulado en abril de 1963 por Joseph C. R. Licklider, de Bolt, Beranek y Newman (BBN),
    en una serie de notas que discutían la idea de «red galáctica». En octubre del mismo año,
    Licklider fue convocado por la ARPA (Agencia de Investigación de Proyectos Avanzados),
    organismo perteneciente al DOD. En este foro, convenció a Ivan Sutherland y Robert «Bob»
    Taylor de la importancia del concepto antes de abandonar la Agencia, y antes de que se iniciara
    trabajo alguno. Mientras tanto, en la RAND Corporation desde 1958, Paul Baran estaba trabajando en
    una red segura de comunicaciones capaz de sobrevivir a un ataque con armas nucleares, con fines militares.</p>
    
    <p>Sus resultados se publicaron a partir de 1960, y en ellos se describían dos ideas clave:
    El uso de una red descentralizada con múltiples caminos entre dos puntos;</p>
    <ul>
    <li>La división de mensajes completos en fragmentos que seguirían caminos distintos.</li>
    <li>La red estaría capacitada para responder ante sus propios fallos.</li>
    </ul>
    <p>El resumen final de este esquema se presentó
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
    
    <h3 class="titulo3">Nacimiento de ARPANET</h3>
    <p>En el verano de 1968, ya existía un plan completo y aprobado por ARPA de manera que se celebró un concurso con
    140 potenciales proveedores. Sin embargo, solamente doce de ellos presentaron propuestas. En 1969, el contrato se
    adjudicó a la empresa Bolt, Beranek y Newman (conocida como BBN Technologies o simplemente BBN) con quienes había trabajado Licklider, creador del concepto de «red galáctica». El 29 de octubre de 1969 se transmite el primer mensaje a través de ARPANET y en menos de un mes (21 de noviembre) se establece el primer enlace entre la Universidad de California, los Ángeles y el Instituto de Investigaciones de Stanford.2​
    La oferta de BBN seguía el plan de Roberts rápidamente. Las pequeñas computadoras se denominaron «procesadores de la interfaz de mensajes» (IMP). Estos implementaban la técnica de almacenar y reenviar, y utilizaban un módem telefónico para conectarse a otros equipos (a una velocidad de 50 kbits por segundo). Las computadoras centrales se conectaban a los IMP mediante puertos en serie a medida.
    Los IMP se implementaron inicialmente con computadoras DDP-516 de Honeywell. Contaban con 24 KB de memoria principal con capacidad para conectar un máximo de cuatro computadoras centrales, y comunicarlas con otros seis IMP remotos.
    BBN tuvo disponible todo el hardware y el software necesario en tan solo nueve meses.</p>
  </div>
  <!-- #Contenido -->
  <div>
    <h2 id="conceptos" class="titulo2">Conceptos Básicos de Redes</h2>
    <ol>
      <li><h3 class="titulo3">Internet</h3>
        <p>Empezamos por la base, ¿qué es Internet? Podemos definirla como un conjunto descentralizado de redes de comunicación que están interconectadas entre sí, lo que permite navegar de una a otra sin problemas.</p>
        <p>Su base está en la familia de protocolos TCP/IP, que garantiza que las redes físicas heterogéneas que la componen formen una red lógica única de alcance mundial. Como sabrán muchos de nuestros lectores sus orígenes se remontan a 1969, fecha en la que surgió ARPANET, la primera conexión entre computadoras.<p>
      </li>
      <li><h3 class="titulo3" >Tarjeta de red</h3>
        <p>Es un componente informático con forma de tarjeta que se conecta en la placa base de un ordenador y que cuenta con los componentes necesarios para que el equipo se conecte a Internet o a una red local, ya sea de forma inalámbrica o cableada.</p>
        <p>Las tarjetas de red actuales cuentan con soporte tanto de conexiones cableadas (Ethernet) como inalámbricas (Wi-Fi).</p>
      </li>
      <li><h3 class="titulo3">Router</h3>
      <p>Es un dispositivo externo que actúa como sistema encargado de establecer la conexión a Internet, ya sea de forma inalámbrica o cableada.</p>
      <p>Para llevar a cabo su trabajo envía y recibe de forma constante paquetes de datos, lo que le permite interconectar subredes. Dicho de una manera sencilla, es el encargado de establecer la comunicación y la coordinación entre el PC que se conecta a una página web o servicio y el servidor que aloja esa web o presta dicho servicio.</p>
      </li>
      <li><h3 class="titulo3">HTML</h3>
      <p>Es un lenguaje de marcado que se utiliza para el desarrollo de páginas de Internet. Estas siglas se refieren a «HyperText Markup Language», y es un estándar que sirve como estructura y código básico para la definición del contenido de una página web.</p>
      <p>Dicho de una manera más sencilla, es el estándar que se ha impuesto en la visualización de páginas web, el que todos los navegadores actuales han adoptado y el que ha hecho posible que Internet sea una red global unificada.</p>
      </li>
      <li><h3 class="titulo3">World Wide Web</h3>
      <p>Es un sistema estandarizado de distribución de documentos de hipertexto o hipermedia interconectados y accesibles a través de Internet. Su creación fue posible gracias al HTML, como dijimos anteriormente.</p>
      <p>Con un navegador web podemos visualizar páginas web que pueden contener textos, imágenes, vídeos u otros contenidos multimedia, y navega a través de esas páginas usando hiperenlaces, que permiten acceder a diferentes recursos referenciados de forma directa. En resumen, es la base de la navegación moderna en Internet que todos conocemos, y que permite saltar de un lado a otro a través de enlaces.</p>
      </li>
    </ol>
  </div>
  <!-- #Contenido -->
  <div>
    <h2 id="tarea"class="titulo2" >Tarea de la semana</h2>
    <p>Tarea de la semana Infografía de la linea del tiempo de las redes de las computadoras</p>
    <p><a href="https://www.easel.ly/browserEasel/13434669" target="_blank">Ver infografía trabajada</a></p>
    <iframe width="613" height="792" frameborder="0" scrolling="no" style="overflow-y:hidden;" src="https://www.easel.ly/index/embedFrame/easel/13434669"></iframe>
      <img src="../../assets/img/infografia.jpg" alt="Infografia">
  </div>

  <!-- #Scroll en página -->
  <div>
    <a href="#definicion">| Definición | </a>
    <a href="#origenes">Origenes y evolución | </a>
    <a href="#arpanet">ARPANET | </a>
    <a href="#conceptos">Conceptos Básicos de Redes | </a>
    <a href="#tarea">Tarea de la semana | </a>
  </div>

  <!-- #Avance de semanas-->
  <div>
    <p>
      <span><a href="?controller=semana2&&action=contenido">Semana 2</a></span>
    </p>
  </div>
</div>