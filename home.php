<?php 
    //include 
    require_once "..\db_conexao.php";

    session_start();

?>

<?php

    if($_SESSION['nao_pulou'])
    {
        //código 

    }else{

        header('Location:..\login\login.html');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    

        
                   
                    
        

        <div id="slot-2">

            <div id="procurar">
                pesquisar filme<br>
                <label for="">Pesquisar categoria: </label><input type="search" name="pesquisa_categoria" id="pesquisa_categoria"><button id="ir">Procurar</button>
            </div>

        <div id="slide">
            slide
        </div>
        <div id="menus">
            <div id="perfil">
            <h3 id="boas-vindas">Bem-vindo <?php echo $_SESSION['username'];?></h3>
            <img src="Filmes\download (1).jfif" id="foto-perfil" alt="">
            <div id="nome-usuario">
            <?php echo $_SESSION['username'];?>
            </div>
            </div>
            
            <div id="config">
            <a href="..\Conta\conta.php" id="btn-config">Configurações</a>
            </div>

        </div>
    </div>

    <div id="slot-3">
            <hr>
        <div id="acao" class="titulo">
            <h3>Ação</h3>
        </div>
        <hr>

        <div class="galeira">
            <img src="Filmes\download (1).jfif" alt="" name="filme_acao1" id="acao_1">
            <img src="Filmes\download (2).jfif" alt="" name="filme_acao2" id="acao_2">
            <img src="Filmes\download (3).jfif" alt="" name="filme_acao3" id="acao_3">
            <img src="Filmes\download (4).jfif" alt="" name="filme_acao4" id="acao_4">
            <img src="Filmes\download (5).jfif" alt="" name="filme_acao5" id="acao_5">
            <img src="Filmes\download (6).jfif" alt="" name="filme_acao6" id="acao_6">
            <img src="Filmes\download (7).jfif" alt="" name="filme_acao7" id="acao_7">
            <img src="Filmes\download (8).jfif" alt="" name="filme_acao8" id="acao_8">
            <img src="Filmes\download (9).jfif" alt="" name="filme_acao9" id="acao_9">
            <img src="Filmes\images.jfif" alt="" name="filme_acao10" id="acao_10">
            <img src="Filmes\download (10).jfif" alt="" name="filme_acao11" id="acao_11">
        </div>

        <br><hr>

        <div id="romance" class="titulo">
           <h3>Romance</h3>
        </div>
        <hr>
        <div class="galeira">
            <img src="Filmes\download (1).jfif" alt="" name="filme_acao1" id="acao_1">
            <img src="Filmes\download (2).jfif" alt="" name="filme_acao2" id="acao_2">
            <img src="Filmes\download (3).jfif" alt="" name="filme_acao3" id="acao_3">
            <img src="Filmes\download (4).jfif" alt="" name="filme_acao4" id="acao_4">
            <img src="Filmes\download (5).jfif" alt="" name="filme_acao5" id="acao_5">
            <img src="Filmes\download (6).jfif" alt="" name="filme_acao6" id="acao_6">
            <img src="Filmes\download (7).jfif" alt="" name="filme_acao7" id="acao_7">
            <img src="Filmes\download (8).jfif" alt="" name="filme_acao8" id="acao_8">
            <img src="Filmes\download (9).jfif" alt="" name="filme_acao9" id="acao_9">
            <img src="Filmes\images.jfif" alt="" name="filme_acao10" id="acao_10">
            <img src="Filmes\download (10).jfif" alt="" name="filme_acao11" id="acao_11">
        </div>
        
        <br><hr>
        <div id="terror" class="titulo">
            <h3>Terror</h3>
         </div>
         <hr>
         <div class="galeira">
             <img src="Filmes\download (1).jfif" alt="" name="filme_acao1" id="acao_1">
             <img src="Filmes\download (2).jfif" alt="" name="filme_acao2" id="acao_2">
             <img src="Filmes\download (3).jfif" alt="" name="filme_acao3" id="acao_3">
             <img src="Filmes\download (4).jfif" alt="" name="filme_acao4" id="acao_4">
             <img src="Filmes\download (5).jfif" alt="" name="filme_acao5" id="acao_5">
             <img src="Filmes\download (6).jfif" alt="" name="filme_acao6" id="acao_6">
             <img src="Filmes\download (7).jfif" alt="" name="filme_acao7" id="acao_7">
             <img src="Filmes\download (8).jfif" alt="" name="filme_acao8" id="acao_8">
             <img src="Filmes\download (9).jfif" alt="" name="filme_acao9" id="acao_9">
             <img src="Filmes\images.jfif" alt="" name="filme_acao10" id="acao_10">
             <img src="Filmes\download (10).jfif" alt="" name="filme_acao11" id="acao_11">
         </div>

         <br><hr>
         <div id="comédia" class="titulo">
            <h3>Comédia</h3>
         </div>
         <hr>
         <div class="galeira">
             <img src="Filmes\download (1).jfif" alt="" name="filme_acao1" id="acao_1">
             <img src="Filmes\download (2).jfif" alt="" name="filme_acao2" id="acao_2">
             <img src="Filmes\download (3).jfif" alt="" name="filme_acao3" id="acao_3">
             <img src="Filmes\download (4).jfif" alt="" name="filme_acao4" id="acao_4">
             <img src="Filmes\download (5).jfif" alt="" name="filme_acao5" id="acao_5">
             <img src="Filmes\download (6).jfif" alt="" name="filme_acao6" id="acao_6">
             <img src="Filmes\download (7).jfif" alt="" name="filme_acao7" id="acao_7">
             <img src="Filmes\download (8).jfif" alt="" name="filme_acao8" id="acao_8">
             <img src="Filmes\download (9).jfif" alt="" name="filme_acao9" id="acao_9">
             <img src="Filmes\images.jfif" alt="" name="filme_acao10" id="acao_10">
             <img src="Filmes\download (10).jfif" alt="" name="filme_acao11" id="acao_11">
         </div>


    </div>






</body>

    <script src="home.js"></script>
</html>