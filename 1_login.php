<?php
session_start();

$conn = mysqli_connect("localhost","suhyeon","jas1808046","car_manage");

$id = $_POST['id'];
$pw = $_POST['pw'];

$sql = "select * from register where id='$id';";
$result = mysqli_fetch_array(mysqli_query($conn, $sql));

if(mysqli_num_rows($result)==1){
    $row=mysqli_fetch_assoc($result);

    if($row['pw']==$pw){
        $_SESSION['id']=$id;
        if(isset($_SESSION['id'])){
            echo "안녕하세요</br>";
            echo $_SESSION['id']." 님 환영합니다</br>";
        }else{
            echo "로그인 실패";
        }
    
    }else{
        echo "다시 입력해주세요.";
    }
}else{
    echo "다시 입력해주세요";
}
?>
