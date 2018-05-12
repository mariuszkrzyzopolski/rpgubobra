<?php
session_start();
session_destroy();
header('Location: loguj.php');
?>