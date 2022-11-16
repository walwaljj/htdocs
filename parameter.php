<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8" >
    </head>
    <body>
        안녕하세요. <?php echo $_GET['address'];?>에 사시는 
         <?php echo $_GET['name']; ?> 님 <!--http://localhost/parameter.php?name=sy&address=%EC%84%9C%EC%9A%B8   
                                                                        주소뒤에는 ? 로 시작, 변수와 변수를 나눌때는 &으로.-->
    </body>
</html>