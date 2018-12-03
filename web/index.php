<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>
<head>
	<?php include("includes/head-tag-contents.php");?>
</head>
<body>

<?php include("includes/design-top.php");?>
<?php include("includes/navigation.php");?>

<div class="container" id="main-content">
	<h2>Welcome to my website!</h2>
	<p>Some content goes here! Let's go with the classic "lorem ipsum."</p>

	<p>
		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</p>
	<p>
		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</p>
</div>

<?php include("includes/footer.php");?>
    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-11 col-md-11 mx-auto">
         <!--  <div style="width:200px;"> -->
          <div>
            <form method=post>
            Input Age:
             <select name = "year">
              <option value="0">Select animal age: year</option>
              <option value="0">0</option>
              <option value="1">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>
              <option value="15">15</option>
              <option value="16">16</option>
              <option value="17">17</option>
              <option value="18">18</option>
              <option value="19">19</option>
              <option value="20">20 or 20+</option>
            </select>
            <select name = "month">
              <option value="0">Select animal age: month</option>
              <option value="0">0</option>
              <option value="1">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
            </select>
            <select name = "week" >
              <option value="0">Select animal age: week</option>
              <option value="0">0</option>
              <option value="1">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select>
            <select name = "day" >
              <option value="0">Select animal age: day</option>
              <option value="0">0</option>
              <option value="1">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
            </select>
            Choose animal Type:
            <select name = "animalTypeList" onchange="getAnimalType();">
              <option value="0">Select animal type:</option>
              <option value="Cat">Cat</option>
              <option value="Dog">Dog</option>
              <option value="Bird">Bird</option>
              <option value="Other">Other</option>
            </select>
            Choose animal color:
            <select name = "colorTypeList" >
              <option value="0">Select animal color:</option>
              <option value="Orange">Orange</option>
              <option value="Blue">Blue</option>
              <option value="Black">Black</option>
              <option value="Other">Other</option>
            </select>
            Choose animal Sex:
            <select name = "sexTypeList" >
              <option value="0">Select animal sex:</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              <option value="Other">Other</option>
            </select>
            Choose animal Sex Outcome:
            <select name = "sexOutcomeTypeList">
              <option value="0">Select animal sex outcome:</option>
              <option value="Intact">Intact</option>
              <option value="Spayed">Spayed</option>
              <option value="Neutered">Neutered</option>
              <option value="Unknown">Unknown</option>
            </select>
            Choose animal Dominant Breed:
            <select name = "breedList">
              <option value="0">Select animal dominant breed:</option>
              <option value="'Domestic Shorthair Mix'">Domestic Shorthair Mix</option>
              <option value="'Pit Bull Mix'">Pit Bull Mix</option>
              <option value="'Chihuahua'">Chihuahua</option>
              <option value="'Shorthair Mix'">Shorthair Mix</option>
              <option value="'Mix'">Mix</option>
            </select>
           	<input name="test" type=submit>
           </form>
			<?php 
				$ageYear=$_POST['year'];
				$ageMonth=$_POST['month'];
				$ageWeek=$_POST['week'];
				$ageDay=$_POST['day'];
				$animalType=$_POST['animalTypeList'];
				$colorType=$_POST['colorTypeList'];
				$sexType=$_POST['sexTypeList'];
				$sexOutcomeType=$_POST['sexOutcomeTypeList'];
				$breedType=$_POST['breedList'];
		        if(isset($_POST['test'])){

		        	$command = "python predict_dt.py" . ' ' . $ageYear . ' ' . $ageMonth . ' ' . $ageWeek . ' ' . $ageDay . ' ' . $animalType . ' ' . $colorType . ' ' . $sexType . ' ' . $sexOutcomeType . ' ' . $breedType;
				    system($command, $output);
				    $newoutput=rtrim($output,"0");
				    echo $newoutput;
				}
	        ?>
          </div>
        </div>
      </div>
    </div>

</body>
</html>