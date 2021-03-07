<!DOCTYPE html>
</<?php
  if(isset($_POST['submit'])){
    $user = $_POST['uname'];
    $pass = $_POST['psw'];
    if($user == "ADMIN" && $pass=="ADMIN123"){
      echo '<script>alert("Log in Successful!")</script>';
    }
    else{
      echo '<script> funtion myfunction(){
        window.location.href="http://localhost/login/LoginK.php";} </script>'; 
      echo '<script>alert("Username and Password does not match!")</script>';

    }


  }

?>

<html>
<head >
  <title>Login</title>
<br><br><br><br><br><br><br>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Courier New;}
form {border: 2.5px background: linear-gradient(#33ccff,#ff99cc); width:50%;}

input[type=text],input[type=password]{
  width: 50%;
  padding: 12px 15px;
  margin: 10px 0;
  display: inline-grid;
  border: 1.5px solid #aaa;
  box-sizing: border-box;
}

button {
  background-color: #03dffc;
  color: black;
  padding: 10px 20px;
  margin: 8px 0;
  border: thick;
  cursor: pointer;
  width: 20%;

}

button:hover {
  opacity: 1;
}


}
</style>
</head>
<body style="background: linear-gradient(#33ccff,#ff99cc);">

<center>
<h2>Login Form</h2>

<form action="LoginK.php" method="post">


  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
<br>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        <br> 
    <button type="submit" name="submit">Login</button>
  </div> 
    <label>
     <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>
<br>
    <span class="psw"><a href="#">Forgot password?</a></span>
  </div>
</form>
</center>

</body>
</html>