<html>
<head>
<title>
  the rereduction
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
<img src="pics\stars.jpg" alt="triangle" style="width:30%;clip-path: polygon(50% 0%, 0% 100%, 100% 100%);margin-left: auto;
  margin-right: auto;display: block;">
</div>
</body>
</html>

<?php
/*print_r($_POST);*/
if ($_POST['numberA'] <= 0 || $_POST['numberB'] <= 0 ||$_POST['numberC'] <= 0  ){
	echo "please sumbit all the field with postive numbers   ";
}
else{ echo "the perimeter is  ";
$resultat=$_POST["numberA"]+$_POST["numberB"]+$_POST["numberC"];
echo $resultat;}

?>

<form method="post">

    <p style="padding-top:50px;">What is the value of the first side?</p>
    <p><input type="text" name="numberA"></p>
		<p>What is the value of the second side?</p>
    <p><input type="text" name="numberB"></p>
	<p>What is the value of the third side?</p>
	<p><input type="text" name="numberC"></p>
    <p><input type="submit" value="Submit"></p>


</form>

