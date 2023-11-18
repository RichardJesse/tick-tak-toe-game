<?php
$server = 'localhost';
$user = 'root';
$pass = '';
$dbName = 'tick-tac-toe-game';

$connect = mysqli_connect($server , $user , $pass , $dbName);
if(!$connect){
    echo 'the server could not be reached at this time';
}

?>