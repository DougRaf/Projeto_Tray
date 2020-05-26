<?php
    require "config/conexao.php";
    $link = Conectar();

    session_start();
    if(!isset ($_SESSION['emailSession']) and !isset ($_SESSION['senhaSession'])){
        header("Location: index.php"); 
    }


    $itens_por_pagina = 10;
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
    <meta name="viewport" content="width=1260">
    <meta name="description" content="Encontre seu animal">
    <meta name="author" content="Douglas Rafael Esquinelato">
    <link rel="stylesheet" href="style/style.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" crossorigin="anonymous">
    <title>Encontre seu Pet</title>
  </head> 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" crossorigin="anonymous"></script> 
<body>
    <nav class="navbar navbar-expand-lg navbar-danger bg-danger">          
        <a class="nav-item btn btn-outline-light" href="controles/sair.php">Sair</a>
    </nav>  
    <div class="container">
        <?php if(isset($msg) && $msg != false) echo "<p> $msg </p>"; ?>
        <form method="post" action="controles/cadAnimal.php" enctype="multipart/form-data"> 
            <br>
                <div class="alert alert-warning" role="alert">
                    <h6> Adiçione as informações sobre seu Pet!!!</h6>
                </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                <label>Habilite P/ Atualizar ou Deletar</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                            
                                <input type="checkbox" id="deletar" onclick="habilitarDel()" >
                            </div>
                        </div>
                        <input type="text" class="form-control" id="del" name="del" placeholder=" Entre com o ID"  maxlength="150" disabled>
                    </div>
                </div>                   
             
                <div class="form-group col-md-3">
                    <label>Foto</label>
                    <div class="input-group mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="arquivo" id="inputGroupFile02">
                            <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Entre com a imagem</label>
                        </div>
                    </div>
                </div>
                <div class="form-group col-md-3">
                    <label>Nome</label>
                    <input type="text" class="form-control" name="nome" placeholder="Digite o nome">
                </div>
                <div class="form-group col-md-3">
                    <label>Idade</label>
                    <input type="text" class="form-control" name="idade" placeholder="Digite a idade">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label>Informações Extras</label>
                    <input type="text" class="form-control" name="extras" placeholder="Digite aqui">
                </div>
                <div class="form-group col-md-3">
                    <label>Estado</label>
                    <input type="text" class="form-control" name="estado" placeholder="Digite seu estado">
                </div>
                <div class="form-group col-md-3">
                    <label>Cidade</label>
                    <input type="text" class="form-control" name="cidade" placeholder="Digite sua cidade">
                </div>
                <div class="form-group col-md-3">
                    <label>Status</label>
                    <select class="form-control" name="status" >
                        <option>Entre com status</option>
                        <option value="Perdido">Perdido</option>
                        <option value="Comunicado">Comunicado</option>
                        <option value="Encontrado">Encontrado</option>
                    </select>
                </div>
            </div>
            <div class="btn-all">
                <div class="form-row">
                    <div class="col-sm-3">
                        <input type="submit" class="btn btn-success btn-sm  btn-block" value="Enviar Cadastro" name="cadastrar">           
                    </div>
                    <div class="col-sm-3">
                        <input type="submit" class="btn btn-info btn-sm btn-block" value="Atualizar Cadastro" name="atualizar">
                    </div>
                    <div class="col-sm-3">
                        <input type="submit" class="btn btn-danger btn-sm btn-block" value="Deletar Cadastro" name="deletar">
                    </div>
                </div>
            </div>
        </form>
        <br>
        <table>
      <thead>
        <th class="background-ID">ID</th>
        <th class="background">NOME</th>       
        <th class="background">ESTADO</th>
        <th class="background">CIDADE</th>
        <th class="background">STATUS</th>
        <th class="background">QUEM ENCONTROU</th>
        <th class="background">Q.E/ CONTATO</th>
      </thead>
      <tbody>     
        <?php while($row = mysqli_fetch_assoc($sql)){?>
          <tr>
            <td class="parametros-ID"><?php echo $row['idAnimal']?></td>  
            <td class="parametros"><?php echo $row['nome']?></td>           
            <td class="parametros"><?php echo $row['estado']?></td>
            <td class="parametros"><?php echo $row['cidade']?></td>
            <td class="parametros"><?php echo $row['status']?></td>
            <td class="parametros"><?php echo $row['nome_encontrei']?></td>
            <td class="parametros"><?php echo $row['telefone_encontrei']?></td>
          </tr>
        <?php  } ?>  
      </tbody>
    </table>
    <br>

    <nav aria-label="Page navigation example">
          <ul class="pagination">
            <li class="page-item">
              <a class="page-link" href="animal.php?pagina=0"  aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
            <?php 
              for($i=0;$i<$num_paginas;$i++){
              $estilo = "";
              if($pagina == $i)
              $estilo = "class=\"active\"";
            ?>
            <li class="page-item"<?=$estilo?>><a class="page-link" href="animal.php?pagina=<?=$i?>"><?php echo $i+1; ?></a>
            </li>
            <?php } ?> 
            <li class="page-item">
              <a class="page-link" href="animal.php?pagina=<?php echo $num_paginas-1; ?>" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          </ul>
        </nav>
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    
     <script type="text/javascript">
        function habilitarDel(){
        if(document.getElementById('deletar').checked){
            document.getElementById('del').disabled = false;
        } else {
            document.getElementById('del').disabled = true;
        }
    }
    </script> 
    </div>
</body>
</html> 