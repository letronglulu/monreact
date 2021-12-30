<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--  -->
    <title>LIMEORANGE ADMIN</title>

    <!-- link google front -->
    <link rel="shortcut icon" href="IMG/speedometer.svg" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

    <!-- link CSS -->
    <link rel="stylesheet" href="Code/Boostrap/bootstrap_4/CSS/bootstrap-grid.css">
    <link rel="stylesheet" href="Code/Boostrap/bootstrap_4/CSS/bootstrap-grid.css.map">
    <link rel="stylesheet" href="Code/Boostrap/bootstrap_4/CSS/bootstrap-grid.min.css">
    <link rel="stylesheet" href="Code/Boostrap/bootstrap_4/CSS/bootstrap.css">
    <link rel="stylesheet" href="Code/Boostrap/bootstrap_4/CSS/bootstrap.min.css">
    <link rel="stylesheet" href="Code/Boostrap/bootstrap_4/CSS/bootstrap-reboot.css">
    <link rel="stylesheet" href="Code/Boostrap/bootstrap_4/CSS/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="CSS/admin page functionality.css">
    <link rel="stylesheet" href="CSS/catalog.css">

</head>

<body class="animsition" style="animation-duration: 900ms; opacity: 1;">
    <!-- wrapper start -->
    <div class="wrapper">
        <!-- header start -->
        <header>
            <!-- row_left start -->
            <div class="row top_left">
                <div class="row">
                    <a href="index.php">
                        <img src="IMG/menu-logo-mini.png" alt="">
                        <h4>LIMEORANGE<span> ADMIN</span></h4>
                    </a>
                </div>
            </div>
            <!-- row_left end -->
            <!-- row_right start -->
            <div class="row top_right">
                <div class="row">
                    <!-- container start -->
                    <div class="boxcenter">
                        <div class="search_sp">
                            <input type="text" name="" id="" placeholder="Tìm kiếm....">
                            <button><i class="fa fa-search " aria-hidden="true"></i></button>
                        </div>
                        <!-- option start -->
                        <div class="option ">
                            <ul>
                                <li><a href="#" class="hover_color"><i class="fas fa-comment-dots"></i></a></li>
                                <li><a href="#" class="hover_color"><i class="fas fa-envelope"></i></a></li>
                                <li><a href="#" class="hover_color"><i class="fas fa-bell"></i></a></li>
                                <li><a href="#" class="info_user">
                                        <!-- account start -->
                                        <div class="account">
                                            <img src="IMG/104181896_623514438265620_818277614829868397_o.jpg" alt="">
                                            <span>Nguyễn Hoàng Minh Tú <i class="fas fa-chevron-down"></i></span>
                                        </div>
                                        <!-- account end -->
                                        <!-- option_user start -->
                                        <div class="row option_user">
                                            <div class="row acc_user">
                                                <img src="IMG/104181896_623514438265620_818277614829868397_o.jpg" alt="">
                                                <h5>Email: <span>biinhoang1412@gmail.com</span></h5>
                                            </div>
                                            <div class="row setting_user">
                                                <h5>
                                                    <i class="fas fa-cogs"></i>
                                                    <span>Setting</span>
                                                </h5>
                                            </div>
                                            <div class="row logout">
                                                <h5>
                                                    <i class="fas fa-sign-out-alt"></i>
                                                    <span>Logout</span>
                                                </h5>
                                            </div>
                                        </div>
                                        <!-- option_user end -->
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- option end -->
                    </div>
                    <!-- container end -->
                </div>
            </div>
            <!-- row_right end -->
        </header>
        <!-- header end -->

        <div class="row">
            <!-- aside start -->
            <aside>
                <div class="row">
                    <!-- nav_left start -->
                    <div class="nav_left">
                        <div class="row">
                            <div class="dashboard">
                                <a href="index.php?controller=home">
                                    <i class="fas fa-tachometer-alt"></i>
                                    <span>Dashboard</span>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="Catalog">
                                <a href="index.php?controller=catalog">
                                    <i class="fas fa-box-open"></i>
                                    <span>Catalog</span>
                                </a>
                            </div>
                            <div class="menu_catalog">

                            </div>
                        </div>
                        <div class="row">
                            <div class="Product">
                                <a href="index.php?controller=product">
                                    <i class="fas fa-tshirt"></i>
                                    <span>Product</span>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="Customer">
                                <a href="index.php?controller=customer">
                                    <i class="fas fa-users"></i>
                                    <span>Customer</span>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="Comment">
                                <a href="index.php?controller=comment">
                                    <i class="fas fa-comments"></i>
                                    <span>Comment</span>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="Page">
                                <a href="index.php?controller=page">
                                    <i class="fab fa-facebook-square"></i>
                                    <span>Pages</span>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="Statistical">
                                <a href="index.php?controller=statistical">
                                    <i class="fas fa-chart-line"></i>
                                    <span>Statistical</span>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="Database">
                                <a href="index.php?controller=database">
                                    <i class="fas fa-server"></i>
                                    <span>Database</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- nav_left end -->
                </div>

            </aside>
            <!-- aside end -->
            <!-- article start -->
            <article>
                <div class="row">
                    <!-- directional start -->
                    <?php
                    if (isset($_GET['controller'])) {
                        $ctrl = $_GET['controller'];
                    }
                    ?>
                    <div class="directional">
                        <?php
                        if (isset($_GET['action'])) {
                            $link = $_GET['action'];
                            $add_link = "&action=" . $link;
                        } else {
                            $link = "";
                            $add_link = "";
                        }

                        echo ' <a href="index.php?controller=' . $ctrl . $add_link . '">' . $ctrl . $link .  '</a>
                        
                            ';
                        if ($ctrl < $ctrl) {
                            echo '<span>&rsaquo;</span>';
                        }
                        ?>
                    </div>
                    <!-- directional end -->
                </div>
                <?php
                include "MVC/Controller/Request/" . $ctrl . ".php";
                ?>
            </article>
            <!-- article end -->

        </div>

    </div>
    <!-- wrapper end -->



    <!-- link JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.4.4/umd/popper-base.js" integrity="sha512-51KV0Kx+izrX9qkKXb3JV55Zaf3moOy24A3x4FKzselpqVc3I8A76Kyo/jBgh3VRz7Z1c0KLk95kmdGJ8sF4hQ==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.4.4/umd/popper.min.js" integrity="sha512-eUQ9hGdLjBjY3F41CScH3UX+4JDSI9zXeroz7hJ+RteoCaY+GP/LDoM8AO+Pt+DRFw3nXqsjh9Zsts8hnYv8/A==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.4.4/umd/popper.js" integrity="sha512-3npORiJBjCw8YewByo9prUHQKH+JF9EGu6rc2IQA3GdV/V5TUo1JibA3g3jAeNOdToEh2rHkhswWJcOo6ljuPQ==" crossorigin="anonymous"></script>
    <script src="Code/Jquery/jquery-3.5.1.js"></script>
    <script src="Code/Jquery/jquery-3.5.1.min.js"></script>
    <script src="Code/Jquery/jquery-3.5.1.slim.min.js"></script>
    <script src="Code/Boostrap/bootstrap_4/JS/bootstrap.bundle.js"></script>
    <script src="Code/Boostrap/bootstrap_4/JS/bootstrap.bundle.min.js"></script>
    <script src="Code/Boostrap/bootstrap_4/JS/bootstrap.js"></script>
    <script src="Code/Boostrap/bootstrap_4/JS/bootstrap.min.js"></script>
    <script src="JS/admin page functionality.js"></script>
</body>

</html>