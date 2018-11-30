<html>
<style>
body {font-family: sans-serif;} * {box-sizing: border-box;}
input[type=submit],  {
    width: 100%;
    padding: 15x;
    margin: 6px 0 16px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 14px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}
.button1 {
    background-color: green; 
    color: black; 
    border: 2px solid #4CAF50;
}
.button1:hover {
    background-color: #4CAF50;
    color: white;
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
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
<button class="button button1" type="submit">Submit</button> 
</form> 
</html> 
<?php ?>