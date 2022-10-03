<?php

require_once ('_src/php/config/include.php');

if(isset($_SESSION['id'])){
    $var = "Bonjour " . $_SESSION['pseudo'];
}else{
    $var = "Mondial fitness manager";
}
?>

<!DOCTYPE html>
<html>
    <head>
            <?php 
            require_once '_head/meta.php';
            require_once '_head/link.php';
            ?>
            
        <title>Mondial fitness manager</title>
    
    </head>
    <body>

        <?php require_once '_src/php/form.php'; ?>

    <!--Main-->

        <?php require_once '_main/section.php'; ?>
        
        
    <!--Script-->
            
        <script type="text/javascript" src="./_src/js/login.js"></script>

    </body>
</html>