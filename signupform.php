<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign Up</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    overflow:hidden;
    background:linear-gradient(135deg,#000428,#004e92);
}

/* Animated Background */

body::before{
    content:"";
    position:absolute;
    width:420px;
    height:420px;
    background:#00ffff;
    border-radius:50%;
    filter:blur(140px);
    top:-150px;
    left:-120px;
    animation:leftGlow 7s infinite alternate;
}

body::after{
    content:"";
    position:absolute;
    width:420px;
    height:420px;
    background:#ff00ff;
    border-radius:50%;
    filter:blur(140px);
    bottom:-150px;
    right:-120px;
    animation:rightGlow 7s infinite alternate;
}

@keyframes leftGlow{
    100%{
        transform:translate(140px,140px);
    }
}

@keyframes rightGlow{
    100%{
        transform:translate(-140px,-140px);
    }
}

/* Card */

.signup{
    position:relative;
    width:420px;
    padding:45px;
    border-radius:30px;
    background:rgba(255,255,255,.08);
    backdrop-filter:blur(20px);
    border:1px solid rgba(255,255,255,.25);
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

.signup:hover{
    transform:
    rotateX(10deg)
    rotateY(-10deg)
    scale(1.05);

    box-shadow:
    0 0 60px cyan,
    0 0 120px cyan;
}

h1{
    color:#fff;
    margin-bottom:30px;
    font-size:38px;
    text-shadow:
    0 0 20px cyan,
    0 0 40px cyan;
}

/* Inputs */

input{
    width:100%;
    padding:15px;
    margin:12px 0;
    border:none;
    outline:none;
    border-radius:40px;
    background:rgba(255,255,255,.15);
    color:#fff;
    font-size:16px;
    transition:.4s;
}

input::placeholder{
    color:#ddd;
}

input:focus{
    transform:scale(1.05);
    box-shadow:
    0 0 20px cyan,
    0 0 40px cyan;
}

/* Button */

input[type=submit]{
    margin-top:18px;
    cursor:pointer;
    font-size:18px;
    font-weight:bold;
    color:#fff;
    background:linear-gradient(45deg,#00f5ff,#0066ff);
    box-shadow:
    0 0 20px cyan,
    0 10px 25px rgba(0,255,255,.4);
}

input[type=submit]:hover{
    transform:translateY(-6px);
    background:linear-gradient(45deg,#00ffff,#00ff99);
    box-shadow:
    0 0 35px cyan,
    0 0 80px cyan;
}

/* Link */

a{
    display:block;
    margin-top:25px;
    color:white;
    text-decoration:none;
    transition:.3s;
}

a:hover{
    color:#00ffff;
    text-shadow:0 0 15px cyan;
}

</style>

</head>
<body>

<div class="signup">

<h1>Create Account</h1>

<form action="signup.php" method="post">

<input type="text" name="username" placeholder="Username" required>

<input type="email" name="email" placeholder="Email" required>

<input type="password" name="password" placeholder="Password" required>

<input type="submit" value="Create Account">

</form>

<a href="loginform.php">Already have an account? Login</a>

</div>

</body>
</html>