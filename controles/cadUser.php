<?php

    require "../config/conexao.php";
    $link = Conectar();

    $email = $_POST['email'];
    $entrar = $_POST['entrar'];
    $senha = $_POST['senha'];

    if (empty($_POST['email']) || empty($_POST['senha']))
    {
        echo "<script language='javascript' type='text/javascript'>
        alert('os campos estão vazios!!!');window.location
        .href='../index.php';</script>";
        exit();
    }

    if (isset($entrar))
    {
        $verifica = mysqli_query($link, "SELECT * FROM `dono` WHERE email = 
        '$email' AND senha = '$senha'") or die("erro ao selecionar"); 
      
 
        if (mysqli_num_rows($verifica)==1){

            session_start();
            $_SESSION['emailSession']= $email;
            $_SESSION['senhaSession']= $senha;
            
       
            header("Location:../animal.php?pagina=0");  
        
        }else{        
            
            echo"<script language='javascript' type='text/javascript'>
            alert('Login e/ou senha incorretos');window.location
            .href='../index.php';</script>";
            die();
        }
    }
?>