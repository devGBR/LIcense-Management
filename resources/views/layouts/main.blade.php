<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src = "js/app.js"></script>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/adc.css">
</head>
<body>
    
    <nav class="navbar bg-green navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand"><img class = "cimg" src = "img/ctmac.png" ></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse position" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/#cardapio">Alterar dados</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/peçaonline">Conta</a>
      </li>
    
    </ul>
  </div>
</nav>
            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </body>
</html>