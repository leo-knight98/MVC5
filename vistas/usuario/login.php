<?php session_start() ?>
<div class="card">
    <div class="card-header">
        Iniciar sesión
    </div>
    <div class="card-body">
        <p>¿No tienes una cuenta?</p><a href="?controlador=usuario&accion=registro">Registrate</a>
        <form method="POST">
            <div class="mb-3">
              <label for="usuario" class="form-label">Nombre de usuario:</label>
              <input required type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre de usuario" aria-describedby="helpId">
            </div>
            <div class="mb-3">
              <label for="pass" class="form-label">Contraseña:</label>
              <input required type="password" name="passw" id="passw" class="form-control" placeholder="" aria-describedby="helpId">
              <small id="helpId" class="text-muted">La contraseña debe tener más de 8 caracteres y contener al menos un número</small>
            </div>
            <button type="submit" class="btn btn-success">Enviar</button>
        </form>
    </div>
</div>