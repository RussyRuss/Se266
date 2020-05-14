<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
p.a {
  
}
body {
  font-family: "Times New Roman", Times, serif;
  font-size: "16px;";
  margin-left: 20px;
  margin-right: 10px;
}
.navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Arial, Helvetica, sans-serif;
}
.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
.dropdown {
  float: left;
  overflow: hidden;
}
.dropdown .dropbtn {
  cursor: pointer;
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}
.navbar a:hover, .dropdown:hover .dropbtn, .dropbtn:focus {
  background-color: red;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}
.dropdown-content a:hover {
  background-color: #ddd;
}
.show {
  display: block;
}
li {
  font-family: "Times New Roman", Times, serif;
  font-size: "16px;";
}
</style>
</head>
<body>

<div class="navbar">
  
  <div class="dropdown">
    <button class="dropbtn" onclick="dropDown()">Assignments
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content" id="myDropdown">
      <a href="../week1/index.php">Assignment 1</a>
      <a href="../week2/patient_form.php">Paitient Intake 2</a>
      <a href="../week3/index.php">Assignment 3</a>
      <a href="../week4/index.php">Assignment 4</a>
      <a href="../week5/index.php">Assignment 5</a>
      <a href="../week6/index.php">Assignment 6</a>
      <a href="../week7/index.php">Assignment 7</a>
      <a href="../week8/index.php">Assignment 8</a>
      <a href="../week9/index.php">Assignment 9</a>
      <a href="../week10/index.php">Assignment 10</a> 
    </div>
    
  </div> 
  <a href="../week1/heroku_resources.php">Heroku Resources</a>
  <a href="https://www.php.net/manual/en/language.types.resource.php">PHP Resources</a>
  <a href="https://resources.github.com/all/">Git Resources</a>
  <a href="https://github.com/RussyRuss/Se266">My GitHub Repo</a>
</div>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function dropDown() {
  document.getElementById("myDropdown").classList.toggle("show");
}
// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}
</script>
<h1>PHP and MySQL - Russel Souffrant</h1>
    <p>
    My name Is Russel SOuffrant and Welcome to my PHP and MySQL page. Here  You can find an overview of all my working PHP projects along with my code.
    </p>
    <h2>Assignment Overview</h2>
<ul>
        <li><a href="../week1/index.php">Week 1</a></li>
        <li><a href="../week2/index.php">Week 2</a></li>
        <li><a href="../week3/index.php">Week 3</a></li>
        <li><a href="../week4/index.php">Week 4</a></li>
        <li><a href="../week5/index.php">Week 5</a></li>
        <li><a href="../week6/index.php">Week 6</a></li>
        <li><a href="../week7/index.php">Week 7</a></li>
        <li><a href="../week8/index.php">Week 8</a></li>
        <li><a href="../week9/index.php">Week 9</a></li>
        <li><a href="../week10/index.php">Week 10</a></li>
        <li>
      
        

        </ul>
        <hr>
        "
            File last Updated May 11 2020 9:06:48 pm
        "
        </body>
        </html>
    
        
    