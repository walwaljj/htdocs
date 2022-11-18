<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="car_web.css">
</head>
<body>
    <nav class="navbar">
        <div class="navbar__logo">
            <i class="fa-solid fa-car"></i>
            <p>Carmanage_TippingPoint</p>
        </div>
    </nav>
    <form action="" method="POST">
        <div class = "inputBox">
            <div class="p">
                <h3>LOGIN</h3>
                    <div class="id">
                        <input type="text" name="id" placeholder="ID" required/><br>
                    </div>
                <div class="pw">
                    <!-- <h4>PW</h4> -->
                <input type="password" name="pw" placeholder="PASSWORD" required/><br><br>
                </div>
                <input type="submit" name = "login" id="login" value="LOGIN"/>
                &nbsp;
                <a href="register.php">SIGNUP</a>
            </div>
        </div>
    </form>
    <?php
        if(isset($_POST['id']) && isset($_POST['pw'])){
            $id = $_POST['id'];
            $pw = $_POST['pw'];

            $conn = mysqli_connect('3.39.65.57','root','multi123','car_manage');
            $sql = "select * from register where id='$id' and pw='$pw';";

            if($result = mysqli_fetch_array(mysqli_query($conn, $sql))){
                header('Location: total.php');
            }else{
                 echo "<script>alert('등록되지 않은 사용자 입니다.')</script>";
        }
        mysqli_close($conn);
    }
    ?>
</body>
</html>