<?php
include 'index.php';
include 'connect.php';
if (isset($_POST['logout'])) {
session_start();
session_unset();
session_destroy();

header("Location: index.php?logout=success");
}
?>