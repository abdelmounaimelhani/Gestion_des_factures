<?php 
session_start();
session_destroy();
session_reset();
if (!isset($_SESSION["conn"])) {
	header("location:http://localhost/Azrou-Sani/Login/");
}