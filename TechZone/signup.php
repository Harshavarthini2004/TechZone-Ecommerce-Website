<!DOCTYPE html>
<html>
<head>

<title>TechZone Electronics - Sign Up</title>

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>

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
background:url('https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=1600&q=80');
background-size:cover;
background-position:center;
background-repeat:no-repeat;
padding:20px;
}

.signup-box{
width:500px;
padding:35px;
border-radius:20px;
background:rgba(255,255,255,0.15);
backdrop-filter:blur(15px);
border:1px solid rgba(255,255,255,0.2);
box-shadow:0 8px 32px rgba(0,0,0,0.3);
animation:fadeIn 1s ease;
}

.logo{
display:block;
margin:auto;
width:90px;
margin-bottom:15px;
}

.signup-box h1{
text-align:center;
color:white;
margin-bottom:25px;
font-size:32px;
}

.input-group{
margin-bottom:15px;
}

.input-group label{
display:block;
color:white;
font-weight:bold;
margin-bottom:5px;
}

.input-group i{
color:#00e5ff;
margin-right:5px;
}

.input-group input{
width:100%;
padding:12px;
border:none;
border-radius:10px;
background:rgba(255,255,255,0.9);
font-size:15px;
outline:none;
}

.btn{
width:100%;
padding:14px;
border:none;
border-radius:10px;
cursor:pointer;
font-size:16px;
font-weight:bold;
margin-top:10px;
transition:0.3s;
}

.signup-btn{
background:linear-gradient(45deg,#2563eb,#06b6d4);
color:white;
}

.signup-btn:hover{
transform:translateY(-3px);
}

.reset-btn{
background:#ef4444;
color:white;
}

.reset-btn:hover{
background:#dc2626;
}

p{
text-align:center;
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

#msg{
margin-top:8px;
font-size:14px;
font-weight:bold;
text-align:left;
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

<div class="signup-box">

<img class="logo"
src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png"
alt="signup">

<h1>🚀 Create Your Account</h1>

<form action="signup_process.php"
method="post"
onsubmit="return validatePassword()">

<div class="input-group">
<label><i class="fas fa-user"></i> First Name</label>
<input type="text" name="fname" required>
</div>

<div class="input-group">
<label><i class="fas fa-user"></i> Last Name</label>
<input type="text" name="lname" required>
</div>

<div class="input-group">
<label><i class="fas fa-envelope"></i> Email Address</label>
<input type="email" name="email" required>
</div>

<div class="input-group">
<label><i class="fas fa-user-circle"></i> Username</label>
<input type="text" name="uname" required>
</div>

<div class="input-group">
<label><i class="fas fa-lock"></i> Password</label>
<input
type="password"
name="pword"
id="pword"
required>
</div>

<div class="input-group">
<label><i class="fas fa-key"></i> Confirm Password</label>
<input
type="password"
name="cpword"
id="cpword"
onkeyup="validatePassword()"
required>

<p id="msg"></p>

</div>

<input type="submit"
value="✨ Create Account"
class="btn signup-btn">

<input type="reset"
value="🗑 Clear Form"
class="btn reset-btn">

</form>

<p>
Already have an account?
<br><br>
<a href="login.php">🔐 Login Here</a>
</p>

</div>

<script>

function validatePassword()
{
    var pass =
    document.getElementById("pword").value;

    var cpass =
    document.getElementById("cpword").value;

    var msg =
    document.getElementById("msg");

    if(cpass=="")
    {
        msg.innerHTML="";
        return false;
    }

    if(pass != cpass)
    {
        msg.innerHTML =
        "❌ Passwords do not match";

        msg.style.color =
        "#ff4d4d";

        return false;
    }
    else
    {
        msg.innerHTML =
        "✅ Passwords match";

        msg.style.color =
        "#22c55e";

        return true;
    }
}

</script>

</body>
</html>
