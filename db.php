<?php
$conn = mysqli_connect("localhost","root","","fitness_tracker");
if(!$conn){
    die("Connection Failed");
}
session_start();
?>