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
.button {
  padding: 15px 25px;
  font-family: Cambria;
  font-size: 18px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
 background-color:#4CAF50;
  border: none;
  border-radius: 15px;
  
}

.button: hover 
{
background-color: #4CAF50;
}

.button:active 
{
  background-color: #4CAF50;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
div
{
margin: 100px 400px;
border:4px solid black;
border-radius: 12px;
background-color: #8DABD3;
}
</style>
</head>
<body>
<header>
<img src ="vit-logo.jpg">
<h2 style="color: #21618C">VELLORE INSTITUTE OF TECHNOLOGY</h2>
</header>
<div>
<center>
<form action ="upload.php" method="post">
<br><br>
<button class="button" type="submit">UPLOAD MARKS</button>
<br><br>
</form>
<form action ="insert.php" method="post">
<br><br>
<button class="button" type="submit">INSERT NEW STUDENT RECORD</button>
<br><br>
</form>
<form action ="search.php" method="post">
<br><br>
<button class="button" type="submit">SEARCH FOR RECORD</button>
<br><br><br><br>
</form>
</body>
</html>
