<?php
session_start();

unset($_SESSION['loggedin']);

header('Location: ../index.html');
exit(0);
?>
