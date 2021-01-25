<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <meta name ="viewport" content="width=device-width,initial scale=1.0" />
    <title>Form_Table</title>
    <style>
        body {
            font-family: sans-serif;
        }
        table {
           border: 1px solid black;
            /* width: 500px; */
            /* height: 250px; */
            border-collapse: collapse;
        }
        th, td, tr {
            /* text-align: center; */
            border: 1px solid black;
        }
      

    </style>
    </head>
    <body>
        <h3 style=" color: white; margin-left: 200px;">Fill the application form below and submit.</h3>
    <table align="center">
        
       <form id="register" method="post" action="form.php"> 
           
           <tr>
               <td><label><b>Name*</b></label> <br>
                 <input type="text" name="name" id="fname" placeholder="First Name" require> 
               <input type="text" name="lname" id="name" placeholder="Last Name" require>
               </td>
               <td><label> <b>E-Mail Address*</b></label> <br>
              <input type="text" name="mail" id="mail" placeholder="Mail@example.com" require> 
           </td>
           <td><label> <b>Contact*</b></label> <br>
              <input type="text" name="contact" id="contact" placeholder="+91 0000000000" require> 
           </td>
               <td> <label><b>City*</b></label> <br>
               <!-- <input type="text" name="City" id="city" placeholder="CITY">  -->
                       <select name="city name" id="city" style="color: gray;" require>
                            <option>Select City</option>
    <option value="Dehradun">Dehradun</option>
    <option value="Delhi">Delhi</option>
    <option value="Saharanpur">Saharanpur</option>
    <option value="Amabala">Ambala</option>
    <option value="Yamunanangar">Yamunanagar</option>
    <option value="Jagadhari">Jgadhari</option>
    <option value="Nainital">Nainital</option>
               </select>
     </td>


      <td><label> <b>Course*</b></label> <br>
              <input type="text" name="course" id="course" placeholder="Computer Science" require> 
           </td>
           <td>
           <label> <b>Interests*</b></label> <br>    
<input type="checkbox" id="h1" name="h1" value="h1">
<label for="vehicle1"> Solving Puzzels</label><br>
<input type="checkbox" id="h2" name="vehicle2" value="h2">
<label for="vehicle2"> Playing Chess.</label><br>
<input type="checkbox" id="h3" name="h3" value="h3">
<label for="h3"> I have a car</label><br>
           </td>
              <td> <label> <b> Phone Number* </b></label> <br> 
               <input type="text" name="phoneNo" id="phoneNo" placeholder="Phone Number" require> 
               </td>
               
               <td> <input type="submit" name="" id="submit"> </td>
           </tr>
          
            </form>
      
        </table>
    </body>
</html>
<?php
	$Name_error="";
	$Email_error="";
	$Contact_error="";
	$City_error="";
	$Course_error=""; 
	$Interests_error=""; 

	if(isset(($_POST['Submit']))){

		if(empty($_POST["Name"]))
		{
			$Name_error="Name is required";
		}
		else
		{
			$Name=Test_user_input($_POST["Name"]);
			if(!preg_match("/^[A-Za-z\. ]*$/", $Name))
				$Name_error="Only letters and white spaces are allowed";
		}
		if(empty($_POST["Email"]))
		{
			$Email_error="Email is required";
		}
		else
		{
			$Email=Test_user_input($_POST["Email"]);
			if(!preg_match("/[a-zA-Z \.0-9_]{3,}@[a-zA-Z \.]{3,}[.]{1}[a-zA-Z]{1,}/", $Email))
				$Email_error="Invalid Format";
		}

		if(empty($_POST["Contact"]))
		{
			$Contact_error="Contact is required";
		}
		else
		{
			$Contact=Test_user_input($_POST["Contact"]);
			if(stlen($Contact)!=10)
			$Contact_error="Contact must be of 10 length";
		}

		if(empty($_POST["City"]))
		{
			$City_error="City is required";
		}
		else
		{
			$City=Test_user_input($_POST["City"]);
		}

		if(empty($_POST["Course"]))
		{
			$Course_error="Course is required";
		}
		else
		{
			$Course=Test_user_input($_POST["Course"]);
		}

		if(empty($_POST["Interests"]))
		{
			$Interests_error="Interests are required";
		}
		else
		{
			$Interests=Test_user_input($_POST["Interests"]);
			$count=0;
			for ($i = 0; $i < strlen($Interests); $i++)
			if ($Interest[$i] == ',')
				 $count=$count + 1;
			if($count < 2 or $count > 4)
			   $Interests_error="Min 3 Max 5 interest";
		}

		if(!empty($_POST["Name"]) && !empty($_POST["Email"]) && !empty($_POST["Contact"]) && !empty($_POST["City"]) && !empty($_POST["Course"]) && !empty($_POST["Interest"]) ){
			if(empty($Name_error) && empty($Contact_error) && empty($Email_error) && empty($City_error)&& empty($Course_error)&& empty($Interests_error)){
				echo '<span style="color:#FFF;">'."<h2>Your Information</h2>".'</span>';
				echo '<span style="color:#FFF;">'."<table>
				<tr>
				<td>Name</td>
				<td>Email</td>
				<td>Contact</td>
				<td>City</td>
				<td>Interest</td>
				</tr>
				<tr>
				<td>{$_POST["Name"]}</td>
				<td>{$_POST["Email"]}</td>
				<td>{$_POST["Contact"]}</td>
				<td>{$_POST["City"]}</td>
				<td>{$_POST["Interest"]}</td>
				</tr></table>".'</span>';
			}
			else{
				echo '<span class="Error">Please input your Information agian</span>';
			}
		}
	}
	function Test_user_input($Data)
	{
		return $Data;
	}

	?>
