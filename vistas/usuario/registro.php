<div class="card">
    <div class="card-header">
        Crear usuario
    </div>
    <div class="card-body">
        <form method="post">
            <div class="mb-3">
              <label for="usuario" class="form-label">Nombre de usuario:</label>
              <input type="text" name="nombre" id="usuario" class="form-control" placeholder="Nombre de usuario" aria-describedby="helpId">
            </div>
            <div class="mb-3">
              <label for="pass" class="form-label">Contraseña:</label>
              <input type="password" name="pass" id="pass" class="form-control" placeholder="" aria-describedby="helpId">
              <small id="helpId" class="text-muted">La contraseña debe tener más de 8 caracteres y contener al menos un número</small>
            </div>
            <div class="mb-3">
              <label for="passcon" class="form-label">Confirma la contraseña:</label>
              <input type="password" name="passcon" id="passcon" class="form-control" placeholder="" aria-describedby="helpId">
              <small id="helpId" class="text-muted">Debe coincidir con la anterior</small>
            </div>
            <div class="mb-3">
              <label for="pais" class="form-label">País:</label>
              <input type="text" name="pais" id="pais" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Correo electrónico</label>
              <input type="email" name="correo" id="correo" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <button type="submit" class="btn btn-success">Enviar</button>
        </form>
    </div>
</div>