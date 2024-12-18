<?php
session_start();

// Handle logout immediately when this page is accessed
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Clear session data and destroy the session
    $_SESSION = [];
    session_destroy();

    // Redirect based on the 'redirect' parameter
    if (isset($_GET['redirect']) && $_GET['redirect'] === 'index') {
        header('Location: index.php'); // Redirect to index.php
    } elseif (isset($_GET['redirect']) && $_GET['redirect'] === 'admin') {
        header('Location: admin_login.php'); // Redirect to admin login
    } elseif (isset($_GET['redirect']) && $_GET['redirect'] === 'member') {
        header('Location: member_login.php'); // Redirect to member login
    } else {
        // Default redirection (you can modify this if needed)
        header('Location: index.php');
    }
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logging Out...</title>
    <link rel="stylesheet" href="css/include.css"> <!-- Link to your CSS file -->
</head>
<body>
    <!-- Simple message while logging out -->
    <div class="logout-container">
        <h1>Logging you out...</h1>
    </div>
</body>
</html>
