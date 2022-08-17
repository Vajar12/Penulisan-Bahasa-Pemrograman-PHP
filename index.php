<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
echo "Hello World!";
?>

<!-- non case sensitive -->
<?php
echo "<br>";
ECHO "Hello World!<br>";
echo "Hello World!<br>";
EcHo "Hello World!<br>";
?>

<!-- case sensitive -->
<?php
$color = "red";
echo "My car is " . $color . "<br>";
/* echo "My house is " . $COLOR . "<br>";
echo "My boat is " . $coLOR . "<br>";*/
?>

<?php
// You can also use comments to leave out parts of a code line
$x = 5 /* + 15 */ + 5;
echo $x;
?>

</body>
</html>