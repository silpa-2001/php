<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decimal to Binary Converter</title>
</head>
<body>
    <?php
    if (isset($_POST["btm"])) {
        $x = $_POST["dec"];
        $bin = 0;
        $rem;
        $i = 1;
        while ($x != 0) {
            $rem = $x % 2;
            $x = (int)($x / 2); // Corrected line
            $bin = $bin + $rem * $i;
            $i = $i * 10;
        }
        echo "Binary representation: $bin";
    }
    ?>
    <form method="POST" action="">
        Enter the decimal: <input type="number" name="dec"><br>
        <input type="submit" name="btm" value="Convert">
    </form>
</body>
</html>
