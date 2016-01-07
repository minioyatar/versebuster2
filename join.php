<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Versebuster - Registration</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="/versebuster2/js/library/jquery-1.11.0.js"></script>
	<script src="/versebuster2/js/library/bootstrap.min.js"  ></script>
	<script src="/versebuster2/js/library/jquery.typedtext.js"></script>

	<style type="text/css">
	@font-face {
		font-family: 'LucidaCustomFont';
		src: url('/versebuster2/fonts/lucidaC.eot');
		src: url('/versebuster2/fonts/lucidaC.eot?#iefix') format('embedded-opentype'),
		url('/versebuster2/fonts/lucidaC.ttf') format('truetype');
		font-weight: normal;
		font-style: normal;
	}
	.vbR .field input[type="text"], .vbR .field input[type="email"], .vbR .field input[type="password"], .vbR .field input[type="tel"], .vbR .field textarea, .field select{
		-moz-appearance: none;
		background-color: #f1f2f1;
		border: 1px solid #f1f2f1;
		border-radius: 0;
		box-shadow: none !important;
		display: inline-block;
		font-family: arial,helvetica,verdana,sans-serif;
		font-size: 16px;
		font-weight: bold;
		margin-left: 25px;
		outline: 0 none;
		padding: 10px 0 9px;
		text-indent: 8px;
		/*width: 100%;*/
	}

	.field label{
		width: 100px;
		/*text-align: right;*/
		/*display: inline-block;*/
	}
	.visuallyhidden{
		display: none;
	}
/*
.field{
display: block;
width: 425px;
}
*/		</style>

</head>
<body style="">
	<div class="container-fluid" style="">
		<div class="row" style="">
			<div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2" style="margin-top: 20px; color:#000000;font-family: 'LucidaCustomFont',arial,sans-serif; font-weight: inherit;">
				<h1 style=""><a href="index.php" style="color:#000000; text-decoration:none">Versebuster</a></h1>
				<p class="">A Shakespeare Performance Resource with Audio</p>
			</div>
		</div>
		<div class="row vbR" style="background: #009D9F ; ">
			<div class="col-md-8 col-md-offset-2" style=" ">

				<h2>Sign Up</h2>
				<h3 class="selectModule">
					<span class="step">Step <span>One</span></span>
					<span class="title">Enter personal information</span>
					<span class="linkPolicy">Your information will be used in accordance with our <a href="#" target="_blank" title="Privacy Policy" style="color:#B00071; text-decoration:none">Privacy Policy</a></span>
				</h3>
					<div class="intro">
						<h4>Enter your details below</h4>
						<p>*required field</p>
					</div>

				<form id="accountCreation_form" role="form">

					<div class="content">
						<div class="field form-group title">
							<label for="title" class="">Title</label>
							<select name="title" id="title" class="validated" style="width:208px">
								<option disabled="disabled" label="Title" value="">Title</option>
								<option value="Mr">Mr</option>
								<option value="Mrs">Mrs</option>
								<option value="Miss">Miss</option>
								<option value="Ms">Ms</option>
								<option value="other">Other</option>
							</select>
						</div>

						<div class="field form-group firstname">
							<label for="firstName">First Name <span class="mandatory">*</span> </label>
							<input type="text" id="firstName" name="firstName" class="validated detailsIcon" autocomplete="off" placeholder="Letters only" data-format="" data-label="First Name" data-required="true"/>
							<!-- <span class="validity-icon is-valid" tabindex="-1"></span> -->
						</div>
						<div class="field form-group lastname">
							<label for="lastName">Last Name <span class="mandatory">*</span> </label>
							<input type="text" id="lastName" name="lastName" class="validated nameIcon" autocomplete="off" placeholder="Letters only" data-format=""data-label="Last Name" data-required="true"/>
							<!-- <span class="validity-icon is-valid" tabindex="-1"></span> -->
						</div>
						<div class="field form-group email">
							<label for="email">Email address <span class="mandatory">*</span> </label>
							<input type="email" id="email" name="email" class="validated emailIcon"  autocomplete="off" placeholder="email@example.co.uk" data-format="" data-label="Email address" data-required="true" maxlength=""/>
							<!-- <p class="help">Type carefully - you'll need to use this email address to login into your Times/Sunday Times account</p> -->
						</div>
						<div class="field form-group confirmEmail">
							<label for="confirmEmail">Confirm email address <span class="mandatory">*</span> </label>
							<input type="email" id="confirmEmail" name="confirmEmail" class="validated emailIcon" autocomplete="off" placeholder="email@example.co.uk" data-format="" data-label="Confirm email address" data-required="true" maxlength="80"/>
						</div>
						<div class="field form-group screen-name">
							<label for="screenName">Username</label>
							<input type="text" maxlength="100" id="screenName" name="screenName detailsIcon" class="validated" autocomplete="off"placeholder=""data-format=""data-label="Screen Name"data-required=""/> </div>

							
						</div>						
						<div class="field form-group password">
							<label for="password">Password <span class="mandatory">*</span> </label>
							<input type="password" id="password" name="password" class="validated passwordIcon"  autocomplete="off" placeholder="6 - 20 characters" data-format="" data-label="Password" data-required="true" maxlength="20" minlength="6" />
							<span class="validity-icon is-valid" tabindex="-1"></span>
							<p class="help">Please enter a password between 6 and 20 characters</p>
						</div>
						<div class="field form-group confirm-password">
							<label for="confirmPassword">Confirm password
								<span class="mandatory">*</span>
							</label>
							<input type="password" id="confirmPassword" name="confirmPassword" class="validated passwordIcon" autocomplete="off"placeholder="6 - 20 characters"data-format=""data-label="Confirm password"data-required="true"maxlength="20"minlength="6" /> <span class="validity-icon is-valid" tabindex="-1"></span>
						</div>


						<div class="buttonHolder"><button id="accountCreationButton" type="submit" class="button">Continue to Payment Information</button></div>
					</form>
				</div>
			</div>


		</div>

		<script type="text/javascript">
		$(document).ready(function() {

//retype animation
function reType(){
// $("#animate-subhead").typedText("GIVES YOU FREE AND FULL ACCESS TO", "slow");

$("#animate-subhead").delay(5000).typedText("GIVES YOU FREE AND FULL ACCESS TO", 100,function() {
	setTimeout(reType, 2000);
})
}
reType()
//end


});

		</script>
	</body>
	</html>