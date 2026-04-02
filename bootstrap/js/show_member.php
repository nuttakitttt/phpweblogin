<?php
$servername = "localhost";
$username = "username";
$password = "";
$dbname ="database"

// Create connection
$conn=mysqli($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysli_connet_error());
}
//echo "Connected successfully";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-UA-Compatible" comtent="TE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
        <tr>
            <th>รหัส</th> 
            <th>ชื่อ</th>
            <th>นามสกุล</th>
            <th>เบอร์โทรศัทพ์ </th> 
        </tr>
        <?php
$sql ="SELECT * FROM member";
$result =mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result))
?> 
    <tr>
    <th><?=$row["id"]?></td>
    <th><?=$row["name"]?></th>
    <th><?=$row["surname"]?></th>
    <th><?=$row["telephone"]?></th>
</th>
</table>    

mysqli_close($conn); //ปิดการเชื่อต่อฐานข้อมูล        
?>

</table>

</body>
</html>