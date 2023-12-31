<?php
session_start();
$_SESSION['email'] = $email; 

if(!isset($_SESSION['email'])){
    header('location:index.php');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="gameStyles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="tickicon.png">
    <title>Document</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            position: relative;
            isolation: isolate;
        }
       body::after{
        content: '';
        position: absolute;
        z-index: -1;
        inset: 0;
        background-image: url(tictac2.png);
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        min-height: 100vh;
        opacity: 0.5;
       }
        #container {
            text-align: center;
            margin:auto;
            
        }

        .restartBtn {
            display: block;
            margin: auto;
            margin-top: 19px;
        }
        a{
            text-decoration: none;
            color: white;
        }
    </style>
</head>

<body>
    
    <div id="container">
        <h1>best tick tac toe game</h1>

        <button class="restartBtn">
            <a href="oneGame.html">Play against AI</a></button>
        <button class="restartBtn"><a href="game.php">Play with a Friend </a></button>
    </div>
    
   
</body>

</html>