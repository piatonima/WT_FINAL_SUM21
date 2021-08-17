var hasError=false;
    function get(id){
	   return document.getElementById(id);
    }
    function validate(){
	   refresh()
	   if (get("name").value == ""){
		 hasError = true;
		 get("err_name").innerHTML = "*Name Required";
	}
	else if(get("name").value.length <2){
		get("err_name").innerHTML=" Name must be greater than 2 characters";
	}
	if (get("username").value == ""){
		 hasError = true;
		 get("err_uname").innerHTML = "*UserName Required";
	}
	if (get("password").value == ""){
		 hasError = true;
		 get("err_pass").innerHTML = "*Password Required";
	}
	if (get("confirmpass").value == ""){
		 hasError = true;
		 get("err_confirmPass").innerHTML = "*Confirm with the correct Password";
	}
	if (get("phone").value == ""){
		 hasError = true;
		 get("err_phone").innerHTML = "*Phone Required";
	}
	if (get("bio").value == ""){
		 hasError = true;
		 get("err_bio").innerHTML = "*Bio Required";
	}
	if (get("profession").selectedIndex ==0){
		 hasError = true;
		 get("err_prof").innerHTML = "*Proffesion Required";
	}
	return !hasError=true;
    }
    function refresh(){
	  hasError=false;
	   get("err_name").innerHTML="";
	   get("err_uname").innerHTML="";
	   get("err_pass").innerHTML="";
	   get("err_confirmPass").innerHTML="";
	   get("err_phone").innerHTML="";
	   get("err_bio").innerHTML=""
    }
 
