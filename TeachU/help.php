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
        <li class="active"><a href="help.php">Help</a></li>
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


	<div class="help-container">
  <form action="action_page.php">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

	<label for="email">Email</label>
	<input type="text" id="email" name="email" placeholder="Email">
	
    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="UK">UK</option>
      <option value="USA">USA</option>
      <option value="CANADA">canada</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Issue..." style="height:200px"></textarea>

    <input type="submit" value="Submit">

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
