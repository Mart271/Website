<!DOCTYPE html>
<html lang="en">
<head>
    <title>Log in</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/include.css">
</head>
<body>
<div id="container">
    <?php
    include('nav_2.php');
    ?>
    <div id="content">
        <?php
        session_start(); // Start the session
        $errors = []; // Array to hold error messages

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            require('mysqli_connect.php');

            // Validate email
            if (empty($_POST['email'])) {
                $errors[] = 'You forgot to enter your email address.';
            } else {
                $e = trim($_POST['email']);
            }

            // Validate password
            if (empty($_POST['psword'])) {
                $errors[] = 'You forgot to enter your password.';
            } else {
                $p = trim($_POST['psword']);
            }

            // If both email and password are set
            if (empty($errors)) {
                // Use parameterized query to prevent SQL injection
                $q = "SELECT user_id, fname, user_level, psword FROM users WHERE email=?";
                $stmt = mysqli_prepare($dbcon, $q);
                mysqli_stmt_bind_param($stmt, 's', $e);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);

                // If a user is found
                if (mysqli_num_rows($result) == 1) {
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Debugging: Check entered password and stored hash
                    echo "Entered Password: " . htmlspecialchars($p) . "<br>";
                    echo "Stored Hash: " . htmlspecialchars($row['psword']) . "<br>";
                    
                    if (password_verify($p, $row['psword'])) {
                        // Password matched, start session
                        $_SESSION['user_id'] = $row['user_id'];
                        $_SESSION['fname'] = $row['fname'];
                        $_SESSION['user_level'] = $row['user_level'];

                        mysqli_free_result($result);
                        mysqli_close($dbcon);

                        // Redirect to the appropriate page
                        $url = ($_SESSION['user_level'] == 1) ? 'admin_login.php' : 'member_login.php';
                        ob_end_clean(); // Clean any output buffer before redirect
                        header("Location: $url");
                        exit();
                    } else {
                        echo '<p class="error">The email address and password do not match our records.</p>';
                    }
                } else {
                    echo '<p class="error">The email address is not registered.</p>';
                }

                mysqli_stmt_close($stmt);
            }
            mysqli_close($dbcon);
        }
        ?>

        <!-- Display errors -->
        <?php if (!empty($errors)): ?>
            <div class="error-messages">
                <?php foreach ($errors as $error): ?>
                    <p class="error"><?php echo htmlspecialchars($error); ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <!-- Login form -->
        <form action="login.php" method="post" class="registration-form">
            <p>
                <label for="email" class="label">Email Address:</label>
                <input type="email" id="email" name="email" size="30" maxlength="50" value="<?php if (isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>">
            </p>
            <p>
                <label for="psword" class="label">Password:</label>
                <input type="password" id="psword" name="psword" size="20" maxlength="40" value="">
            </p>
            <p class="button-wrapper">
                <input type="submit" id="submit" name="submit" value="Login" class="submitbutton">
            </p>
        </form>
    </div>
</div>
</body>
</html>