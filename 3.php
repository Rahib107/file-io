
<?php

if($_SERVER['REQUEST_METHOD']=="post"){

if(empty($_post['Firstname'])){
    $firstname_error ="Please enter the first name ";
  }
  if(empty($_post['lastname'])){
    $lastname_error ="Please enter the last name ";  
  }
  if(empty($_post['email'])){
    $email_error ="Please enter the email ";
  }

    if(empty($_post['Password'])){
    $passward_error ="Please enter the password ";
  }
}

?>
<Html>  
<head>   
<title>  
Registration from  
</title>  
</head>  
<body>  
<br>  
<br>  
<form>  
  
<label>Your First name </label>         
<input type="text" name="First name" size="15"/> <br> <br> 
<span><?php if(isset($firstname_error)) echo $firstname_error;?></span> 
<label>Your Last name </label>         
<input type="text" name="Last name" size="15"/> <br> <br>
<span><?php if(isset($lastname_error)) echo $lastname_error;?></span>     
<br>  
<label>   
Gender :  
</label><br>  
<input type="radio" name="male"/> Male <br>  
<input type="radio" name="female"/> Female <br>  
<input type="radio" name="other"/> Other  
<br> 
<label>Date of birth </label>         
<input type="text" name="Date" size="15"/> <br> <br>  
<label>Religion </label>         
<input type="text" name="Religion" size="15"/> <br> <br>   
<label>

Present Address
<br>  
<textarea cols="80" rows="5" value="address">  
</textarea>  
<br> <br>   
Permanent Address
<br>  
<textarea cols="80" rows="5" value="address">  
</textarea>  
<br> <br>   

Email:  
<input type="email" id="email" name="email"/> <br>
<span><?php if(isset($email_error)) echo $email_error;?></span>     
<br> <br>
Phone :  
</label>     
<input type="text" name="phone" size="11"/> <br> <br>  
<h1>FaceBook</h1>
<p><a href="https://www.facebook.com/profile.php?id=100003405692623">view my profile here</a></p>

<label>User Name: </label>         
<input type="text" name="username" size="15"/> <br> <br>
<label for="psw"><b>Password:</b></label>  
<input type="password" placeholder="Enter Password" name="psw" required>
<span><?php if(isset($password_error)) echo $password_error;?></span> 
<br>
<br>
<button type="submit" class="registerbtn">Submit</button>    

</form>  
</body>  
</html>  
<?php
  extract($_REQUEST);
  $file=fopen("form-x.txt","a");
  fwrite($file,"First name :");
  fwrite($file,$username ."\n");
  fwrite($file,"Last name :");
  fwrite($file,$Date ."\n");
  fwrite($file,"Date :");
  fwrite($file,$Religion ."\n");
  fwrite($file,"Religion :");
  fwrite($file,$phone ."\n");
  fwrite($file,"phone :");
  fwrite($file,$username ."\n");
  fwrite($file,"username :");
  fwrite($file,$password ."\n");
  fwrite($file,"psw :");
  fclose($file);
  if(!$flag) {
 $data_encode = json_encode($data);
 if($res) {
 $successfulMessage = "Sucessfully saved.";
 }
 else {
 $errorMessage = "Error while saving.";
 }
 ?>