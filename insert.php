<?php

$conn = mysqli_connect("58.229.203.49","id_jihye","Bear98318^^",'car_manage');# 같은 주소(로컬)에 있으면localhost/
$sql = " INSERT INTO topic(title, description, created)
            VALUE('MySQL','MySQL is....',NOW())";
// echo $sql;
mysqli_query($conn,$sql);
// echo mysqli_error($conn);
if($result ===false){
    echo mysqli_error($conn);//실제로 에러메세지를 배포시 표출하면 안된다. 클라이언트가 내부적인 시스템상황을 알게되면 악용가능함.
}
   

?>