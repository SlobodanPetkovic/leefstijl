<!DOCTYPE html>
<html>
<head>
	<title>Project Leeftstijl</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<style>
input[type=number]
{
width: 100%;
padding: 10px 15px;
margin: 10px 0px;
box-sizing: border-box;
}
</style>
  <body>

	<div class="container-fluid">
		<div class="row">
			<div class="col-12 bg-warning">
				<center><h3>Check je leefstijl!!</h3></center>
			</div>
		</div>
	
	</div>
    <div class="container-fluid  bg-warning">
		<div class="row bg-light">
			<div class="col 6 bg-danger border rounded-3">
				<form name ="bmi berekenen" method="post" action="bmi.php"><br/>
					Lengte <br/>
					<input type="text" name="lengte" value=" "><br/>
					Gewicht (KG) <br/>
					<input type="text"name="gewicht" value=" "><br/>

					<input type="submit" name="submit"  value="Bereken"><br/>
					<img src="https://elements-video-cover-images-0.imgix.net/files/16c96aa7-0f13-4b3f-90ff-21e188967b7c/inline_image_preview.jpg?auto=compress&crop=edges&fit=crop&fm=jpeg&h=800&w=1200&s=c78c9acf2351bb45ad83be2a7d2e2400" alt= "" width="center" height="center">
					</form>
					
			</div>    
			
			<div class="col 6 bg-danger border rounded-3">
				<form name ="bmi berekenen" method="post" action="bmr.php"><br/>
				Lengte (Cm) <br/>
				<input type="number" name="Lengte_Cm" value=" "><br/>
				Gewicht (KG) <br/>
				<input type="number" name="Gewicht_Kg" value=" "><br/>
				Leeftijd <br/>	
				<input type="number" name="Leeftijd" value=" "><br/>
				Geslacht<br>
				Man
				<input type="radio" name="sex" value="Man"><br>
				Vrouw
				<input type="radio" name="sex" value="Vrouw"><br>
					<input type="submit" name="submit"  value="Bereken"><br/>
					<img src="http://www.pictureperfectphoto.co.uk/wp-content/uploads/2022/03/COLLETTE-EVANS-GYM-OCT-2021_231-1024x683.jpg" alt= "" width="center" height="center ">
					</form>
					
					  
			
			</div>
		
			<div class="container-fluid">
				<div class="row">
					<div class="col-12 bg-warning">
						<center><h3>Gemaakt door Slobodan</h3></center>
					</div>
				</div>
			</div>
		</div>
	</div>
  </body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title>Winstpercentage</title>
</head>
<body>

	<h2>inkoop</h2>

	<form method="post">
		<label for="myText">Inkoopprijs:</label>
		<input type="text" id="myText" name="myText"><br><br>

		<input type="radio" id="optie1" name="options" value="10">
		<label for="optie1">10% winst</label><br>

		<input type="radio" id="optie2" name="options" value="15">
		<label for="optie2">15% winst</label><br><br>

		<input type="submit" name="submit" value="Bereken Verkoopprijs">
	</form>

	<?php
		if(isset($_POST['submit'])){
			$inkoopprijs = $_POST['myText'];
			$winstpercentage = $_POST['options'];

			if($inkoopprijs > 0 && $winstpercentage > 0){
				$verkoopprijs = $inkoopprijs + ($inkoopprijs * ($winstpercentage/100));
				echo "<p>Inkoopprijs: € " . $inkoopprijs . "</p>";
				echo "<p>Winstpercentage: " . $winstpercentage . "%</p>";
				echo "<p>Verkoopprijs: € " . $verkoopprijs . "</p>";
			} else {
				echo "<p>Voer een geldige inkoopprijs en winstpercentage in</p>";
			}
		}
	?>

</body>
</html>



