<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/login.css">

</head>

<body>
<section>
<div class="container h-100">
      <div class="row justify-content-center h-100">
        <div class="login-section-wrapper">
          <div class="brand-wrapper">
            <a class="navbar-brand" href="index.php">LOGIN</a>
          </div>
          <div class="login-wrapper my-5">
            <h1 class="login-title">Log in</h1>
            <form action="php/validate.php" method="POST">
              <div class="form-group">
                <label for="email" >Email</label>
                <input type="email" required name="email" id="email" class="form-control" placeholder="email@email.com">
              </div>
              <div class="form-group mb-4">
                <label for="password" >Contraseña</label>
                <input type="password" required name="password" id="password" class="form-control" placeholder="ingresa tu contraseña">
              </div>
              <button name="boton_login" id="login" class="btn btn-block login-btn" type="submit">Login</button>
            </form>
            
            
            <p class="login-wrapper-footer-text">¿No Tiene Una Cuenta? <a href="reg/index.php" class="text-reset">¡Registrate
                aqui!</a></p>
          </div>
        </div>
      </div>
    </div>
</section>
   

  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>