<?php
    include 'Controllers/usercontroller.php';
?>
<html>
    <head></head>
	<body>

		<fieldset>
		    <legend align="center"><h1> SIGNUP</h1></legend>
		        <form action="" method="post">
				<table align="center" >
					<tr>
						<td><b><i>Name: <i><b></td>
						<td><input size="30" type="text" name="name" value="<?php echo $name;?>" placeholder="Name"></td>
						<td><span><small><?php echo $err_name;?><small></span></td>
						
					</tr>
					<tr>
						<td><b><i>Username: <i><b></td>
						<td><input size="30" type="text" name="username" value="<?php echo $uname;?>" placeholder="Username"></td>
						<td><span><small><?php echo $err_uname;?><small></span></td>
					</tr>
					<tr>
						<td><b><i>Password: <i><b></td>
						<td><input size="30" type="password" name="password" placeholder="Password"></td>
						<td><span><small><?php echo $err_pass;?><small></span></td>
					</tr>
					<tr>
						<td><b><i>Confirm Password: <b><i></td>
						<td><input size="30" type="password" name="confirm_password" placeholder="Retype Password"></td>
						<td><span><small><?php echo $err_cpass;?><small></span></td>
					</tr>
					<tr>
						<td><b><i>Email: <b><i></td>
						<td><input size="30" type="text" name="email" placeholder="Email"></td>
						<td><span><small><?php echo $err_email;?><small></span></td>
					</tr>
					
					<tr>
						<td align="center" colspan="3"><br><br><input type="submit" value="register"></td>
					</tr>
					
				</table>
			</form>
		</fieldset>
	</body>
<html>