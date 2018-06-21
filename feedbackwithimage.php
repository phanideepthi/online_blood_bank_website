<!DOCTYPE html>
<html>
<head>
  
  <title>FEEDBACK FORM</title>
  
<div class="image">
<img src="blood-connection-650.png" alt="blood-connection-650" width="1200" height="240">
<br><br><h1><marquee behavior="scroll" direction="left">LIVE LIFE AND GIVE LIFE......</marquee></h1><br>
</div>
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
      if(document.getElementById("email").value=="")
        {
          regvalid=false;
          alert("Email ID cannot be empty !");
          document.getElementById("email").focus();
        }  
    }
    if(regvalid)
    {  
      if(document.getElementById("mblno").value=="")
        {
          regvalid=false;
          alert("Mobile no. cannot be empty !");
          document.getElementById("mblno").focus();
        }  
    }
    
    if(regvalid)
    { 
    if(document.getElementById("Comments").value=="")
      {
        regvalid=false;
        alert("Comments cannot be empty !");
        document.getElementById("Comments").focus();
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
    
    return regvalid;        
  }
  </script>
<style>
h1
{
color:darkblack;
text-align:center;
text-color:blue;
}
body
{ 
background-image:url("hands.jpg");
background-repeat:no-repeat;
background-size:1700px 1100px;
background-position:center bottom;
}
div.image
{
text-align:center;
}

 </style> 

</head>


  

<form action="feedbackconnection.php" method="post" onSubmit="return validation()">
 
      <h1>Register into Online blood bank<br><br><br>
        Username:<input type="text" name="username" id="uname" value="" placeholder="Username"><br><br>
        Email:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="Email" id="email" value="" placeholder="Email"><br><br>
       &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
Mobile Number:&nbsp&nbsp<input type="text" name="mobileno" id="mblno" value="" placeholder="Mobile number"><br><br>

        
       Comments:<input type="text" name="Comments" id="Comments" value="" placeholder="Comments"><br><br>
        
         
      <input type="submit" name="submit" value="Register"></h1>


    </div>
  </section>
   

</form> 
</body>
</html>