<html>
    <head>
        <link rel="stylesheet" href="style.css">

    </head>
<body>
<?php
ob_start();
include('config.php');
if(isset($_POST['submit']))
{
$quotes= $_POST['quotes'];
$conn = mysqli_connect('localhost','iamharry_iamharry','yodog007','iamharry_quoteDB'); 
$query = mysqli_query($conn, "INSERT INTO Quote (quotes) values('$quotes')");
echo "INSERT INTO Quote VALUES ('$quotes')";
if($query)
{
header('location:admin.php');
}
}
?>
<fieldset style="width:300px;">
<form method="post" action="">
Quote: <input type="text" name ="quotes"><br>
<br>
<input type="submit" name="submit">
</form>
</fieldset>
</body>
</html>

