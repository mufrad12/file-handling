<!DOCTYPE html>
<html>
<head>
	<title>Registration Form Self</title>
</head>
<body>

	<h1>Registration Form Self</h1>

	<?php
		$firstNameErr = $lastNameErr = $genderErr = $emailErr = $usernameErr= $passwordErr= $recoveryemailErr="";

		$firstName = ""; 
		$lastName = ""; 
		$gender = "";
		$email = "";
		$username= "";
		$password= "";
		$recoveryemail= "";

		if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_POST['fname'])) {
				$firstNameErr = "Please fill up the first name properly";
			}
			else {
				$firstName = $_POST['fname'];
			}

			if(empty($_POST['lname'])) {
				$lastNameErr = "Please fill up the last name properly";
			}
			else {
				$lastName = $_POST['lname'];
			}
			 if(empty($_POST['email'])) {
				$emailErr = "Email is required";
			}
			else {
				$email = $_POST['email'];
			
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
				{ $emailErr = "Invalid email format"; }
		         }

			 if(empty($_POST['username'])) {
				$usernameErr = "Please fill up the username properly";
			}
			else {
				$username = $_POST['username'];
			}
           if(empty($_POST['password'])) {
				$passwordErr = "Please fill up the password properly";
			}
			else {
				$password = $_POST['password'];
			}
           if(empty($_POST['recoveryemail'])) {
				$recoveryemailErr = "Recovery Email is required";
			}
			else {
				$recoveryemail = $_POST['recoveryemail'];
			
           if (!filter_var($recoveryemail, FILTER_VALIDATE_EMAIL)) 
				{ $recoveryemailErr = "Invalid recovery email format"; }
		         }

			if (empty($_POST['gender'])) {
               $genderErr = "Gender is required"; 
                   } 

            else { 
            	$gender = $_POST['gender']; 
                 }

		}
	?>

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
		
		<!-- Input Text Field -->
		<fieldset>
			<legend> Basic Information :</legend>

		   <label for="fname">First Name</label>
		   <input type="text" name="fname" id="fname" value="<?php echo $firstName; ?>"> 
		   <p style="color:red"><?php echo $firstNameErr; ?></p>
		
		   <br>

		   <label for="lname">Last Name</label>
		   <input type="text" name="lname" id="lname" value="<?php echo $lastName ?>">
		   <p style="color:red"><?php echo $lastNameErr; ?></p>

           <br>

            <label for="gender">Choose Gender</label>

			<input type="radio" name="gender" 
			<?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female 

			<input type="radio" name="gender" 
			<?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male 

			<input type="radio" name="gender" 
			<?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other
            <p style="color:red"><?php echo $genderErr; ?></p>
			
			<br>

           <label for="email">Email</label>
		   <input type="email" name="email" id="email" value="<?php echo $email ?>">
		   <p style="color:red"><?php echo $emailErr; ?></p>

  

		</fieldset>

		<fieldset>
			<legend> User Account Information :</legend>

		   <label for="username">Username</label>
		   <input type="text" name="username" id="username" value="<?php echo $username; ?>"> 
		   <p style="color:red"><?php echo $usernameErr; ?></p>
		
		   <br>

           <label for="password">Password</label>
		   <input type="password" name="password" id="password" value="<?php echo $password; ?>"> 
		   <p style="color:red"><?php echo $passwordErr; ?></p>
		
		   <br>

           <label for="recoveryemail">Recovery Email</label>
		   <input type="recoveryemail" name="recoveryemail" id="recoveryemail" value="<?php echo $recoveryemail ?>">
		   <p style="color:red"><?php echo $recoveryemailErr; ?></p>
		
		   <br>

		</fieldset>

		 <input type="submit" value="Submit">

		
		 </form>

</body>
</html>