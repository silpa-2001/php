<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Example</title>
</head>
<body>
<?php
if(isset($_COOKIE["username"])) {
    $username = $_COOKIE["username"];
    echo "<p>Welcome back, $username!</p>";
} else {
    echo "<p>Welcome, Guest!</p>";
}

if(isset($_POST["submit"])) {
    $username = $_POST["username"];
    setcookie("username", $username, time() + (86400 * 30), "/"); 
    echo "<p>Cookie set successfully!</p>";
}
?>
<form method="post">
    <label for="username">Enter your name:</label>
    <input type="text" id="username" name="username">
    <button type="submit" name="submit">Set Cookie</button>
</form>
</body>
</html>
