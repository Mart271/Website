<?php
    session_start();
    if (!isset($_SESSION['user_level']) or ($_SESSION['user_level'] !=1)){
        header("Location: login.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website ni Tagab</title>
    <link rel="stylesheet" type="text/css" href="css/include.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
    <div id="container">
        <?php include('header_admin.php'); ?>
        <div id="content">
            <h2>Registered Users</h2>
            <p>
                <?php
                require('mysqli_connect.php'); // Ensure the connection to the database is correct
                $q = "SELECT lname, fname, email, DATE_FORMAT(registration_date, '%M %D %Y') AS regdat, user_id FROM users ORDER BY user_id ASC";
                $r = mysqli_query($dbcon, $q); // Run the query
                if ($r) {    
                    // Output the table if query is successful
                    echo '<table>
                    <tr>
                    <td><strong>Name</strong></td>
                    <td><strong>Email</strong></td>
                    <td><strong>Registration Date</strong></td>
                    <td><strong>Action:</strong></td>
                    </tr>';
                    // Loop through the rows of data
                    while ($row = mysqli_fetch_array($r)) {
                        echo '<tr>
                        <td>'.$row['lname'].', '.$row['fname'].'</td>
                        <td>'.$row['email'].'</td>
                        <td>'.$row['regdat'].'</td>
                        <td><a href="edit._user.php?id='.$row['user_id'].'"><i class="fa-solid fa-user-pen"></i></a>
                        <a href="delete_user.php?id='.$row['user_id'].'"><i class="fa-solid fa-trash"></i></a></td>
                        </tr>';
                    }
                    echo '</table>';
                } else {
                    // Display an error message if the query fails
                    echo '<p class="Error">The current registered users could not be retrieved.</p>';
                }
                mysqli_close($dbcon); // Close the database connection
                ?>
            </p>
        </div>
        <?php include('footer.php'); ?>
    </div>
</body>
</html>

