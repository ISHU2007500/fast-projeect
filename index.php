<?php

session_start();

if(!isset($_SESSION["user"])) {
    header("Location: loginform.php");
    exit;
}


?>

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
    font-family:Segoe UI,sans-serif;
}

body{
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    overflow:hidden;
    background:#050816;
}

/* Animated Background */

body::before{
    content:'';
    position:absolute;
    width:600px;
    height:600px;
    background:#00f7ff;
    border-radius:50%;
    filter:blur(180px);
    top:-200px;
    left:-150px;
    animation:move1 8s infinite alternate;
}

body::after{
    content:'';
    position:absolute;
    width:500px;
    height:500px;
    background:#ff00ff;
    border-radius:50%;
    filter:blur(180px);
    bottom:-150px;
    right:-100px;
    animation:move2 8s infinite alternate;
}

@keyframes move1{
    from{
        transform:translateY(0);
    }
    to{
        transform:translateY(150px);
    }
}

@keyframes move2{
    from{
        transform:translateY(0);
    }
    to{
        transform:translateY(-120px);
    }
}

/* Card */

.dashboard{

    position:relative;
    z-index:2;

    width:430px;

    padding:45px;

    border-radius:30px;

    background:rgba(255,255,255,.08);

    border:1px solid rgba(255,255,255,.2);

    backdrop-filter:blur(20px);

    box-shadow:
    0 20px 60px rgba(0,0,0,.5),
    inset 0 0 20px rgba(255,255,255,.15);

    transform-style:preserve-3d;

    transition:.5s;
}

.dashboard:hover{

    transform:
    rotateX(10deg)
    rotateY(-10deg)
    scale(1.04);

    box-shadow:
    0 40px 80px rgba(0,255,255,.4);
}

.dashboard h1{

    color:white;

    font-size:34px;

    margin-bottom:15px;

    text-shadow:
    0 0 15px cyan,
    0 0 30px cyan;
}

.dashboard p{

    color:#ddd;

    font-size:18px;

    margin-bottom:35px;
}

.btn{

    display:inline-block;

    text-decoration:none;

    padding:15px 40px;

    border-radius:50px;

    color:white;

    font-size:18px;

    font-weight:bold;

    background:linear-gradient(45deg,#00f7ff,#0066ff);

    box-shadow:
    0 0 25px cyan,
    0 10px 30px rgba(0,255,255,.4);

    transition:.4s;
}

.btn:hover{

    transform:
    translateY(-8px)
    scale(1.08);

    box-shadow:
    0 0 40px cyan,
    0 0 80px cyan;

    background:linear-gradient(45deg,#00ffff,#00ff99);
}

</style>
</head>
<body>

        <body>

<div class="bg"></div>

<div class="dashboard">

    <h1>🔥 Welcome <?php echo $_SESSION["user"]; ?></h1>

    <p>You have successfully logged in.</p>

    <a href="logout.php" class="btn">Logout</a>

</div>

</body>
