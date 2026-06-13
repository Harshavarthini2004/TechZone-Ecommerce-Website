<?php

session_start();

if(!isset($_SESSION['user']))
{
    header("Location: login.php");
    exit();
}

$con=mysqli_connect("localhost","root","","project");

$user=$_SESSION['user'];

$sql="SELECT * FROM orders
WHERE username='$user'
ORDER BY id DESC";

$result=mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html>
<head>

<title>My Orders</title>

<style>

body{
font-family:Arial;
background:#f4f6f8;
margin:0;
padding:30px;
}

.container{
max-width:1200px;
margin:auto;
}

h1{
text-align:center;
color:#2563eb;
margin-bottom:20px;
}

table{
width:100%;
border-collapse:collapse;
background:white;
box-shadow:0 0 15px rgba(0,0,0,0.1);
}

th{
background:#2563eb;
color:white;
padding:12px;
}

td{
padding:12px;
text-align:center;
border-bottom:1px solid #ddd;
}

tr:hover{
background:#f1f5f9;
}

.back{
display:inline-block;
margin-top:20px;
padding:10px 20px;
background:#2563eb;
color:white;
text-decoration:none;
border-radius:8px;
}

.back:hover{
background:#1d4ed8;
}

</style>

</head>

<body>

<div class="container">

<h1>📦 My Order History</h1>

<table>

<tr>
<th>ID</th>
<th>Mobile</th>
<th>Gender</th>
<th>Address</th>
<th>Product</th>
<th>Date</th>
</tr>

<?php

while($row=mysqli_fetch_assoc($result))
{
?>

<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['mobile']; ?></td>
<td><?php echo $row['gender']; ?></td>
<td><?php echo $row['address']; ?></td>
<td><?php echo $row['product']; ?></td>
<td><?php echo $row['order_date']; ?></td>
</tr>

<?php
}
?>

</table>

<br>

<a href="order.php" class="back">
⬅ Back To Order Page
</a>

</div>

</body>
</html>

<?php
mysqli_close($con);
?>
