<!DOCTYPE html>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<link href="assets/css/style2.css " rel="stylesheet">

<!-- MultiStep Form -->
</head>
<body>
<?php
include('data_base.php');

if (isset($_POST['submit'])){
	$block=$_POST['block'];
    $bed=$_POST['bed'];
	$growth=$_POST['growth'];
	$height=$_POST['height'];
	$depth=$_POST['depth'];
	$water=$_POST['water'];
    $bug=$_POST['bugs'];
    $name=$_POST['name'];
    
    echo "<script>console.log('Submitting')</script>";

	$insert="insert into system_1 values('NULL','$block','$bed','$growth','$height','$depth','$water','$bug','$name')";
	
    if(mysqli_query($conn,$insert))
    {
    //   ['block']['bed']['growth']['height']['depth']['water']['bugs']['name'];
      echo "<script>console.log('Thank you')</script>";
	  
    }
    
} else{
	echo "<script>console.log('Not sent successfully')</script>";
}

	# code...
?>

<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <form id="msform"  action ="" onsubmit="alert('Thanks for contributing');" method ="post" enctype = "multipart/form-data">
            <!-- progressbar -->
            <ul id="progressbar">
                <li class="active">Flower Details</li>
                <li>Weekly Records</li>
                <li>Growth Progress</li>
            </ul>
            <!-- fieldsets -->
            <fieldset>
                <h2 class="fs-title">Growing for the future</h2>
                <h3 class="fs-subtitle">Keep track of your flower's growth.</h3>
                <input type="varchar" name="block" placeholder="Which block is it ? "/>
                <input type="varchar" name="bed" placeholder="What bed is it? "/>
                
                <input type="button" name="next" class=" next action-button" value="Next"/>
            </fieldset> 
            <fieldset>
                <h2 class="fs-title">Growing for the future</h2>
                <h3 class="fs-subtitle">Keep track of your flower's growth.</h3>
                <input type="integer" name="growth" placeholder="What is the height of the shoot in centimetres? "/>
                <input type="integer" name="height" placeholder="What is the height of the stem in centimetres?"/>
                <input type="integer" name="depth" placeholder="How deep are the roots in centimetres?"/>
                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                <input type="button" name="next" class="next action-button" value="Next"/>
               
                
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Growing for the future</h2>
                <h3 class="fs-subtitle">Keep track of your flower's growth.</h3>
                <input type="integer" name="water" placeholder="Water supplied in the week in litres"/>
                <input type="varchar" name="bugs" placeholder="What type of bugs were found ?"/>
                
                <input type="varchar" name="name" placeholder="What supplementary elements were given ?"/>
                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                <input type="submit" name="submit" class="action-button" value="Submit">
                <!-- <input type="button" name="submit" class="submit action-button" value="Submit"/> -->
            </fieldset>
            
        </form>
    </div>
</div>

<script src="js/script.js"></script>
</body>
</html>