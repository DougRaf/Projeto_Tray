<?php
function conectar(){ 

    $servidor = "opmy0013.servidorwebfacil.com";
    $porta = 3306;
    $usuario = "desqu_douglas";
    $senha = "motoka35";
    $dbname = "desquinela_sqlserver";
    
    //Criar a conexao
    $link = mysqli_connect("$servidor:$porta", $usuario, $senha, $dbname);

    mysqli_set_charset($link, "utf8")or die(mysqli_error($link));
    return $link;  
     
}

function fecharConexao($link){
    mysqli_close($link)or die(mysqli_error($link));
}
?>