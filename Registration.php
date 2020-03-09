<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
	<form method="POST" action="registrationU.php"><center>
	<fieldset>
		<legend><b>REGISTRATION</b></legend>
	<table>
		<tr>
			<td>Name:</td>
		</tr>

		<tr>
			
			<td><input type="text" name="rname" value="" size="5" /></td>
		</tr>
		<tr>
		    <td>ID:</td>
		</tr>

		<tr>
			<td><input type="number" name="rnumber" value="" size="5" /></td>
		</tr>

		<tr>
			<td>Phone Number:</td>
		</tr>
		<tr>
			<td><input type="number" name="rphone" value="" size="5" /></td>
		</tr>
		<tr>
			<td>Email:</td>
		</tr>

		<tr>
			<td><input type="email" name="remail" value="" size="5" /></td>
		</tr>

<tr>
						<td>Gender:</td>

						<td>
							<input type="radio" name="gender" value="Male">Male
							<input type="radio" name="gender" value="Female">Female
							<input type="radio" name="gender" value="Others">Others
						</td>
					</tr>
		<tr>
			<td>Date Of Birth: </td>
			</tr>
			<tr>
			<td><input type="Date" name="rdate" value=""/></td>
		</tr>
							<tr>
						<td>Blood Group</td>
						<td>
							<select name="rbloodgroup">
								<option value="A+">A+</option>
								<option value="A-">A-</option>
								<option value="B+">B+</option>
								<option value="B-">B-</option>
								<option value="O+">O+</option>
								<option value="O-">O-</option>
							</select>
						</td>
					</tr>
	
		<tr>
			<td>Password:</td>
		</tr>
		<tr>
			<td> <input type="password" name="rpassword" value=""/></td>
		</tr>
		<tr>
			<td>Confirm Password:</td>
			</tr>
			<tr>
			<td> <input type="password" name="rconfirmpassword" value=""/></td>
		</tr>
		
		<tr>
			<td>Staff Type: </td>
			
			<td> 
				<input type="radio" name="Staff" value="receptionist">Receptionist
				<input type="radio" name="Staff" value="nurse">Nurse
			</td>
		</tr>
			<tr>
						<td>
										<input type="submit" name="submit" value="Create Account">	
										
						</td>
		</tr>
	</table>
	</fieldset>
	</center></form>
</body>
</html>