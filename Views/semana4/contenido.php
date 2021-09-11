<div>
    <!--#HEADER, TÍTULO Y E INDICE -->
  <div>
<<<<<<< HEAD
    <h1>Modelo OSI</h1>
=======
    <h1>S E M A N A - 4</h1>
    <h1>Modelo Osi</h1>
>>>>>>> 1d5f44ce0c8973dcbdf267dbb2de53e32d6fc4ab
    <ol>
      <li><a href="#definicion">Definición</a></li>
      <li><a href="#historia">Historia</a></li>
      <li><a href="#referencia">Modelo de referencia OSI</a></li>
      <li>
        <a href="#arquitectura">Arquitectura de capas
          <ul>
            <li><a href="#capa1">Capa 1: Capa física</a></li>
            <li><a href="#capa2">Capa 2: Capa de enlace de datos</a></li>
            <li><a href="#capa3">Capa 3: Capa de red</a></li>
            <li><a href="#capa4">Capa 4: Capa de transporte</a></li>
            <li><a href="#capa5">Capa 5: Capa de sesión</a></li>
            <li><a href="#capa6">Capa 6: Capa de presentación</a></li>
            <li><a href="#capa7">Capa 7: Capa de aplicación</a></li>
          </ul>
        </a>
      </li>
      <li><a href="#nemotecnica">Regla nemotécnica</a></li>
      <li>
        <a href="#unidades">Unidades de datos
          <ul>
            <li><a href="#pdu">N-PDU</li>
            <li><a href="#idu">N-IDU</li>
          </ul>
        </a>
      </li>
      <li><a href="#transmision">Transmisión de los datos</a></li>
      <li><a href="#formato">Formato de los datos</a></li>
      <li>
        <a href="#operaciones">Operaciones sobre los datos
          <ul>
            <li><a href="#bloqueo">Bloqueo y desbloqueo</li>
            <li><a href="#concatenacion">Concatenación y separación</li>
          </ul>
        </a>
      </li>
      <li><a href="#tarea">Tarea de la semana</a></li>
    </ol>    
  </div>

  <!-- #Contenido -->
  <div>
<<<<<<< HEAD
    <h2 id="historia" class="titulo2">Historia</h2>
    <p>Contenido</p>
  </div>
  <!-- #Contenido -->
  <div>
    <h2 id="referencia" class="titulo2">Modelo de referencia OSI</h2>
    <p>Contenido</p>
  </div>
  <!-- #Contenido -->
  <div>
    <h2 id="arquitectura" class="titulo2">Arquitectura de capas</h2>
=======
    <h2 id="definicion">Definición</h2>
    <p>El modelo de interconexión de sistemas abiertos (ISO/IEC 7498-1), conocido como “modelo OSI”, (en inglés, Open Systems Interconnection) es un modelo de referencia para los protocolos de la red (no es una arquitectura de red), creado en el año 1980 por la Organización Internacional de Normalización. Se ha publicado desde 1983 por la Unión Internacional de Telecomunicaciones (UIT) y, desde 1984, la Organización Internacional de Normalización (ISO) también lo publicó con estándar. Su desarrollo comenzó en 1977.</p>
    <p>Es un estándar que tiene por objetivo conseguir interconectar sistemas de procedencia distinta para que estos pudieran intercambiar información sin ningún tipo de impedimentos debido a los protocolos con los que estos operaban de forma propia según su fabricante.</p>
    <p>El modelo OSI está conformado por 7 capas o niveles de abstracción. Cada uno de estos niveles tendrá sus propias funciones para que en conjunto sean capaces de poder alcanzar su objetivo final. Precisamente esta separación en niveles hace posible la intercomunicación de protocolos distintos al concentrar funciones específicas en cada nivel de operación.</p>
    <p>El modelo OSI no es la definición de una topología ni un modelo de red en sí mismo. Tampoco especifica ni define los protocolos que se utilizan en la comunicación, ya que estos están implementados de forma independiente a este modelo. Lo que realmente hace OSI es definir la funcionalidad de ellos para conseguir un estándar.</p>
  </div>
  <!-- #Contenido -->
  <div>
    <h2 id="historia">Historia</h2>
    <p>A principios de 1980 el desarrollo de redes originó desorden en muchos sentidos. Se produjo un enorme crecimiento en la cantidad y tamaño de las redes. A medida que las empresas tomaban conciencia de las ventajas de usar tecnologías de conexión, las redes se agregaban o expandían a casi la misma velocidad con la que se introducían las nuevas tecnologías de red.</p>
    <p>A mediados de 1980, estas empresas comenzaron a sufrir las consecuencias de la rápida expansión. De la misma forma en que las personas que no hablan un mismo idioma tienen dificultades para comunicarse, las redes que utilizaban diferentes especificaciones e implementaciones no podían intercambiar información. El mismo problema surgía con las empresas que desarrollaban tecnologías de conexiones propietarias (una tecnología es llamada «propietaria» cuando su implementación, (ya sea de software o hardware) está sujeta a un copyright. Esto supone que una empresa controla esta tecnología y las empresas que quieran utilizarla en sus sistemas tienen que pagar derechos por su uso). Las tecnologías de conexión que respetaban reglas propietarias en forma estricta no podían comunicarse con tecnologías que usaban reglas propietarias diferentes e incluso con las que usaban reglas de conexión copyleft.</p>
    <p>Para enfrentar el problema de incompatibilidad de redes, la ISO investigó modelos de conexión como la red de Digital Equipment Corporation (DECnet), la Arquitectura de Sistemas de Red (Systems Network Architecture, SNA) y TCP/IP, a fin de encontrar un conjunto de reglas aplicables de forma general a todas las redes. Con base en esta investigación, la ISO desarrolló un modelo de red para ayudar a los fabricantes a crear redes que sean compatibles con otras redes.</p>
  </div>
  <!-- #Contenido -->
  <div>
    <h2 id="referencia">Modelo de referencia OSI</h2>
    <p>Es un estándar desarrollado en 1980 por la ISO,1​ una federación global de organizaciones que representa aproximadamente a 160 países. El núcleo de este estándar es el modelo de referencia OSI, una normativa formada por siete capas que define las diferentes fases por las que deben pasar los datos para viajar de un dispositivo a otro sobre una red de comunicaciones</p>.
    <p>Siguiendo el esquema de este modelo se crearon numerosos protocolos. El advenimiento de protocolos más flexibles donde las capas no están tan desmarcadas y la correspondencia con los niveles no era tan clara puso a este esquema en un segundo plano. Sin embargo se usa en la enseñanza como una manera de mostrar cómo puede estructurarse una «pila» de protocolos de comunicaciones.4</p>​
    <p>El modelo especifica el protocolo que debe usarse en cada capa, y suele hablarse de modelo de referencia ya que se usa como una gran herramienta para la enseñanza de comunicación de redes</p>.
    <p>Debe recordarse siempre que es un modelo, una construcción teórica, por ende no tiene un correlato directo con el mundo real. Se trata de una normativa estandarizada útil debido a la existencia de muchas tecnologías, fabricantes y compañías dentro del mundo de las comunicaciones, y al estar en continua expansión, se tuvo que crear un método para que todos pudieran entenderse de algún modo, incluso cuando las tecnologías no coincidieran. De este modo, no importa la localización geográfica o el lenguaje utilizado- todo el mundo debe atenerse a unas normas mínimas para poder comunicarse entre sí. Esto es sobre todo importante cuando hablamos de la red de redes, es decir, Internet</p>.
    <p>El modelo es el modelo de red descriptivo, que fue creado por la Organización internacional para la Estandarización en el año 1980. Reconoció que era necesario crear un modelo de red que pudiera ayudar a los diseñadores de red a implementar redes que pudieran comunicarse y trabajar en conjunto y por lo tanto, elaboraron el modelo de referencia OSI. El núcleo de este estándar es el modelo de referencia OSI, una normativa formada por siete capas que define las diferentes fases por las que deben pasar los datos para viajar de un dispositivo a otro sobre una red de comunicaciones. El modelo especifica el protocolo que debe ser usado en cada capa, y suele hablarse de modelo de referencia ya que es usado como una gran herramienta para la enseñanza de comunicación de redes</p>.
    <p>Existen diversos protocolos de acuerdo a cómo se espera que sea la comunicación. Este conjunto de protocolos se denomina TCP/IP. TCP/IP se ha convertido en el estándar de-facto para la conexión en red corporativa. Las redes TCP/IP son ampliamente escalables, para lo que TCP/IP puede utilizarse tanto para redes pequeñas como grandes</p>.
    <p>TCP/IP es un conjunto de protocolos encaminados que puede ejecutarse en distintas plataformas de software y casi todos los sistemas operativos de red lo soportan como protocolo de red predeterminado. Protocolos miembro de la pila TCP/IP. FTP, SMTP, UDP, IP, ARP. TCP corre en varias capas del modelo OSI Protocolo de Internet. Es un protocolo no orientado a conexión usado tanto por el origen como por el destino para la comunicación de datos a través de una red de paquetes conmutados. Los datos en una red basada en IP son enviados en bloques conocidos como paquetes o datagramas</p>.

    <table class="wikitable">
      <caption>Capas del Modelo OSI</caption>
      <tbody>
        <tr>
          <th>Número</th>
          <th>Nombre</th>
          <th>Responsabilidad</th>
          <th>Descripción</th>
        </tr>
        <tr>
          <td>Capa 7</td>
          <td>Aplicación</td>
          <td>Responsable de los servicios de red para las aplicaciones</td>
          <td>
            Difiere de las demás capas debido a que no proporciona servicios a
            ninguna otra capa OSI, sino solamente a aplicaciones que se encuentran
            fuera del modelo OSI. La capa de aplicación establece la disponibilidad
            de los potenciales socios de comunicación, sincroniza y establece
            acuerdos sobre los procedimientos de recuperación de errores y control
            de la integridad de los datos. Esta garantiza que la información que
            envía la capa de aplicación de un sistema pueda ser leída por la capa de
            aplicación de otro. De ser necesario, la capa de presentación traduce
            entre varios formatos de datos utilizando un formato común.
          </td>
        </tr>
        <tr>
          <td>Capa 6</td>
          <td>Presentación</td>
          <td>
            Transforma el formato de los datos y proporciona una interfaz estándar
            para la capa de aplicación
          </td>
          <td>
            Su objetivo es encargarse de la representación de la información, de
            manera que aunque distintos equipos puedan tener diferentes
            representaciones internas de caracteres números, sonido o imágenes, los
            datos lleguen de manera reconocibles. Esta capa es la primera en
            trabajar más el contenido de la comunicación que en como se establece la
            misma. En ella se tratan aspectos tales como la semántica y la sintaxis
            de los datos transmitidos, ya que distintas computadoras pueden tener
            diferentes formas de manejarlas. Por lo tanto, podemos resumir
            definiendo a esta capa como la encargada de manejar las estructuras de
            datos abstractas y realizar las conversiones de representación de datos
            necesarias para la correcta interpretación de los mismos.
          </td>
        </tr>
        <tr>
          <td>Capa 5</td>
          <td>Sesión</td>
          <td>
            Establece, administra y finaliza las conexiones entre las aplicaciones
            locales y las remotas
          </td>
          <td>
            Esta capa también permite cifrar los datos y comprimirlos. Como su
            nombre lo implica, la capa de sesión establece, administra y finaliza
            las sesiones entre dos hosts que se están comunicando. La capa de sesión
            proporciona sus servicios a la capa de presentación. También sincroniza
            el diálogo entre las capas de presentación de los dos hosts y administra
            su intercambio de datos.
            <p>
              Además de regular la sesión, la capa de sesión ofrece disposiciones
              para una eficiente transferencia de datos, clase de servicio y un
              registro de excepciones acerca de los problemas de la capa de sesión,
              presentación y aplicación. Pero este protocolo debe transportarse
              entre máquinas a través de otros protocolos. Con SAP, los servidores
              permiten a los enrutadores crear y mantener una base de datos con la
              información actualizada de los servidores de la interred. La capa de
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
            Proporciona transporte confiable y control del flujo a través de la red
          </td>
          <td>
            El límite entre la capa de transporte y la capa de sesión puede
            imaginarse como el límite entre los protocolos de aplicación y los
            protocolos de flujo de datos. Mientras que las capas de aplicación,
            presentación y sesión están relacionadas con asuntos de aplicaciones,
            las cuatro capas inferiores se encargan del transporte de datos. TCP
            crea conexiones a través de las cuales puede enviar flujos de datos. El
            protocolo garantiza que los datos serán entregados en su destino sin
            errores y en el mismo orden en que se transmitieron.
          </td>
        </tr>
        <tr>
          <td>Capa 3</td>
          <td>Red</td>
          <td>
            Responsable del direccionamiento lógico y el dominio del enrutamiento
          </td>
          <td>
            Su misión es conseguir que los datos lleguen desde el origen al destino
            aunque no tengan conexión directa. IPX/SPX Es una familia de protocolos
            de red desarrollados por novell y utilizado por su sistema operativo de
            red netware. El IPX Es un protocolo de datagramas rápido orientados a
            comunicaciones sin conexión que se encarga de transmitir datos a través
            de la red, incluyendo en cada paquete la dirección de destino. La capa
            de enlace de datos proporciona tránsito de datos confiable a través de
            un enlace físico.
          </td>
        </tr>
        <tr>
          <td>Capa 2</td>
          <td>Enlace de Datos</td>
          <td>
            Proporciona direccionamiento físico y procedimientos de acceso a medios
          </td>
          <td>
            Al hacerlo, la capa de enlace de datos se ocupa del direccionamiento
            físico, la topología de red, el acceso a la red, la notificación de
            errores, entrega ordenada de tramas y control de flujo. Ethernet define
            las características de cableado y señalización de nivel físico y los
            formatos de tramas de datos del nivel de enlace de datos. FDDI
            Proporciona un 100 Mbits/s óptico estándar para la transmisión de datos
            en una red de área local.
          </td>
        </tr>
        <tr>
          <td>Capa 1</td>
          <td>Física</td>
          <td>
            Define todas las especificaciones eléctricas y físicas de los
            dispositivos
          </td>
          <td>
            La capa física define las especificaciones eléctricas, mecánicas, de
            procedimiento y funcionales para activar, mantener y desactivar el
            enlace físico entre sistemas finales.
            <p>
              Las características tales como niveles de voltaje, temporización de
              cambios de voltaje, velocidad de datos físicos, distancias de
              transmisión máximas, conectores físicos y otros atributos similares
              son definidos por las especificaciones de la capa física. Bluetooth es
              una especificación industrial para Redes Inalámbricas de Área Personal
              que posibilita la transmisión de voz y datos entre diferentes
              dispositivos. ADSL Consiste en una transmisión analógica de datos
              digitales apoyado en el par simétrico de cobre que lleva la línea
              telefónica convencional. USB Es un estándar industrial desarrollado en
              los años 1990 que define los cables, conectores y protocolos usados en
              un bus para conectar , comunicar y proveer de alimentación eléctrica
              entre ordenadores, periféricos y dispositivos electrónicos.
            </p>
            <p>
              Consiste en una transmisión analógica de datos digitales apoyada en el
              par simétrico de cobre que lleva la línea telefónica convencional.
            </p>
          </td>
        </tr>
      </tbody>
    </table>

  
  </div>
  <!-- #Contenido -->
  <div>
    <h2 id="arquitectura">Arquitectura de capas</h2>

>>>>>>> b6dcf3908a23697095789e52245d845e0c25ee14
      <h3 id="capa1">Capa 1: Capa física</h3>
      <p>Es la capa más baja del modelo OSI. Es la que se encarga de la topología de red y de las conexiones globales de la computadora hacia la red, se refiere tanto al medio físico como a la forma en la que se transmite la información y de las redes.></sup>​</p>
      <p>Sus principales funciones se pueden resumir como:</p>
      <ul>
          <li>Definir el medio o medios físicos por los que va a viajar la comunicación: cable de pares trenzados (o no, como en RS232/EIA232), cable coaxial, guías de onda, aire, fibra óptica.</li>
          <li>Definir las características materiales (componentes y conectores mecánicos) y eléctricas (niveles de tensión) que se van a usar en la transmisión de los datos por los medios físicos.</li>
          <li>Definir las características funcionales de la interfaz (establecimiento, mantenimiento y liberación del enlace físico).</li>
          <li>Transmitir el flujo de bits a través del medio.</li>
          <li>Manejar las señales eléctricas del medio de transmisión, polos en un enchufe, etc.</li>
          <li>Garantizar la conexión (aunque no la fiabilidad de dicha conexión).</li>
      </ul>

      <h3 id="capa2">Capa 2: Capa de enlace de datos</h3>
      <p>Esta capa se ocupa del direccionamiento físico, del acceso al medio, de la detección de errores, de la distribución ordenada de tramas y del control del flujo.</p>​
      <p>Es uno de los aspectos más importantes que revisar en el momento de conectar dos ordenadores, ya que está entre la capa 1 y 3 como parte esencial para la creación de sus protocolos básicos (MAC, IP), para regular la forma de la conexión entre computadoras, determinando el paso de tramas (unidad de medida de la información en esta capa, que no es más que la segmentación de los datos trasladándolos por medio de paquetes), verificando su integridad, y corrigiendo errores</p>.
      <p>Por lo cual es importante mantener una excelente adecuación al medio físico (los más usados son el cable UTP, par trenzado o de 8 hilos), con el medio de red que redirige las conexiones mediante un enrutador</p>.
      <p>Dadas estas situaciones cabe recalcar que el dispositivo que usa la capa de enlace es el Switch que se encarga de recibir los datos del enrutador y enviar cada uno de estos a sus respectivos destinatarios (servidor -> computador cliente o algún otro dispositivo que reciba información como teléfonos móviles, tabletas y diferentes dispositivos con acceso a la red, etc.), dada esta situación se determina como el medio que se encarga de la corrección de errores, manejo de tramas, protocolización de datos (se llaman protocolos a las "reglas de cortesía" o convenciones que debe seguir cualquier capa del modelo OSI)</p>.
      
      <h3 id="capa3">Capa 3: Capa de red</h3>
      <p>Se encarga de identificar el enrutamiento existente entre una o más redes. Las unidades de datos se denominan paquetes, y se pueden clasificar en protocolos enrutables y protocolos de enrutamiento.</p>
      <p>Enrutables: viajan con los paquetes (IP, IPX, APPLETALK)</p>
      <p>Enrutamiento: permiten seleccionar las rutas (RIP, IGRP, EIGRP, OSPF, BGP)</p>
      <p>El objetivo de la capa de red es hacer que los datos lleguen desde el origen al destino, aun cuando ambos no estén conectados directamente sino que utilicen dispositivos intermedios. Los dispositivos que facilitan tal tarea se denominan encaminadores o enrutadores, aunque es más frecuente encontrarlo con el nombre en inglés routers. Los routers trabajan en esta capa, aunque pueden actuar como switch de nivel 2 en determinados casos, dependiendo de la función que se le asigne. Los firewalls actúan sobre esta capa principalmente, para descartar direcciones de determinadas máquinas o limitar el acceso a ciertas de ellas.</p>
      <p>En este nivel se realiza el direccionamiento lógico y la determinación de la ruta de los datos hasta su receptor final.</p>
      
      <h3 id="capa4">Capa 4: Capa de transporte</h3>
      <p>Capa encargada de efectuar el transporte de los datos (que se encuentran dentro del paquete) de la máquina origen a la de destino, independientemente del tipo de red física que esté utilizando.9​</p>
      <p>La PDU (unidad de información) de la capa 4 se llama Segmento o Datagrama, dependiendo de si corresponde a TCP o UDP, el primero orientado a conexión (transmisión verificada, eventualmente retransmitida) y el otro sin conexión (pueden perderse algunos datos por el camino).10​ Trabajan, por lo tanto, con puertos lógicos y junto con la capa red dan forma a los conocidos como Sockets IP:Puerto (ejemplo: 191.16.200.54:80).</p>
      
      <h3 id="capa5">Capa 5: Capa de sesión</h3>
      <p>Esta capa es la que se encarga de mantener y controlar el enlace establecido entre dos computadores que están transmitiendo datos de cualquier índole. Por lo tanto, el servicio provisto por esta capa es la capacidad de asegurar que, dada una sesión establecida entre dos máquinas, la misma se pueda efectuar para las operaciones definidas de principio a fin, reanudándolas en caso de interrupción.​ En muchos casos, los servicios de la capa de sesión son parcial o totalmente prescindibles.<p>
      
      <h3 id="capa6">Capa 6: Capa de presentación</h3>
      <p>El objetivo es encargarse de la representación de la información, de manera que, aunque distintos equipos puedan tener diferentes representaciones internas de caracteres, los datos lleguen de manera reconocible.12​</p>
      <p>Esta capa es la primera en trabajar más el contenido de la comunicación que el cómo se establece la misma. En ella se tratan aspectos tales como la semántica y la sintaxis de los datos transmitidos, ya que distintas computadoras pueden tener diferentes formas de manejarlas. Por ejemplo, un mismo sitio web puede adecuar la presentación de sus datos según se acceda desde un computador convencional, una tableta, o un teléfono inteligente.</p>
      <p>Esta capa también permite cifrar los datos y comprimirlos. Por lo tanto, podría decirse que esta capa actúa como un traductor.</p>
      
      <h3 id="capa7">Capa 7: Capa de aplicación</h3>
      <p>Ofrece a las aplicaciones la posibilidad de acceder a los servicios de las demás capas y define los protocolos que utilizan las aplicaciones para intercambiar datos, como correo electrónico (Post Office Protocol y SMTP), gestores de bases de datos y servidor de ficheros (FTP). Hay tantos protocolos como aplicaciones distintas y puesto que continuamente se desarrollan nuevas aplicaciones el número de protocolos crece sin parar.13​</p>
      <p>Cabe aclarar que el usuario normalmente no interactúa directamente con el nivel de aplicación. Suele interactuar con programas que a su vez interactúan con el nivel de aplicación pero ocultando la complejidad subyacente.</p>
  </div>
  <!-- #Contenido -->
  <div>
<<<<<<< HEAD
    <h2 id="nemotecnica" class="titulo2">Regla nemotécnica</h2>
    <p>Contenido</p>
  </div>
  <!-- #Contenido -->
  <div>
    <h2 id="unidades" class="titulo2">Unidades de datos</h2>
=======
    <h2 id="nemotecnica">Regla nemotécnica</h2>
    <p>A fin de facilitar el aprendizaje y memorización de los nombres de las capas que componen el modelo; una regla sencilla consiste en memorizarlas como una sigla nemotécnica: FERTSPA, que en inglés sonaría como First Spa, primer spa en castellano, el cual se define de la siguiente manera:</p>
    <dl><dd><b>F</b>ísica</dd>
    <dd><b>E</b>nlace</dd>
    <dd><b>R</b>ed</dd>
    <dd><b>T</b>ransporte</dd>
    <dd><b>S</b>esión</dd>
    <dd><b>P</b>resentación</dd>
    <dd><b>A</b>plicación</dd>
</dl>
  </div>
  <!-- #Contenido -->
  <div>
    <h2 id="unidades">Unidades de datos</h2>
      <p>El intercambio de información entre dos capas OSI consiste en que cada capa en el sistema fuente le agrega información de control a los datos, y cada capa en el sistema de destino analiza y quita la información de control de los datos como sigue:</p>
      <p>Si una computadora (A) desea enviar datos a otra (B), en primer término los datos deben empaquetarse a través de un proceso denominado encapsulamiento, es decir, a medida que los datos se desplazan a través de las capas del modelo OSI, reciben encabezados, información final y otros tipos de información.</p>
>>>>>>> b6dcf3908a23697095789e52245d845e0c25ee14
      <h3 id="pdu">N-PDU</h3>
      <p>La unidad de datos de protocolo (N-PDU) es la información intercambiada entre entidades pares, es decir, dos entidades pertenecientes a la misma capa pero en dos sistemas diferentes, utilizando una conexión N-1.</p>
      <h3 id="idu">N-IDU</h3>
      <p>La Unidad de Datos de Interfaz (N-IDU): es la información transferida entre dos niveles adyacentes, es decir, dos capas contiguas.</p>
  </div>
  <!-- #Contenido -->
  <div>
<<<<<<< HEAD
    <h2 id="transmision" class="titulo2">Transmisión de los datos</h2>
    <p>Contenido</p>
  </div>
  <!-- #Contenido -->
  <div>
    <h2 id="formato" class="titulo2">Formato de los datos</h2>
    <p>Contenido</p>
=======
    <h2 id="transmision">Transmisión de los datos</h2>
    <p>La capa de aplicación recibe el mensaje del usuario y le añade una cabecera constituyendo así la PDU de la capa de aplicación. La PDU se transfiere a la capa de aplicación del modo destino, este elimina la cabecera y entrega el mensaje al usuario.</p>
    <p>Para ello ha sido necesario todo este proceso:</p>
    <ol>
      <li>Ahora hay que entregar la PDU a la capa de presentación para ello hay que añadirle la correspondiente cabecera ICI y transformarla así en una IDU, la cual se transmite a dicha capa.</li>
      <li>La capa de presentación recibe la IDU, le quita la cabecera y extrae la información, es decir, la SDU, a esta le añade su propia cabecera (PCI) constituyendo así la PDU de la capa de presentación.</li>
      <li>Esta PDU es transferida a su vez a la capa de sesión mediante el mismo proceso, repitiéndose así para todas las capas.</li>
      <li>Al llegar al nivel físico se envían los datos que son recibidos por la capa física del receptor.</li>
      <li>Cada capa del receptor se ocupa de extraer la cabecera, que anteriormente había añadido su capa homóloga, interpretarla y entregar la PDU a la capa superior.</li>
      <li>Finalmente, llegará a la capa de aplicación, la cual entregará el mensaje al usuario.</li>
    </ol>
  </div>
  <!-- #Contenido -->
  <div>
    <h2 id="formato">Formato de los datos</h2>
    <p>Otros datos reciben una serie de nombres y formatos específicos en función de la capa en la que se encuentren, debido a como se describió anteriormente la adhesión de una serie de encabezados e información final. Los formatos de información son los que muestra el gráfico:</p>
    <img alt="PDUs.PNG" src="//upload.wikimedia.org/wikipedia/commons/f/fc/PDUs.PNG" decoding="async" width="546" height="331" data-file-width="546" data-file-height="331">
>>>>>>> b6dcf3908a23697095789e52245d845e0c25ee14
  </div>

  <!-- #Contenido -->
  <div>
<<<<<<< HEAD
    <h2 id="operaciones" class="titulo2">Operaciones sobre los datos</h2>
=======
    <h2 id="operaciones">Operaciones sobre los datos</h2>
      <p>En determinadas situaciones es necesario realizar una serie de operaciones sobre las PDU y así facilitar su transporte, debido a que son demasiado grandes o bien porque son demasiado pequeñas y estaríamos desaprovechando la capacidad del enlace.</p>
>>>>>>> b6dcf3908a23697095789e52245d845e0c25ee14
      <h3 id="bloqueo">Bloqueo y desbloqueo</h3>
        <p>El bloqueo hace corresponder varias (p)-SDU en una (p)-PDU.</p>
        <p>El desbloqueo identifica varias (p)-SDU que están contenidas en una (p)-PDU.</p>
      <h3 id="concatenacion">Concatenación y separación</h3>
        <p>La concatenación es una función-(N) que realiza el nivel-(N) y que hace corresponder varias (N)-PDU en una sola (N-1)-SDU.</p>
        <p>La separación identifica varias (N)-PDU que están contenidas en una sola (N-1)-SDU.</p>
  </div>
  <div>
    <h2 id="tarea">Tarea de la semana</h2>
    <h3>Infografía sobre el Modelo OSI</h3>
    <div style="position: relative; width: 100%; height: 0; padding-top: 250.0000%;
       padding-bottom: 48px; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;
        border-radius: 8px; will-change: transform;">
      <iframe loading="lazy" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;"
      src="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAEmZY-K0-A&#x2F;view?embed">
      </iframe>
    </div>
    <a href="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAEmZY-K0-A&#x2F;view?utm_content=DAEmZY-K0-A&amp;utm_campaign=designshare&amp;utm_medium=embeds&amp;utm_source=link" target="_blank" rel="noopener">Redes de Computadoras I Modelo OSI,</a> enlace a canva.

  </div>
  <!-- #Scroll en página -->
  <div>
    <a href="#definicion">| Definición |</a>
    <a href="#historia">Historia |</a>
    <a href="#referencia">Modelo de referencia OSI |</a>
    <a href="#arquitectura">Arquitectura de capas |</a>
    <a href="#nemotecnica">Regla nemotécnica |</a>
    <a href="#unidades">Unidades de datos |</a>
    <a href="#transmision">Transmisión de los datos |</a>
    <a href="#formato">Formato de los datos |</a>
    <a href="#operaciones">Operaciones sobre los datos |</a>
    <a href="#tarea">Tarea de la semana|</a>
  </div>

  <!-- #Avance de semanas-->
  <div>
    <p>
      <span><a href="?controller=semana3&&action=contenido">Semana 3</a></span>
      <span><a href="?controller=semana5&&action=contenido">Semana 5</a></span>
    </p>
  </div>
</div>