<!DOCTYPE html>
<html>
<head>
<title>CPS 530 - Lab 5</title>
<link href = 'stylesheet.css' rel = 'stylesheet'/>
</head>

<body>
<br>

<form action="count.php" method="get">
Choose your first number: 
<select name="x" size="1" required="required">
<?php 
for ($counter = 3; $counter <= 12; $counter++)
{
print "<option>$counter</option>";
}
 ?>
</select>

<br>Choose your second number:
<select name="y" size="1" required="required">
<<?php 
for ($counter = 3; $counter <= 12; $counter++)
{
print "<option>$counter</option>";
}
 ?>
</select>
<br>
<br><input type="submit" class="button">
</form>

</body>
</html>