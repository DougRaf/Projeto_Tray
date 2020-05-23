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
        <a class="nav-item btn btn-outline-light" href="index.php">Sair</a>
    </nav>  
    <div class="container">
        <form>
            <br>
                <div class="alert alert-warning" role="alert">
                    <h6> Adiçione as informações sobre seu Pet!!!</h6>
                </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>Foto</label>
                    <div class="input-group mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile02">
                            <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Entre com a imagem</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text" id="inputGroupFileAddon02">Upload</span>
                         </div>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label>Nome</label>
                    <input type="text" class="form-control" placeholder="Digite seu nome">
                </div>
                <div class="form-group col-md-4">
                    <label>Idade</label>
                    <input type="text" class="form-control" placeholder="Digite seu nome">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label>Informações Extras</label>
                    <input type="password" class="form-control" placeholder="Digite sua senha">
                </div>
                <div class="form-group col-md-3">
                    <label>Estado</label>
                    <input type="password" class="form-control" placeholder="Faça a confirmação">
                </div>
                <div class="form-group col-md-3">
                    <label>Cidade</label>
                    <input type="text" class="form-control" placeholder="Digite seu telefone">
                </div>
                <div class="form-group col-md-3">
                    <label>Cidade</label>
                    <input type="text" class="form-control" placeholder="Digite seu telefone">
                </div>
            </div>
            <button type="submit" class="btn btn-success">Enviar cadastro</button>
        </form>
    </div>
</body>
</html> 