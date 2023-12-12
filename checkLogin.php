<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns=http://www.w3.org/1999/xhtml>
    
    <head>
        <title> Validating login details </title>
    </head>
<body>

<?php
$servername = "localhost";
$username = "linjie";
$password = "linjie";
$dbname = "TUD";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection

if(!$conn){
    die("Connection failed: " . mysql_error());
}


$acc = $_POST["account"];
$pwd = $_POST["password"];

if($acc != '' && $pwd != '')
{
$sql = "SELECT * FROM userinfo WHERE account = '".$acc."' AND pwd = '".$pwd."' ";
$result = mysqli_query($conn, $sql);
$num_rows = mysqli_num_rows($result);
mysqli_close($conn);
if($num_rows > 0){
    //header('location: index.html'); //redirect the user to topSecret.php page
    echo "Login successfully!";
    exit; 
}else{
    $alert_msg = "The account or password is incorrect. Please check and try again";
    echo "<script> {window.alert('The account or password is incorrect. Please check and try again');location.href='index.html'} </script>";
    exit; 
}


}


?>

</body>
</html>
