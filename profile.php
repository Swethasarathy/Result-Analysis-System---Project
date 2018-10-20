<?php
session_start();
$con = mysqli_connect("localhost", "root", "","result");
if($_SESSION['username']==true ) 
{
$username = $_SESSION['username'];
$query = mysqli_query($con, "SELECT * FROM profile WHERE RegNO = '$username' ");
$arr = mysqli_fetch_array($query);
$num = mysqli_num_rows($query); 
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
h2
{
display: inline-block;
}
</style>
</head>
<body>
<header>
<img src ="vit-logo.jpg">
<h2 style="color: #21618C">VELLORE INSTITUTE OF TECHNOLOGY</h2>
</header>
<?php
if($num > 0)
{
?>
<center>
<table width="500px">
<br><br>
<a href="student.php"><button class="button" style="float: left;">Previous</button></a><h2>PROFILE</h2>   <a href="slideshow2.php"><button class="button" style="float: right;">Logout</button></a>
<br>
 <td bgcolor = "#7FB3D5" height ="40" width ="175" class = "round">Reg NO: </td>

<td  bgcolor = "#FFA5A9" height ="40" width ="175" class = "round"> <?php echo $arr['RegNO']; ?> </td>
</tr>
<tr>
 <td bgcolor = "#7FB3D5" height ="40" width ="175" class = "round">Name: </td> 

<td  bgcolor = "#FFA5A9" height ="40" width ="175" class = "round"> <?php echo $arr['Name']; ?> </td>
</tr>

<tr>
 <td bgcolor = "#7FB3D5" height ="40" width ="175" class = "round">Degree : </td> 

<td  bgcolor = "#FFA5A9" height ="40" width ="175" class = "round"> <?php echo $arr['Degree']; ?> </td>
</tr>

<tr>
 <td bgcolor = "#7FB3D5" height ="40" width ="175" class = "round">Department : </td> 

<td  bgcolor = "#FFA5A9" height ="40" width ="175" class = "round"> <?php echo $arr['Dept']; ?> </td>
</tr>

<tr>
 <td bgcolor = "#7FB3D5" height ="40" width ="175" class = "round">Year : </td> 

<td  bgcolor = "#FFA5A9" height ="40" width ="175" class = "round"> <?php echo $arr['Year']; ?> </td>
</tr>

<tr>
 <td bgcolor = "#7FB3D5" height ="40" width ="175" class = "round">GPA :</td>

<td  bgcolor = "#FFA5A9" height ="40" width ="175" class = "round"> <?php echo $arr['GPA']; ?>  </td>
</tr>

<tr>
 <td bgcolor = "#7FB3D5" height ="40" width ="175" class = "round">CGPA : </td> 

<td  bgcolor = "#FFA5A9" height ="40" width ="175" class = "round"> <?php echo $arr['CGPA']; ?> </td>
</tr>

<tr>
 <td bgcolor = "#7FB3D5" height ="40" width ="175" class = "round">No.Of.Standing Arrears : </td> 

<td bgcolor = "#FFA5A9" height ="40" width ="175" class = "round"> <?php echo $arr['S_Arrear']; ?>  </td>
</tr>

<tr>
 <td bgcolor = "#7FB3D5" height ="40" width ="175" class = "round">History Of Arrears : </td> 

<td  bgcolor = "#FFA5A9" height ="40" width ="200" class = "round"><?php echo $arr['H_Arrear']; ?> </td>
</tr>
</center>
</table>
<?php 
}
}
else
{ 
?>
 User not found.
<?php 
} 
?>
</body>
</html>
