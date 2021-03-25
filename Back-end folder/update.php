<html>
    <head>
                <link rel="stylesheet" href="style.css">
    </head>
<body>
<?php
include('config.php');
if(isset($_GET['quoteID']))
{
$quoteID=$_GET['quoteID'];
if(isset($_POST['submit']))
{
$quotes=$_POST['quotes'];
$conn = mysqli_connect('localhost','iamharry_iamharry','yodog007','iamharry_quoteDB'); 
$query3=mysqli_query($conn, "UPDATE Quote SET quotes ='$quotes' WHERE quoteID='$quoteID'");
if($query3)
{
header('location:admin.php');
}
}
$query1=mysqli_query($conn, "SELECT * FROM Quote WHERE quoteID='$quoteID'");
$query2=mysqli_fetch_array($query1);
?>
<form method="post" action="">
Quote:<input type="text" name="quotes" value="<?php echo $query2['quotes']; ?>" /><br />
<br />
<input type="submit" name="submit" value="update" />
</form>
<?php
}
?>
</body>
</html>