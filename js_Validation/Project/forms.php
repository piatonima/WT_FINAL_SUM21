<?php
    require_once 'validation.php';
	?>

<html>
<script>
 function validate()
 alert("Function called");
</script>
<body>
	<h1>DeliveryMan Registration</h1>
<fieldset>
<form action="" onsubmit="validate()" method="POST">
<table >
					<tr>
						<td>Name: </td>
						<td><input type="text" size="20" name="name" value="<?php echo $name;?>" placeholder="Name"></td>
						<td><span><?php echo $err_name;?></span></td>
						
					</tr>
					<tr>
						<td>Username: </td>
						<td><input type="text" size="20" name="username" value="<?php echo $uname;?>" placeholder="Username"></td>
						<td><span><?php echo $err_uname;?></span></td>
					</tr>
					<tr>
						<td>password: </td>
						<td><input type="password" size="20" name="pass" value="<?php echo $pass;?>" placeholder="Password"></td>
						<td><span><?php echo $err_pass;?></span></td>
					</tr>
					<tr>
						<td>Confirm password: </td>
						<td><input type="password" size="20" name="confirmPass" value="<?php echo $confirmPass;?>" placeholder="Confirm password"></td>
						<td><span><?php echo $err_confirmPass;?></span></td>
					</tr>
					
					<tr>
						<td>Email: </td>
						<td><input type="text" size="20" name="email" value="<?php echo $email;?>" placeholder="Email"></td>
						<td><span><?php echo $err_email;?></span></td>
					</tr>
					<tr>
						<td>Phone: </td>
						<td><input type="text" size="20" name="phone" value="<?php echo $phone;?>" placeholder="Phone"></td>
						<td><span><?php echo $err_phone;?></span></td>
					</tr>
					
					
</table>
                    <a align="center"><input type="submit" value="Register"></a><br>
					<b>Now, you can</b> <a href ="deliverylogin.php" ><i>Login<i></a>
</form>
</fieldset>
</body>
</html>