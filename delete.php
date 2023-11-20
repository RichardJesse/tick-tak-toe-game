<?php
$connect = mysqli_connect('localhost', 'root', '', 'system');

if (!$connect) {
    echo mysqli_error($connect);
}

$success = 0;
$unsuccess = 0;

$email = $_GET['deleteemail'];

// Use prepared statement to prevent SQL injection
$sql = "DELETE FROM signuplist WHERE email=?";
$stmt = mysqli_prepare($connect, $sql);

if ($stmt) {
    // Bind the parameter
    mysqli_stmt_bind_param($stmt, "s", $email);

    // Execute the statement
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        header('location: display.php');
    } else {
        echo "Not successful" . mysqli_error($connect);
    }

    // Close the statement
    mysqli_stmt_close($stmt);
} else {
    echo "Prepared statement failed";
}

// Close the connection
mysqli_close($connect);
?>