<html>
<body>
<?php
include('config.php');
if(isset($_GET['quoteID']))
{
$quoteID=$_GET['quoteID'];
$conn = mysqli_connect('localhost','iamharry_iamharry','yodog007','iamharry_quoteDB'); 
$query1=mysqli_query($conn, "DELETE FROM Quote WHERE quoteID='$quoteID'");
if($query1)
{
header('location:admin.php');
}
}
?>
</body>
</html>