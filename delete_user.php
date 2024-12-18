<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete User</title>
    <link rel="stylesheet" type="text/css" href="css/include.css">
</head>
<body>
    <div id="container">
        <?php include('header.php'); ?>
        <?php include('nav.php'); ?>


        <!-- Main Content Section -->
        <div id="content">
            <h2>Deleting Record...</h2>
            <?php
                if ((isset($_GET['id'])) && (is_numeric($_GET['id']))) {
                    $id = $_GET['id'];
                } elseif ((isset($_POST['id'])) && (is_numeric($_POST['id']))) {
                    $id = $_POST['id'];
                } else {
                    echo '<p>You are not supposed to be here!</p>
                    <p><a href="index.php">Click here to go back</a></p>';
                    exit();
                }

                require('mysqli_connect.php');
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    if ($_POST['sure'] == 'Yes') {
                        $q = "DELETE FROM users WHERE user_id = $id";
                        $result = @mysqli_query($dbcon, $q);
                        if (mysqli_affected_rows($dbcon) == 1) {
                            echo '<p>The record has been deleted successfully.</p>
                            <p><a href="Register_view_user.php">Go back</a></p>';
                        } else {
                            echo '<p>The record could not be deleted due to a system error.</p>';
                        }
                    } else { // No
                        echo '<p>The record was not deleted because you did not confirm.</p>
                        <p><a href="Register_view_user.php">Go back to the users list</a></p>';
                    }
                } else { // Display details of user
                    $q = "SELECT CONCAT(fname, ' ', lname) FROM users WHERE user_id = $id";
                    $result = @mysqli_query($dbcon, $q);
                    if ($result && mysqli_num_rows($result) == 1) {
                        $row = mysqli_fetch_array($result, MYSQLI_NUM);
                        echo "<h3>Are you sure you want to delete this record: $row[0]?</h3>";
                        echo '
                        <form action="delete_user.php" method="post">
                        <input id="submit-yes" type="submit" name="sure" value="Yes">
                        <input id="submit-no" type="submit" name="sure" value="No">
                        <input type="hidden" name="id" value="'.$id.'">
                        </form>
                        ';
                    } else { // Not valid ID, no user found
                        echo '<h3>This user does not exist. <a href="index.php">Go back to the homepage</a></h3>';
                    }
                }
                mysqli_close($dbcon);
            ?>
        </div>

        <?php include('footer.php'); ?>
    </div>
</body>
</html>
