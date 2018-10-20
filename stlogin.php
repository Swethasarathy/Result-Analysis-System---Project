<?php
session_start();
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body 
{
font-family: Arial, Helvetica, sans-serif;
}
form 
{
border: 5px solid #5DADE2;
margin : 25px 425px;
}

input[type=text], input[type=password] 
{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

.button 
{

  background-color: #4CAF50;	   /* back ground color for login button*/
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

.button:hover 
{
    opacity: 0.8;
}

.cancelbtn 
{
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;       /* back ground color for cancel button*/
}

.imgcontainer 
{
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar 
{
    width: 25%;
    border-radius: 25%;
}

.container 
{
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn {
       width: 100%;
    }
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
</style>
</head>
<body>
<header>
<img src ="vit-logo.jpg">
<h2 style="color: #21618C">VELLORE INSTITUTE OF TECHNOLOGY</h2>
</header>
<form method ="post">
<center><h2>LOGIN FORM</h2></center>
  <div class="imgcontainer">
    <img src="avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
<br> <br>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" id = "myip" name="pwd" required>
<br> <br>    
<input type="checkbox" onclick="myFunction()">Show Password   
<script>
function myFunction() {
    var x = document.getElementById("myip");

     if (x.type === "password") 
    {
        x.type = "text";
    } 
else 
{
        x.type = "password";
    }
}
</script> 
    <input type="submit" name="submit" value="Login" class="button">
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

 <div class="container" style="background-color: white">
    <button type="reset" class="cancelbtn">Reset</button>                       
</div>
<?php
$con = mysqli_connect("localhost", "root", "", "result");
if(isset($_POST['submit']))
{
$username = $_POST['uname'];
$password = $_POST['pwd'];
$query = mysqli_query($con, "SELECT RegNO, DOB FROM profile WHERE RegNO = '$username' AND DOB = '$password' ");
if(mysqli_num_rows($query) > 0)
{
$_SESSION['username'] = $username;
header('Location:student.php');
}
else  
    {  
      echo "<script>alert('Email or password is incorrect!');
</script>";  
    }
}
?>
</form>
</body>
</html>
