
<?php
$dbcon = @mysqli_connect('localhost', 'marktagab', 'marktagab', 'members_tagab') 
OR die('Could not connect to MySQL Server: ' . mysqli_connect_error());

mysqli_set_charset($dbcon, 'utf8');