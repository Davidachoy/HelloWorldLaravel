<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <title>Laravel</title>

        <!-- Fonts -->
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
  background-color: blue;
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
}

body {
  display: flex;
  align-items: center;
  background-color: #1B5359;
  justify-content: space-between
}

.btn-primary, .btn-primary:hover {
    background-color: #77A6A1 !important;
    border-color: #7795c1 !important;
}

.h3 {
  color: #F2AE30  !important;
}
.h1 {
  margin-bottom: 0 !important;
}

.form-signin input[type="password"] {
  margin-top: 10px;
  margin-bottom: 15px;
}
.secondColor{
  display: flex;
  padding-right: 10px;
  background-color: #F29D35;
  color: #F29D35;
  width: '100%';
  flex: 1;
  height: -webkit-fill-available;
  justify-content: flex-end !important;
  align-items: flex-end !important;
}

#names{
  color: black;
  font: Icon
}

.form-signin{
  flex: 1
}
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

        <style>
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


        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="text-center">
      <main class="form-signin w-100 m-auto">
        <form method="POST" action="{{route('logInUser')}}" >
          @csrf
          <h1 class="h3 mb-3 fw-normal">Iniciar sesi??n</h1>

          <div class="form-floating">
            <input 
            name="username"
            type="text" class="form-control" id="floatingInput" placeholder="Usuario">
            <label for="floatingInput">Usuario</label>

          </div>
          <div class="form-floating">
            <input
            name="password"
            type="password" class="form-control" id="floatingPassword" placeholder="Contrase??a">
            <label for="floatingPassword">Contrase??a</label>
          </div>

          <button class="w-100 btn btn-lg btn-primary" type="submit">Ingresar</button>
          <a href="{{ url('/registro') }}" >
          <button class="mt-2 w-100 btn btn-lg btn-primary"  type="button">Crear cuenta</button>
        </a>
        </form>
        
      </main>
      <h1 class="secondColor">
        <pre id='names'>
          David Achoy Yakimova
          Daniel Brenes Reyes
          Andy Cruz Elizondo
          Jose Sequeira Chac??n
          Jefry Cuendiz Cuendiz 
        </pre>
      </h1>
    
    </body>
    </body>
    
</html>
