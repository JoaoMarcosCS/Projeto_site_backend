<?php
    //includes

    require_once "..\db_conexao.php";

?>


<?php

    if(isset($_POST['btn-criar'])){

        $username=filter_input(INPUT_POST,'username',FILTER_SANITIZE_SPECIAL_CHARS);
        $senha=filter_input(INPUT_POST,'senha',FILTER_SANITIZE_SPECIAL_CHARS);
        $email=filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);//para o user poder colocar caracteres especiais

        $email=filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);//para poder ver se o email realmente é válido

        $sql="INSERT INTO clientes VALUES (NULL,'$username','$senha','$email')";

        
        
        if(mysqli_query($connect,$sql)){
            echo " Conta criada com sucesso!<br>";
            header('Location:..\login\login.html');
        }else{
            
            echo "Conta não criada";
        }

    }else{
        echo "Espertinho";
        header('Location:..\login\login.html');
    }

?>