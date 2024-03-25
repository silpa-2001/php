<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armstrong Number Checker</title>
</head>
<body>
    <form action="" method="POST">
        Enter a Number: <input type="number" name="num"><br>
        <input type="submit" name="btn" value="Check">
    </form>

    <?php
    if (isset($_POST["btn"])) {
        $num = $_POST["num"];
        $total = 0;
        $x = $num;
        while ($x != 0) {
            $rem = $x % 10;
            $total = $total + $rem * $rem * $rem;
            $x = intval($x / 10); // Corrected line
        }
        if ($num == $total) {
            echo "<script>alert('Yes, it is an Armstrong number.')</script>";
        } else {
            echo "<script>alert('No, it is not an Armstrong number.')</script>";
        }
    }
    ?>
</body>
</html>
