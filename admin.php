<?php
    ob_start();
    session_start();
    if (isset($_SESSION['user'])&&$_SESSION['user']['id']>0&&$_SESSION['user']['role']==1) {
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--  -->
    <title>LIMEORANGE ADMIN</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
    integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <!-- link google front -->
    <link rel="shortcut icon" href="IMG/speedometer.svg" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500&display=swap" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

    <!-- link CSS -->
    <link rel="stylesheet" href="Source/Boostrap/bootstrap_4/CSS/bootstrap-grid.css">
    <link rel="stylesheet" href="Source/Boostrap/bootstrap_4/CSS/bootstrap-grid.css.map">
    <link rel="stylesheet" href="Source/Boostrap/bootstrap_4/CSS/bootstrap-grid.min.css">
    <link rel="stylesheet" href="Source/Boostrap/bootstrap_4/CSS/bootstrap.css">
    <link rel="stylesheet" href="Source/Boostrap/bootstrap_4/CSS/bootstrap.min.css">
    <link rel="stylesheet" href="Source/Boostrap/bootstrap_4/CSS/bootstrap-reboot.css">
    <link rel="stylesheet" href="Source/Boostrap/bootstrap_4/CSS/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="CSS/admin page functionality.css">
    
    <link rel="stylesheet" href="CSS/catalog.css">

</head>

<body class="animsition" style="animation-duration: 900ms; opacity: 1;">

    <?php 
        include "View/Templates_admin/admin.php";
    ?>

<!-- link JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.4.4/umd/popper-base.js"
        integrity="sha512-51KV0Kx+izrX9qkKXb3JV55Zaf3moOy24A3x4FKzselpqVc3I8A76Kyo/jBgh3VRz7Z1c0KLk95kmdGJ8sF4hQ=="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.4.4/umd/popper.min.js"
        integrity="sha512-eUQ9hGdLjBjY3F41CScH3UX+4JDSI9zXeroz7hJ+RteoCaY+GP/LDoM8AO+Pt+DRFw3nXqsjh9Zsts8hnYv8/A=="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.4.4/umd/popper.js"
        integrity="sha512-3npORiJBjCw8YewByo9prUHQKH+JF9EGu6rc2IQA3GdV/V5TUo1JibA3g3jAeNOdToEh2rHkhswWJcOo6ljuPQ=="
        crossorigin="anonymous"></script>
    <script src="Source/Jquery/jquery-3.5.1.js"></script>
    <script src="Source/Jquery/jquery-3.5.1.min.js"></script>
    <script src="Source/Jquery/jquery-3.5.1.slim.min.js"></script>
    <script src="Source/Boostrap/bootstrap_4/JS/bootstrap.bundle.js"></script>
    <script src="Source/Boostrap/bootstrap_4/JS/bootstrap.bundle.min.js"></script>
    <scrSource src="Source/Boostrap/bootstrap_4/JS/bootstrap.js"></scrSource>
    <script src="Source/Boostrap/bootstrap_4/JS/bootstrap.min.js"></script>
    <script src="JS/admin page functionality.js"></script>
</body>

</html>

<?php
    }
    else{
        header('location: index.php');
    }

?>