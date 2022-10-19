<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        <?php 
            include '../css/style.css';
        ?>
    </style>
</head>
<body>
    <div id="container">
        <div id="header">
            <img src="../images/Logo2.jpg" alt="">
            <div id="nav">
                <ul>
                    <li><a href="index.php">Trang chủ</a></li>
                    <li><a href="">Các khóa học</a></li>
                    <li><a href="">Tra cứu</a></li>
                    <li><a href="">Về chúng tôi</a></li>
                    <li><a href="">Liên hệ</a></li>
                    <li><button id="button" class="btn"><a href="Login.php">Đăng nhập</a></button></li>
                    <li><button class="btn">Đăng ký</button></li>
                </ul>
            </div>
        </div>
        <div id="content">
            <div id="container-left">

            </div>
            <div id="container-right">
                <form action="" method="POST">
                    <h1>Member Sign in</h1>
                    <label for="Name">Họ và tên: </label>
                    <input type="text" name="Nametxt"> <br>
                    <label for="Gender">Giới tính: </label>
                    <input type="radio" name="Gender"> Nam
                    <input type="radio" name="Gender"> Nữ <br>
                    <label for="DateOfBirth">Ngày sinh: </label>
                    <input type="date"> <br>
                    <label for="Email">Email: </label>
                    <input type="email" name="Email"> <br>
                    <label for="Phone">Số điện thoại: </label>
                    <input type="text" name="Phone"> <br>
                    <label for="Password">Thiết lập mật khẩu đăng nhập</label>
                    <input type="password" name="password"> <br>
                    <button class="btn">Đăng ký</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>