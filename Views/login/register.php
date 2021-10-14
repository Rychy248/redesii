<div class="contenedor">
  <h2>Registro de Usuario</h2>
  <form action="?controller=login&&action=save" method="POST">
    <div class="elemento">
      <label for="user" style="margin-left: 150px; color:black">Usuario:</label>
      <input type="text" class="form-control" id="user" placeholder="Ingrese su Nombre" name="user" required="True">
    </div>

    <div class="elemento">
      <label style="margin-left: 150px; color:black" for="password">Contraseña</label>
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