<div class="col-6 offset-3">
    <h1>Agregar Nuevo Proveedor</h1>
    
    <form action="<?= base_url('/proveedores/guardar') ?>" method="post">
        
        <div class="mb-3">
            <label for="nombre_empresa" class="form-label">Nombre de la Empresa:</label>
            <input type="text" name="nombre_empresa" class="form-control" required>
        </div>
        
        <div class="mb-3">
            <label for="contacto_nombre" class="form-label">Nombre del Contacto:</label>
            <input type="text" name="contacto_nombre" class="form-control">
        </div>

        <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono:</label>
            <input type="text" name="telefono" class="form-control">
        </div>

        <div class="mb-3">
            <label for="correo" class="form-label">Correo Electrónico:</label>
            <input type="email" name="correo" class="form-control">
        </div>

        <div class="mb-3">
            <label for="direccion" class="form-label">Dirección:</label>
            <textarea name="direccion" class="form-control" rows="3"></textarea>
        </div>
        
        <button type="submit" class="btn btn-success mt-3">
            Guardar Proveedor
        </button>
    </form>
</div>