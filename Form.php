<!DOCTYPE html>
<html>
<head>
	<meta charset = "utf-8">
	<title>Form</title>
</head>
<body>
	<h3>Radiobutton:</h3>

	<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
		<h4>Alter?</h4>
		<label><input type="radio" name="age" value="cat1"> < 10 </label>
		<br>
		<label><input type="radio" name="age" value="cat2" checked>11-20</label>
		<br>
		<label><input type="radio" name="age" value="cat1"> 21-30 </label>
		<br>
		<label><input type="radio" name="age" value="cat1"> 31-40 </label>
		<br><br>
		<input type="submit" name="RadioBTN" value="Abschicken">
		<br>
	</form>

	<?php 
	if(isset($_POST['RadioBTN']))
	{
		echo "Alter: ".$_POST['age']; //GET
	}

	?>

	<hr>

	<h3>Checkbutton:</h3>

	<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
		<input type="checkbox" name="agb" value="agb">

		<input type="submit" name="Check1BTN" value="Abschicken">
	</form>

	<br>
	<?php 
	if(isset($_POST['Check1BTN']))
	{
		echo "AGBs akzeptiert";
	}
	else
	{
		echo "AGBs nicht akzeptiert";
	}
	?>

	<br><br>

	<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
		<lable><input type="checkbox" name="city[]" value="NYC">New York City</lable>
		<br>
		<lable><input type="checkbox" name="city[]" value="Boston">Boston</lable>
		<br>
		<lable><input type="checkbox" name="city[]" value="SF">San Francisco</lable>
		<br>
		<lable><input type="checkbox" name="city[]" value="DCs">Washington DC</lable>
		<br>
		<input type="submit" name="Check2BTN" value="Abschicken">
	</form>

	<?php 
	if(isset($_POST['Check2BTN']))
	{
		var_dump($_POST['city']);
	}
	?>

	<hr>

	<h3>Auswahlliste:</h3>

	<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
		<select size="5" name="car1[]" multiple="3">
			<option value="Audi">Audi</option>
			<option value="BMW">BMW</option>
			<option value="Renault">Renault</option>
			<option value="Seat">Seat</option>
			<option value="VW">VW</option>
		</select>
		<input type="submit" name="Auswahl1BTN" value="Abschicken">
	</form>

	<?php
	if(isset($_POST['Auswahl1BTN']))
	{
		foreach ($_POST['car1'] as $car) 
		{
			echo $car."<br>";
		}
	}
	?>

	<br><br>

	<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
		<select size="3" name="car2">
			<option>Audi</option>
			<option>BMW</option>
			<option>Renault</option>
			<option>Seat</option>
			<option>VW</option>
		</select>
		<input type="submit" name="Auswahl2BTN" value="Abschicken">
	</form>

	<?php
	if(isset($_POST['Auswahl2BTN']))
	{
		echo "Ausgewählt: ".$_POST['car2']; 
	}
	?>

	<br><br>

	<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
		<select size="1" name="car3">
			<option>Audi</option>
			<option>BMW</option>
			<option>Renault</option>
			<option>Seat</option>
			<option>VW</option>
		</select>
		<input type="submit" name="Auswahl3BTN" value="Abschicken">
	</form>

	<?php
	if(isset($_POST['Auswahl3BTN']))
	{
		echo "Ausgewählt: ".$_POST['car3']; 
	}
	?>


</body>
</html>