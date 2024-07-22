<html>


<head>
	<title>TeachU</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="style.css">

	
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
		<li><a href="login.php">Staff Login</a></li>
		<li><a href="studentLogin.php">Student Login</a></li>
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

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	include 'connect.php';

    $id = $_GET['id'];
    $fn = $_POST['firstname'];
    $sn = $_POST['lastname'];
    $em = $_POST['email'];
    $ex = $_POST['password'];
    $rl = $_POST['role'];
    $updatequery ="UPDATE students SET firstname=?, lastname=?, email=?, password=?, role=? WHERE id=?";

    $stmt = $mysqli->prepare($updatequery);
    $stmt->bind_param('sssssi', $fn, $sn, $em, $ex, $rl, $id );

	
    if (!$stmt->execute()) 
    {
         printf("Error: %s.\n", $stmt->error);
    }
    else 
    {
        echo "<p>Record updated successfully</p>";
        echo "<a href=\"display.php\">display</a>";
    } 
    $mysqli->close();
}
else
{
	include 'connect.php';
    
    $selectquery = "SELECT * from students WHERE ID=?";
    $stmt = $mysqli->prepare($selectquery);
    $stmt->bind_param('s', $_GET['id']);
    $stmt->execute();
    $result = $stmt->get_result();
	$user = $result->fetch_assoc();
    $id = $_GET['id'];
    $fn = $user['firstname'];
    $sn = $user['lastname'];
    $em = $user['email'];
    $ex = $user['password'];
    $rl = $user['role']
?>
	<h1>Edit:</h1>
  
  
  

  
  
    <form action="edit.php?id=<?php echo $id; ?>" method="POST" >
        
        <input  type="text" placeholder="First Name" id="firstname" name="firstname" value="<?php echo $fn; ?>"/><br>
        
        
        <input  type="text" placeholder="Last Name" id="lastname" name="lastname" value="<?php echo $sn; ?>"/><br>
        
        
        <input type="email" placeholder="Email" id="email" name="email" value="<?php echo $em; ?>"/><br>
        
        
        <input  type="password" placeholder="Password" id="password" name="password" value="<?php echo $ex; ?>"/><br>
        
        
        <input  type="text" placeholder="Role" id="role" name="role" value="<?php echo $rl; ?>"/><br>
        
        
        <label for="submit">Submit: </label>
        <input type="submit" id="submit" name="submit" value="submit"/>
    </form>	
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


	
</div>
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
