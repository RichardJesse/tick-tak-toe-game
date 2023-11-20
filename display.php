<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Display</title>
	<style>
		table, th, td{
			border: 1px solid grey;
			border-collapse: collapse;
			padding: 9px;
			width: 50%;
		}
		table{
			margin: auto;
			border-radius: 6px;
			background-color: white;

		}
		th {
			background-color: skyblue;
		}
		h1{
			text-align: center;
		}

        h1 {
            text-align: center;
            color: white;
        }
        input, select{
            display: block;
            margin: 5px auto;
            padding: 8px 20px;
        }
        body{
            background-image: url('tictac2.png');
            background-size: cover;
            background-repeat: no-repeat;
        }
        .displaya{
            border: 3px solid purple;
            padding: 30px;
            width: 40%;
            margin: auto;
            margin-top: 60px;
            height: 500px;
        }
        button a{
        	text-decoration: none;
        }
        button{
    width: auto;
    height: 30px;
    background: transparent;
    border: 2px solid black;
    outline: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 0.9em;
    color: black;
    font-weight: 500;
    
    transition: 400ms;
}
button:hover{
    background-color: #fff;
    color: purple;
    transform: translateY(-2px);
}

    
	</style>
</head>
<body>
	
	<div class="displaya"><h1>Tictactoe Gamers</h1>
	<table>
		<tr>
			<th>Email</th>
			<th>Username</th>
			
			<th>Update</th>
			<th>Delete</th>
		</tr>
		<?php
	$connect = mysqli_connect('localhost','root','','system');
if (!$connect) {
	// code...
	echo mysqli_error($connect);
}
  $success = 0;
  $unsuccess = 0;
			$sql = "SELECT * FROM signuplist";
			$result = mysqli_query($connect, $sql);
		if ($result) {
		while ($row = mysqli_fetch_assoc($result)) {
					$email = $row['email'];
					$username = $row['username'];

				echo "<tr>
						<td>$email</td>
						<td>$username</td>
	
				<td>
				<button>
				<a href='update.php?updateemail=$email'>Update</a>
				</button>
				</td>
				<td>
				<button>
	<a href='delete.php?deleteemail=$email'>Delete</a>
				</button></td>
					</tr>";	
				}
				
		
				
			}



		?>
	</table>
</div>
</body>
</html>