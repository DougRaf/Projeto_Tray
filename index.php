<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Encontre seu animal">
    <meta name="author" content="Douglas Rafael Esquinelato">
    <link rel="stylesheet" href="style/style.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" crossorigin="anonymous">
    
    <title>Encontre seu Pet</title>
  </head> 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" crossorigin="anonymous"></script> 
<body>
    <nav class="navbar navbar-expand-lg navbar-danger bg-danger">
        <a class="navbar-brand" href="index.php">
            <img src="img/tele.png" width="250" id="tele"  class="d-inline-block align-top" alt=""> 
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" id="color-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <form class="form-inline my-2 my-lg-0" action="controles/cadAnimal.php" method="post">
                    <input class="form-control mr-sm-2"  placeholder="Digite seu E-mail" >
                    <input class="form-control mr-sm-2"  placeholder="Digite sua Senha" >                
                    <button type="submit" class="nav-item btn btn-outline-light">Login</button>&nbsp
                    <a class="nav-item btn btn-outline-light" href="cadastro.php">Cadastre-se</a>
                </form> 
            </div>
        </div>
    </nav>
</body>
</html>  