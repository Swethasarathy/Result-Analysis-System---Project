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
height:80px;
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
</style>
</head>
<body>
<header>
<img src ="vit-logo.jpg">
<h2 style="color: #21618C">VELLORE INSTITUTE OF TECHNOLOGY</h2>
</header>
<br><br>
<a href="staff.php"><button class="button" style="float: left;">Previous</button> </a>  <a href="slideshow2.php"><button class="button" style="float: right;">Logout</button></a>
<form method="post" enctype ="multipart/form-data">
<br><br>
<div class="container">
<br>
<label for="uname"><b>Choose the File to Upload</b></label>
<br><br>
<input type="file" name="Upload" value="Choose">
<br><br>
<input type="submit" name="submit" value="Submit" class="but">
<?php
$con = mysqli_connect("localhost", "root", "", "result");
if(isset($_POST['submit']))
{
$file = "it1.csv";
$handle = fopen($file, 'r');
$c = 0;
while(($cont  =fgetcsv($handle, 1000, ",")) !== false)
{
$reg = $cont[0];
$it51 = $cont[1];
$it52 = $cont[2];
$it53 = $cont[3];
$it54  =$cont[4];
$it55 = $cont[5];
$it56 = $cont[6];
$it511  =$cont[7];
$it512 = $cont[8];
$sql = mysqli_query($con, "INSERT INTO it1 (RegNO, IT6501, IT6502, IT6503, IT6504, IT6505, IT6506, IT6511, IT6512) VALUES  ('$reg', '$it51','$it52', '$it53', '$it54', '$it55', '$it56', '$it511', '$it512')");
}
if($sql)
{
echo "<script> alert('File Uploaded successfully');
</script>";
}
else
{
echo "Failed";
}
}
?>
</form>
</body>
</html>