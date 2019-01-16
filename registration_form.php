<?php ob_start(); ?>
<html>
<style>
body {font-family: sans-serif;}
* {box-sizing: border-box;}
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 6px 0 16px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 10px;
    border: 1px solid green;
    cursor: pointer;
    width: 8%;
}
button:hover{
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}
.container {
  padding: 16px;
}
</style>
<body>
<form method="post" style="border:2px solid #ccc" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
<div class="container">
<h1> Registration Page </h1>
<p> Please fill out this sign up form to create an account. </p>
<label for="username"><b>Username</b></label>
<input type="text" name="user_name" placeholder="Enter Username" pattern=".{6,16}" required title="6 to 16 characters"><br>
<label for="password"><b>Password</b></label>
<input type="password" name="pass_word" placeholder="Enter Password" pattern="(?=.*\d).{8,16}" required title="Must contain at least one number and be within 8 to 16 characters"><br>
<label for="confirmpassword"><b>Confirm Password</b></label>
<input type="password" name="confirmpassword" placeholder="Re-Enter Password" pattern="(?=.*\d).{8,16}" required title="Must contain at least one number and be within 8 to 16 characters"><br>
<div>
<button type="submit" name="register"><b>Register</b>
</div>
<br>
<a href="login_form.php">Return back to Login!</a>
</div>
</form>
<?php
$username = $password = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["user_name"];
  $password = $_POST["pass_word"];
  $confirmpassword = $_POST["confirmpassword"];
  if (isset($_POST['register'])) {
    if ($password == $confirmpassword) {
      include 'connectDB.php';
      $sql = "INSERT INTO myLogin (username, password)
      VALUES ('$username', '$password')";
      if ($conn->query($sql) === TRUE) {
        header ('Location: login_form.php');
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      $conn->close();  
    } else {
        "Passwords Do Not Match... Try Again!";
    }
  }
}
?>
</body>
</html>
<?php ob_end_flush(); ?>
