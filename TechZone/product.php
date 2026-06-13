<!DOCTYPE html>
<html>
<head>
<title>TechZone Products</title>

<style>

body{
margin:0;
font-family:Arial,sans-serif;
background:#f4f4f4;
}

.product{
padding:30px;
}

.product h1{
text-align:center;
color:#2563eb;
margin-bottom:30px;
}

.products{
display:flex;
flex-wrap:wrap;
justify-content:center;
gap:25px;
}

.card{
background:white;
width:300px;
padding:15px;
border-radius:10px;
box-shadow:0 0 10px rgba(0,0,0,0.1);
text-align:center;
transition:0.3s;
}

.card:hover{
transform:scale(1.05);
}

.card img{
width:100%;
height:220px;
border-radius:10px;
}

.card h3{
color:#111827;
}

.offer{
color:red;
font-weight:bold;
}

button{
padding:10px 20px;
background:#2563eb;
color:white;
border:none;
border-radius:5px;
cursor:pointer;
}

button:hover{
background:#1d4ed8;
}

</style>

</head>

<body>

<div class="product">

<h1>OUR ELECTRONIC PRODUCTS</h1>

<div class="products">

<!-- Smartphones -->
<div class="card">
<img src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9">
<h3>Smartphones</h3>
<p>Latest Android & iPhone Collection</p>
<p class="offer">Offer 10% - 50% OFF</p>
<button onclick="location.href='smartphones.html'">View Products</button>
</div>

<!-- Laptops -->
<div class="card">
<img src="https://images.unsplash.com/photo-1496181133206-80ce9b88a853">
<h3>Laptops</h3>
<p>Gaming & Professional Laptops</p>
<p class="offer">Offer 10% - 40% OFF</p>
<button onclick="location.href='laptops.html'">View Products</button>
</div>

<!-- Headphones -->
<div class="card">
<img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e">
<h3>Headphones</h3>
<p>Wireless & Bluetooth Headsets</p>
<p class="offer">Offer 15% - 60% OFF</p>
<button onclick="location.href='headphones.html'">View Products</button>
</div>

<!-- Smart Watches -->
<div class="card">
<img src="https://images.unsplash.com/photo-1546868871-7041f2a55e12">
<h3>Smart Watches</h3>
<p>Fitness & Smart Tracking Watches</p>
<p class="offer">Offer 10% - 45% OFF</p>
<button onclick="location.href='watches.html'">View Products</button>
</div>

<!-- Speakers -->
<div class="card">
<img src="https://www.portronics.com/cdn/shop/files/Portronics_Resound_2_portable_Speaker_bluetooth.jpg?v=1736943285">
<h3>Bluetooth Speakers</h3>
<p>Portable Premium Speakers</p>
<p class="offer">Offer 20% - 50% OFF</p>
<button onclick="location.href='speakers.html'">View Products</button>
</div>

<!-- Accessories -->
<div class="card">
<img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30">
<h3>Accessories</h3>
<p>Chargers, Power Banks & More</p>
<p class="offer">Offer 10% - 35% OFF</p>
<button onclick="location.href='accessories.html'">View Products</button>
</div>

</div>

</div>

</body>
</html>
