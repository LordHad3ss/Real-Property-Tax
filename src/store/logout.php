<?php
session_start();

unset($_SESSION['email']);
unset($_SESSION['userid']);
unset($_SESSION['name']);

session_destroy();

echo "<script type='text/javascript'>window.location = '../../index.php'</script>";



?>