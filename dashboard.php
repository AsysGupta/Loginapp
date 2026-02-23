<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="box">
<h2>Welcome <?php echo htmlspecialchars($_SESSION['username']); ?></h2>
<a href="logout.php">Logout</a>
</div>

</body>
</html>
