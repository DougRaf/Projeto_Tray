
<?php

require "../config/conexao.php";
$link = Conectar();


$nome = $_POST['nome'];
$idade = $_POST['idade'];
$extra = $_POST['extras'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$status = $_POST['status'];

 if(isset($_FILES['arquivo'])){
    $extensao = strtolower(substr($_FILES['arquivo']['name'], -4)); //pega a extensao do arquivo
    $novo_nome = $_FILES['arquivo']['name']; //define o nome do arquivo
    $diretorio = "../banner/"; //define o diretorio para onde enviaremos o arquivo
    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
    $sql_code = "INSERT INTO `animal` (foto, nome, idade, info_extra, cidade, estado, status) VALUES ('$novo_nome','$nome','$idade','$extra','$cidade','$estado','$status' )";
    if($link -> query($sql_code))
       echo "<script language='javascript' type='text/javascript'>
          alert('Usuário cadastrado com sucesso!');window.location.
          href='index.php'</script>";

    else
      $msg = "Falha ao enviar arquivo.";
  }
?>




