<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body class="d-flex flex-column align-items-center justify-content-center vh-100 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-4 offset-4">
                <h1>Iniciar sesión</h1>
                <form action="<?=base_url('iniciar_sesion')?>" method="post">
                    <label for="txt_usuario" class="form-label">Usuario</label>
                    <input type="text" name="txt_usuario" id="txt_usuario" class="form-control">
                    <label for="txt_contra" class="form-label">Contraseña</label>
                    <input type="password" name="txt_contra" id="txt_contra" class="form-control">
                    
                    <button type="submit" class="form-control btn btn-primary mt-2">
                        Iniciar sesión
                    </button>

                    <button type="button" class="form-control btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      Creditos
                    </button>
                </form>
            </div>
        </div>
    </div>
    

        <!-- Button trigger modal -->
    

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Información</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <section class="mb-5">
                <div class="row row-cols-1 row-cols-md-12 g-4">
                    <div class="col">
                        <div class="card h-100 border-primary">
                            <div class="card-body">
                                <h5 class="card-title">Datos del estudiante</h5>
                                <p class="card-text"><strong>Nombre:</strong> Joshua Isaac Yoc Chajón</p>
                                <p class="card-text"><strong>Carnet:</strong> 202303534</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 border-primary">
                            <div class="card-body">
                                <h5 class="card-title">Logos:</h5>
                                <img src="https://radd4.virtual.usac.edu.gt/efpem/pluginfile.php/1/theme_lambda/logo/1757005937/Banner%20Campus%202.png"
                                    alt="logos" class="img-fluid mx-auto d-block">
                            </div>
                        </div>
                    </div>
                </div>
              </section>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>

</html>