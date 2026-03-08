<?php
include("db.php");

if(isset($_SESSION['user_id'])){
    session_unset();   // remove all session variables
    session_destroy(); // destroy session
}

header("Location: index.php");
exit();
?>