<!DOCTYPE html>
<html>
<head>
	<title>E-Mail-Validierung</title>
</head>
<body>
	<h1>E-Mail-Validierung</h1>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<label for="email">E-Mail-Adresse:</label>
		<input type="email" name="email" id="email" required>
		<br>
		<input type="submit" name="submit" value="Absenden">
	</form>

	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$email = $_POST["email"];
			if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
				echo "<p>Vielen Dank für Ihre E-Mail-Adresse: $email</p>";
			} else {
				echo "<p>Bitte geben Sie eine gültige E-Mail-Adresse ein.</p>";
			}
		}
	?>
</body>
</html>
