<?php
    require "config/conexao.php";
    $link = Conectar();

    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $id = $_POST['id'];


    if (empty($_POST['nome']) || empty($_POST['telefone']))
    {
        echo "<script language='javascript' type='text/javascript'>
        alert('os campos estão em branco!!!');window.location
        .href='index.php';</script>";
        exit();
    }

    $sql_code = "UPDATE `animal` set `nome_encontrei` = '$nome' , `telefone_encontrei` = '$telefone' , `status` = 'Comunicado' WHERE `idAnimal` = '$id'";
    if($link -> query($sql_code)){
        echo "<script language='javascript' type='text/javascript'>
                alert('Dados enviados com sucesso!!!');window.location.
                href='index.php'
              </script>";
    }else{ 
        echo "<script language='javascript' type='text/javascript'>
                alert('Desculpe, falha no envio!!!');window.location.
                href='index.php'
              </script>";
    }

?>
