<?php 
include('../Class/classLogin.php');
$n = new Login;
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <style>
        <?php 
        include '../css/login.css';
    ?>
    </style>
    
</head>
<body>
    <div id="container">
        <form action="" method="POST">
            <img src="../Image/undraw_Male_avatar_re_8fid (1).png" alt="">
            <h2>Admin Login</h2>
            <input type="text" name="UserName" placeholder="Username" id="ip1"> <br>
            <input type="password" name="Pass" placeholder="Password"> <br>
            <button type="reset" class="btn" id="btn1">Reset</button>
            <button type="submit" name="btn" value="Login" class="btn" id="btn2">Login</button>
        </form>
    </div>
    <?php 
        switch($_POST['btn'])
        {
            case 'Login':
                {
                    $name = $_POST['UserName'];
                    $pass = $_POST['Pass'];
                    if((!empty($name)) && (!empty($pass))){
                        if($n->CheckName($name, $pass)==1)
                        {
                            echo '<script>alert("Wrong username or password.")</script>';
                        }
                    }
                    else {
                        echo '<script>alert("Fill the information.")</script>';
                    }
                    break;
                }
        }
?>
</body>
</html>