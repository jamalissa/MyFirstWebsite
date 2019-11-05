<html>
<head>
<title>
  the shape of a Circle
</title>
<link rel="stylesheet" type="text/css" href="tryout12.css">
</head>
<body>
<ul>
 <ul>
   <li><a class="active" href="index.html">Home</a></li>
  <li><a href="Gallery.html">Gallery</a></li>
  <li><a href="DIY.html">DIY</a></li>
  <li><a href="AboutUs.html">About us</a></li>
   <li><a href="shapecalculator.html">shapecalculator</a></li>
</ul>
</ul>
<div style="padding-bottom:50px">
<img src="pics\stars.jpg" alt="circle" style="width:30%;clip-path: circle(32.9% at 50% 50%);margin-left: auto;
  margin-right: auto;display: block;">
</div>

</body>
</html>

<?php

if ($_POST['numberA'] <= 0){
	echo "please sumbit all the field with postive numbers   ";
}
else{ echo "the perimeter is  ";
$resultat=$_POST["numberA"] *2*3.14;
echo $resultat;}

?>

<form method="post">

    <p style="padding-top:50px">What is the value of your diameter?</p>
    <p><input type="text" name="numberA"></p>
		
    <p><input type="submit" value="Submit"></p>


</form>

