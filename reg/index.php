<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Registro Bonaventura</title>
  <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/login.css">
  <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="../js/valida.js"></script>
  
</head>
<body>
  <main>
  <div class="container h-100">
      <div class="row justify-content-center h-100">
        <div class="login-section-wrapper">
          <div class="brand-wrapper">
            <a class="navbar-brand" href="index.php">REGISTRO</a>
          </div>
          <div class="login-wrapper my-auto">
            <h1 class="login-title">Registrar</h1>
            <form action="../php/registrar.php" name="form" method="POST">
              <div class="form-group">
                <div class="form-group mb-4">
                  <label for="password">Nombre  de Usuario</label>
                  <input type="text" required name="Nombre" id="nombre" class="form-control" placeholder="Nombre de Usuario">
                </div>
                <label for="email">Email</label>
                <input type="email" required name="email" id="email" class="form-control" placeholder="email@email.com">
              </div>
              <div class="form-group mb-4">
                <label for="password">Contraseña</label>
                <input type="password" required name="password" id="password" class="form-control" placeholder="Contraseña">
              </div>
              <div class="form-group mb-4">
                <label for="password"> Repite la Contraseña</label>
                <input type="password" required name="password2" id="password2" class="form-control" placeholder="Confirmacion">
                <span id="error2"></span>
              </div>
              <input type="hidden" name="rol" class="form-control" value="2">
              <button name="boton_register" id="registrar" class="btn btn-block login-btn" type="submit">Registrarte</button>
            </form>
            <p class="login-wrapper-footer-text">¿Ya Tiene Cuenta? <a href="../index.php" class="text-reset">¡Presione aqui!</a></p>
          </div>
          
        </div>
      
      </div>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
