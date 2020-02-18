<?php
$sname="localhost";
$uname="root";
$psswd="";
$dbname="bloodbank1";
$conn=mysqli_connect($sname,$uname,$psswd,$dbname);
$sql="select * from bloodtable";
$result=mysqli_query($conn,$sql);
if(isset($_POST['email'])&&isset($_POST['phone']))
{
while($row=mysqli_fetch_assoc($result))
{
if($row['email']==$_POST['email']&&$row['contact']==$_POST['phone'])
{
session_start();
$_SESSION['username']=$row['name'];
$_SESSION['email']=$row['email'];
$_SESSION['contact']=$row['contact'];
$_SESSION['latitude']=$row['latitude'];
$_SESSION['longitude']=$row['longitude'];
 $_SESSION['bloodgroup']= $row['bgroup'];
header('location:mainpage.php');
}
}
}
mysqli_close($conn);
?>