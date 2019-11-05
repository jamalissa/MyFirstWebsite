<html>
<head>
<title>
   the shape of a Rohmbus
</title>
<link rel="stylesheet" type="text/css" href="tryout12.css">
</head>
<body>
<ul>
  <li><a class="active" href="index.html">Home</a></li>
  <li><a href="Gallery.html">Gallery</a></li>
  <li><a href="DIY.html">DIY</a></li>
  <li><a href="AboutUs.html">About us</a></li>
   <li><a href="shapecalculator.html">shapecalculator</a></li>
</ul>
<div style="padding-bottom:50px">
<img src="pics\stars.jpg" alt="Rohmbus" style="width:30%;clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);margin-left: auto;
  margin-right: auto;display: block;">
</div>

</body>
</html>

<?php

if ($_POST['numberA'] <= 0 ){
	echo "please sumbit the field a with postive numbers   ";
}
else{ echo "the perimeter is  ";
$resultat=$_POST["numberA"]*4;
echo $resultat;}

?>

<form method="post">

    <p style="padding-top:50px">What is the value of the side?</p>
    <p><input type="text" name="numberA"></p>
		
    <p><input type="submit" value="Submit"></p>


</form>

