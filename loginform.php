<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        *{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Poppins',sans-serif;
}

body{

display:flex;
justify-content:center;
align-items:center;

height:100vh;

overflow:hidden;

background:linear-gradient(135deg,#020024,#090979,#00d4ff);
}

/* Background Glow */

.circle1{
position:absolute;
width:350px;
height:350px;
background:#00fff7;
border-radius:50%;
filter:blur(120px);
top:-120px;
left:-120px;
animation:move1 8s infinite alternate;
}

.circle2{
position:absolute;
width:350px;
height:350px;
background:#ff00ff;
border-radius:50%;
filter:blur(120px);
bottom:-120px;
right:-120px;
animation:move2 8s infinite alternate;
}

@keyframes move1{
100%{
transform:translate(120px,120px);
}
}

@keyframes move2{
100%{
transform:translate(-120px,-120px);
}
}

/* Login Card */

.login-box{

position:relative;

width:420px;

padding:45px;

border-radius:30px;

background:rgba(255,255,255,.08);

backdrop-filter:blur(25px);

border:1px solid rgba(255,255,255,.3);

box-shadow:
0 25px 60px rgba(0,0,0,.5),
inset 0 0 15px rgba(255,255,255,.2);

text-align:center;

transition:.5s;

animation:float 4s ease-in-out infinite;
}

@keyframes float{

50%{
transform:translateY(-15px);
}

}

.login-box:hover{

transform:
rotateX(10deg)
rotateY(-10deg)
scale(1.04);

box-shadow:
0 35px 80px rgba(0,255,255,.4);
}

h1{

color:white;

margin-bottom:30px;

font-size:40px;

text-shadow:
0 0 20px cyan,
0 0 40px cyan;
}

/* Inputs */

input[type=text],
input[type=password]{

width:100%;

padding:16px;

margin:15px 0;

border:none;

outline:none;

border-radius:50px;

font-size:17px;

color:white;

background:rgba(255,255,255,.12);

box-shadow:
inset 0 0 12px rgba(255,255,255,.2);

transition:.4s;
}

input::placeholder{
color:#ddd;
}

input:focus{

transform:scale(1.05);

background:rgba(255,255,255,.18);

box-shadow:
0 0 20px cyan,
0 0 35px cyan;
}

/* Button */

input[type=submit]{

width:100%;

padding:16px;

margin-top:20px;

border:none;

border-radius:50px;

cursor:pointer;

font-size:18px;

font-weight:bold;

color:white;

background:linear-gradient(45deg,#00f5ff,#0066ff);

box-shadow:
0 0 25px cyan,
0 10px 25px rgba(0,255,255,.4);

transition:.4s;
}

input[type=submit]:hover{

transform:translateY(-6px);

background:linear-gradient(45deg,#00ffff,#00ff99);

box-shadow:
0 0 35px cyan,
0 0 70px cyan;
}

/* Link */

a{

display:block;

margin-top:25px;

text-decoration:none;

color:white;

font-size:16px;

transition:.3s;
}

a:hover{

color:#00ffff;

text-shadow:0 0 15px cyan;
}

        </style>
</head>
<body>


        <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>3D Login</title>

<link rel="stylesheet" href="style.css">

</head>
<body>

<div class="circle1"></div>
<div class="circle2"></div>

<div class="login-box">

<h1>Login</h1>

<form action="login.php" method="post">

<input type="text" name="username" placeholder="Username" required>

<input type="password" name="password" placeholder="Password" required>

<input type="submit" value="Login">

</form>

<a href="signupform.php">Create New Account</a>

</div>

</body>
</html>