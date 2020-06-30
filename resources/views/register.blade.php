<!DOCTYPE html>
<html>
<head>
	<title>SanberBook</title>
</head>
<body>
	<h1>Buat Account Baru!</h1>
	<h3>Sign Up Form</h3>
	<form action="/welcome" method="POST">
		<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
		<label for="fname">First name:</label><br>
	  	<input type="text" name="fname"><br><br>

	  	<label for="lname">Last name:</label><br>
	  	<input type="text" name="lname"><br><br>

	  	<label for="gender">Gender:</label><br>
		<input type="radio" id="male" name="gender" value="male">
	  	<label for="male">Male</label><br>
	  	<input type="radio" id="female" name="gender" value="female">
	  	<label for="female">Female</label><br>
	  	<input type="radio" id="other" name="gender" value="other">
	  	<label for="other">Other</label><br><br>

	  	<label for="nationality">Nationality:</label><br>
		<select name="nationality" id="nationality">
		  <option value="indonesian">Indonesian</option>
		  <option value="american">American</option>
		  <option value="australian">Australian</option>
		</select><br><br>

	  	<label for="language">Language Spoken:</label><br>
	  	<input type="checkbox" value="indonesia">
	  	<label for="indonesia">Bahasa Indonesia</label><br>
	  	<input type="checkbox" value="english">
	  	<label for="english">English</label><br>
	  	<input type="checkbox" value="other">
	  	<label for="other">Other</label><br><br>

	  	<label for="bio">Bio:</label><br>
		<textarea id="bio" name="bio" rows="4" cols="40"></textarea><br><br>

	  	<input type="submit" value="Sign Up">
	</form>
</body>
</html>