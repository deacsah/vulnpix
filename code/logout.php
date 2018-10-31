<?php 
unset($_SESSION['loggedIn']);
session_destroy();
header('Location: /');
?>