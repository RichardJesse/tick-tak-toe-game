<?php
$connect = mysqli_connect('localhost', 'root', '', 'system');

if (!$connect) {
    echo mysqli_error($connect);
}

$success = 0;
$unsuccess = 0;

$email = $_GET['updateemail'];
$mysql = "SELECT * FROM signuplist WHERE email='$email'";
$result = mysqli_query($connect, $mysql);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $student_name = $row['email'];
    $username = $row['username'];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // code...
    $newEmail = $_POST['email'];
    $newUsername = $_POST['username'];

    // Use prepared statement to prevent SQL injection
    $sql = "UPDATE signuplist SET email=?, username=? WHERE email=?";
    $stmt = mysqli_prepare($connect, $sql);

    if ($stmt) {
        // Bind the parameters
        mysqli_stmt_bind_param($stmt, "sss", $newEmail, $newUsername, $email);

        // Execute the statement
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            header("location: display.php");
        } else {
            echo "Not added successfully" . mysqli_error($connect);
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        echo "Prepared statement failed";
    }
}

// Close the connection
mysqli_close($connect);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update</title>
    <style>
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
        .updata{
            border: 3px solid purple;
            padding: 30px;
            width: 40%;
            margin: auto;
            margin-top: 60px;
        }
        [type = "submit"]{
    width: 100px;
    height: 50px;
    background: transparent;
    border: 2px solid black;
    outline: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 1.2em;
    color: black;
    font-weight: 500;
    margin-left: 220px;
    transition: 400ms;
}
[type = "submit"]:hover{
    background-color: #fff;
    color: purple;
    transform: translateY(-2px);
}

    </style>
</head>
<body>
   <div class="updata"> <h1>Update Student Details</h1>
    <form method="post">
        
        <input type="email" name="email" placeholder="Enter new email" value="<?php echo $email;  ?>">
        <input type="text" name="username" placeholder="Enter new username"  value="<?php echo $username;  ?>">
    
        <input type="submit" name="submit" value="Update">
    </form></div>

</body>
</html>