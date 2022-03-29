
	<script type="text/javascript">  
		function validateform()
		{  
			var name=document.myform.name.value; 
			var username=document.myform.username.value;  
			var email=document.myform.email.value; 
			var contactno=document.myform.contactno.value;
			var password=document.myform.password.value;  
			var confirmpassword=document.myform.confirmpassword.value;  
			  
			if (name==null || name=="")
			{  
			  alert("Name can't be blank");  
			  return false;  
			}
			else if (username==null || username=="")
			{  
			  alert("UserName can't be blank");  
			  return false;  
			}
			else if (contactno==null || contactno=="")
			{  
			  alert("Contactno can't be blank");  
			  return false;  
			}
			else if (email==null || email=="")
			{  
			  alert("email can't be blank");  
			  return false;  
			}
			
			else if(password==null || password=="")
			{  
			  alert("Password can't be blank");  
			  return false;  
			}  
			else if (confirmpassword==null || confirmpassword=="")
			{  
			  alert("Confirm password can't be blank");  
			  return false;   
			} 
		}
		function checkEmpty() 
		{
		  	if (document.myform.name.value = "") 
		  	{
		  		alert("Name can't be blank");
		        return false;  
		  	}
		 }  
		function checkName() 
		{
			if (document.getElementById("name").value == "") 
			{
			  	document.getElementById("nameErr").innerHTML = "Name can't be blank";
			  	document.getElementById("nameErr").style.color = "red";
			  	document.getElementById("name").style.borderColor = "red";
			}
			
			else
			{
			  	document.getElementById("nameErr").innerHTML = "";
				document.getElementById("name").style.borderColor = "black";
			}
			
        }
        function checkEmpty() 
		{
		  	if (document.myform.username.value = "") 
		  	{
		  		alert("UserName can't be blank");
		        return false;  
		  	}
		 }  
		function checkUserName() 
		{
			if (document.getElementById("username").value == "") 
			{
			  	document.getElementById("usernameErr").innerHTML = "UserName can't be blank";
			  	document.getElementById("usernameErr").style.color = "red";
			  	document.getElementById("username").style.borderColor = "red";
			}
			else
			{
			  	document.getElementById("usernameErr").innerHTML = "";
				document.getElementById("username").style.borderColor = "black";
			}
			
        }
        function checkEmail() 
		{
			reg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@(([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3})|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			if (document.getElementById("email").value == "") 
			{
			  	document.getElementById("emailErr").innerHTML = "Email can't be blank";
			  	document.getElementById("emailErr").style.color = "red";
			  	document.getElementById("email").style.borderColor = "red";
			} else if(!reg.test(document.getElementById("email").value))
            {   document.getElementById("emailErr").innerHTML = "Invalid Email format";
			  	document.getElementById("emailErr").style.color = "red";
			  	document.getElementById("email").style.borderColor = "red";
            }
			else
			{
			  	document.getElementById("emailErr").innerHTML = "";
				document.getElementById("email").style.borderColor = "black";
			}
			
        }
         function checkContactno() 
		{
			if (document.getElementById("contactno").value == "") 
			{
			  	document.getElementById("contactnoErr").innerHTML = "Contactno can't be blank";
			  	document.getElementById("contactnoErr").style.color = "red";
			  	document.getElementById("contactno").style.borderColor = "red";
			}
			else
			{
			  	document.getElementById("contactnoErr").innerHTML = "";
				document.getElementById("contactno").style.borderColor = "black";
			}
			
        }
           
        function checkPass()
        {
        	if (document.getElementById("password").value == "") 
        	{
			  	document.getElementById("passErr").innerHTML = "Password can't be blank";
			  	document.getElementById("passErr").style.color = "red";
			  	document.getElementById("password").style.borderColor = "red";
			}
			else if(document.getElementById("password").value.length<8)
			{
			  	document.getElementById("password").style.borderColor = "red";
			  	document.getElementById("passErr").style.color = "red";
				document.getElementById("passErr").innerHTML = "Password must be at least 8 characters long.";
			}			
			else
			{
				document.getElementById("passErr").innerHTML = "";
			  	document.getElementById("passErr").style.color = "red";
				document.getElementById("password").style.borderColor = "black";
			}
        }
        function checkConfirmpassword()
        {
        	if (document.getElementById("confirmpassword").value == "") 
        	{
			  	document.getElementById("confirmpasswordErr").innerHTML = "Confirm password can't be blank";
			  	document.getElementById("confirmpasswordErr").style.color = "red";
			  	document.getElementById("confirmpassword").style.borderColor = "red";
			}else if(document.getElementById("confirmpassword").value.length<8)
			{
			  	document.getElementById("confirmpassword").style.borderColor = "red";
			  	document.getElementById("confirmpasswordErr").style.color = "red";
				document.getElementById("confirmpasswordErr").innerHTML = "Confirm password must be at least 8 characters long.";
			}
			else if(document.getElementById("confirmpassword").value !== document.getElementById("password").value)
			{
			  	document.getElementById("confirmpassword").style.borderColor = "red";
			  	document.getElementById("confirmpasswordErr").style.color = "red";
				document.getElementById("confirmpasswordErr").innerHTML = "Password & Confirm password must be same.";
			}
			else{
			  	document.getElementById("confirmpasswordErr").style.color = "red";
				document.getElementById("confirmpasswordErr").innerHTML = "";
				document.getElementById("confirmpassword").style.borderColor = "black";
			}
        }
</script>  
