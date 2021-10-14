<script>
</script>
<div class="contenedor" id="hiden">    
  <h2>Iniciar Sesion</h2>
    <form action="?controller=login&&action=login" method="POST" id="quitalo">
        <div class="elemento">
            <label  style="margin-left:150px; color:black" for="usuario">Usuario</label>
            <input  type="text" id="usuario" name="usuario" required="true"/ placeholder="Ingrese Su Nombre De Usuario">
        </div>
        <div class="elemento">
            <label style="margin-left:150px; color:black" for="password">Contraseña</label>
            <input type="password" id="password" name="password" required="true"/ placeholder="Ingrese Su Clave">
        </div>

        <li class="nav-item">
      <a style="color: black; font-size:18px;text-decoration: none" class="nav-link" href="?controller=login&&action=register">Registrarse</a>
    </li>
        <div class="elemento">
              <input type="submit" value="Enviar"/>
        </div>
    </form>
</div>