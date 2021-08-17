<?php
	$name="";
	$err_name="";
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$confirmPass="";
	$err_confirmPass="";
	$email="";
	$err_email="";
	$phone="";
	$err_phone="";
	
	$hasError=false;

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["name"])){
			$err_name="*Name Required";
			$hasError = true;
		}
		else if(strlen($_POST["name"]) <=2){
			$err_name="*Name Must be greater than 2";
			$hasError = true;
		}
		else{
			$name=$_POST["name"];
		}
		if(empty($_POST["username"])){
			$err_uname="*Username Required";
			$hasError = true;
		}
		
		else{
			$uname=$_POST["username"];
		}
		if(empty($_POST["pass"])){
			$err_pass="*Pass Required";
			$hasError = true;
		}
		else if(strlen($_POST["pass"]) <=8){
			$err_pass="*Pass Must be greater than 8";
			$hasError = true;
		}
		else{
			$pass=$_POST["pass"];
		}
		if(empty($_POST["confirmPass"])){
			$err_confirmPassword="Pass Required";
			$hasError = true;
		}
		else if(strlen($_POST["confirmPass"]) <=8){
			$err_confirmPass="Pass must be greater than 8";
			$hasError = true;
		}
	    
		else{
			$confirmPass=$_POST["confirmPass"];
		}
	    if ($pass != $confirmPass) {
            $err_confirmPass = "*Passwords are different";
            $hasError = true;
        }
		else{
			$confirmPass=$_POST["confirmPass"];
		}
	
		if(empty($_POST["email"])){
			$err_email="*Email must be given";
			$hasError = true;
		}
		else{
			$email=$_POST["email"];
		}
		if(strlen($_POST["email"]) <=10){
			$err_email="*___@gmail.com";
			$hasError = true;
		}
		if(empty($_POST["phone"])){
			$err_phone="Phone number Required";
			$hasError = true;
		}
		else if(strlen($_POST["phone"]) <=10){
			$err_phone="Must be a valid phone number";
			$hasError = true;
		}
		else{
			$phone = $_POST["phone"];
		}
		
 if(!$hasError){
	         
			 echo "DeliveryMan Name:  ";
			 echo $name."<br>";
			 echo $_POST["username"]."<br>";
			 echo $_POST["pass"]."<br>";
			 echo $_POST["confirmPass"]."<br>";
			 echo "Email:  ";
			 echo $_POST["email"]."<br>";
			 echo "Contact Number:  ";
			 echo $_POST["phone"]."<br>";
		}
	}
	
	?>