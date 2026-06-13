<?php
session_start();

// check login status
$logged = isset($_SESSION['user']);
?>

<!DOCTYPE html>
<html>
<head>
<title>TechZone Electronics</title>

<style>

body{
margin:0;
font-family:Arial,sans-serif;
background:#f5f5f5;
}

header{
background:#111827;
color:white;
padding:15px;
text-align:center;
}

.menu a{
color:white;
text-decoration:none;
margin:15px;
font-size:18px;
}

.hero{
display:flex;
justify-content:center;
align-items:center;
padding:50px;
background:white;
}

.content{
width:50%;
}

.content h1{
font-size:50px;
color:#2563eb;
}

.content h3{
font-size:28px;
color:#111827;
}

.content p{
font-size:18px;
color:gray;
}

button{
padding:12px 25px;
border:none;
background:#2563eb;
color:white;
border-radius:5px;
cursor:pointer;
margin-right:10px;
}

button:hover{
background:#1d4ed8;
}

.image img{
width:450px;
border-radius:15px;
}

.features{
display:flex;
justify-content:center;
gap:20px;
padding:40px;
}

.box{
background:white;
padding:20px;
width:220px;
text-align:center;
border-radius:10px;
box-shadow:0 0 10px rgba(0,0,0,0.1);
}

footer{
background:#111827;
color:white;
text-align:center;
padding:20px;
}

</style>

</head>

<body>

<header>

<h1>TechZone Electronics</h1>

<div class="menu">
<a href="home.php">Home</a>
<a href="product.php">Products</a>
<a href="offers.php">Offers</a>

<?php if($logged){ ?>
    <a href="order.php">Order</a>
<?php } else { ?>
    <a href="login.php">Login</a>
<?php } ?>

</div>

</header>

<section class="hero">

<div class="content">

<h1>Upgrade Your Digital Lifestyle</h1>

<h3>🔥 Mega Tech Sale - Up To 50% OFF</h3>

<p>
Shop the latest smartphones, laptops,
smart watches and accessories at amazing prices.
</p>

<!-- ✅ SMART ORDER BUTTON -->
<?php if($logged){ ?>

    <a href="offers.php">
        <button>Shop Now</button>
    </a>

<?php } else { ?>

    <a href="login.php">
        <button onclick="alert('Please login first')">
            Shop Now
        </button>
    </a>

<?php } ?>

<a href="signup.php">
<button>Register</button>
</a>

</div>

<div class="image">

<img src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9">

</div>

</section>

<section class="features">

<div class="box">
<h3>🚚 Free Delivery</h3>
<p>Fast delivery across India</p>
</div>

<div class="box">
<h3>🔒 Secure Payment</h3>
<p>100% safe transactions</p>
</div>

<div class="box">
<h3>🎧 Premium Gadgets</h3>
<p>Latest electronic products</p>
</div>

</section>

<footer>

<h3>TechZone Electronics</h3>

<p>© 2026 All Rights Reserved</p>

</footer>

</body>
</html>
