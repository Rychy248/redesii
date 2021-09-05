
<div class="contenedor">    
  <h2>Login</h2>
    <form action="?controller=login&&action=login" method="POST">
        <div class="elemento">
            <label for="usuario">Usuario</label>
            <input type="text" id="usuario" name="usuario" required="true"/>
        </div>
        <div class="elemento">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required="true"/>
        </div>
        <div class="elemento">
              <input type="submit" value="Enviar"/>
        </div>
    </form>
</div>