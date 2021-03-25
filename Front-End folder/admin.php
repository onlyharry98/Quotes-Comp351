<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
include('config.php');

$conn = mysqli_connect('localhost','iamharry_iamharry','yodog007','iamharry_quoteDB'); 
$query1=mysqli_query($conn,"SELECT quoteID, quotes FROM Quote");

echo "<table><tr><td>Quote</td><td></td>";

while($query2=mysqli_fetch_array($query1))
{
echo "<tr><td>".$query2['quotes']."</td>";
echo "<td><a href='update.php?quoteID=".$query2['quoteID']."'>Update</a></td>";
echo "<td><a href='delete.php?quoteID=".$query2['quoteID']."'>Delete</a></td><tr>";
}echo "<tr><td><a href='add.php?quoteID =".$query2['quoteID']."'>Add another quote</a></td><tr>";
?>
</body>
</html>