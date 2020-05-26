<?php
    require "config/conexao.php";
    $link = Conectar();
    $itens_por_pagina = 3;
    $pagina = intval($_GET['pagina']);
    $sql = mysqli_query($link, "select * from `animal` LIMIT $itens_por_pagina OFFSET ".($pagina * $itens_por_pagina));  
    $num = $sql->num_rows;
    $num_total = $link->query("SELECT * FROM animal")->num_rows;
    $num_paginas = ceil($num_total/$itens_por_pagina);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=960">
    <meta name="description" content="Encontre seu animal">
    <meta name="author" content="Douglas Rafael Esquinelato">  
    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="style/style.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" crossorigin="anonymous">
    <title>Encontre seu Pet</title>
  </head> 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" crossorigin="anonymous"></script> 
<body>
    <nav class="navbar navbar-expand-lg navbar-danger bg-danger">
      <div class="navbar-nav">
        <form class="form-inline my-2 my-lg-0" action="controles/cadUser.php" method="post">
          <input class="form-control mr-sm-2" name="email"  placeholder="Digite seu E-mail" >
          <input type="password" class="form-control mr-sm-2" name="senha" maxlength="8" placeholder="Digite sua Senha" >                
          <input type="submit" class="nav-item btn btn-outline-light" value="Login" name="entrar">&nbsp
          <a class="nav-item btn btn-outline-light" href="cadastro.php">Cadastre-se</a>
        </form> 
      </div>
    </nav> 
  <div class="container">
  <br>
  <center>  
  <h2> Ajude-nos a encontrar nossos donos !!!! </h2>
  <br>
    <table>
      <thead></thead>
      <tbody>     
        <?php while($row = mysqli_fetch_assoc($sql)){?>
        <tr>
          <form method="post" action="encontrei.php" enctype="multipart/form-data">
            <td class="parametros"><img src="banner/<?php echo $row['foto']?>" style="width: 200px;" ></td>           
            <td class="parametros">
              <p class="parametro-banco">NOME: <?php echo $row['nome']?></p>
              <p class="parametro-banco">ESTADO: <?php echo $row['estado']?></p>
              <p class="parametro-banco">CIDADE: <?php echo $row['cidade']?></p>
              <p class="parametro-banco">INFORMAÇÕES EXTRAS: <?php echo $row['info_extra']?></p>
              <p class="parametro-banco">SITUAÇÂO:<?php echo $row['status']?></p>
            </td>
            <td class="parametros">            
              <h6> Caso tenha alguma informação click no botão abaixo!!!</h6>             
              <input type="text" class="form-control" name="id" style="display:none" value="<?php echo $row['idAnimal']?>" placeholder="Digite a idade">
              <input type="text" class="form-control" placeholder="Digite seu nome"  name="nome">  
              <input type="text" class="form-control" placeholder="Digite seu Telefone"  name="telefone">  
              <input type="submit" class="btn btn-success btn-sm  btn-block" value="Encontrei!!!">  
            </td>
          </form>
        </tr>
      <?php  } ?>  
    </tbody>
    </table>
    <br>
        <nav aria-label="Page navigation example">
          <ul class="pagination  justify-content-center ">
            <li class="page-item">
              <a class="page-link" href="index.php?pagina=0"  aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
            <?php 
              for($i=0;$i<$num_paginas;$i++){
              $estilo = "";
              if($pagina == $i)
              $estilo = "class=\"active\"";
            ?>
            <li class="page-item"<?=$estilo?>><a class="page-link" href="index.php?pagina=<?=$i?>"><?php echo $i+1; ?></a>
            </li>
            <?php } ?> 
            <li class="page-item">
              <a class="page-link" href="index.php?pagina=<?php echo $num_paginas-1; ?>" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
  <footer>
    <div class="navbar-danger bg-danger" style="height:30px;">   
        <p style="color:white; text-align: center; padding-top: 4px;">Desenvolvimento Douglas Esquinelato</P>
    </div>
  </footer>
</body>
</html>  