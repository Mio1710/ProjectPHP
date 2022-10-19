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
                    <li><button class="btn"><a href="Dangky.php">Đăng ký</a></button></li>
                </ul>
            </div>
        </div>
        <div id="content">
            <div id="content1">
                <div class="image">
                    <img src="../images/ct1.png" alt="">
                </div>
                <div class="text">
                    <h1>Khóa học HTML cơ bản đến nâng cao</h1>
                    <br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <div id="Dangky">
                        <button class="btn" id="btnDK">Thông tin</button>
                    </div>
                </div>
            </div>
            <div id="content2">
                <h2>Khóa học mới</h2>
            </div>
        </div>
    </div>
</body>
</html>