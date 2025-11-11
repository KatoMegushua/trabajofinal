<div class="col-8 offset-2">
    <h1>Modificar Proveedor: <?= $proveedor['nombre_empresa'] ?></h1>
    
    <form action="<?= base_url('/proveedores/actualizar') ?>" method="post">
        
        <input type="hidden" name="id_proveedor" value="<?= $proveedor['id_proveedor'] ?>">
        
        <div class="mb-3">
            <label for="nombre_empresa" class="form-label">Nombre de la Empresa:</label>
            <input type="text" name="nombre_empresa" class="form-control" value="<?= $proveedor['nombre_empresa'] ?>" required>
        </div>
        
        <div class="mb-3">
            <label for="contacto_nombre" class="form-label">Nombre del Contacto:</label>
            <input type="text" name="contacto_nombre" class="form-control" value="<?= $proveedor['contacto_nombre'] ?>">
        </div>

        <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono:</label>
            <input type="text" name="telefono" class="form-control" value="<?= $proveedor['telefono'] ?>">
        </div>

        <div class="mb-3">
            <label for="correo" class="form-label">Correo Electrónico:</label>
            <input type="email" name="correo" class="form-control" value="<?= $proveedor['correo'] ?>">
        </div>

        <div class="mb-3">
            <label for="direccion" class="form-label">Dirección:</label>
            <textarea name="direccion" class="form-control" rows="3"><?= $proveedor['direccion'] ?></textarea>
        </div>
        
        <button type="submit" class="btn btn-warning mt-3">
            Actualizar Proveedor
        </button>
    </form>
</div>