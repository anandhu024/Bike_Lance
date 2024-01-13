<!DOCTYPE html>
<html>
 <head>
 <meta charset="utf-8">
 <title>Sign up form</title>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
 <!-- MATERIAL DESIGN ICONIC FONT -->
 <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
 
 <!-- STYLE CSS -->
 <link rel="stylesheet" href="css/style.css">
 <style media="screen">
    @font-face {
  font-family: "Muli-Regular";
  src: url("../fonts/muli/Muli-Regular.ttf"); }
@font-face {
  font-family: "Muli-SemiBold";
  src: url("../fonts/muli/Muli-SemiBold.ttf"); }
@font-face {
  font-family: "Muli-Bold";
  src: url("../fonts/muli/Muli-Bold.ttf"); }
* {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box; }
 
body {
  font-family: "Muli-Regular";
  color: #666;
  font-size: 13px;
  margin: 0; }
 
input, textarea, select, button {
  font-family: "Muli-Regular";
  color: #333;
  font-size: 13px; }
  form *{
    font-family: 'Poppins',sans-serif;
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
.header div{
	float: left;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 20px;
	font-weight: 100;
}

.header div span{
	color: #5379fa !important;
}
 
p, h1, h2, h3, h4, h5, h6, ul {
  margin: 0; }
 
img {
  max-width: 100%; }
 
ul {
  padding-left: 0;
  margin-bottom: 0; }
 
a:hover {
  text-decoration: none; }
 
:focus {
  outline: none; }
 
.wrapper {
  min-height: 100vh;
  background-size: cover;
  background-repeat: no-repeat;
  display: flex;
  align-items: center; }
 
.inner {
  min-width: 850px;
  margin: auto;
  box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
  padding-top: 68px;
  padding-bottom: 48px;
  background: url("https://wallpaperaccess.com/full/4588832.jpg");
  opacity: 9;
 }
  .inner h3 {
    text-transform: uppercase;
    font-size: 22px;
    font-family: "Muli-Bold";
    text-align: center;
    margin-bottom: 32px;
    color: #ffffff;
    letter-spacing: 2px; }
 
form {
  width: 50%;
  padding-left: 45px; }
 
.form-group {
  display: flex; }
  .form-group .form-wrapper {
    width: 50%; }
    .form-group .form-wrapper:first-child {
      margin-right: 20px; }
 
.form-wrapper {
  margin-bottom: 17px; }
  .form-wrapper label {
    margin-bottom: 9px;
    display: block; }
 
.form-control {
  border: 1px solid #ccc;
  display: block;
  width: 100%;
  height: 40px;
  padding: 0 20px;
  border-radius: 20px;
  font-family: "Muli-Bold";
  background: none;
 
}
  .form-control:focus {
    border: 1.5px solid #3575D3  ; }
 
select {
  -moz-appearance: none;
  -webkit-appearance: none;
  cursor: pointer;
  padding-left: 20px; }
  select option[value=""][disabled] {
    display: none; }
 
button {
  border: none;
  width: 152px;
  height: 40px;
  margin: auto;
  margin-top: 29px;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 0;
  background: #3575D3 ;
  font-size: 13px;
  color: #fff;
  text-transform: uppercase;
  font-family: "Muli-SemiBold";
  border-radius: 20px;
  overflow: hidden;
  -webkit-transform: perspective(1px) translateZ(0);
  transform: perspective(1px) translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  position: relative;
  -webkit-transition-property: color;
  transition-property: color;
  -webkit-transition-duration: 0.5s;
  transition-duration: 0.5s; }
  button:before {
    content: "";
    position: absolute;
    z-index: -1;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: #262626  ;
    -webkit-transform: scaleX(0);
    transform: scaleX(0);
    -webkit-transform-origin: 0 50%;
    transform-origin: 0 50%;
    -webkit-transition-property: transform;
    transition-property: transform;
    -webkit-transition-duration: 0.5s;
    transition-duration: 0.5s;
    -webkit-transition-timing-function: ease-out;
    transition-timing-function: ease-out; }
  button:hover:before {
    -webkit-transform: scaleX(1);
    transform: scaleX(1);
    -webkit-transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
    transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66); }
 
.checkbox {
  position: relative; }
  .checkbox label {
    padding-left: 22px;
    cursor: pointer; }
  .checkbox input {
    position: absolute;
    opacity: 0;
    cursor: pointer; }
  .checkbox input:checked ~ .checkmark:after {
    display: block; }
 
.checkmark {
  position: absolute;
  top: 50%;
  left: 0;
  transform: translateY(-50%);
  height: 12px;
  width: 13px;
  border-radius: 2px;
  background-color: #ebebeb;
  border: 1px solid #ccc;
  font-family: Material-Design-Iconic-Font;
  color: #000;
  font-size: 10px;
  font-weight: bolder; }
  .checkmark:after {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    display: none;
    content: '\f26b'; }
 
@media (max-width: 991px) {
  .inner {
    min-width: 768px; } }
@media (max-width: 767px) {
  .inner {
    min-width: auto;
    background: none;
    padding-top: 0;
    padding-bottom: 0; }
 
  form {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px; } }
 
/*# sourceMappingURL=style.css.map */
</style>
 </head>
 
 <body>
 
 <div class="wrapper" style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4o4_JQKlS3mxRv46s-MKdYFIfn9qGoqhVORIlQ1YaPP6uUsVG5O-eo5K0GC1xtHIhnrc&usqp=CAU');">
 <div class="inner">
 <form action="signupaction.php" method="post">
 <div class="body"></div>
		<div class="grad"></div>
		<div class="header">
    <div><a href="http://localhost/Bike%20Lance/Guest/"><b>Bike<span>Lance</span></b></a></div>
		</div><br>
 <h3>Registration Form</h3>
 <div class="form-wrapper">
 <label for="">Name</label>
 <input type="text" class="form-control" pattern="[A-Za-z ]{3,32}" placeholder="eg:john smith" name="txtname" required>
 </div>
 <div class="form-wrapper">
 <label for="">Address</label>
 <input type="text" class="form-control"  pattern="[A-Za-z0-9._ ]{5,32}" placeholder="eg:address" name="txtaddress" required>
 </div>
 <div class="form-wrapper">
 <label for="">Email</label>
 <input type="text" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="eg:abc@gmail.com" name="txtemail" required>
 </div>
 <div class="form-wrapper">
 <label for="">Gender</label>
 <select name="txtgender" class="form-control" placeholder="eg:gender" required>
  <option class="form-control" value="0">Select Gender</option>
  <option class="form-control" value="1">Male</option>
  <option class="form-control" value="2">Female</option>
 </select>
 </div>
 <div class="form-wrapper">
 <label for="">Phone Number</label>
 <input type="text" class="form-control"  placeholder="eg:number" pattern="[0-9]{10}" name="txtphno" required>
 </div>
 <div class="form-wrapper">
 <label for="">licence Number</label>
 <input type="text" class="form-control"  placeholder="eg:licence number" pattern="[A-Z]{2}[0-9]{2}[0-9]{11}" name="txtlicenceno" required>
 </div>
 <div class="form-wrapper">
 <label for="">Aadhar Number</label>
 <input type="text" class="form-control"  placeholder="eg:aadhar number" pattern="^[2-9]{1}[0-9]{11}" name="txtaadharno" required>
 </div>
 <!--<div class="form-wrapper">
 <label for="">Password</label>
 <input type="password" class="form-control"  placeholder="eg:abc12@" pattern="?=@.*[A-Z]).{8,}" name="txtpassword" required>
 </div> -->
 <button type="submit">Register Now</button>
 </form>
 </div>
 </div>
 
 </body>
</html>