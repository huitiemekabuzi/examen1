<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="src/styl.css">
</head>
<body>
<?php 
        require_once ("config/conbd.php"); 
        require_once ("config/login.php");
    ?>
    <div class="container">
        
        <form action="" method="post">
        <h1>Connexion</h1>
            <input type="email" placeholder="Email" name="email" required>
            <input type="password" placeholder="Password" name="password" required>
            <div class="btn" align="center">
            <input type="submit" value="Login" name="login" class="btnSend">
            </div>
            
        </form>
    </div>
    
</body>

</html>