<html>
<head><title>Login</title>

</head>
<body background="1-2.jpg" >

<form name="frmLogin" method="post" action="#"   >

<h1>Login In</h1>
  Username:<input type="text" name="txtUN" /><br /> <br /> 
  Password:<input type="password" name="txtPW" /><br /> <br /> 

<input type="submit" name="btnSubmit" value="Login" /><br/>
<br/>
 Username:admin<br/>
 Password:123<br/>
</form>


</body>
</html>

<?php

if(isset($_POST["txtUN"]))
{
	
	$un = $_POST["txtUN"];
	$pw = $_POST["txtPW"];
	
	if($un=="admin" && $pw=="123")
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
	
}
?>