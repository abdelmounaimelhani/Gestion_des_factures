<?php 
session_start();
session_destroy();
session_reset();
header("location:http://localhost/Azrou-Sani/Login/");
