<?php
$conn = mysqli_connect(
    'localhost',
    'root',
    'multi123',
    'car_manage');
// var_dump($_POST);
$sql = "
    INSERT INTO topic
        (title, description, created)
        VALUES(
            '{$_POST['title']}',
            '{$_POST['description']}',
            now()
        )
";
echo $sql;
?>