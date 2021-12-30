<?php
//check user đã đăng nhập chưa
include "Model/Syntax/Method.php";

    if (isset($_GET['Action'])) {
        $action=$_GET['Action'];
        switch ($action) {
            case 'login':
                if(isset($_POST['login']) && $_POST['login']){
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    $getlogin=LoginAdmin($user,$pass);
                    print_r($_SESSION);
                    if (is_array($getlogin)) {
                        $_SESSION['user'] = $getlogin;
                        if($getlogin['role'] == 1)
                            header('location: admin.php');
                        else{
                            
                            header('location: index.php');
                        }
                    }
                }
                include "View/login.php";
                break;
            case 'logout':
                unset($_SESSION['user']);
                header('location: index.php');
            break;
            default:
                if(isset($_SESSION['user']))
                    header('location: index.php?Controller=login&Action=user');
                else
                    header('location: index.php?Controller=login&Action=login');
                
                break;
        }
    }
    else {
        if(isset($_SESSION['user']))
            header('location: index.php?Controller=login&Action=user');
        else
            header('location: index.php?Controller=login&Action=login');
    }

?>