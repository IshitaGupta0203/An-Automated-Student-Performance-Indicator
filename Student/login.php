



<html>
<head>
<title>login page </title>
<?php require_once 'head.php';?>

<link rel= "stylesheet" type="text/css" href="style.css"> 
<style>
body
{
	margin:0;
	padding:0;
	background-image: url(back2.jpg);
	background-size :cover;
	background-position: center;
	font-family: Cursive;
}
	.login{
		width:300px;
		height:400px;
		background:black;
		color: white ;
		top:55%;
		left:45%;
		position: absolute;
		transform: translate(-50%,-50%);
		box-sizing: border-box;
		padding:50px 30px;
	}
	.logo{
		width: 100px;
		height: 100px;
		border-radius: 50%;
		position: absolute;
		top: -50px;
		left: calc(50% - 50px);
	}
	h1{
		padding:0 0 20px;
		text-align:center;
		font-size:26px;
	}
	.login p{
		font-weight: bold;
		font-size:18px;
	}
	.login input{
		width:100%;
		font-family: Cursive;
	}
	.login input[type="text"], input[type="password"]
	{ 
	    border:none;
		border-bottom:1px solid gray;
		background:transparent;
		outline:none;
		height:20px;
		color:gray;
		font-size:16px;
	}
	
	.login input[type="submit"]
	{
		border:none;
		outline:none;
		height:30px;
		background: solid dark gray;
		color:black;
		font-size:18px;
		border-radius:20px;
	}
	.login input[type="submit"]:hover
	{
		cursor:pointer;
		background:skyblue;
		color:black;
	}
	.login a{
		text-decoration:none;
		font-size:14px;
		line-height:20px;
		color:gray;
	}

</style>
</head>
<body> 
	<?php require_once 'menu.php';?>

   <div class="login">
   
   <h1>Login Here</h1>
	
   <form action="http://localhost/iShop/config.php " method="POST">  
	   <p>Username</p>
	   <input type="text" name="uname"  placeholder="Enter Username">
	   <p>Password</p>
	   <input type="Password" name="pwd" placeholder="Enter Password"><br><br>
	  <input type="submit" name="login" value="Login"><br>
	   <a href="#">Forgot password?</a><br>
	   <a href="create new acc.html">Create New Account?</a>
   </form>
  </div>
 </body>
</html>

