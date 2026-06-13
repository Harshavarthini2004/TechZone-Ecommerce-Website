<!DOCTYPE html>
<html>
<head>
<title>TechZone Electronics Login</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Segoe UI',sans-serif;
}

body{
height:100vh;
display:flex;
justify-content:center;
align-items:center;
background:url('https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=1600&q=80');
background-size:cover;
background-position:center;
background-repeat:no-repeat;
}

.login-box{
width:420px;
padding:35px;
border-radius:20px;
background:rgba(255,255,255,0.15);
backdrop-filter:blur(15px);
border:1px solid rgba(255,255,255,0.2);
box-shadow:0 8px 32px rgba(0,0,0,0.3);
text-align:center;
animation:fadeIn 1s ease;
}

.logo{
width:90px;
margin-bottom:10px;
}

.login-box h1{
color:white;
margin-bottom:20px;
font-size:32px;
}

input{
width:100%;
padding:14px;
margin:10px 0;
border:none;
border-radius:10px;
font-size:16px;
background:rgba(255,255,255,0.9);
outline:none;
}

.btn{
width:100%;
padding:14px;
margin-top:10px;
border:none;
border-radius:10px;
font-size:16px;
font-weight:bold;
cursor:pointer;
transition:0.3s;
}

.login-btn{
background:linear-gradient(45deg,#2563eb,#06b6d4);
color:white;
}

.login-btn:hover{
transform:translateY(-3px);
}

.show-btn{
background:#22c55e;
color:white;
}

.show-btn:hover{
background:#16a34a;
}

p{
margin-top:15px;
color:white;
}

a{
color:#00e5ff;
font-weight:bold;
text-decoration:none;
}

a:hover{
text-decoration:underline;
}

@keyframes fadeIn{

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

<div class="login-box">

<img class="logo"
src="https://cdn-icons-png.flaticon.com/512/1041/1041884.png"
alt="logo">

<h1>🔐 TechZone Login</h1>

<form action="check.php" method="post">

<input
type="text"
name="name"
placeholder="Enter Username"
required>

<input
type="password"
id="psw"
name="pword"
placeholder="Enter Password"
required>

<button
type="button"
class="btn show-btn"
onclick="showPassword()">
👁 Show / Hide Password
</button>

<button
type="submit"
class="btn login-btn">
🚀 Login
</button>

</form>

<p>
Don't have an account?
<br><br>
<a href="signup.php">Create Account</a>
</p>

</div>

<script>

function showPassword(){

var x=document.getElementById("psw");

if(x.type==="password"){
x.type="text";
}
else{
x.type="password";
}

}

</script>

</body>
</html>