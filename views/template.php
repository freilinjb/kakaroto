<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<?php include "partials/header.php" ?>


<body class="hold-transition sidebar-mini layout-navbar-fixed">
    <?php
     if(isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == true){
        echo '<div class="wrapper">';

        include "partials/navbar.php";
        include "partials/asside.php";
    
        echo '<div class="content-wrapper">';
    
        if (isset($_GET['route'])) {
            if (file_exists(dirname(__FILE__) . "/pages/" . $_GET["route"] . ".php")) {
    
                include "pages/" . $_GET["route"] . ".php";
            } else {
                echo "pages/" . $_GET["route"] . ".php";
                include "pages/404.php";
            }
        } else {
    
            include "pages/home.php";
        }
        echo '</div>';
        include "partials/footer.php";
    
        echo '</div>';
     } else {
         include "pages/auth/logIn.php";
     }
    
    ?>
</body>

</html>