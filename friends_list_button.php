<!DOCTYPE html>
<html>
    <head>
<style>
button {
    background-color: red;
    color: white;
    padding: 20px 20px;
    margin: 10px 210px;
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
 
.dropdown-list {
    display: none;
    position: absolute;
    background-color:lightyellow;
    min-width: 150px;
   margin: 1px 210px;
}
.dropdown-list a {
    color: maroon;
    padding: 25px 50px;
    text-decoration: none;
    display: block;
}
.dropdown-list a:hover {background-color: green;}
.show {display: block;}
    </style>
        </head>
            <body>    
                
 <div class="dropdown">
<button id="myBtn" onclick="myFunction()" class="dropbtn">Friends List</button>  
  <div id="myDropdown" class="dropdown-list">
    <a href="#Link 1">Link 1</a>
    <a href="#Link 2">Link 2</a>
    <a href="#Link 3">Link 3</a>
  </div>
  </div>
    <script>
document.getElementById("myBtn").onclick = function() {myFunction()};
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}
</script>
                
</body>
</html>


