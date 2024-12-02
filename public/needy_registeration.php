<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" media="screen" href="needy_registeration.css">
	<title>New Registeration</title>

	<style>

	</style>
</head>

<body>

	<center>
		<div class="two pd mt">
			<h2>Patient Registration</h2>
			<hr>
			<form action="registere.php" method="post" enctype="multipart/form-data">
				<fieldset class="field-1 m">
					<legend class="legend-1">: Patient details :</legend>
					<div class="container">
						<div class="col col-2 m1">
							<label class="left m1" for="fname">First name:</label>
							<input class="form-field" type="text" id="fname" name="fname" placeholder="First Name" required>
						</div>

						<div class="col col-2 m1">
							<label class="left m1" for="lname">Last name:</label>
							<input class="form-field" type="text" id="lname" name="lname" placeholder="Last Name" required>
						</div>
					</div>
					<div class="container">
						<div class="col col-2 m1">
							<label class="left m1" for="Mobile">Mobile No.:</label>
							<input class="form-field" type="tel" id="mobile" name="mobile" maxlength="13" size="13" value="+91" placeholder="Mobile No." required>
						</div>
						<div class="col col-2 m1">
							<label class="left m1" for="age">Age:</label>
							<input class="form-field" type="number" id="age" name="age" placeholder="age" required>
						</div>
					</div>
					<div class=" m">
						<label class="left m1" for="email">Email:</label>
						<input class="flex1 form-field" type="email" id="email" name="email" placeholder="Email" required>
					</div>
					<div class="container">
						<div class="col col-2 m1">
							<label class="left m1" for="password">Password:</label>
							<input class="form-field" type="password" id="password" name="password" placeholder="password" required>
						</div>

						<div class="col col-2 m1">
							<label class="left m1" for="cpassword">Confirm Password:</label>
							<input class="form-field" type="password" id="cpassword" name="cpassword" placeholder="Confirm password" required>
						</div>
					</div>
					<div class="container">
						<div class="col col-2 m1">
							<label class="left m1" for="dob">DOB:</label>
							<input class="form-field" type="date" id="dob" name="dob" required>
						</div>
						<div class="col col-2 m1">
							<label class="left m1" for="blood_group">Select Patient Blood Group:</label>
							<select class="form-field" id="blood_group" name="blood_group" required>
								<option class="form-field" value="A+">A+</option>
								<option class="form-field" value="A-">A-</option>
								<option class="form-field" value="B+">B+</option>
								<option class="form-field" value="B-">B-</option>
								<option class="form-field" value="AB+">AB+</option>
								<option class="form-field" value="AB-">AB-</option>
								<option class="form-field" value="O+">O+</option>
								<option class="form-field" value="O-">O-</option>
								<option class="form-field" value="don't know">don't know</option>
							</select>
						</div>
					</div>
					<div class="col  m">
						<label class="col-4" for="gender">Gender :</label>
						<div class="col-4">
							Female <input class="" type="radio" name="gender" value="Female" id="Female" required>
						</div>
						<div class="col-4">
							Male <input class="" type="radio" name="gender" value="male" id="male" required>
						</div>
						<div class="col-4">
							other <input class="" type="radio" name="gender" value="other" id="other" required>
						</div>
					</div>
					<br>
					<div class="col m">
						<label class="left m1" for="hospital">Which hospital is the patient in :</label>
						<input class="flex1 form-field" type="text" id="Hospital" name="hospital" placeholder="Hospital" required>
					</div>
					<div class="container">
						<div class="col col-3 m1">
							<label class="left m1" for="city">City:</label>
							<input class="form-field" type="text" id="city" name="city" placeholder="City" required>
						</div>
						<div class="col col-3 m1">
							<label class="left m1" for="state">State:</label>
							<input class="form-field" type="text" id="state" name="state" placeholder="State" required>
						</div>
						<div class="col col-3 ">
							<label class="left m1" for="zip">Zip:</label>
							<input class="form-field" type="text" id="zip" name="zip" placeholder="zip" required>
						</div>
					</div>
					<br>
					<fieldset>
						<legend class="legend-2">: Emergency Contact Information :</legend>
						<div class="container">
							<div class="col col-2 m1">
								<label class="left m1" for="emergency_fname">First name:</label>
								<input class="form-field" type="text" id="emergency_fname" name="firstname" placeholder="First Name" required>
							</div>

							<div class="col col-2 m1">
								<label class="left m1" for="lastname">Last name:</label>
								<input class="form-field" type="text" id="emergency_lname" name="lastname" placeholder="Last Name" required>
							</div>
						</div>
						<div class="container">
							<div class="col col-2 m1">
								<label class="left m1" for="emergency_Mobile">Mobile No.:</label>
								<input class="form-field" type="tel" id="emergency_mobile" name="mobileno" maxlength="13" size="13" value="+91" placeholder="Mobile No." required>
							</div>
							<div class="col col-2 m1">
								<label class="left m1" for="relation">Relation:</label>
								<input class="form-field" type="text" id="relation" name="relation" placeholder="Relation" required>
							</div>
						</div>
						<div class=" m">
							<label class="left m1" for="emergency_email">Email:</label>
							<input class="flex1 form-field" type="email" id="emergency_email" name="emaill" placeholder="Email" required>
						</div>
					</fieldset>
					<br>
					<fieldset>
						<legend class="legend-2">: Healthy & Unhealthy Habits :</legend>
						<div class="container">
							<div class="col col-2 m1">
								<label class="left" for="alcohol"><strong>Alcohol Consumption</strong></label><br>
								<hr>
								<select class="form-field" id="alcohol" name="alcohol" required>
									<option class="form-field" value="#">SELECT AN OPTION</option>
									<option class="form-field" value="IDon'tdrink">I Don't drink</option>
									<option class="form-field" value="1-2glasses/day">1-2 glasses/day</option>
									<option class="form-field" value="3-4glasses/day">3-4 glasses/day</option>
									<option class="form-field" value="5+glasses/day">5+ glasses/day</option>
								</select>
							</div>
							<div class="col col-2 m1">
								<label class="left" for="smoke"><strong>Do You Smoke?</strong></label><br>
								<hr>
								<select class="form-field" id="smoke" name="smoke" required>
									<option class="form-field" value="#">SELECT AN OPTIONN</option>
									<option class="form-field" value="No">No</option>
									<option class="form-field" value="0-1pack/day">0-1 pack/day</option>
									<option class="form-field" value="1-2pack/day">1-2 pack/day</option>
									<option class="form-field" value="2+pack/day">2+ pack/day</option>
								</select>
							</div>




						</div>
						<fieldset style="background-color: gray; color: black;">
							<legend></legend>
							<div class="col  m" required>
								<label class="text-center" for="gender">NEEDS:</label><br>
								<hr>
								<div class="col-4">
									<input class="" type="checkbox" name="need[]" value="oxygen" id="Female">oxygen
								</div>
								<div class="col-4">
									<input class="" type="checkbox" name="need[]" value="blood" id="male">Blood
								</div>
								<div class="col-4">
									<input class="" type="checkbox" name="need[]" value="food" id="other">food
								</div>
								<div class="col-4">
									<input class="" type="checkbox" name="need[]" value="donation" id="other">Donation
								</div>
							</div>
						</fieldset>
					</fieldset>
					<br>
					<div>
						<input type="submit" name="submit" value="submit" class="btn btn-color btn-width">
					</div>
				</fieldset>
			</form>
		</div>

	</center>

</body>

</html>