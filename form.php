<?php
    $Name_er="";
	$Email_er="";
	$Contact_er="";
	$City_er="";
	$Course_er=""; 
	$Interests_er=""; 

    if(isset(($_POST['Submit']))){
        if(empty($_POST["name"]))
		{
			$Name_er="Name field is empty";
		}
		else
		{
			$Name=InputField($_POST["name"]);
			if(!preg_match("/^[A-Za-z\. ]*$/", $Name))
				$Name_er="Only letters and white spaces are allowed";
        }
        if(empty($_POST["email"]))
		{
			$Email_er="Email field is empty";
		}
		else
		{
			$Email=InputField($_POST["email"]);
			if(!preg_match("/[a-zA-Z \.0-9_]{3,}@[a-zA-Z \.]{3,}[.]{1}[a-zA-Z]{1,}/", $Email))
				$Email_er="Invalid Format";
        }
        
        if(empty($_POST["contact"]))
		{
			$Contact_er="Contact field is empty";
		}
		else
		{
			$Contact=InputField($_POST["contact"]);
			if(strlen($Contact)!=10)
			$Contact_er="Contact must be of 10 length";
        }
        if(empty($_POST["city"]))
		{
			$City_er="City field is empty";
		}
		else
		{
			$City=InputField($_POST["city"]);
        }
        if(empty($_POST["course"]))
		{
			$Course_error="Course is required";
		}
		else
		{
			$Course=InputField($_POST["course"]);
		}

		if(empty($_POST["interests"]))
		{
			$Interests_error="Interests are required";
		}
		else
		{
			$Interests=InputField($_POST["interests"]);
            $no_checked = count($_POST['interests']);
            if($no_checked < 3)
                $Interests_er = "Select at least 3 options";
           
        }
    

    
   if(!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["contact"]) && !empty($_POST["city"]) && !empty($_POST["course"]) && !empty($_POST["interests"]) ){
			if(empty($Name_er) && empty($Contact_er) && empty($Email_er) && empty($City_er)&& empty($Course_er)&& empty($Interests_er)){

				echo "<table>

            <tr>
            <td colspan='6'>Your Information</td>
              </tr>
            <tr>
            <th>Name</th>
			<th>Email</th>
			<th>Contact</th>
            <th>City</th>
            <th>Course</th>
			<th>Interests</th>

            </tr>";

              echo "<tr>";
              echo "<td>" . $_POST["name"] . "</td>";
              echo "<td>" . $_POST["email"] . "</td>";
              echo "<td>" . $_POST["contact"] . "</td>";
              echo "<td>" . $_POST["city"] . "</td>";
               echo "<td>" . $_POST["course"] . "</td>";
              echo "<td>"; foreach($_POST['interests'] as $checked){
                    echo $checked."</br>";} echo "</td>";
    echo "</table>";
			}
			else{
				echo '<span class="Error">Please input your Information again</span>';
			}
			
			
		}
	}
	function InputField($Data)
	{
		return $Data;
	}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Form_Table</title>
    <style>
        body {
            font-family: sans-serif;
        }
        table {
           border: 1px solid black;
            
            border-collapse: collapse;
        }
          td, tr {
            border: 1px solid black;
        }
    </style>
</head>
    <body>
       <legend align="center"><h3> Fill the application form below and submit. </h3></legend> <br>
        <form id="register" method="post" action="form.php"> 
    <table align="center">
        <tr>
               <td><label><b>Name*</b></label> <br> </td>
               <td><label> <b>E-Mail Address*</b></label> <br></td>
               <td><label> <b>Contact*</b></label> <br></td>
               <td> <label><b>City*</b></label> <br></td>
               <td><label> <b>Course*</b></label> <br></td>
               <td> <label> <b>Interests*</b></label> <br> </td>
        </tr>
          <tr>
              <td>
                 <input type="text" name="name" id="name" placeholder="Name"> 
                 <span class="Error"><?php echo $Name_er; ?></span>
               
              </td>
              <td>
                   <input type="text" name="email" id="email" placeholder="Mail@example.com">
                   <span class="Error"><?php echo $Email_er; ?></span>
              </td>
              <td>
                  <input type="text" name="contact" id="contact" placeholder="+91 0000000000">
                  <span class="Error"><?php echo $Contact_er ; ?></span>  
              </td>
              <td>
                  <select name="city" id="city" style="color: gray;">
                            <option>Select City</option>
    <option value="Dehradun">Dehradun</option>
    <option value="Delhi">Delhi</option>
    <option value="Saharanpur">Saharanpur</option>
    <option value="Amabala">Ambala</option>
    <option value="Yamunanangar">Yamunanagar</option>
    <option value="Jagadhari">Jgadhari</option>
    <option value="Nainital">Nainital</option>
               </select>
               <span class="Error"><?php echo $City_er; ?></span>

              </td>
              <td>
  <input type="text" name="course" id="course" placeholder="Computer Science"> 
              </td>
              <td>
<input type="checkbox" id="h1" name="interests[]" value="Solving Puzzels">
<label for="h1"> Solving Puzzels</label><br>
<input type="checkbox" id="h1" name="interests[]" value="Playing Chess">
<label for="h2"> Playing Chess</label><br>
<input type="checkbox" id="h1" name="interests[]" value="Sports">
<label for="h3">Sports</label><br>
<input type="checkbox" id="h1" name="interests[]" value="Coding">
<label for="h4"> Coding</label><br>
<input type="checkbox" id="h1" name="interests[]" value="Reading">
<label for="h5">Reading</label><br>
<span class="Error"><?php echo $Interests_er; ?></span>
              </td>
              
          </tr>
       
          <td colspan=6><input type="Submit" Name="Submit" value="Submit"><br></td> 
       
            </form>
      
        </table>
        

    </body>
</html>
