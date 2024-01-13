<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>Bike Lance login page</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #080710;
	background-image: url("https://images.news18.com/ibnlive/uploads/2021/03/1615367160_triumph-rocket-3-r-black.jpg?im=Resize,width=360,aspect=fit,type=normal?im=Resize,width=320,aspect=fit,type=normal=");
	background-size: cover;
}
.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.background .shape{
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}
.shape:first-child{
    background: linear-gradient(
        #1845ad,
        #23a2f6
    );
    left: -80px;
    top: -80px;
}
.shape:last-child{
    background: linear-gradient(
        to right,
        #ff512f,
        #f09819
    );
    right: -30px;
    bottom: -80px;
}
form{
    height: 520px;
    width: 400px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
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
form h3{
    font-size: 32px;
    font-weight: 500;
	border-radius: 3px;
    padding: 23px;
	margin-top: 53px;
    line-height: 3px;
    text-align: center;

}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #e5e5e5;
}
button{
    margin-top: 50px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
    </style>
</head>
<body>   
	<div class="body">
	    <div class="grad">
        <div>
            <form action="customerloginaction.php" method="post">
		        <div class="header">
			        <div><a href="http://localhost/Bike%20Lance/Guest/"><b>Bike<span>Lance</span></b></a></div>
		        </div>
                <h3>Login Here</h3>
                <label for="username">EMail</label>
                    <input type="text" placeholder="eg:abc@gmail.com" name="txtemail" required>
                <label for="password">Password</label>
                    <input type="password" placeholder="Password" name="txtpassword" required>               
                <button type="submit" class="btn btn-primary active">Log In</button>
                <b>Not logged in yet?</b> <a href="http://localhost/Bike%20Lance/Guest/signupform.php">Sign Up</a>    
            </form>                        
        </div>
        </div>
        </div>
</body>
</html>
