<?php
session_start();
$con = mysqli_connect("localhost", "root", "","result");
if($_SESSION['username']==true ) 
{
$username = $_SESSION['username'];
$query = mysqli_query($con, "SELECT * FROM profile WHERE RegNO = '$username' ");
$arr = mysqli_fetch_array($query);
$num = mysqli_num_rows($query); 
if($num > 0)
$dep = $arr['Dept'];
?>
<html>
<head>
<style>
.button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 16px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #45B39D;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}
.button:hover 
{
background-color: #3e8e41
}
.button:active 
{
  background-color: #45B39D;
 }
header
{
background-color : #E76E8C;
}
header img
{
float: left;
font-color: white;
display: inline-block;
width: 80px;
height: 80px;
}
header h2
{
position: relative;
display: inline-block;
padding: 12px 20px 0 0;
left: 15px;
}
 td 
{
    padding: 10px;
}
td.round
{
border-radius: 5px;
}
table
{
border-color: black;
border-style: solid;
border-radius: 15px;
font-family: Cambria;
font-size: 18px;
}
.container 
{
padding: 18px;
margin : 25px 425px;
border: 3px solid black;
font-type: Cambria;
font-size: 18px;
background-color: #C6D0DE;
}
</style>
</head>
<body>
<header>
<img src ="vit-logo.jpg">
<h2 style="color: #21618C">VELLORE INSTITUTE OF TECHNOLOGY</h2>
</header>
<br>
<a href="student.php"><button class="button" style="float: left;">Previous</button></a> <a href="slideshow2.php"><button class="button" style="float: right;">Logout</button></a>
<br><br><center><h2>RESULTS </h2>  </center>
<?php
if($dep =="Information Technology")
{
$que = mysqli_query($con, "SELECT * FROM itmarks WHERE RegNO = '$username' ");
$a = mysqli_fetch_array($que);
$numb = mysqli_num_rows($que);
if($numb > 0)
{
?>
<div class="container">
<br>
<b>RegNO : </b> <?php echo $a['RegNO'];?> <br>
<b>Name   : </b> <?php echo $a['Name'];?> <br>
<b>Degree : </b> <?php echo $a['Degree'];?> <br>
<b>Dept     : </b> <?php echo $a['Dept'];?> <br>
<br>
</div>
<br>
<center>
<table width="500px">
<br>
<tr>
<td bgcolor = "#7FB3D5" height ="40" width ="175" class="round"><strong><center>Subject Code </center></strong></td>
<td bgcolor = "#7FB3D5" height ="40" width ="175" class="round"><strong><center>Grade </center></strong></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">IT6501</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['IT6501']; ?></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">IT6502</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['IT6502']; ?></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">IT6503</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['IT6503']; ?></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">IT6504</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['IT6504']; ?></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">IT6505</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['IT6505']; ?></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">IT6506</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['IT6506']; ?></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">IT6511</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['IT6511']; ?></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">IT6512</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['IT6512']; ?></td>
</tr>
</center>
</table>
<?php
} 
}
}
if($dep =="Computer Science And Engineering")
{
$que = mysqli_query($con, "SELECT * FROM csemarks WHERE RegNO = '$username' ");
$a = mysqli_fetch_array($que);
$numb = mysqli_num_rows($que);
if($numb > 0)
{
?>
<div class="container">
<br>
<b>RegNO : </b> <?php echo $a['RegNO'];?> <br>
<b>Name : </b> <?php echo $a['Name'];?> <br>
<b>Degree : </b> <?php echo $a['Degree'];?> <br>
<b>Dept : </b> <?php echo $a['Dept'];?> <br>
<br>
</div>
<br>
<center>
<table width="500px">
<br>
<tr>
<td bgcolor = "#7FB3D5" height ="40" width ="175" class="round"><strong><center>Subject Code </center></strong></td>
<td bgcolor = "#7FB3D5" height ="40" width ="175" class="round"><strong><center>Grade </center></strong></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">CS6501</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['CS6501']; ?></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">CS6502</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['CS6502']; ?></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">CS6403</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['CS6503']; ?></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">CS6504</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['CS6504']; ?></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">CS6505</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['CS6505']; ?></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">CS6506</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['CS6506']; ?></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">CS6511</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['CS6511']; ?></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">CS6512</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['CS6512']; ?></td>
</tr>
</center>
</table>
<?php
} 
}
if($dep =="Aeronautical Engineering")
{
$que = mysqli_query($con, "SELECT * FROM aemarks WHERE RegNO = '$username' ");
$a = mysqli_fetch_array($que);
$numb = mysqli_num_rows($que);
if($numb > 0)
{
?>
<div class="container">
<br>
<b>RegNO : </b> <?php echo $a['RegNO'];?> <br>
<b>Name : </b> <?php echo $a['Name'];?> <br>
<b>Degree : </b> <?php echo $a['Degree'];?> <br>
<b>Dept : </b> <?php echo $a['Dept'];?> <br>
<br>
</div>
<br>
<center>
<table width="500px">
<br>
<tr>
<td bgcolor = "#7FB3D5" height ="40" width ="175" class="round"><strong><center>Subject Code </center></strong></td>
<td bgcolor = "#7FB3D5" height ="40" width ="175" class="round"><strong><center>Grade </center></strong></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">AE6501</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['AE6501']; ?></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">AE6502</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['AE6502']; ?></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">AE6403</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['AE6503']; ?></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">AE6504</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['AE6504']; ?></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">AE6505</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['AE6505']; ?></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">AE6506</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['AE6506']; ?></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">AE6511</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['AE6511']; ?></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">AE6512</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['AE6512']; ?></td>
</tr>
</center>
</table>
<?php
} 
}
if($dep =="Chemical Engineering")
{
$que = mysqli_query($con, "SELECT * FROM chemarks WHERE RegNO = '$username' ");
$a = mysqli_fetch_array($que);
$numb = mysqli_num_rows($que);
if($numb > 0)
{
?>
<div class="container">
<br>
<b>RegNO : </b> <?php echo $a['RegNO'];?> <br>
<b>Name : </b> <?php echo $a['Name'];?> <br>
<b>Degree : </b> <?php echo $a['Degree'];?> <br>
<b>Dept : </b> <?php echo $a['Dept'];?> <br>
<br>
</div>
<br>
<center>
<table width="500px">
<br>
<tr>
<td bgcolor = "#7FB3D5" height ="40" width ="175" class="round"><strong><center>Subject Code </center></strong></td>
<td bgcolor = "#7FB3D5" height ="40" width ="175" class="round"><strong><center>Grade </center></strong></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">CH6501</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['CH6501']; ?></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">CH6502</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['CH6502']; ?></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">CH6403</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['CH6503']; ?></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">CH6504</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['CH6504']; ?></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">CH6505</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['CH6505']; ?></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">CH6506</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['CH6506']; ?></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">CH6511</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['CH6511']; ?></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">CH6512</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['CH6512']; ?></td>
</tr>
</center>
</table>
<?php
} 
}
if($dep =="Civil Engineering")
{
$que = mysqli_query($con, "SELECT * FROM civmarks WHERE RegNO = '$username' ");
$a = mysqli_fetch_array($que);
$numb = mysqli_num_rows($que);
if($numb > 0)
{
?>
<div class="container">
<br>
<b>RegNO : </b> <?php echo $a['RegNO'];?> <br>
<b>Name : </b> <?php echo $a['Name'];?> <br>
<b>Degree : </b> <?php echo $a['Degree'];?> <br>
<b>Dept : </b> <?php echo $a['Dept'];?> <br>
<br>
</div>
<br>
<center>
<table width="500px">
<br>
<tr>
<td bgcolor = "#7FB3D5" height ="40" width ="175" class="round"><strong><center>Subject Code </center></strong></td>
<td bgcolor = "#7FB3D5" height ="40" width ="175" class="round"><strong><center>Grade </center></strong></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">CV6501</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['CV6501']; ?></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">CV6502</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['CV6502']; ?></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">CV6403</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['CV6503']; ?></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">CV6504</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['CV6504']; ?></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">CV6505</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['CV6505']; ?></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">CV6506</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['CV6506']; ?></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">CV6511</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['CV6511']; ?></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">CV6512</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['CV6512']; ?></td>
</tr>
</center>
</table>
<?php
} 
}
if($dep =="Electronics And Communication Engineering")
{
$que = mysqli_query($con, "SELECT * FROM ecemarks WHERE RegNO = '$username' ");
$a = mysqli_fetch_array($que);
$numb = mysqli_num_rows($que);
if($numb > 0)
{
?>
<div class="container">
<br>
<b>RegNO : </b> <?php echo $a['RegNO'];?> <br>
<b>Name : </b> <?php echo $a['Name'];?> <br>
<b>Degree : </b> <?php echo $a['Degree'];?> <br>
<b>Dept : </b> <?php echo $a['Dept'];?> <br>
<br>
</div>
<br>
<center>
<table width="500px">
<br>
<tr>
<td bgcolor = "#7FB3D5" height ="40" width ="175" class="round"><strong><center>Subject Code </center></strong></td>
<td bgcolor = "#7FB3D5" height ="40" width ="175" class="round"><strong><center>Grade </center></strong></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">EC6501</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['EC6501']; ?></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">EC6502</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['EC6502']; ?></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">EC6403</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['EC6503']; ?></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">EC6504</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['EC6504']; ?></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">EC6505</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['EC6505']; ?></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">EC6506</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['EC6506']; ?></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">EC6511</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['EC6511']; ?></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">EC6512</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['EC6512']; ?></td>
</tr>
</center>
</table>
<?php
} 
}
if($dep =="Electrical And Electronics Engineering")
{
$que = mysqli_query($con, "SELECT * FROM eeemarks WHERE RegNO = '$username' ");
$a = mysqli_fetch_array($que);
$numb = mysqli_num_rows($que);
if($numb > 0)
{
?>
<div class="container">
<br>
<b>RegNO : </b> <?php echo $a['RegNO'];?> <br>
<b>Name : </b> <?php echo $a['Name'];?> <br>
<b>Degree : </b> <?php echo $a['Degree'];?> <br>
<b>Dept : </b> <?php echo $a['Dept'];?> <br>
<br>
</div>
<br>
<center>
<table width="500px">
<br>
<tr>
<td bgcolor = "#7FB3D5" height ="40" width ="175" class="round"><strong><center>Subject Code </center></strong></td>
<td bgcolor = "#7FB3D5" height ="40" width ="175" class="round"><strong><center>Grade </center></strong></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">EE6501</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['EE6501']; ?></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">EE6502</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['EE6502']; ?></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">EE6403</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['EE6503']; ?></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">EE6504</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['EE6504']; ?></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">EE6505</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['EE6505']; ?></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">EE6506</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['EE6506']; ?></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">EE6511</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['EE6511']; ?></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">EE6512</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['EE6512']; ?></td>
</tr>
</center>
</table>
<?php
} 
}
if($dep =="Genetic Engineering")
{
$que = mysqli_query($con, "SELECT * FROM genmarks WHERE RegNO = '$username' ");
$a = mysqli_fetch_array($que);
$numb = mysqli_num_rows($que);
if($numb > 0)
{
?>
<div class="container">
<br>
<b>RegNO : </b> <?php echo $a['RegNO'];?> <br>
<b>Name : </b> <?php echo $a['Name'];?> <br>
<b>Degree : </b> <?php echo $a['Degree'];?> <br>
<b>Dept : </b> <?php echo $a['Dept'];?> <br>
<br>
</div>
<br>
<center>
<table width="500px">
<br>
<tr>
<td bgcolor = "#7FB3D5" height ="40" width ="175" class="round"><strong><center>Subject Code </center></strong></td>
<td bgcolor = "#7FB3D5" height ="40" width ="175" class="round"><strong><center>Grade </center></strong></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">GE6501</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['GE6501']; ?></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">GE6502</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['GE6502']; ?></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">GE6403</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['GE6503']; ?></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">GE6504</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['GE6504']; ?></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">GE6505</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['GE6505']; ?></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">GE6506</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['GE6506']; ?></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">GE6511</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['GE6511']; ?></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">GE6512</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['GE6512']; ?></td>
</tr>
</center>
</table>
<?php
} 
}
if($dep =="Mechanical Engineering")
{
$que = mysqli_query($con, "SELECT * FROM memarks WHERE RegNO = '$username' ");
$a = mysqli_fetch_array($que);
$numb = mysqli_num_rows($que);
if($numb > 0)
{
?>
<div class="container">
<br>
<b>RegNO : </b> <?php echo $a['RegNO'];?> <br>
<b>Name : </b> <?php echo $a['Name'];?> <br>
<b>Degree : </b> <?php echo $a['Degree'];?> <br>
<b>Dept : </b> <?php echo $a['Dept'];?> <br>
<br>
</div>
<br>
<center>
<table width="500px">
<br>
<tr>
<td bgcolor = "#7FB3D5" height ="40" width ="175" class="round"><strong><center>Subject Code </center></strong></td>
<td bgcolor = "#7FB3D5" height ="40" width ="175" class="round"><strong><center>Grade </center></strong></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">ME6501</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['ME6501']; ?></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">ME6502</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['ME6502']; ?></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">ME6403</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['ME6503']; ?></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">ME6504</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['ME6504']; ?></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">ME6505</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['ME6505']; ?></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">ME6506</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['ME6506']; ?></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">ME6511</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['ME6511']; ?></td>
</tr>
<tr>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round">ME6512</td>
<td bgcolor = "#FFA5A9" height ="40" width ="175" class="round"> <?php echo $a['ME6512']; ?></td>
</tr>
</center>
</table>
<?php
} 
}
else
{
?>

<?php
}
?>
</body>
</html>