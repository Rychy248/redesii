<div class="contenedor">
  <style>
  html{
  height: 100%;
}

body {
  margin: 0;
  padding: 0;
  /* background: linear-gradient(#9a35d4, #4e43ec); */
}

h1, h2 {
  text-align: center;
}

p{
  text-align: center;
}


body h1, body h2, body p, body h3{
  /* color:#93f3f7;
   */
   color: black;
}
.contenedor {
  margin: 50px auto;
  width: 400px;
  padding: 30px;
  /* background: rgba(0,0,0,.5); */
  border-radius: 10px;
}

.contenedor h2{
  margin: 0px 0px 30px;
  padding: 0;
  font-size: 30px;
  text-align: center;
}
.contenedor .elemento label{
  color: black;
}
.contenedor .elemento input {
  width: 100%;
  padding: 10px 0px;
  color: black;
  background:transparent;
  border: none;
  border-bottom: 1px solid black;
  margin-bottom: 30px;
}

.contenedor .elemento input[type="submit"]{
  background-color: #f72585;
  border: none;
  letter-spacing: 10px;
  text-transform: uppercase;
  cursor: pointer;
  padding: 15px;
  margin-top: 30px;
}

.border, li, a {
  list-style: none;

}

.titulo2 {
  /* color: #ecf0f1; */
  color: red;
  background-color: black;
  width: 12%;
  display: contents;
  text-align: center;
  font-size: xx-large;
  margin-left: 550px;

}

.titulo3 {
  color: red;
  background-color: #300650;
  padding: 12px 15px;
  border-radius: 5px;
  outline: none;
  margin: 0;
  font-weight: bold;
}



.btnt {
  margin-top: 10px;
  padding: 50px 30px;
  border-radius:5px;
  font-weight: bold;
  text-decoration: uppercase;
  font-size: 12px;
  border:none;
}


.p1 h2 {
  h2::before {  
    transform: scaleX(0);
    transform-origin: bottom right;
  }
  
  h2:hover::before {
    transform: scaleX(1);
    transform-origin: bottom left;
  }
  
  h2::before {
    content: " ";
    display: block;
    position: absolute;
    top: 0; right: 0; bottom: 0; left: 0;
    inset: 0 0 0 0;
    background: hsl(200 100% 80%);
    z-index: -1;
    transition: transform .3s ease;
  }
  
  h2 {
    position: relative;
    font-size: 5rem;
  }
  
  html {
    block-size: 100%;
    inline-size: 100%;
  }
  
  body {
    min-block-size: 100%;
    min-inline-size: 100%;
    margin: 0;
    box-sizing: border-box;
    display: grid;
    place-content: center;
    font-family: system-ui, sans-serif;
  }
  
  @media (orientation: landscape) {
    body {
      grid-auto-flow: column;
    }
  }
  
}

  </style>
  <h2>Registro de Usuario</h2>
  <form action="?controller=login&&action=save" method="POST">
    <div class="elemento">
      <label for="user" style="margin-left: 150px; color:black">Usuario:</label>
      <input type="text" class="form-control" id="user" placeholder="Ingrese su Nombre" name="user" required="True">
    </div>

    <div class="elemento">
      <label style="margin-left: 150px; color:black" for="password">Contrase??a</label>
      <input style="color:black" type="password" class="form-control" id="password" name="password" required="True" placeholder="Ingrese Su clave">
    </div>
    <div class="check-box" style="display: none;">
      <label>Activo <input type="checkbox" name="estado" disabled="True" readonly="True" checked>  </label>      
    </div>
    <a style="color: black; font-size:18px; text-decoration: none" 
    class="nav-link elemento" href="?controller=login&bienvenido=register"
    onclick="inicio.style.display='block'">Iniciar Sesion</a>

    <div class="elemento">
              <input type="submit" value="Registrarse"/>
        </div>

  </form>
</div>