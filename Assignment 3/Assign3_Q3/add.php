<?php
include('config.php');
?>
<?php

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
	$city = $_POST['city'];
	$sql =  "INSERT INTO `users` (`username`, `email`, `gender`, `city`) VALUES ('$username', '$email', '$gender', '$city')";
			$a = mysqli_query($conn , $sql);

}
?>

<html lang="en">
<head>
    
    <title>HTML FORMS</title>
</head>
<body>
    <form method="post">
    USERNAME <input type="text" name="username" placeholder="Type Your Username" required> <br>
    
    E-MAIL <input type="email" name="email" placeholder="Type Your E-mail" required> <br>
    Gender <br> Male <input type="radio" name="gender" value="male" checked> <br>
     Female <input type="radio" name="gender" value="female" checked> <br>
     City <select name="city" required>
     <option><option>Select City</option></option>
     <option value="Dehradun">Dehradun</option>
     <option value="Dehli">Dehli</option>
     <option value="Jaipur">Jaipur</option>
     </select> <br> <br>
     <input type="Submit" value="Cilck Here to Submit Your Data" name="submit">
    </form>
</body>
</html>