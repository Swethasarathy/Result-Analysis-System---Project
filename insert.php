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
* {
    box-sizing: border-box;
}
input[type=text], select
{
    width: 80%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}
label {
    padding: 12px 12px 12px 0;
    display: inline-block;
margin-left: 10px;
}
input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
margin-right: 10px;
margin-bottom: 10px;
}
.container 
{
border-radius: 10px;
background-color: #f2f2f2;
padding: 20px;
margin-left: 350px;
margin-bottom: 40px;
margin-right: 350px;
border: 5px solid black;
}
.col-25 
{
    float: left;
    width: 25%;
    margin-top: 6px;
}
.col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
}
/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}
@media screen and (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}
form
{
font-family: Cambria;
font-size: 17px;
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
<br><br><br><br>
<form method = "POST">
<br>
<div class="container">
<div class="row">
<div class="col-25">
<label for="reg">RegNO</label>
</div>
<div class="col-75">
<input type="text" id="reg" name="reg">
</div>
</div>
<div class="row">
<div class="col-25">
<label for="name">Name</label>
</div>
<div class="col-75">
<input type="text" id="name" name="name">
</div>
</div>
<div class="row">
<div class="col-25">
<label for="course">Degree</label>
</div>
<div class="col-75">
<input type="text" id="degree" name="course">
</div>
</div>
<div class="row">
<div class="col-25">
<label for="dept">Dept</label>
</div>
<div class="col-75">
<input type="text" id="dept" name="dept">
</div>
</div>
<div class="row">
<div class="col-25">
<label for="year">Year</label>
</div>
<div class="col-75">
<select id="year" name="year">
<option value="Select">Select</option>
<option value="I">I</option>
<option value="II">II</option>
<option value="III">III</option>
<option value="IV">IV</option>
</select>
</div>
</div>
<div class="row">
<div class="col-25">
<label for="sec">Sec</label>
</div>
<div class="col-75">
<select id="sec" name="sec">
<option value="select">Select</option>
<option value="a">A</option>
<option value="b">B</option>
<option value="c">C</option>
</select>
</div>
</div>
<div class="row">
<div class="col-25">
<label for="dob">DOB</label>
</div>
<div class="col-75">
<input type="text" id="dob" name="dob">
</div>
</div>
<div class="row">
<div class="col-25">
<label for="duration">Course Duration</label>
</div>
<div class="col-75">
<input type="text" id="duration" name="duration">
</div>
</div>
<div class="row">
<div class="col-25">
<label for="cgpa">CGPA</label>
</div>
<div class="col-75">
<input type="text" id="cgpa" name="cgpa">
</div>
</div>
<div class="row">
<div class="col-25">
<label for="gpa">GPA</label>
</div>
<div class="col-75">
<input type="text" id="gpa" name="gpa">
</div>
</div>
<div class="row">
<div class="col-25">
<label for="sarr">No.Of.Standing Arrear</label>
</div>
<div class="col-75">
<input type="text" id="sarr" name="sarr">
</div>
</div>
<div class="row">
<div class="col-25">
<label for="harr">History.Of.Arrears</label>
</div>
<div class="col-75">
<input type="text" id="harr" name="harr">
</div>
</div>
<br>
<div class="row">
<input type="submit" value="Submit" name="submit">
</div>
<?php
$con = mysqli_connect("localhost", "root","", "result");
if(isset($_POST['submit']))
{
$sql = "INSERT INTO profile (RegNO, Name, Degree, Dept, Year, Sec, DOB, C_Duration, GPA, CGPA, S_Arrear, H_Arrear) VALUES('$_POST[reg]', '$_POST[name]', '$_POST[degree]', '$_POST[dept]', '$_POST[year]', '$_POST[sec]', '$_POST[dob]', '$_POST[duration]', '$_POST[gpa]', '$_POST[cgpa]', '$_POST[sarr]', '$_POST[harr]')";
if(!mysqli_query($con, $sql))
{
echo "<script> alert('Error in inserting the data');
</script >";
}
else
{
echo "<script> alert('New Record inserted successfully');
</script>";
header("location: staff.php");
}
}
?>
</form>
</body>
</html>