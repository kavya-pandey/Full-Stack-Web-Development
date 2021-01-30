<?php
    
    if(isset(($_POST['Submit']))){
        $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $city = $_POST['city'];
    $course = $_POST['course'];
    $interest = $_POST['interests'];
      
                echo "
            <table border='1'>
            <tr>
            <td colspan='8'>FORM DATA</td>
              </tr>
            <tr>
            <th>Name</th>
			<th>Email</th>
			<th>Contact</th>
            <th>City</th>
            <th>Course</th>
            <th colspan=3>Interests</th>
            </tr>
            <tr>
            <td>$name</td>
            <td>$email</td>
            <td>$contact</td>
            <td>$city</td>
            <td>$course</td>
            <td>$interest[0]</td>
            <td>$interest[1]</td>
            <td>$interest[2]</td>
     </tr></table>";
			}

?>



<html>
<head>
<script>
function validateForm() {
var name = document.forms["FORM"]["name"].value;
  if (name == "") {
    alert("Name must be filled out");
    return false;
  }
      
   var contact = document.forms["FORM"]["contact"].value;
  if (contact.length!=10) {
    alert("length must be 10");
    return false;
  }
  var interests =document.getElementsByTagName("input");
  var c=0;
  for(var i=0;i<interests.length;++i){
      if(interests[i].type=="checkbox" && interests[i].checked==true)
      {
          c++;
      }
  }
    if(c<3 || c>5)
     {alert("At least 3 interests and at max 5 interests");return false;}
    return true;
  
}
</script>
 
 <style>
 * {
  font-family: sans-serif;
  box-sizing: border-box;
}
body {
  background-color: cadetblue;
  background-position: center;
  background-size: cover;
  height: 100vh;
  margin: 100px;
}

label {
  margin-left: 10px;
  width: 240px;
  display: inline-block;
}
input {
  padding: 10px;
}
div {
  margin-left: 255px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

 </style>
    
</head>
    <body>
       <h3> Fill the application form below and submit. </h3> <br>
        <form name="FORM" action="form.php" onsubmit="return validateForm()" method="post" > 
        <label><b>Name*</b></label>
        <input type="text" name="name"  placeholder="Name" required> <br> <br>
        <label> <b>E-Mail Address*</b></label>
        <input type="email" name="email"  placeholder="Mail@example.com" required> <br> <br>
        <label> <b>Contact*</b></label> 
        <input type="text" name="contact" placeholder="+91 0000000000" required>  <br> <br>
        <label><b>City*</b></label>
        <select name="city" id="city" style="color: gray;" required>
        <option>Select City</option>
        <option value="Dehradun">Dehradun</option>
        <option value="Delhi">Delhi</option>
        <option value="Saharanpur">Saharanpur</option>
        <option value="Amabala">Ambala</option>
        <option value="Yamunanangar">Yamunanagar</option>
        <option value="Jagadhari">Jgadhari</option>
        <option value="Nainital">Nainital</option>
        </select>  <br> <br>

        <label> <b>Course*</b></label> 
        <input type="text" name="course" id="course" placeholder="B.TECH" require>  <br> <br>
        <label> <b>Interests*</b></label>
        Solving Puzzels<input type="checkbox"  name="interests[]" value="Solving Puzzels">
        Playing Chess<input type="checkbox"  name="interests[]" value="Playing Chess">
        Sports<input type="checkbox"  name="interests[]" value="Sports">
        Coding<input type="checkbox"  name="interests[]" value="Coding">
        Reading<input type="checkbox" name="interests[]" value="Reading"><br> <br>
        <div><input type="Submit" Name="Submit" value="Submit" ></div>
        </form>
    </body>
</html>
