<html>
<head>
<style>
.button {
  padding: 15px 25px;
  font-family: Cambria;
  font-size: 16px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #5499C7;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button: hover 
{
background-color: #5499C7;
}

.button:active 
{
  background-color: #5499C7;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
body 
{
    font-family: Cambria;
    color: white;
 }

.split {
margin: 25px;
    height: 80%;
    width: 45%;
    position: fixed;
    z-index: 1;
    top: 0;
    overflow-x: hidden;
    padding-top: 20px;
}

.left {
    left: 0;
    background-color: #FF8E96;
}

.right {
    right: 0;
    background-color: #FFC3BB;
}

.centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
}

.centered img {
    width: 150px;
    border-radius: 50%;
}
</style>
</head>
<body>

<div class="split left">
  <div class="centered">
<form action = "stlogin.php" method = "post">
    <img src="stud.jpg">
<br> <br> 
<button class="button" type = "submit">STUDENT LOGIN </button> 
 </div>
</div>
</form>

<div class="split right">
  <div class="centered">
<form action = "stafflogin.php" method = "post">
    <img src="staff.png">
<br> <br> 
<button class="button" type = "submit">STAFF LOGIN </button> 
</div>
</div>
</form>
</body>
</html>