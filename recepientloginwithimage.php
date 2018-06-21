<DOCTYPE html>
<html>
<head>
<title> Donar Register Form</title>
  <script>
  function validation()
  {
    var regvalid = true;
    if(document.getElementById("uname").value=="")
      {
        regvalid=false;
        alert("Username cannot be empty !");
        document.getElementById("uname").focus();
      }
    
    
    if(regvalid)
    {  
      if(document.getElementById("password").value=="")
        {
          regvalid=false;
          alert("Password cannot be empty !");
          document.getElementById("password").focus();
        }  
    }
  return regvalid;        
  }
  </script>
<div class="image">
<img src="blood-connection-650.png" alt="blood-connection-650" width="1200" height="240">
</div>
<h1><marquee behavior="scroll" direction="left">LIVE LIFE AND GIVE LIFE......</marquee></h1>
<style>
h1 
{
text-align:center;
background color:black;
}
input[type=text]
{
background-color:white;
text-align:center;
}
h2
{
text-align:center;
}
div.image
{
text-align:center;
}
body
{ 
background-image:url("hands.jpg");
background-repeat:no-repeat;
background-size:1510px 800px;
background-position:center bottom;
}
</style>
</head>
<body>

<h1>RECEPIENT LOGIN</h1>
<form action="recepientloginconnection.php" method="post" onSubmit="return validation()">
  
        <h2>Username:<input type="text" name="username" id="uname" value="" placeholder="Username"><br><br>
     

        Password:<input type="password" name="password" id="password" value="" placeholder="password"><br><br>

	<input type="submit" name="submit" value="Login"></h2>
   

</form>
</body>
</html>
