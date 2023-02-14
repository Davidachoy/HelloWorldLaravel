<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Crear Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">

    <style>
        html,
body {
  height: 100%;
}

body {
  display: flex;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.form-signin {
  max-width: 330px;
  padding: 15px;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>


    <!-- Custom styles for this template -->
    <link href="/css/createAccount.css" rel="stylesheet">
  </head>
  <body class="text-center">

<main class="form-signin w-100 m-auto">
  <form method="POST" action="{{route('createUser')}}" >
  @csrf
    <h1 class="h3 mb-3 fw-normal">Crear Cuenta</h1>
    <h1>
      <?php   
          // Connecting to the Database
          $servername = "localhost";
          $username = "root";
          $password = "";
          $database = "laravellhelloworld";
  
          // Create a connection
          $conn = mysqli_connect($servername, $username, $password, $database);
          // Die if connection was not successful
          if (!$conn){
              die("Sorry we failed to connect: ". mysqli_connect_error());
          }
          else {
            $sql = "INSERT INTO `users`(`Username`, `Password`) VALUES ('Daniel', '1234')";
            $result = mysqli_query($conn, $sql);

            if($result){
              $sql = "SELECT `Username`, `Password` FROM `users`"
              $result = $conn->query($sql);
            }
          }
    ?>  
    </h1>
    <div class="form-floating">
      <input type="text" class="form-control  @error('username') is-invalid @enderror" 
      name="username"
      id="floatingInput" placeholder="Usuario">
      <label for="floatingInput">Usuario</label>
     
    </div>
    <div class="form-floating">
      <input type="password"
      name="password"
      class="form-control" id="floatingPassword" placeholder="Contraseña">
      <label for="floatingPassword">Contraseña</label>
    </div>

    <button
      href="html/createAccount.html"
      class=" w-100 btn btn-lg btn-primary" 
      type="submit">Crear cuenta
      </button>

<a href="/">

    <button class="mt-2 w-100 btn btn-lg btn-primary" type="button">Atras</button>
</a>

  </form>
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</main>


  </body>
</html>