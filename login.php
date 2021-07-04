<?php

    //includes

    require_once "..\db_conexao.php";

    session_start();


?>

<?php

    if(isset($_POST['btn-entrar'])){


    $username=mysqli_escape_string($connect,$_POST['username']);
    $senha=mysqli_escape_string($connect,$_POST['senha']);
                                                
    $sql="SELECT * FROM clientes WHERE username='$username' AND senha='$senha'";
    $executa=mysqli_query($connect,$sql);
    $linha=mysqli_affected_rows($connect);
   

    if($linha>0){
        $_SESSION['nao_pulou']=true;
        $_SESSION['username']=$username;
        header('Location:..\home\home.php');
    }else{
        echo "Erro no login,tente novamente";
    }

}else{

    echo "Espertinho";
    header('Location:login.html');
}

?>