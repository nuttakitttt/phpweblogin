<?php
include 'condb.php';
$fname =$_POST['firstname'];
$lastname =$_POST['lastname'];
$phone =$_POST['phone'];
$username =$_POST['username'];
$password =$_POST['password'];

$password =hash('sha512',$password);

$sql ="INSERT INTO member(name,lastname,telephone,username,password) VALUES('$fname','$lastname','$phone','$username','$password')";
$result=mysqli_query($conn,$sql);
if($result){
    echo "<script> alert('บันทึกข้อมูลเรียบร้อยแล้ว') </script>  ";
    echo "<script> window.location='register.php' </script>  ";
}else{
    echo "Error:" . $sql . "<br>" . mysqli_error($conn);
    echo "<script> alert('บันทึกข้อมูลไม่ได้') </script> ";
}
mysqli_close($conn);
?>
