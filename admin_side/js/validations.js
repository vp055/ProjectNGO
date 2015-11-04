
			
			function validateemail()
			{	
				var email = document.getElementById('email');
				var filter =new RegExp(/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/);
				var result = filter.test(document.getElementById("email").value);
				if(document.getElementById("email").value!="")
               			{
					if (result==false) {
					document.getElementById("emailerror").innerHTML="Please provide a valid email address";
					email.focus;
					document.getElementById("email").focus();
						document.getElementById("email").select();
					}
					else
					{
						document.getElementById("emailerror").innerHTML = "";
					}
				}
				else if(document.getElementById("email").value=="")
               			{
                 			document.getElementById("emailerror").innerHTML = "You must enter email";
					document.getElementById("email").focus();
					document.getElementById("email").select();               			
				}
				

				
			}
			
			function validatephone()
        		{
				if(document.getElementById("phone1").value != "")
				{
					if(isNaN(document.getElementById("phone1").value))
					{
							document.getElementById("phoneerror").innerHTML = "Please enter only numbers";
							document.getElementById("phone1").focus();
							document.getElementById("phone1").select(); 					
					}
					
					else
					{
					
				
						
						   document.getElementById("phoneerror").innerHTML="";					
						
					}
					
					
				}
				else if(document.getElementById("phone1").value == "")
				{
					document.getElementById("phoneerror").innerHTML = "You must enter phone number"; 						document.getElementById("phone1").focus();
					document.getElementById("phone1").select(); 					
				}
				
			}

