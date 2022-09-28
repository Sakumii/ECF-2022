<?php

include_once '_src/php/config/database.php';
$var = "Mondial fit";

?>

<!DOCTYPE html>
<html>
    <head>
            <?php 
            require_once '_head/meta.php';
            require_once '_head/link.php';
            ?>
            
        <title>ECF décembre 2022</title>
    
    </head>
    <body>

        <?php require_once '_src/php/form.php'; ?>

    <!--Main-->

        <?php require_once '_main/section.php'; ?>
        
        
    <!--Script-->
            
        <script type="text/javascript" src="./_src/js/login.js"></script>

    </body>
</html>