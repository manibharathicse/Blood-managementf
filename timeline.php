<?php
session_start();
if(!isset($_SESSION['username']))
{
header('location:firstpage.html');
}
?>
<?php
$sname="localhost";
$uname="root";
$psswd="";
$dbname="bloodbank1";
$conn=mysqli_connect($sname,$uname,$psswd,$dbname);
$sql="select * from bloodtable where bgroup='".$_SESSION['bloodgroup']."'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
echo "";
}
while($row=mysqli_fetch_assoc($result))
{
echo "<div style='border-radius:20px;border:2px solid rgb(59, 89, 152);width:50%;margin-top:5px;margin-left:auto;margin-right:auto;'>";
echo "<h1 style='font-family:cursive;'>".$row['name']."-</h1>";
echo "<center><p>".$row['email']."</p>";
echo "<p>".$row['contact']."</p>";
echo "<p>".$row['bgroup']."</p>";
echo "<p>".$row['address']."</p>";
echo "<p>".$row['latitude']."</p>";
echo "<p>".$row['longitude']."</p></center>";
echo "</div>";
}


mysqli_close($conn);
?>
<?php
$sname="localhost";
$uname="root";
$psswd="";
$dbname="bloodbank1";
$conn=mysqli_connect($sname,$uname,$psswd,$dbname);
$name='bloodgroup_'.$_SESSION['username'];
if(!isset($_COOKIE[$name]))
{
die();
}
$sql="select * from bloodtable where bgroup='".$_COOKIE[$name]."'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result))
{
echo "<div style='border-radius:20px;border:2px solid rgb(59, 89, 152);width:50%;margin-top:5px;margin-left:auto;margin-right:auto;'>";
echo "<h1 style='font-family:cursive;'>".$row['name']."-</h1>";
echo "<center><p>".$row['email']."</p>";
echo "<p>".$row['contact']."</p>";
echo "<p>".$row['bgroup']."</p>";
echo "<p>".$row['address']."</p>";
echo "<p>".$row['latitude']."</p>";
echo "<p>".$row['longitude']."</p></center>";
echo "</div>";
}


mysqli_close($conn);
?>