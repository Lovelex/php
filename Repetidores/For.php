<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>
	<!-- =========== FORA DO PHP (HTML) ============ -->

	<select >
		<option value="2018"> 2018 </option>
		<option value="2017"> 2017 </option>
		<option value="2016"> 2016 </option>
		<option value="2015"> 2015 </option>
		<option value="2014"> 2014 </option>
		<option value="2013"> 2013 </option>
		<option value="2012"> 2012 </option>
		<option value="2011"> 2011 </option>
		<option value="2010"> 2010 </option>
		<option value="2009"> 2009 </option>
		<option value="2008"> 2008 </option>
	</select>

	<!-- =========== DENTRO DO PHP ============ -->

	<?php 

	echo "<select>";

	for ($i=date("Y"); $i >= date("Y")-10; $i--) { 
		echo '<option value="'.$i.'">'.$i.'</option>';
	}

	echo "</select>";

 ?>
</body>
</html>

