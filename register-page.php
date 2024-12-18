<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration Page - Tagab's Website</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/include.css">
</head>
<body>
    <div id="container">
        <div id="header">
            <h1>Registration</h1>
        </div>
        <?php include('nav_2.php'); ?>
        <?php include('mysqli_connect.php'); ?>
        
        <div id="content">
        <?php
            // Initialize errors array
            $errors = array();

            // Check if the form has been submitted
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // Validate first name
                if (empty($_POST['fname'])) {
                    $errors[] = 'Please enter your first name.';
                } else {
                    $fn = trim($_POST['fname']);
                }

                // Validate last name
                if (empty($_POST['lname'])) {
                    $errors[] = 'Please enter your last name.';
                } else {
                    $ln = trim($_POST['lname']);
                }

                // Validate email
                if (empty($_POST['email'])) {
                    $errors[] = 'Please enter your email.';
                } else {
                    $email = trim($_POST['email']);
                }

                // Validate password and confirm password
                if (empty($_POST['psword1'])) {
                    $errors[] = 'Please enter your password.';
                } else {
                    $psword1 = trim($_POST['psword1']);  // Store the entered password
                    // Check if passwords match
                    if ($psword1 != $_POST['psword2']) {
                        $errors[] = 'Your passwords do not match.';
                    } else {
                        // Hash the password before storing it
                        $p_hashed = password_hash($psword1, PASSWORD_DEFAULT);
                    }
                }

                // If no errors, insert data into the database
                if (empty($errors)) {
                    // Prepare SQL statement for inserting data
                    $query = "INSERT INTO users (fname, lname, email, psword, registration_date) VALUES (?, ?, ?, ?, NOW())";

                    // Prepare and bind the statement
                    $stmt = mysqli_prepare($dbcon, $query);
                    if ($stmt) {
                        mysqli_stmt_bind_param($stmt, 'ssss', $fn, $ln, $email, $p_hashed);
                        // Execute the query
                        if (mysqli_stmt_execute($stmt)) {
                            header('Location: register-thanks.php');
                            exit();
                        } else {
                            echo 'Execution failed: ' . mysqli_stmt_error($stmt);
                        }
                        // Close the statement
                        mysqli_stmt_close($stmt);
                    } else {
                        echo 'Statement preparation failed: ' . mysqli_error($dbc);
                    }
                } else {
                    // Display errors if any
                    echo '<div class="error-container">
                            <h2>Error!</h2>
                            <p class="error">The following error(s) occurred:<br>';
                    foreach ($errors as $ex) {
                        echo "→ " . htmlspecialchars($ex) . "<br/>";
                    }
                    echo '</p>
                          <h4>Please try again.</h4>
                          </div><br/><br/>';
                }
            }
        ?>

            <form action='register-page.php' method="post">
                <p>
                    <label class='label' for='fname'>First Name:</label>
                    <input type='text' id='fname' name='fname' size="30" maxlength="80"
                    value="<?php if (isset($_POST['fname'])) echo htmlspecialchars($_POST['fname']); ?>">
                </p>
                <p>
                    <label class='label' for='lname'>Last Name:</label>
                    <input type='text' id='lname' name='lname' size="30" maxlength="80"
                    value="<?php if (isset($_POST['lname'])) echo htmlspecialchars($_POST['lname']); ?>">
                </p>
                <p>
                    <label class='label' for='email'>Email Address:</label>
                    <input type='email' id='email' name='email' size="30" maxlength="50"
                    value="<?php if (isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>">
                </p>
                <p>
                    <label class='label' for='psword1'>Password:</label>
                    <input type='password' id='psword1' name='psword1' size="30" maxlength="50">
                </p>
                <p>
                    <label class='label' for='psword2'>Confirm Password:</label>
                    <input type='password' id='psword2' name='psword2' size="30" maxlength="50">
                </p>
                <p>
                    <input type="submit" id="submit" name="submit" value="Register">
                </p>
            </form>
        </div>
    </div>
    <?php include('footer.php'); ?>
</body>
</html>

