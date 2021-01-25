<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <meta name ="viewport" content="width=device-width,initial scale=1.0" />
    <title>Form_Table</title>
    <style>
        
        table,tr,td{
            border-collapse:collapse;
            border:1px solid black;
            padding:10px;
            text-align: left; 
        }
        tr{
            colspan:2;
        }
      

    </style>
    </head>
    <body>
        <h3 style=" color: white; margin-left: 200px;">Fill the application form below and submit.</h3>
    <table align="center">
        
       <form id="register" method="post" action="form.php"> 
           
           <tr>
               <td><label><b>Name*</b></label> <br>
                
               </td>
               <td><label> <b>E-Mail Address*</b></label> <br>
              
           </td>
           <td><label> <b>Contact*</b></label> <br>
           
           </td>
               <td> <label><b>City*</b></label> <br>
              
                       
     </td>


      <td><label> <b>Course*</b></label> <br>
            
           </td>
           <td>
           <label> <b>Interests*</b></label> <br>    

           </td>
              
               
              
           </tr>
          <tr>
              <td>
                 <input type="text" name="name" id="name" placeholder="Name" require> 
               
              </td>
              <td>
                   <input type="text" name="mail" id="mail" placeholder="Mail@example.com" require>
              </td>
              <td>
                  <input type="text" name="contact" id="contact" placeholder="+91 0000000000" require>  
              </td>
              <td>
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
              <td>
  <input type="text" name="course" id="course" placeholder="Computer Science" require> 
              </td>
              <td>
<input type="checkbox" id="h1" name="h1" value="h1">
<label for="h1"> Solving Puzzels</label><br>
<input type="checkbox" id="h2" name="vehicle2" value="h2">
<label for="h2"> Playing Chess.</label><br>
<input type="checkbox" id="h3" name="h3" value="h3">
<label for="h3"> I have a car</label><br>
<input type="checkbox" id="h4" name="h4" value="h4">
<label for="h4"> Coding</label><br>
<input type="checkbox" id="h5" name="h5" value="h5">
<label for="h5">Reading</label><br>
              </td>
              
          </tr>
          <input type="submit" value="Submit" name="submit" id="btn" style="margin-left:150px;text-align:center ">
            </form>
      
        </table>
        <?php
if(isset($_GET['submit'])){
    $name=$_GET['name'];
    $email=$_GET['mail'];
    $contact=$_GET['contact'];
    $city=$_GET['city'];
    $course=$_GET['course'];
    $interest=$_GET['interest'];
    echo "<table><tr><th >Name</th><th>Email</th><th>Contact</th><th>City</th><th>Course</th><th>Interest</th></tr>
    <tr><td>$name</td><td>$email</td><td>$contact</td><td>$city</td><td>$course</td><td>$interest</td></tr></table>";
}
?>
<script>
var btn=document.getElementById('btn');
btn.addEventListener('click',function(){
if(table.style.display==="none"){
    table.style.display="block";
}
})
</script>
    </body>
</html>
