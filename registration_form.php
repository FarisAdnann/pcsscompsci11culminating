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
<form method="post" style="border:2px solid #ccc" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>
<div class="container">
<h1> Registration Page </h1>
<p> Please fill out this sign up form to create an account. </p>
<label for="username"><b>Username</b></label>
<input type="text" name="username" placeholder="Enter Username" pattern=".{6,16}" required title="6 to 16 characters"><br>
<label for="password"><b>Password</b></label>
<input type="password" name="password" placeholder="Enter Password" pattern="(?=.*\d).{8,16}" required title="Must contain at least one number and be within 8 to 16 characters"><br>
<label for="password1"><b>Confirm Password</b></label><input type="password" name="password1" placeholder="Retype Password" required><br>
<div class="clearfix">
<button type="submit" name="register" value="Register"><b>Register</b>
<button type="reset" name="erase" value="Erase"><b>Reset</b>
</div>
<br>
<a href="login_form.php">Return back to Login!</a>
</div>
</form>
<?php
$password = $_POST['password'];
$confirmpassword = $_POST['password1'];
$password = stripslashes($password);
$confirmpassword = stripslashes($confirmpassword);
if ($password != $confirmpassword) {
echo "Error... Passwords do not match";
exit;
} else {
  echo "YOU DID IT!!"
}
?>
</body>
</html>
