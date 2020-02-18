<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bloodbank1";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$name = $_POST['username'];
$email = $_POST['email'];
$contact = $_POST['phone'];
$address = $_POST['address'];
$bgroup = $_POST['bloodgroup'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];
$sql = "INSERT INTO bloodtable(name,email,contact,address,bgroup,latitude,longitude)
VALUES ('$name', '$email', '$contact','$address','$bgroup','$latitude','$longitude')";
if (mysqli_query($conn, $sql)) {
    session_start();
    $_SESSION['username']=$_POST['username'];
    $_SESSION['email']=$_POST['email'];
    $_SESSION['contact']= $_POST['phone'];
    $_SESSION['latitude']= $_POST['latitude'];
    $_SESSION['longitude']= $_POST['longitude'];
 $_SESSION['bloodgroup']= $_POST['bloodgroup'];
     header('location:mainpage.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
