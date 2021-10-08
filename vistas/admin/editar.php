<div class="card">
    <div class="card-header">
        Editar usuario
    </div>
    <div class="card-body">
        <form method="post">
            <div class="mb-3">
              <label for="" class="form-label">ID:</label>
              <input readonly type="text" name="id" id="id" class="form-control" value="<?php echo $_GET['id'] ?>" placeholder="" aria-describedby="helpId">
            </div>

            <div class="mb-3">
              <label for="usuario" class="form-label">Nombre de usuario:</label>
              <input type="text" name="nombre" id="usuario" class="form-control" value="<?php echo $usuario['nombre'] ?>" aria-describedby="helpId">
            </div>

            <div class="mb-3">
              <label for="rol" class="form-label">Rol del usuario</label>
              <select name="rol" id="rol" aria-describedby="helpId">
                <option value="">----</option>
                <option value="cliente">Cliente</option>
                <option value="empleado">Empleado</option>
                <option value="admin">Admin</option>
              </select>
            </div>
            
            <div class="mb-3">
              <label for="pais" class="form-label">País:</label>
              <input type="text" name="pais" id="pais" class="form-control" value="<?php echo $usuario['pais'] ?>" aria-describedby="helpId">
            </div>

            <div class="mb-3">
              <label for="" class="form-label">Correo electrónico:</label>
              <input type="email" name="correo" id="correo" class="form-control" value="<?php echo $usuario['correo'] ?>" aria-describedby="helpId">
            </div>

            <button type="submit" class="btn btn-success">Enviar</button>
            <a name="" id="" class="btn btn-primary" href="?controlador=admin&accion=usuarios" role="button">Cancelar</a>
        </form>
    </div>
</div>