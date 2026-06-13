<?php

session_start();

$con=mysqli_connect("localhost","root","","project");

$username=$_SESSION['user'];

$mobile=$_POST['mobile'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$product=$_POST['prod'];

$sql="INSERT INTO orders
(username,mobile,gender,address,product)
VALUES
('$username','$mobile','$gender','$address','$product')";

if(mysqli_query($con,$sql))
{
    echo "<script>
    alert('Order Placed Successfully');
    window.location.href='order_history.php';
    </script>";
}
else
{
    echo 'Order Failed';
}

mysqli_close($con);

?>