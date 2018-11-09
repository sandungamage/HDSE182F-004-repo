<html lang="en">
<head>
<meta charset="utf-8">
<title>welcome</title>

<style type="text/css">
.myClass {
           font-family: verdana; 
           font-size: 16px; 
           font-weight: normal;  
           color: black;
           line-height: 30px;
         }
</style>
</head>
<body background="1.jpg">
<h1><marquee direction="Right"  scrollamount="10">welcome</marquee></h1>
<script type="text/javascript">

 (function () {
  var timeLeft = 10,
  cinterval;

  var timeDec = function (){
  timeLeft--;
  document.getElementById('countdown').innerHTML = timeLeft;
  if(timeLeft === 0){
  clearInterval(cinterval);
    }
};

cinterval = setInterval(timeDec, 1000);
})();

</script>
<br/>
Redirecting in <span id="countdown">10</span> seconds.
</body>
</html>
<?php
	  session_start();
	  session_destroy();
      header( "refresh:10; url=http://localhost/ss/login.php");

?>

