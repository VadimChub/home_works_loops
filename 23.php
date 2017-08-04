<!DOCTYPE html>
<html>
<head>

</head>
<body>
<form action="23.php" method="get">
    <input type="number" name="number">
    <button type="submit">Calculate</button>
</form>

<?php
$my_number = $_GET['number'];
$length = strlen($my_number);
$sum = 0;
for ($i = 0; $i < $length; $i++){
    $sum = $sum + $my_number[$i];
}
?>
</body>
</html>

