<html>
<head>
<style>
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
.button 
{
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
td.round
{
border-radius: 5px;
}
input[type=text]
{
    width: 80%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
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
.but
{
  background-color: #45B39D; /* Green */
    color: white;
    text-align: center;
    display: inline-block;
    font-size: 14px;
    cursor: pointer;
margin: 4px 2px;
border-radius: 6px;
}
table
{
font-family: Cambria;
font-size: 16px;
}
</style>
</head>
<body>
<header>
<img src ="vit-logo.jpg">
<h2 style="color: #21618C">VELLORE INSTITUTE OF TECHNOLOGY</h2>
</header>
<br><br>
<a href="staff.php"><button class="button" style="float: left;">Previous</button> </a>  <a href="slideshow2.php"><button class="button" style="float: right;">Logout</button></a>
<form method = "POST">
<br><br>
<div class="container">
<br>
<label for="uname"><b>Enter the Name</b></label>
<input type="text" name="searchfile">
<br><br>
<input class="but" type="submit" name="search" value="Search" style="float:right">
<br>
</div>
<br>
<center>
<table width="1300px"cellpadding = "5" cellspacing = "5">
<tr>
<td bgcolor = "#7FB3D5" height ="40" width ="175" class = "round" ><strong>RegNO </strong></td>
<td bgcolor = "#7FB3D5" height ="40" width ="175" class = "round"><strong>Name </strong></td>
<td bgcolor = "#7FB3D5" height ="40" width ="175" class = "round"><strong>Degree </strong></td>
<td bgcolor = "#7FB3D5" height ="40" width ="175" class = "round" ><strong>Dept  </strong></td>
<td bgcolor = "#7FB3D5" height ="40" width ="175" class = "round"><strong>Year </strong></td>
<td bgcolor = "#7FB3D5" height ="40" width ="175" class = "round"><strong>CGPA  </strong></td>
<td bgcolor = "#7FB3D5" height ="40" width ="175" class = "round"><strong>Arrear  </strong></td>
</tr>
<?php
$con = mysqli_connect("localhost", "root", "", "result");
if(isset($_POST['search']))
{
$dep = ($_POST['searchfile']);
$sql = "SELECT * FROM profile WHERE Name = '$dep' OR Dept = '$dep' ";
$query = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($query))
{
?>
<tr>
<td  bgcolor = "#FFA5A9" height ="40" width ="175" class = "round"><?php echo $row['RegNO']; ?> </td>
<td  bgcolor = "#FFA5A9" height ="40" width ="175" class = "round"><?php echo $row['Name']; ?> </td>
<td  bgcolor = "#FFA5A9" height ="40" width ="175" class = "round"><?php echo $row['Degree']; ?>  </td>
<td  bgcolor = "#FFA5A9" height ="40" width ="175" class = "round"><?php echo $row['Dept']; ?>  </td>
<td  bgcolor = "#FFA5A9" height ="40" width ="175" class = "round"><?php echo $row['Year']; ?>  </td>
<td  bgcolor = "#FFA5A9" height ="40" width ="175" class = "round"><?php echo $row['CGPA']; ?>  </td>
<td  bgcolor = "#FFA5A9" height ="40" width ="175" class = "round"><?php echo $row['S_Arrear']; ?>  </td>
</tr>
<?php
}
}
else
{
"<script> alert{'User not found'};
</script>";
}
?>
</table>
</form>
</body>
</html>