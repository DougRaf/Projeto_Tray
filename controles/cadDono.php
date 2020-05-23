<?php
    require "../config/conexao.php";
    $link = Conectar();
    
    $nome= $_POST['nome'];
    $email= $_POST['email'];
    $telefone = $_POST['telefone'];
    $confirma = $_POST['confirma'];
    $senha = $_POST['senha'];

    if($nome == "" || $email == "" || $telefone == "" || $confirma == "" || $senha == ""){
        echo "<script language='javascript' type='text/javascript'>
        alert('verifique se todos os campos estão preenchidos corretamente!!!');window.location.
        href='../cadastro.php'</script>";
        exit;
    }

    if($confirma != $senha){
        echo "<script language='javascript' type='text/javascript'>
        alert('as senhas não são identicas');window.location.
        href='../cadastro.php'</script>";
        exit;
    }
    
    $result_usuario = "INSERT INTO dono (nome, email, telefone, senha) VALUES ('$nome','$email','$telefone','$senha')";
    $resultado_usuario = mysqli_query($link, $result_usuario);


    if($resultado_usuario){
        echo "<script language='javascript' type='text/javascript'>
        alert('Usuário cadastrado com sucesso!');window.location.
        href='../index.php'</script>";

    }else{
        echo "<script language='javascript' type='text/javascript'>
        alert('Não foi possível cadastrar esse usuário');window.location
        .href='../index.php'</script>";   
    }
?>
