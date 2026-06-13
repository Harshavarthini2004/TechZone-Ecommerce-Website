<?php

$con=mysqli_connect("localhost","root","","project");

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$uname=$_POST['uname'];
$pword=$_POST['pword'];

/* Username already exists check */

$check="SELECT * FROM signup
WHERE name='$uname'";

$result=mysqli_query($con,$check);

if(mysqli_num_rows($result)>0)
{
    echo "
    <script>

    alert('Username Already Exists');

    window.location='signup.php';

    </script>
    ";
}
else
{
    $sql="INSERT INTO signup
    (fname,lname,email,name,pword)

    VALUES

    ('$fname',
    '$lname',
    '$email',
    '$uname',
    '$pword')";

    if(mysqli_query($con,$sql))
    {
        echo "
        <script>

        alert('Account Created Successfully');

        window.location='login.php';

        </script>
        ";
    }
    else
    {
        echo "
        <script>

        alert('Signup Failed');

        window.location='signup.php';

        </script>
        ";
    }
}

mysqli_close($con);

?>
