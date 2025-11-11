<div class="col-6 offset-3">
    <h1>Modificar Registro de Bitácora</h1>
    
    <form action="<?= base_url('/bitacora/actualizar') ?>" method="post">
        
        <input type="hidden" name="id_bitacora" value="<?= $bitacora['id_bitacora'] ?>">
        
        <div class="mb-3">
            <label class="form-label">ID Empleado:</label>
            <input type="number" name="id_empleado" class="form-control" value="<?= $bitacora['id_empleado'] ?>" required>
        </div>
        
        <div class="mb-3">
            <label class="form-label">Acción Realizada:</label>
            <textarea name="accion" class="form-control" rows="3" required><?= $bitacora['accion'] ?></textarea>
        </div>
        
        <button type="submit" class="btn btn-warning mt-3">Actualizar Registro</button>
    </form>
</div>