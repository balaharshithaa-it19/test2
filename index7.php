<html>
<head>
</head>
<body>

<form method="POST">
X: <input type="number" name="no1" >
y: <input type="number" name="no2" >
<input type="submit">
</form>
<form method="POST">
X: <input type="number" name="no3" >
y: <input type="number" name="no4" >
<input type="submit">
</form>
<form method="POST">
X: <input type="number" name="no5" >
y: <input type="number" name="no6" >
<input type="submit">
</form>
<form method="POST">
X: <input type="number" name="no7" >
y: <input type="number" name="no8" >
<input type="submit">
</form>
<?php
$no1 = $_POST['no1'];
$no2 = $_POST['no2'];
$sum = $no1 + $no2;
echo "the sum is". $sum."<br/>";

$no3 = $_POST['no3'];
$no4 = $_POST['no4'];
$difference = $no3 - $no4;
echo  "the difference is".$difference."<br/>";

$no5 = $_POST['no5'];
$no6 = $_POST['no6'];
$product = $no5 * $no6;
echo "the product is".$product."<br/>";

$no7 = $_POST['no7'];
$no8 = $_POST['no8'];
$division= $no7 / $no8;
echo "the quotient is".$division."<br/>";

?>
</body>

</html>
