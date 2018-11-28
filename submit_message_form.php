<html>
<style>
body {font-family: sans-serif;} * {box-sizing: border-box;}
input[type=submit],  {
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
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 8%;
}
input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}
.container {padding: 16px;}
div textarea {
    background-color: lightgrey;
    width: 300px;
    border: 25px solid green;
    padding: 25px;
    margin: 25px;
}
</style> 
<form>
<input type="text" name="message" placeholder="Type Message"></input>
<br> 
<button type="submit">Submit</button> 
</form> 
</html> 
<?php ?>
