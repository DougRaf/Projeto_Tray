
<?php
   require "../config/conexao.php";
   $link = Conectar();

   $nome = $_POST['nome'];
   $idade = $_POST['idade'];
   $extra = $_POST['extras'];
   $estado = $_POST['estado'];
   $cidade = $_POST['cidade'];
   $status = $_POST['status'];  

   if(isset($_POST['deletar']))
   {
      if(isset($_POST['del']))
      {
         $del = $_POST['del'];
         $deleta = mysqli_query($link, " DELETE FROM `animal` WHERE idAnimal = '$del' ");

         if($deleta):
            echo "<script>
                     alert('Usuario Excluido com sucusso. :D');
                     window.location='../animal.php?pagina=0';
                  </script>";
            exit();
         else:
            echo "<script>
                     alert('Infelizmente não foi possível excluir. :C');
                     window.location='../animal.php?pagina=0';
                  </script>";
            exit();
         endif;
      }else {
         echo "<script>
                  alert(' Marque a opção p/ Atualizar ou Deletar');
                  window.location='../animal.php?pagina=0';
               </script>";
         exit();
      }
   }  

   if(isset($_POST['cadastrar'])){
      
      if (empty($nome) || empty($idade) || empty($extra) || empty($estado) || empty($cidade) || empty($status) )
      {
          echo "<script language='javascript' type='text/javascript'>
          alert('os campos estão em branco!!!');window.location
          .href='../animal.php?pagina=0';</script>";
          exit();
      } 
   
       if(isset($_FILES['arquivo']))
      {         
         $extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
         $novo_nome = $_FILES['arquivo']['name'];
         $diretorio = "../banner/"; 
         move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome); 
         $sql_code = "INSERT INTO `animal` (foto, nome, idade, info_extra, cidade, estado, status) VALUES ('$novo_nome','$nome','$idade','$extra','$cidade','$estado','$status' )";
            if($link -> query($sql_code))
               echo "<script language='javascript' type='text/javascript'>
                        alert('Usuário cadastrado com sucesso!');window.location.
                        href='../animal.php?pagina=0'
                     </script>";
            else
         $msg = "Falha ao enviar arquivo.";
      }  
   
   }

   if(isset($_POST['atualizar']))
   {     

      if (empty($nome) || empty($idade) || empty($extra) || empty($estado) || empty($cidade) || empty($status) )
      {
          echo "<script language='javascript' type='text/javascript'>
          alert('os campos estão em branco!!!');window.location
          .href='../animal.php?pagina=0';</script>";
          exit();
      } 

      $del = $_POST['del'];

       if(isset($_FILES['arquivo']))
      {         
         $extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
         $novo_nome = $_FILES['arquivo']['name'];
         $diretorio = "../banner/"; 
         move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome); 
         $sql_code = "UPDATE `animal` set foto = '$novo_nome' , nome = '$nome' , idade = '$idade', info_extra = '$extra' , cidade = '$cidade', estado = '$estado', status = '$status' WHERE idAnimal = '$del'";
            if($link -> query($sql_code))
               echo "<script language='javascript' type='text/javascript'>
                        alert('Usuário cadastrado com sucesso!');window.location.
                        href='../animal.php?pagina=0'
                     </script>";
            else
         $msg = "Falha ao enviar arquivo.";
      }  

   }

?>
   
   
  







