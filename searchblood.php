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
}
.leftdiv
{
width:50%;
float:left;
background-color:#DCDCDC;
height:100%;
}
.rightdiv
{
width:50%;
float:left;
background-color:white;
height:100%;
overflow:auto;
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
<div class="leftdiv">
<form action="searchblood.php" method="post">
<select name="bgroup" class="mainform" style="border:2px solid rgb(59, 89, 152);margin-top:20px;padding:10px;font-size:20px;outline:none;"  required>
          <option value="" disabled selected>Select your bloodgroup</option>
          <option value="O+">O+</option>
          <option value="O-">O-</option>
          <option value="A+">A+</option>
          <option value="A-">A-</option>
          <option value="B+">B+</option>
          <option value="B-">B-</option>
          <option value="AB+">AB+</option>
          <option value="AB-">AB-</option>
</select>
<input type="submit" style="border:2px solid rgb(59, 89, 152);margin-top:20px;padding:10px;font-size:20px;outline:none;">
</form>
<br><br>
<center>
<a href="timeline.php" style="font-size:25px;color:dodgerblue;text-decoration:none;">Timeline</a>
</center>
</div>
<div class="rightdiv">
<?php
$sname="localhost";
$uname="root";
$psswd="";
$dbname="bloodbank1";
$conn=mysqli_connect($sname,$uname,$psswd,$dbname);
if(isset($_POST['bgroup']))
{
echo $_POST['bgroup'];
$sql="select * from bloodtable where bgroup='".$_POST['bgroup']."'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
setcookie('bloodgroup_'.$_SESSION['username'], "$_POST[bgroup]", time() + (86400 * 30), "/");
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
}
mysqli_close($conn);
?>
</div>
</div>
</body>
</html>