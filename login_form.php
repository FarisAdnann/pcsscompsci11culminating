<?php ob_start(); ?>
<html>
    <style>
    body {font-family: sans-serif;} * {box-sizing: border-box;}
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
    .container {padding: 16px;}
    </style>
    <body>
        <form method="post" style="border:2px solid #ccc" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="container">
        <h1> Login Page </h1> 
        <label for="username"><b>Username</b></label><input type="text" placeholder="Enter Username" name="username" required><br>
        <label for="password"><b>Password</b></label><input type="password" name="password" placeholder="Enter Password" required><br>
        <div class="clearfix">
        <button type="submit" name="Login"><b>Log In</b>
        <button type="reset" name="erase" value="Erase"><b>Reset</b>
        </div><br>
        <a href="registration_form.php">Sign Up!</a>
        </div>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            include 'connectDB.php';
            $username = ($_POST["username"]);
            $password = ($_POST["password"]); 
            $sql = "SELECT password FROM myLogin WHERE username = '$username'";
            $result = $conn->query($sql);
            if (isset($_POST['Login'])) {
                if ($result->num_rows>0) { 
                    while($row=$result->fetch_assoc()) {
                        if ($password==$row["password"]) {
                            header("Location: submit_message_form.php"); 
                            echo "Wrong Username or Password";
                        }
                    }
                } else {
                    echo "Wrong Username or Password";
                }
            }
            $conn->close();
        }
        ?>
    </body>
</html>
<?php ob_end_flush(); ?>
