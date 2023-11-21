<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query2 = "SELECT * FROM Players WHERE email = '$email' AND  password = '$password'";
        $result = mysqli_query($connect, $query2);

        if (mysqli_num_rows($result) > 0) {
            $_SESSION['message'] = 'You are in the database';
            $_SESSION['email'] = $email; // Set the email in the session
            header('Location: index.html');
            exit();
        } else {
            $_SESSION['message'] = 'You are wasting my time';
        }
    }
}


