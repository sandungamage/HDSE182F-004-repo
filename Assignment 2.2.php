<html>
<head><title>Login</title>

</head>
<body background="1-2.jpg" >

<form name="frmLogin" method="post" action="#" onSubmit="return validate(this);">

<h1>Login In</h1>
  Username:<input type="text" name="txtUN" /><br /> <br /> 
  Password:<input type="password" name="txtPW" /><br /> <br /> 

<input type="submit" name="btnSubmit" value="Login" /><br/>

</form>


</body>
</html>

			<script type="text/javascript">
		function validate(form) 
		{
  		var re = /^[a-z,A-Z,0-9]+$/i;
		var st =  /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})+$/;
		
		if (document.frmLogin.txtUN.value == 0) {
        alert("Enter Username");
		return false;
    }
		  		else if (!re.test(form.txtUN.value)) 
			{
   		 alert("Don't Enter Special Character");
    	return false;
  			}
 
   		 else if (document.frmLogin.txtPW.value == 0) {
       	 alert("Enter Password");
		 return false;
    }

		else if(!st.test(form.txtPW.value)) 
		{ 
		alert("Passwords must contain at least 8 characters, including uppercase, lowercase letters, special character and numbers")
		return false;
		}
			
		}
			</script>



<?php

if(isset($_POST["txtUN"]))
{
	$un = $_POST["txtUN"];
	$pw = $_POST["txtPW"];

    
	
	$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con,"user");
	$sql = "Select * from login where uname='$un' and pword='$pw'";
	$result = mysqli_query($con,$sql);
	if($row = mysqli_fetch_array($result))
	{
		session_start();
		$_SESSION["un"]=$un;
		$_SESSION["pw"]=$pw;
		header("Location:welcome.php");
		
	}
	else
	{
		echo("<script type='text/javascript'>alert('Invalid Username or Password...')</script>");
		
	}
	mysqli_close($con);
	
}
else
{
	
}
?>