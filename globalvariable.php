<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>

<body>
<form method="post" action="">
Enter n1 <input type="number" name="n1"><br> Enter n2 <input type="number" name="n2"><br>
<input type="submit" name="btm">
</form>
<?php
if (isset($_POST["btm"])) {
$x = $_POST["n1"];
$y = $_POST["n2"]; function myTest()
{
global $x, $y;
$y = $x + $y;
}
myTest(); echo $y;
}
?>
</body>

</html>
