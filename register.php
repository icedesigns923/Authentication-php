<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $usernameErr = $passwordErr = "";
$name = $email = $username = $password =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["username"])) {
    $usernameErr = "";
  } else {
    $username = test_input($_POST["username"]);
  }

  if (empty($_POST["password"])) {
    $passwordErr = "";
  } else {
    $password = test_input($_POST["password"]);
  }

  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;

}
?>

<h2>PHP Registration Form Validation</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Username: <input type="text" name="username">
  <span class="error">* <?php echo $usernameErr;?></span>
  <br><br>
  Password:<input type="text" name="password">
  <span class="error">* <?php echo $passwordErr;?></span> 
  <br><br>
  
  <input type="submit" name="submit" value="Submit">  

  <br>
  <br>
  Already have an account? <a href= "index.php"> Login</a>
</form>

</body>
</html>



