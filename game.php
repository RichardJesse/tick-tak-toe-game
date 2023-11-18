<?php
  session_start();
  
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Tic Tac Toe</title>
		<link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="gameStyles.css">
		<link rel="stylesheet" href="node_modules/skeleton-css/css/skeleton.css">
		<link rel="icon" href="tickicon.png">
        <style>
            .container{
                display:flex;
                align-items: center;
                justify-content: center;
            }
        </style>
	</head>
	<body>
		
		<div class="container">
			<div class="menu">
				<h1>Tic - Tac - Toe</h1>
				<h3>How To Play</h3>
				<ol>
					<li>Player 1 Create a new game by entering the username</li>
					<li>Player 2 Enter another username and the room id that is displayed on first window.</li>
					<li>Click on join game. </li>
				</ol>
				<h4>Create a new Game</h4>
				<input type="text" name="name" id="nameNew" placeholder="Enter your name" required<?php
				$email ?> >
				<button id="new">New Game</button>
				<br><br>
				<h4>Join an existing game</h4>
				<input type="text" name="name" id="nameJoin" placeholder="Enter your name" required>
				<input type="text" name="room" id="room" placeholder="Enter Game ID" required>
				<button id="join">Join Game</button>
			</div>
			<div class="gameBoard" style="display: none;">
				<h2 id="userHello"></h2>
				<h3 id="turn"></h3>
                <div id="gamingBoxes" class="center">
                    <div class="box" id="button_00"></div>
                    <div class="box" id="button_01"></div>
                    <div class="box" id="button_02"></div>
                    <div class="box" id="button_10"></div>
                    <div class="box" id="button_11"></div>
                    <div class="box" id="button_12"></div>
                    <div class="box" id="button_20"></div>
                    <div class="box" id="button_21"></div>
                    <div class="box" id="button_22"></div>
                </div>
			
			</div>
		</div>
		<script src="node_modules/jquery/dist/jquery.min.js"></script>
		<script src="/socket.io/socket.io.js"></script>
		<script src="main.js"></script>
        <script src="webproject.js"></script>
		
	</body>
</html>