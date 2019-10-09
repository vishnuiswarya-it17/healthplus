<?php
session_start();
unset($_SESSION['username']);  
if(session_destroy())
{
$_SESSION = array();
header("Location: index.php");
}
?>