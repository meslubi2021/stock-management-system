<?php 
if(session_status() == PHP_SESSION_NONE)
{
	session_start();//start session if session not start
}
if(!isset($_SESSION['logged_id'])){
	// die('Access is Denied!');
	header("Location: index.php");
}//end isset