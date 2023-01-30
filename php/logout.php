<?php
session_start();
session_unset();
session_destroy();
echo "<script>alert('You have logged out successfully!');</script>";
header("Location: index.php");
exit();