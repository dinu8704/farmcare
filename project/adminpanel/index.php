<!DOCTYPE html>
<html lang="en">
   <?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "sdata";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
    
    
    
    <?php

$connect = mysqli_connect("localhost:3307", "root", "", "sdata");  

 if(isset($_POST["submit"]))  
 { 
    
     
     

$name = $_POST['name'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];
$service = $_POST['service'];
$acre = $_POST['acre'];
$message = $_POST['message'];






$query="INSERT INTO `squery`(`name`, `mobile`,`address`, `service`, `acre`,`message`) VALUES ('$name','$mobile','$address','$service','$acre','$message')";
 
  if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert(" Inserted into Database")</script>';  
      }  


 }
mysqli_close($connect);
?>

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
<head>
	<title>Contact V4</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form method="post" enctype="multipart/form-data">
				<span class="contact100-form-title">
					Say Hello!
				</span>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Your Name</span>
					<input class="input100" type="text" name="name" placeholder="Enter your name" required>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" type="tel" tabindex="3" required>
					<span class="label-input100">Mobile No.</span>
					<input class="input100"  name="mobile" placeholder="Enter your Mobile" required>
					<span class="focus-input100"></span>
				</div>
                
                <div class="wrap-input100 validate-input" >
					<span class="label-input100">Address</span>
					<input class="input100" type="text" name="address" placeholder="Enter your address" required>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 input100-select">
					<span class="label-input100">Your Query</span>
					<div>
						<select class="selection-2" name="service">
							<option value="non_choice">Choose Any One</option>
							<option value="Adrak">Adrak</option>
							<option value="Makka">Makka</option>
							<option value="Kapas">Kapas</option>
							<option value="Kanda">Kanda</option>
							<option value="Mirchi">Mirchi</option>
							<option value="Other">Other</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 input100-select">
					<span class="label-input100">Farm</span>
					<div>
						<select class="selection-2" name="acre">
							<option value="non_select">Select Acre</option>
							<option value="0-1 Acre">0-1 Acre</option>
							<option value="1-2 Acre">1-2 Acre</option>
							<option value="2-3 Acre">2-3 Acre</option>
							<option value="3-5 Acre">3-5 Acre</option>
							<option value="More Than 5 Acre">More Than 5 Acre</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<span class="label-input100">Message</span>
					<textarea class="input100" name="message" placeholder="Your message here..."></textarea>
					<span class="focus-input100"></span>
				</div>
<style>
    .subt{
/*        opacity: 0.5;*/
    }
    .subt input{
        opacity: 0.5;
        border-radius: 50px;
        color: red;
    }
      
                </style>
				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn">
							<span class="subt">
								                          <input type="submit"  name="submit">
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
   


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
