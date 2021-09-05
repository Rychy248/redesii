<div class="container">
  <h2>Registro de Usuario</h2>
  <form action="?controller=login&&action=save" method="POST">
    <div class="form-group">
      <label for="user">Usuario:</label>
      <input type="text" class="form-control" id="user" placeholder="Ingrese su Nombre" name="user" required="True">
    </div>

    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" name="password" required="True">
    </div>
    <div class="check-box">
      <label>Activo <input type="checkbox" name="estado" disabled="True" readonly="True" checked>  </label>      
    </div>
    <button type="submit" class="btn btn-primary">Registrarse</button>
  </form>
</div>