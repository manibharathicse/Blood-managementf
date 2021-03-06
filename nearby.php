<?php
session_start();
if(!isset($_SESSION['username']))
{
header('location:firstpage.html');
}
?>
<!DOCTYPE html>
<html>
<head>
<style>
*
{
box-sizing:border-box;
}
html,body
{
margin:0px;
height:100%;
}
.topdiv
{
height:10%;
background-color:rgb(59, 89, 152);
}
a
{
color:white;
}
.maindiv
{
height:25%;
background-color:dodgerblue;
color:white;
font-family:cursive;
}
.noeffect
{
margin:0px;
}
table,th,td
{
padding:5px;
text-align:center;
}
.mtable th
{
color:white;
background-color:rgb(59, 89, 152);
}
.tablediv
{
height:90%;
overflow:auto;
text-align:center;
font-family:cursive;
display:block;
margin-left:auto;
margin-right:auto;
width:90%;
}
</style>
</head>
<body>
<div class="topdiv">
<div style="margin-left:10px;margin-top:10px;margin-right:5px;background-color:lightgreen;float:left;width:1%;height:10px;border-radius:100%;"></div><h3 style="margin:0px;color:white;font-size:25px;font-family:cursive;"><?php echo $_SESSION['username'];?></h3>
<a href="logout.php" style="margin-right:10px;float:right;text-decoration:none;margin-top:-15px;font-size:20px;font-family:verdana;">Logout</a>
<a href="nearby.php" style="margin-right:10px;float:right;text-decoration:none;margin-top:-15px;font-size:20px;font-family:verdana;">NearBy</a>
<a href="searchblood.php" style="margin-right:10px;float:right;text-decoration:none;margin-top:-15px;font-size:20px;font-family:verdana;">SearchBlood</a>
</div>
<div class="tablediv">
<?php
$sname="localhost";
$uname="root";
$psswd="";
$dbname="bloodbank1";
$origLat=$_SESSION['latitude'];
$origLon=$_SESSION['longitude'];
$conn=mysqli_connect($sname,$uname,$psswd,$dbname);
$dist = 10;
$sql="SELECT name, latitude, longitude, 3956 * 2 * 
      ASIN(SQRT( POWER(SIN(($origLat - abs(latitude))*pi()/180/2),2)
      +COS($origLat*pi()/180 )*COS(abs(latitude)*pi()/180)
      *POWER(SIN(($origLon-longitude)*pi()/180/2),2))) 
      as distance,email,contact,bgroup,address,latitude,longitude FROM bloodtable WHERE 
      longitude between ($origLon-$dist/abs(cos(radians($origLat))*69)) 
      and ($origLon+$dist/abs(cos(radians($origLat))*69)) 
      and latitude between ($origLat-($dist/69)) 
      and ($origLat+($dist/69)) 
      having distance < $dist ORDER BY distance limit 100;";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
echo "<br><table class='mtable'><tr><th>Username</th><th>Email</th><th>Contact</th><th>Bloodgroup</th><th>Address</th><th>Latitude</th><th>Longitude</th></tr>";
}
while($row=mysqli_fetch_assoc($result))
{
echo "<tr>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['email']."</td>";
echo "<td>".$row['contact']."</td>";
echo "<td>".$row['bgroup']."</td>";
echo "<td>".$row['address']."</td>";
echo "<td>".$row['latitude']."</td>";
echo "<td>".$row['longitude']."</td>";
echo "</tr>";
}
echo "</table>";
mysqli_close($conn);
?>
</div>
</body>
</html>