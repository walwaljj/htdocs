
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
                <h3>REGISTER</h3>
                    <div class="id">
                        ID <input type="text" name="id" placeholder="사용하실 아이디를 입력하세요" required/><br>
                    </div>
                    <div class="pw">
                        PW <input type="password" name="pw" placeholder="사용하실 비밀번호를 입력하세요" required/><br><br>
                    </div>
                <input type="submit" name = "login" id="login" value="회원가입"/>
                &nbsp;
            </div>
        </div>
    </form>
    <?php
        if(isset($_POST['id']) && isset($_POST['pw'])){
            $id = $_POST['id'];
            $pw = $_POST['pw'];

            $conn = mysqli_connect('localhost','root','multi123','car_manage');
            $sql = "INSERT INTO register values('$id' , '$pw');";
            
            if($result = mysqli_query($conn,$sql)){
                echo "<script>alert('회원가입 완료')</script>";
                header('Location: login.php');
            }else{
                 echo "<script>alert('이미 존재하는 사용자입니다.')</script>";
        }
        mysqli_close($conn);
        }
    
    ?>
</body>
</html>