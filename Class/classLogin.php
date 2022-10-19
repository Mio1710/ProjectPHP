<?php 
    class Login
    {
        function CheckName($name, $pass)
        {
            if(($name == 'admin') && ($pass == '123456'))
            {
                session_start();
                $_SESSION['Name'] = $name;
                $_SESSION['Pass'] = $pass;
                setcookie('Name', $name, time()+15);
                setcookie('Pass', $pass, time()+15);
                header('location: index.php');
            }
            else return 1;
        }
        function Confirm($name, $pass)
        {
            if(($name != 'admin') || ($pass != '123456'))
            {
                header('location:Login.php');
            }
        }
    }
?>