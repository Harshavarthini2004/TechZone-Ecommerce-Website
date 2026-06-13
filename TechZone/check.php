<?php

session_start();

$con=mysqli_connect(
"localhost",
"root",
"",
"project"
);

$uname=$_POST['name'];
$pword=$_POST['pword'];

$sql="SELECT * FROM signup
WHERE name='$uname'
AND pword='$pword'";

$result=mysqli_query($con,$sql);

if(mysqli_num_rows($result)>0)
{
    $_SESSION['user']=$uname;

    echo "
    <script>

    alert('Login Successful');

    window.location='order.php';

    </script>
    ";
}
else
{
    echo "
    <script>

    alert('Invalid Username or Password');

    window.location='login.php';

    </script>
    ";
}

mysqli_close($con);

?>
