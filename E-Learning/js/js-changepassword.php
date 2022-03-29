
	<script type="text/javascript">  
		function validateform()
		{  
			
			var cpassword=document.myform.cpassword.value;
			var npassword=document.myform.npassword.value;  
			var rnpassword=document.myform.rnpassword.value;  
			  
			
			
			
			 if(cpassword==null || cpassword=="")
			{  
			  alert("Password can't be blank");  
			  return false;  
			} else if (npassword==null || npassword=="")
			{  
			  alert("Contactno can't be blank");  
			  return false;  
			} 
			else if (rnpassword==null || rnpassword=="")
			{  
			  alert("Confirm password can't be blank");  
			  return false;   
			} 
		}
		
         
           
        function checkPass()
        {
        	if (document.getElementById("cpassword").value == "") 
        	{
			  	document.getElementById("cpassErr").innerHTML = "Password can't be blank";
			  	document.getElementById("cpassErr").style.color = "red";
			  	document.getElementById("cpassword").style.borderColor = "red";
			}		
			else
			{
				document.getElementById("cpassErr").innerHTML = "";
			  	document.getElementById("cpassErr").style.color = "red";
				document.getElementById("cpassword").style.borderColor = "black";
			}
        }

        function checkNpassword() 
		{
			if (document.getElementById("npassword").value == "") 
			{
			  	document.getElementById("npasswordErr").innerHTML = "New password can't be blank";
			  	document.getElementById("npasswordErr").style.color = "red";
			  	document.getElementById("npassword").style.borderColor = "red";
			}else if(document.getElementById("npassword").value.length<8)
			{
			  	document.getElementById("npassword").style.borderColor = "red";
			  	document.getElementById("npasswordErr").style.color = "red";
				document.getElementById("npasswordErr").innerHTML = "New password must be at least 8 characters long.";
			}
			else
			{
			  	document.getElementById("npasswordErr").innerHTML = "";
				document.getElementById("npassword").style.borderColor = "black";
			}
			
        }
        function checkRnpassword()
        {
        	if (document.getElementById("rnpassword").value == "") 
        	{
			  	document.getElementById("rnpasswordErr").innerHTML = "Retype password can't be blank";
			  	document.getElementById("rnpasswordErr").style.color = "red";
			  	document.getElementById("rnpassword").style.borderColor = "red";
			}else if(document.getElementById("rnpassword").value.length<8)
			{
			  	document.getElementById("rnpassword").style.borderColor = "red";
			  	document.getElementById("rnpasswordErr").style.color = "red";
				document.getElementById("rnpasswordErr").innerHTML = "Retype password must be at least 8 characters long.";
			}
			else if(document.getElementById("rnpassword").value !== document.getElementById("npassword").value)
			{
			  	document.getElementById("rnpassword").style.borderColor = "red";
			  	document.getElementById("rnpasswordErr").style.color = "red";
				document.getElementById("rnpasswordErr").innerHTML = "Password & Retype password must be same.";
			}
			else{
			  	document.getElementById("rnpasswordErr").style.color = "red";
				document.getElementById("rnpasswordErr").innerHTML = "";
				document.getElementById("rnpassword").style.borderColor = "black";
			}
        }
</script>  
