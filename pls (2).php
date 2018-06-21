

<!DOCTYPE html>
<html>
<head>
  
  <title>Register Form</title>
 
  <script>
  function validation()
  {
    var regvalid = true;
    if(document.getElementById("name").value=="")
      {
        regvalid=false;
        alert("Username cannot be empty !");
        document.getElementById("name").focus();
      }
    if(regvalid)
    {  
      if(document.getElementById("email").value=="")
        {
          regvalid=false;
          alert("Email ID cannot be empty !");
          document.getElementById("email").focus();
        }  
    }
    if(regvalid)
    {  
      if(document.getElementById("phone_number").value=="")
        {
          regvalid=false;
          alert("Mobile no. cannot be empty !");
          document.getElementById("phone_number").focus();
        }  
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
    if(regvalid)
    {  
      if(document.getElementById("reenter_password").value=="")
        {
          regvalid=false;
          alert("Please re-enter the password !");
          document.getElementById("reenter_passsoword").focus();
        }  
    }
   
    if(regvalid)
    {
      if(!(document.getElementById("gen1").checked||document.getElementById("gen2")))
      {
        regvalid=false;
        alert("Select your gender !");
      }
    }
    if(regvalid)
    {
      var mailformat = /^\w+([\.?\w+)*@\w+([\.-] ?\w+)*(\.\w{2,3})+$/;
      if(!(document.getElementById("email").value.match(mailformat)))
      {
        regvalid=false;
        alert("Invalid Email ID");
        document.getElementById("email").value="";
        document.getElementById("email").focus();
      }
    }
    if(regvalid)
    {
      if(document.getElementById("password").value!=document.getElementById("reenter_password").value)
      {
        regvalid=false;
        alert("Password doesn't match !");
        document.getElementById("password").value="";
        document.getElementById("reenter_password").value="";
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


<form action="registerconnection.php" method="post" onSubmit="return validation()">
 
        <h1>Register into Online blood bank<br>
        Username:<input type="text" name="name" id="name" value="" placeholder="Username"><br>
        Email:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="email" id="email" value="" placeholder="Email"><br>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbspPhone number:<input type="text" name="phone_number" id="phone_number" value="" placeholder="Mobile number"><br>
      Password:&nbsp&nbsp&nbsp<input type="password" name="password" id="password" value="" placeholder="Password"><br>
      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspRe-enter Password:<input type="password" name="reenter_password" id="reenter_password" value="" placeholder="re-enter the password"><br>
        
     
        
           &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspI am&nbsp&nbsp<input type="radio" name="gen" id="gen1" value="M">&nbsp&nbspMale
                          <input type="radio" name="gen" id="gen2" value="F">&nbsp&nbspFemale
          
      <input type="submit" name="submit" value="Register"></p></div>
   


     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <p>Already an user <a href="login.php">Click here</a>.</p>
    
  </form> 
</body>
</html>