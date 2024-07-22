<?php
// Check to see if the server has recieved a POST request
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
// Include connection script
    include 'connect.php';
// Write SQL query
    $sql = "insert into students (firstname, lastname, email, password, role) values ('".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['email']."','".$_POST['password']."','".$_POST['role']."')";
// Execute query and check for errors
    if (!$mysqli->query($sql)) 
    {
        echo "Error: ". $mysqli->error;
    }
    else 
    {
		header['display.php'];
        echo "<p>Successfully Added Record</p>";
        echo '<a href="home.php">Back</a>';
    } 
// Close connection
    $mysqli->close();
}
// Otherwise show the input form
else
{
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="title">Login-Form</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/dbed6b6114.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">



</head>
<body>
<div class="bodycontent">
    <!-- nav bar -->
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">TeachU</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="home.php">Home</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="resources.php">Resources</a></li>
        <li><a href="help.php">Help</a></li>
		<li class="active"><a href="studentLogin.php">Student Log In</a></li>
		<li><a href="login.php">Staff Login</a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
          <ul class="dropdown-menu">
              <li><a href="login.php">Staff Log In</a></li>
            <li><a href="login.php">Staff Register</a></li>
            <li><a href="studentLogin.php">Student Log In</a></li>
            <li><a href="studentLogin.php">Student Register</a></li>
            <li><a href="login.php">Log out</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>



    <div class="container">
        <div class="card">
            <div class="inner-box" id="card">
			
			<!-- log in card part, only front end -->
                <div class="card-front">
                    <h2>STUDENT LOGIN</h2>
                    <form action="">
                        <input type="email" class="input-box" placeholder="Email" required>
                        <input type="password" class="input-box" id="password" placeholder="Password" required>
                        <input type="checkbox" name="" id="" onclick="hideShow()"><span id="password-info">Show Password</span>
                        <button type="submit" class="submit-btn">Submit</button>
                        <input type="checkbox" name="" id=""><span>Remember Me</span>
                    </form>
                    <button type="button" class="btn" onclick="openRegister()">New User</button>
                    <a href="">Forgot Password</a>
                </div>
				
				<!-- register card part -->
                <div class="card-back">
                    <h2>STUDENT REGISTER</h2>
                    <form action="login.php" method="POST">
                        <input type="text" name="firstname" id="firstname" class="input-box" placeholder="First Name" required>
                        <input type="text" name="lastname" id="lastname" class="input-box" placeholder="Last Name" required>
                        
                        <input type="email" name="email" id="email" class="input-box" placeholder="Email" required>
                        
                        <input type="password" name="password" class="input-box" id="password" placeholder="Password" required>
                        <input type="checkbox" name="" id="" onclick="hideShow()"><span id="password-info">Show Password</span>
                        
                        <input type="text" name="role" id="role" class="input-box" placeholder="Role" required>
                        
                        <button type="submit" class="submit-btn">CREATE</button>
                        <input type="checkbox" name="" id=""><span>Remember Me</span>
                    </form>
                    <button type="button" class="btn" onclick="openLogin()" style="color: black;">Already have an Account?<span><i class="fas fa-user"></i> Login</span></button>
                    <a href="" style="color: black">Forgot Password</a>
                </div>
            </div>
        </div>
    </div>
</div>










	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="jquery.ripples.js"></script>
	<script>
		$(document).ready(function () {
			try {
				$('body').ripples({
					resolution: 512,
					dropRadius: 20, //px
					perturbance: 0.04,
				});
				$('main').ripples({
					resolution: 128,
					dropRadius: 10, //px
					perturbance: 0.04,
					interactive: false
				});
			}
			catch (e) {
				$('.error').show().text(e);
			}

			// Automatic drops
			setInterval(function () {
				var $el = $('main');
				var x = Math.random() * $el.outerWidth();
				var y = Math.random() * $el.outerHeight();
				var dropRadius = 20;
				var strength = 0.04 + Math.random() * 0.04;

				$el.ripples('drop', x, y, dropRadius, strength);
			}, 400);
		});
	</script>
	
	<!-- Other custom scripts -->
	<script src="style.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<!-- Footer -->
	<div class="footer">
		<p>&copy; 2023 TeachU</p>
	</div>


    <script src="style.js"></script>
</body>

</html>
<?php
// Can't forget to close the bracket opened for the "else" statement
}
?>
