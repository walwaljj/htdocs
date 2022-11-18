<?php
$conn = mysqli_connect(
  '3.39.65.57',
  'root',
  'multi123',
  'car_manage');

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title>sql</title>
    </head>
    <style>
        td{
            /* background-color:pink; */
            padding: 10px;
            width: 500px;
            text-align:center;
            /* text-aline:center; */
        }
    </style>
    <body>
        <table border="1">
            <tr>
                <td>first_number</td><td>last_number</td><td>person_type</td><td>car_elec</td><td>intro_time</td>
                <?php
                $sql = "SELECT * FROM total_info";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_array($result)){
                    $filtered = array(
                        'first_number'=>htmlspecialchars($row['first_number']),
                        'last_number'=>htmlspecialchars($row['last_number']),
                        'person_type'=>htmlspecialchars($row['person_type']),
                        'car_elec'=>htmlspecialchars($row['car_elec']),
                        'intro_time'=>htmlspecialchars($row['intro_time'])
                    );

                    ?>

                    <tr>
                        <td><?=$filtered['first_number']?></td>
                        <td><?=$filtered['last_number']?></td>
                        <td><?=$filtered['person_type']?></td>
                        <td><?=$filtered['car_elec']?></td>
                        <td><?=$filtered['intro_time']?></td>
                    </tr> 
                    <?php
                }
                ?>
            </tr>
        </table>
    </body>
</html>
<!-- echo "<h1>multi row</h1>";


$sql = "SELECT * FROM total_info";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)) {
    echo '<h2>'.$row['first_number']."  ".$row['last_number'].'</h2>';
  
} -->