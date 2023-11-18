<?php
// session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['signup'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        
       $query1 = "INSERT INTO Players (email , password) VALUES ('$email', '$password')";
       $status = mysqli_query($connect,$query1);
       if($status){
           echo 'you were added successfully';
       }
       else{
           echo 'its not you its us';
       }
   }
   }

?>