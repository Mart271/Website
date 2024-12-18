<?php
session_start();
if (!isset($_SESSION['user_level']) or ($_SESSION['user_level'] != 1)) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Website ni Tagab</title>
    <!-- Link to the separate CSS file -->
    <link rel="stylesheet" type="text/css" href="css/include.css">
</head>
<body>

    <!-- Main Content -->
    <div class="main-content">
        <?php include('header_admin.php'); ?> 

        <center>
            <img src="https://dashthis.com/media/4150/data-visualization-dashboard.png" alt="Admin Dashboard" />
        </center>

        <button class="Button">View All Users</button>

        <?php include('footer.php'); ?>
    </div>
</body>
</html>
