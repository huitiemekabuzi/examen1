<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../dist/output.css" rel=stylesheet>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Admin</title>
</head>
<body>
    <?php 
        require_once ("../config/conbd.php"); 
        require_once ("../config/addUser.php");
        require_once ("../config/edit.php");
        // require_once("../")
    ?>


    <div class="container-admin">
        <div class="navbar_admin">
            <ul>
                <li><button><i class="fa-solid fa-house"></i><a href="">Workspace</a></button></li>
                <li><button><i class="fa-solid fa-door-closed"></i><a href="logout.php">Exit</a></button></li>
                <li> <button><i class="fa-solid fa-plus"></i><a href="">Ajouter Utilisateur</a> </li></button> 
            </ul>
        </div>

        <div class="sub_container_admin">
            <div class="espace_admin">
                <h3>Ajout Utilisateurs </h3>
                <div class="search_opt">
                    <input type="search" class="recherche_pers" name="rechercher_q">
                    <input type="submit" value="Rechercher" name="rechercher" class="evoyer_req">
                </div>
                <div class="addUser">
                    <form action="" method="post">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="" placeholder="Entrer votre email">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="" placeholder="Entrer votre mot de passe">
                        <label for="image">Avatar</label>
                        <input type="file" name="image" id="image">
                        <input type="submit" value="Ajouter" name="ajouter" class="btn_envoyer_admin">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php
        // if(isset($_POST['rechercher_q'])){
            require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'rech.php';
        // }else{
            // require_once dirname (__DIR__) . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'recherche.php';
        // }
    ?>
    
</body>
</html>

