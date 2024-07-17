<!DOCTYPE html>
<html>
<head>
<title>How to integrate textlocal for mobile number verification using otp sms</title>
<link href="style.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="script.js"></script>

</head>
<body>
	<div class="container w3-card">
		<div class="err"></div>
		<form id="mobile-number-verification">
			<div class="mobile-heading">Mobile Number Verification</div>
			<div class="mobile-row">
			    <inpuet typ="text" id="name" class="mobile-input" placeholder="Enter your name">
			    <br>
			    <br>
				<input type="number" id="mobile" class="mobile-input" placeholder="Enter the 10 digit mobile number">
			</div>
			<div id="loading-image">
			<img src="ajax-loader.gif" alt="ajax loader">
			</div>
            <input type="button" class="mobileSubmit" value="Get OTP"onClick="getOTP();">
		</form>
	</div>
	
</body>
</html>