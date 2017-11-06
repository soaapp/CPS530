<!DOCTYPE html>
<html>
<head>
<title>Submitted Form</title>
<link href = 'stylesheet.css' rel = 'stylesheet'/>
</head>

<body>
Multiplication Table:
<br><br>
<table border="1">
<?php 
for ($counter = 1; $counter <= $_GET['y']; $counter++)
{
print "<tr style='width:". $_GET['x'] ."cm'>";

for ($i = 1; $i <= $_GET['x']; $i++)
{
print "<td style='width:1cm'>" . ($counter*$i) . "</td>";
}

print "</tr>";
}
 ?>
</table>

<?php

if(!isset($_COOKIE['hitTimes']))
{
setcookie('hitTimes', 1);
}

setcookie('hitTimes', $_COOKIE['hitTimes']+1);

print "<br>";

print "Here is your cookie(s):";

for ($cookie = 1; $cookie <= $_COOKIE['hitTimes']; $cookie++)
{
print "$cookie";
}
?>
</body>
</html>