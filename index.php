<!DOCTYPE html>
<html lang="en">
<head>
  
<title>Vanaspati-Know Your Plant</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=auto">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="icon" href="images/m3.jpg">
<style>
	#body {
    width: 100%;
    height: 100%;
	}
  /*-----------------Mohit's Work-----------------*/
  #Mohit-pic{
    background-image: url(images/m2.jpg);
    background-size:     cover;            
    background-repeat:   no-repeat;
    background-position: center center; 
  }
  #myDiv{
  position:fixed;
  z-index:99999;
  top:0;
  left:0;
  bottom:0;
  right:0;
  background:rgba(255,255,255,1);
  background-position: center;
  transition: 1s 0.4s;
}
  #preview-container {
    margin: 50px auto;
    padding: 80px;
    border: 1px solid #cccccc;
    border-radius: 55px;
}

#upload-dialog {
    padding: 5px;
    border: 1px solid #336699;
    background-color: white;
    color: #336699;
    background: none;
    font-size: inherit;
    font-family: inherit;
    outline: none;
    display: inline-block;
    vertical-align: middle;
    cursor: pointer;
    border-radius: 2px;
}

#image-file {
    display: none;
}

#preview-image {
    display: none;
    vertical-align: middle;
    width: 500px;
    border: 1px solid rgba(0,0,0,0.01);
    border-radius: 2px;
}

#image-name {
    display: none;
    vertical-align: middle;
    color: #336699;
    margin: 0 15px;
}

#upload-button {
    background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

#cancel-image {
    background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

/*------------------------Sachin's Work------------------------------------*/
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  text-align: center;
  margin: 0;
}

/* Style the header */
.header {
  padding: 150px;
  text-align: center;
  color: white;
}

/* Increase the font size of the h1 element */
.header h1 {
  font-size: 100px;
}

/* Style the top navigation bar */
.navbar {
  overflow: hidden;
  background-color: #333;
}

/* Style the navigation bar links */
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}

/* Right-aligned link */
.navbar a.right {
  float: right;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

#upload-button:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
#cancel-button:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

/*Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width:100%;
  }

}
/*----------------style for devlopers--------------------*/
.left{
  position: absolute;
  left: 0px;
  width: 300px;
  border: 3px solid #73AD21;
  padding: 10px;
}
.center {
  margin: auto;
  width: 300px;
  border: 3px solid #73AD21;
  padding: 10px;
}
.right{
  position: absolute;
  right: 0px;
  width: 300px;
  border: 3px solid #73AD21;
  padding: 10px;
}

/*---------------------style for login-------------------------------*/

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
#log-button {
  background-color: #333;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

#log-button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
  width: 100%;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}

/*---------------------For Search-------------------------------*/
.form-control-borderless {
    border: none;
}

.form-control-borderless:hover, .form-control-borderless:active, .form-control-borderless:focus {
    border: none;
    outline: none;
    box-shadow: none;
}
/*--------------------Wiki----------------------*/
#wiki{
  border: 1px solid gray;
  padding: 8px;
}

#wikitit {
  text-align: center;
  text-transform: uppercase;
  color: #4CAF50;
}

#pp {
  text-indent: 50px;
  text-align: justify;
  letter-spacing: 3px;
}
</style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50" id="body">
<div id = "myDiv" style="display:none"><img id = "myImage" src = "images/load.gif"></div>

<div id="Mohit-pic" class="header">
  <h1>Vanaspati</h1>
  <h2>know your plant</h2>
  
</div>

<div class="navbar">
  <a href="#">Home</a>
  <a href="#">About Us </a>
  <a href="ContactUs/formpage.html">Contact Us</a>
  <a href="Feedback/formpage.html">Feedback</a>
  <!--<div class="navbar-right" >--->
  <a onclick="document.getElementById('id02').style.display='block'" ><!--<span class="glyphicon glyphicon-user"></span>---> Sign Up</a>
  <a onclick="document.getElementById('id01').style.display='block'" ><!--<span class="glyphicon glyphicon-user"></span>--->Login</a>
<!--</div>--->
</div>
<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button id ="log-button" type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button  type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>
<div id="id02" class="modal">
  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="/action_page.php">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="First Name"><b>First Name</b></label>
      <input type="text" placeholder="First name" name="First Name" required>
      <label for="Last Name"><b>Last Name</b></label>
      <input type="text" placeholder="Last name" name="Last Name" required>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
        <button id="upload-button "type="submit" class="btn btn-lg btn-warning btn-block" >Sign Up</button>
      </div>
    </div>
  </form>
</div>


<script>
// Get the modal
var modal = document.getElementById('id01');
var mod=document.getElementById('id02');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
window.onclick = function(event) {
    if (event.target == mod) {
        mod.style.display = "none";
    }
}
</script>

    <br>
    <h2>Know your plant,for free</h2>
    <br>
    <h3>Upload Image and see the Magic!</h3>
    <!----------
    <div id="preview-container">
    <button id="upload-dialog">Choose Image</button>

    <input type="file" id="image-file" name="image" accept="image/jpg" />
    <img id="preview-image" />
    <span id="image-name"></span>
    <button id="upload-button">Upload</button>
    <button id="cancel-image">Cancel</button>
    -------->
    <div id="preview-container">
    <form action="check.php" method="post" enctype="multipart/form-data">

                    <input type="file" id ="img1" name="image" accept="image/*" class="form-control">
                    <br>
                    <button type="submit" style="border-radius: 0px;" class="btn btn-lg btn-block btn-outline-success">Analyse Image</button>

                </form>

              </div>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<div class="container">
    <br/>
  <div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-8">
                            <form class="card card-sm" method="POST">
                                <div class="card-body row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <i class="fas fa-search h4 text-body"></i>
                                    </div>
                                    <!--end of col-->
                                    <div class="col">
                                          <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Search A Plant" name="name">
                                    </div>
                                    <!--end of col-->
                                    <div class="col-auto">
                                        <button class="btn btn-lg btn-success" type="submit">Search</button>
                                    </div>
                                    <!--end of col-->
                                </div>
                            </form>
                        </div>
                        <!--end of col-->
                    </div>
</div>
</br>
<div id="wiki">
<?php
  if(isset($_POST['name']))
  {
    $nm = $_POST['name'];
    $http= 'https://en.wikipedia.org/w/api.php?format=json&action=query&prop=extracts&exintro&explaintext&redirects=1&titles=';
    $url =$http.rawurlencode($nm);
    $response = file_get_contents($url);
    $data = json_decode($response);
    $pages = (array) $data ->query->pages;
  
    foreach ($pages as $id => $page) 
    {
      echo '<h2 id="wikitit">'.$page->title.'</h2>';
      echo '<p id="pp">'.$page->extract.'</p>';
    }
}
?>
</div>
</br>
</br>
</br>
</br>
</br>
     <script>
    /*-------------------Script for Upload and Display Image-----------------*/
(function(){
    var myDiv = document.getElementById("myDiv"),

      show = function(){
        myDiv.style.display = "block";
        setTimeout(hide, 2000); // 5 seconds
      },

      hide = function(){
        myDiv.style.display = "none";
      };

    show();
  })();
/* Show Select File dialog */
document.querySelector("#upload-dialog").addEventListener('click', function() {
    document.querySelector("#image-file").click();
});

/* Selected File has changed */
document.querySelector("#image-file").addEventListener('change', function() {
    // user selected file
    var file = this.files[0];

    // allowed MIME types
    var mime_types = [ 'image/jpeg', 'image/png' ];
    
    // validate MIME
    if(mime_types.indexOf(file.type) == -1) {
        alert('Error : Incorrect file type');
        return;
    }

    // validate file size
    if(file.size > 2*1024*1024) {
        alert('Error : Exceeded size 2MB');
        return;
    }

    // validation is successful

    // hide upload dialog button
    document.querySelector("#upload-dialog").style.display = 'none';
    
    // set name of the file
    document.querySelector("#image-name").innerText = file.name;
    document.querySelector("#image-name").style.display = 'inline-block';

    // local url
    _PREVIEW_URL = URL.createObjectURL(file);

    // set src of image and show
    document.querySelector("#preview-image").setAttribute('src', _PREVIEW_URL);
    document.querySelector("#preview-image").style.display = 'inline-block';

    
    // show cancel and upload buttons now
    document.querySelector("#cancel-image").style.display = 'inline-block';
    document.querySelector("#upload-button").style.display = 'inline-block';
});

/* Reset file input */
document.querySelector("#cancel-image").addEventListener('click', function() {
    // destroy previous local url
    URL.revokeObjectURL(_PREVIEW_URL);

    // show upload dialog button
    document.querySelector("#upload-dialog").style.display = 'inline-block';

    // reset to no selection
    document.querySelector("#image-file").value = '';

    // hide elements that are not required
    document.querySelector("#image-name").style.display = 'none';
    document.querySelector("#preview-image").style.display = 'none';
    document.querySelector("#cancel-image").style.display = 'none';
    document.querySelector("#upload-button").style.display = 'none';
});

/* Upload file to server */
document.querySelector("#upload-button").addEventListener('click', function() {
    // AJAX request to server
    alert('This will upload file to server');
});
/*---------------------------------------------------------*/
</script>
<div>
<img src="images/how2.jpg" alt="How It Works Logo" style="width:168px;height:168px;">
      <h2>How It Works?</h2>
      <p  font-size:55px>This article explores how to use the Vision API and AutoML Vision to power your image search and classification application. When combined with other Google Cloud Platform (GCP) services, these services make it easy for you to:

Search within images for detected objects and scenes.
Classify images into different categories based on detected image labels.
Use image labels and categories as search facets.
The Vision API is powered by Google's deep learning models and provides advanced computer vision capabilities, including:</p>
</div>
<!---------------------------Devlopers-------------------------->
</br>
</br>
</br>
</br>
<h2>Developers</h2>
</br>
</br>
<div class="left">
  
  <p><b><strong></b>Mohit Puranshettiwar </strong></br>Shri Guru Gobind Singhji Institute of Technology,Nanded.
  </b></p>
</div>
<div class="right">
  
  <p><b><strong></b>Parth Kale </strong></br>Shri Guru Gobind Singhji Institute of Technology,Nanded.
  </b></p>
</div>
<div class="center">
  
  <p><b><strong></b>Sachin Ingle </strong></br>Shri Guru Gobind Singhji Institute of Technology,Nanded.
  </b></p>
</div>
</br>
</br>
</br>
</br>
</br>
</br> 
<!-------------------------------------------------------------->

</body>
