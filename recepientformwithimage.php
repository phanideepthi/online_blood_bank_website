<!DOCTYPE html>
<html>
<head>
  
  <title>Register Form</title>
  
<div class="image">
<img src="blood-connection-650.png" alt="blood-connection-650" width="1200" height="240">

</div>
<style>
h2
{
color:black;
text-align:center;
text-color:blue;
}
body
{ 
background-image:url("hands.jpg");
background-repeat:no-repeat;
background-size:1500px 900px;
background-position:center bottom;
}
div.image
{
text-align:center;
}

 </style> 
</head>


<form action="b.php" method="post">

<br><h1><marquee behavior="scroll" direction="left">LIVE LIFE AND GIVE LIFE......</marquee></h1><br><br>
<h2>Search for blood<br>
<br>
Blood group*:&nbsp&nbsp&nbsp&nbsp
<select name="Bloodgroup">
		<option value="A+">A+(A POSITIVE)</option>
		<option value="A-">A-(A NEGATIVE)</option>
		<option value="B+">B+(B POSITIVE)</option>
		<option value="B-">B-(B NEGATIVE)</option>
		<option value="AB+">AB+(AB POSITIVE)</option>
		<option value="AB-">AB-(AB NEGATIVE)</option>
                <option value="O+">O+(O POSITIVE)</option>
		<option value="O-">O-(O NEGATIVE)</option>
	</select><br><br>
Units:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 <select name="Units">
             <option value="1">1 unit</option>
             <option value="2">2 units</option>
              <option value="3">3 units</option>
             <option value="4">4 units</option>
             <option value="5">5 units</option>
        </select><br><br>
        
        <input type="submit" name="submit" value="Submit"></h2>&nbsp&nbsp&nbsp
  
    

  </form> 
</body>
</style>
</html>