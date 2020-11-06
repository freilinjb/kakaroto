<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<?php include "partials/header.php" ?>

<body class="hold-transition sidebar-mini layout-fixed">
    <!-- Site wrapper -->
    <div class="wrapper">
        <?php 
            include "partials/navbar.php";
            include "partials/asside.php";
        ?>
    <?php

     if(isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == true){
        echo '<div class="wrapper">';
    
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
    
        echo '</div>';
     } else {
         include "pages/auth/logIn.php";
     }
    
    ?>

        <?php 
            include "partials/footer.php";
        ?>
        
    </div>
    <!-- ./wrapper -->

    <!-- Bootstrap 4 -->
    <script src="views/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="views/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="views/assets/dist/js/adminlte.min.js"></script>
    <!-- sweetalert2 -->
    <script src="views/assets/plugins/sweetalert2/sweetalert2.min.js"></script>
</body>

</html>