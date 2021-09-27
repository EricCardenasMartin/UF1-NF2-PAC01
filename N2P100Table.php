<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" id="fname" name="fname"><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>

<?php
echo "<table style='font-family: Arial,sans-serif; font-size: 80%;";
echo "width: 100%;'>";
echo "<tr>";
echo "<td style='width: 50%;'>";
echo "First Name:";
echo "</td >";
echo "<td style='width: 50%'>";
echo $_POST["fname"];
echo "</td>";
echo "</tr>";
echo "</table > ";
?>

