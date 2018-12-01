<!DOCTYPE html>
<html>
    <head>
<style>


button {
    background-color: red;
    color: white;
    padding: 20px 20px;
    margin: 10px 10;
    border: none;
        border-radius: 17px;
 box-shadow:  0 7px #998;
    cursor: pointer;
    width: 18%;
   }

button:hover {background-color: green}

button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}  
 

.dropdown-list a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: green;}

.show {display: block;}
    </style>
        <head>
            <body>    
                
 <div class="dropdown">
<button onclick="myFunction()" class="dropbtn">Friends List</button>  
  <div class="dropdown-list">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
  </div>

               
</body>
</html>
