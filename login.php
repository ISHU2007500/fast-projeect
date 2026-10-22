<?php

include "connection.php";

$userName = $_POST["username"];
$password = $_POST["password"];

$statement = $connection->prepare("SELECT * FROM tiktok WHERE user_name = ?");
$statement->execute([$userName]);

$data = $statement->fetch(PDO::FETCH_ASSOC);

if ($data) {

    if (password_verify($password, $data["user_password"])) {

        session_start();
        $_SESSION["user"] = $data["user_name"];

        header("Location: index.php");
        exit();

    } else {

        showPage("❌ Incorrect Password", "#ff4d4d");

    }

} else {

    showPage("⚠️ User Doesn't Exist", "#ffaa00");

}

function showPage($message, $color){
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Login Failed</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial,Helvetica,sans-serif;
}

body{
height:100vh;
display:flex;
justify-content:center;
align-items:center;
background:linear-gradient(135deg,#0f2027,#203a43,#2c5364);
overflow:hidden;
}

body::before{
content:"";
position:absolute;
width:400px;
height:400px;
background:#00ffff;
border-radius:50%;
filter:blur(160px);
top:-120px;
left:-120px;
animation:move1 7s infinite alternate;
}

body::after{
content:"";
position:absolute;
width:400px;
height:400px;
background:#ff00ff;
border-radius:50%;
filter:blur(160px);
bottom:-120px;
right:-120px;
animation:move2 7s infinite alternate;
}

@keyframes move1{
100%{transform:translate(120px,120px);}
}

@keyframes move2{
100%{transform:translate(-120px,-120px);}
}

.card{
position:relative;
z-index:10;
width:420px;
padding:45px;
text-align:center;
border-radius:30px;
background:rgba(255,255,255,.08);
backdrop-filter:blur(20px);
border:1px solid rgba(255,255,255,.2);
box-shadow:0 25px 60px rgba(0,0,0,.6);
transition:.5s;
}

.card:hover{
transform:rotateX(10deg) rotateY(-10deg) scale(1.05);
box-shadow:0 0 50px cyan;
}

.icon{
font-size:70px;
margin-bottom:20px;
}

h1{
color:<?php echo $color; ?>;
font-size:34px;
margin-bottom:15px;
text-shadow:0 0 20px <?php echo $color; ?>;
}

p{
color:white;
font-size:17px;
margin-bottom:30px;
}

a{
display:inline-block;
padding:15px 40px;
text-decoration:none;
color:white;
border-radius:50px;
font-weight:bold;
background:linear-gradient(45deg,#00ffff,#0066ff);
box-shadow:0 0 20px cyan;
transition:.4s;
}

a:hover{
transform:translateY(-5px);
box-shadow:0 0 40px cyan;
}

</style>

</head>

<body>

<div class="card">

<div class="icon">🔒</div>

<h1><?php echo $message; ?></h1>

<p>Please check your credentials and try again.</p>

<a href="loginform.php">Back to Login</a>

</div>

</body>
</html>

<?php
exit();
}
?>