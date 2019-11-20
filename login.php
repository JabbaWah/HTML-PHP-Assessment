<!DOCTYPE html>
<html>
	<head><!-- Links, Fonts and Javascript -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="Main.css">
        <link rel="Javascript" type="Javascript" href="JavaScript.js">
        <script src="JavaScript.js"></script>
    </head>
    <body>
        <div id="mySidenav" class="sidenav"><!-- Side Navigation --> 
            <a class="navtitle" href="Index.php">Menu</a>
            <div>
                <a href="Gallery.php">Gallery</a>
                <a href="Contact.php">Contact</a>
            </div>
        </div>
        <div id="main">
            <div id="titlebar"><!-- Nav Bar & Switch Btn -->
                <div id="menubtn"><!-- Button -->
                    <li class="container"  onclick="openNav(); myFunction(this);">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </li>
                </div>
                <li>
                    <a href="javascript:void(0)" onclick="window.location.href='Login.php'" class="Loginbtn">Login</a>
                </li>
            </div>
            <div id="overlay"></div>
            <div class="bgimg-5" id="move">
            	<div class="caption">
                </div>
            </div>
			<div id="loginbox">
				<h1>Login Here</h1>
				<form>
					<div id="Loginarea">
						<p>Username</p>
						<input type="Text" name="Username" placeholder="Enter Username">
						<p>Password</p>
						<input type="Password" name="Password" placeholder="Enter Password">
						<br>
						<br>
						<input type="Submit" name="Login" value="Login" class="SubBtn">
					</div>
				</form>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<form>
					<div id="Register">
						<h1>Register Here</h1>
						<p>Email</p>
						<input type="Text" name="Email" placeholder="Enter Email">
						<p>Username</p>
						<input type="Text" name="Username" placeholder="Username">
						<br>
						<br>
						<br>
						<div id="RegisterUser">
							<br>
							<br>
							<p>Password</p>
							<input type="Password" name="Password" placeholder="Enter Password">
							<p>Confirm</p>
							<input type="Password" name="CPassword" placeholder="Confirm Password">
							<br>
							<br>
							<input type="Submit" name="SignUp" value="SignUp" class="SubBtn2">
						</div>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>