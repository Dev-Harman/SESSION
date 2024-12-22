<?php
session_start();

if (!isset($_SESSION['user_id']) || $_SESSION['user_id'] != 1) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>

<body>
    <h2>Welcome to Admin Dashboard</h2>
    <p>Hello, Admin <?php echo $_SESSION['username']; ?>!</p>
    <a href="logout.php">Logout</a>
</body>

</html>