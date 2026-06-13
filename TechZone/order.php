<?php
session_start();

if(!isset($_SESSION['user']))
{
    header("Location: login.php");
    exit();
}

$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html>
<head>
<title>TechZone Electronics Order</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Segoe UI',sans-serif;
}

body{
min-height:100vh;
display:flex;
justify-content:center;
align-items:center;
padding:20px;
background:url('https://images.unsplash.com/photo-1550009158-9ebf69173e03?auto=format&fit=crop&w=1600&q=80');
background-size:cover;
background-position:center;
background-repeat:no-repeat;
}

.order-container{
width:550px;
padding:35px;
border-radius:20px;
background:rgba(255,255,255,0.15);
backdrop-filter:blur(15px);
border:1px solid rgba(255,255,255,0.2);
box-shadow:0 8px 32px rgba(0,0,0,0.3);
animation:slideIn 1s ease;
}

.logo{
display:block;
margin:auto;
width:100px;
margin-bottom:15px;
}

.order-container h1{
text-align:center;
color:white;
margin-bottom:10px;
font-size:32px;
}

.welcome{
text-align:center;
color:#00ffcc;
font-size:18px;
font-weight:bold;
margin-bottom:20px;
}

.logout{
display:block;
width:120px;
margin:0 auto 20px;
padding:10px;
background:#ef4444;
color:white;
text-align:center;
text-decoration:none;
border-radius:8px;
font-weight:bold;
}
.button-group{
display:flex;
gap:15px;
justify-content:center;
margin-bottom:20px;
}

.button-group .logout{
margin:0;
width:150px;
}

.logout:hover{
background:#dc2626;
}

label{
display:block;
color:white;
font-weight:bold;
margin-top:12px;
margin-bottom:5px;
}

input,
select,
textarea{
width:100%;
padding:12px;
border:none;
border-radius:10px;
background:rgba(255,255,255,0.9);
font-size:15px;
outline:none;
}

.gender-box{
display:flex;
gap:20px;
margin-top:10px;
color:white;
font-weight:bold;
}

.gender-box input{
width:auto;
margin-right:5px;
}

textarea{
resize:none;
}

.buttons{
display:flex;
gap:15px;
margin-top:20px;
}

.btn{
flex:1;
padding:14px;
border:none;
border-radius:10px;
font-size:16px;
font-weight:bold;
cursor:pointer;
transition:0.3s;
}

.submit{
background:linear-gradient(45deg,#22c55e,#16a34a);
color:white;
}

.submit:hover{
transform:translateY(-3px);
}

.reset{
background:linear-gradient(45deg,#ef4444,#dc2626);
color:white;
}

.reset:hover{
transform:translateY(-3px);
}

.note{
text-align:center;
margin-top:20px;
font-size:16px;
font-weight:bold;
color:#ffd700;
text-shadow:
1px 1px 3px black,
0 0 10px #ffd700;
}

@keyframes slideIn{

from{
opacity:0;
transform:translateY(-40px);
}

to{
opacity:1;
transform:translateY(0);
}

}

</style>
</head>

<body>

<div class="order-container">

<img class="logo"
src="https://cdn-icons-png.flaticon.com/512/891/891462.png"
alt="cart">

<h1>🛒 Place Your Order</h1>

<div class="welcome">
Welcome <?php echo $user; ?> 👋
</div>
<div class="button-group">

<a href="logout.php" class="logout">
🚪 Logout
</a>

<a href="order_history.php"
class="logout"
style="background:#2563eb;">
📦 My Orders
</a>

</div>

<form action="connected.php" method="post">

<label>👤 Customer Name</label>
<input type="text"
name="name"
value="<?php echo $user; ?>"
required>

<label>📱 Mobile Number</label>
<input type="tel"
name="mobile"
placeholder="Enter mobile number"
required>

<label>⚧ Gender</label>

<div class="gender-box">

<label>
<input type="radio"
name="gender"
value="Male"> Male
</label>

<label>
<input type="radio"
name="gender"
value="Female"> Female
</label>

<label>
<input type="radio"
name="gender"
value="Others"> Others
</label>

</div>

<label>🏠 Delivery Address</label>

<textarea
name="address"
rows="4"
placeholder="Enter complete delivery address"
required></textarea>

<label>📦 Select Product</label>

<select name="prod">

<option>📱 Smartphone</option>

<option>💻 Laptop</option>

<option>⌚ Smart Watch</option>

<option>🎧 Headphones</option>

<option>🔊 Bluetooth Speaker</option>

<option>🔋 Accessories</option>

</select>

<div class="buttons">

<input
type="submit"
name="submit"
value="✅ Place Order"
class="btn submit">

<input
type="reset"
value="❌ Cancel"
class="btn reset">

</div>

</form>

<p class="note">
🚚 Fast Delivery &nbsp; | &nbsp;
🔒 Secure Order &nbsp; | &nbsp;
⭐ Premium Electronics
</p>

</div>

</body>
</html>
