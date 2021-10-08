<div class="card">
    <div class="card-header">
        Creación de categorías
    </div>
    <div class="card-body">
        <form method="POST">
            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre de la categoría:</label>
              <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" aria-describedby="helpId">
            </div>
            
            <button type="submit" class="btn btn-success">Enviar</button>
            <a name="cancelar" id="cancelar" class="btn btn-primary" href="?controlador=empleados&accion=categorias" role="button">Cancelar</a>
        </form>
    </div>
</div>