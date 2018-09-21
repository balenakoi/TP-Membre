<?php

session_start();


// Deleting Session and Session Variables

$_SESSION = array();

session_destroy();


// Deleting automatic login cookies

setcookie('login', '');

setcookie('pass_hache', '');
?>
