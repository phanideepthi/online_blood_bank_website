<!DOCTYPE html>
<html>
<head>
  
  <title>Register Form</title>
 <div class="image">
<img src="blood-connection-650.png" alt="blood-connection-650" width="1200" height="240">
<h1><marquee behavior="scroll" direction="left">LIVE LIFE AND GIVE LIFE......</marquee></h1><br><br>
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

<form action="donorformconnection.php" method="post" onSubmit="return validation()">
<h1>Register into Online blood bank<br><br>
      Name:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="name" id="uname" value="" placeholder="Name"><br><br>
       Email:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="Email" id="email" value="" placeholder="Email"><br><br>
       Mobile number:&nbsp&nbsp<input type="text" name="mobileno" id="mblno" value="" placeholder="Mobile number"><br><br>
Blood group*:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<select name="Bloodgroup">
		<option value="A+">A+</option>
		<option value="A-">A-</option>
		<option value="B+">B+</option>
		<option value="B-">B-</option>
		<option value="AB+">AB+</option>
		<option value="AB-">AB-</option>
                <option value="O+">O+</option>
	    	<option value="O-">O-</option>
	</select><br><br>
Units:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 <select name="Units">
             <option value="1">1 unit</option>
             <option value="2">2 units</option>
              <option value="3">3 units</option>
             <option value="4">4 units</option>
             <option value="5">5 units</option>
        </select><br><br>
               
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
Camp address:
<select name="Campaddress">
		<option value="TAMILNADU">9418091918-IGMC SHIMILA</option>
		<option value="TAMILNADU">9418135296-BLOOD BANK RPGMC TANDA  </option>
		<option value="KARNATAKA">9440237000-BLOOD BANK KULLU  </option>
		<option value="ORISSA">9440466746-BLOOD BANK MANDI  </option>
		<option value="MADHYA PRADESH">9790765431-BLOOD BANK SOLAN  </option>
		<option value="DELHI">8296293929-BLOOD BANK NAHAN  </option>
                <option value="TRIPURA">9418145553-BLOOD BANK BILLASPUR  </option>
		<option value="GOA">9418452698-BLOOD BANK CHAMBRA </option>
                <option value="NAGALAND">9949085643-BLOOD BANK HAMIRPUR  </option>
	</select><br><br>

        City:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<select name="City">
		<option value="SHIMLA">SHIMLA</option>
		<option value="KANGRA">KANGRA</option>
		<option value="UNA">UNA</option>
		<option value="MANDI">MANDI</option>
		<option value="SOLAN">SOLAN</option>
		<option value="SIRMAUR">SIRMAUR</option>
                <option value="BILLASPUT">BILLASPUT</option>
		<option value="CHAMBRA">CHAMBRA</option>
                <option value="HAMIPUR">HAMIPUR</option>
	</select><br><br>

        State:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<select name="State">
		<option value="TAMILNADU">TAMILNADU</option>
		<option value="TAMILNADU">ANDHRA PRADESH</option>
		<option value="KARNATAKA">KARNATAKA</option>
		<option value="ORISSA">ORISSA</option>
		<option value="MADHYA PRADESH">MADHYA PRADESH</option>
		<option value="DELHI">DELHI</option>
                <option value="TRIPURA">TRIPURA</option>
		<option value="GOA">GOA</option>
                <option value="NAGALAND">NAGALAND</option>
	</select><br><br>
        
       
        <input type="submit" name="submit" value="Register"></h1>
  
     
    

  </form> 
</body>
</html>