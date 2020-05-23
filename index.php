<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Encontre seu animal">
    <meta name="author" content="Douglas Rafael Esquinelato">
    <link rel="stylesheet" href="style/style.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
                <form class="form-inline my-2 my-lg-0" action="controles/cadUser.php" method="post">
                    <input class="form-control mr-sm-2" name="email"  placeholder="Digite seu E-mail" >
                    <input class="form-control mr-sm-2" name="senha"  placeholder="Digite sua Senha" >                
                    <input type="submit" class="nav-item btn btn-outline-light" value="Login" name="entrar">&nbsp
                    <a class="nav-item btn btn-outline-light" href="cadastro.php">Cadastre-se</a>
                </form> 
            </div>
        </div>
    </nav>

    <div class="input-group mb-3">
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile02">
    <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
  </div>
  <div class="input-group-append">
    <span class="input-group-text" id="inputGroupFileAddon02">Upload</span>
  </div>
</div>



    <h1>Upload de Arquivos</h1>
<?php if(isset($msg) && $msg != false) echo "<p> $msg </p>"; ?>
<form action="controles/cadAnimal.php" method="POST" enctype="multipart/form-data">
<div class="custom-file">
    <input type="file" class="custom-file-input" name="arquivo" id="inputGroupFile02">
    <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Entre com a imagem</label>
</div>
   <input type="submit" value="Salvar">
</form>

 





</body>
</html>  