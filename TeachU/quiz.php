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

<h1> General Knowledge Quiz</h1>



<ul class="quiz">
    <li>
        <h4>What is the capital of Spain?</h4>
        <ul class="choices">
            <li><label><input type="radio" name="question0" value="A" /><span>Barcelona</span></label></li>
			<li><label><input type="radio" name="question0" value="B" /><span>Valencia</span></label></li>
			<li><label><input type="radio" name="question0" value="C" /><span>Alicante</span></label></li>
			<li><label><input type="radio" name="question0" value="D" /><span>Madrid</span></label></li>
        </ul>
   </li>
   
   <li>
        <h4>What is 2+2x2 ?</h4>
        <ul class="choices">
            <li><label><input type="radio" name="question1" value="A" /><span>4</span></label></li>
			<li><label><input type="radio" name="question1" value="B" /><span>6</span></label></li>
			<li><label><input type="radio" name="question1" value="C" /><span>8</span></label></li>
			<li><label><input type="radio" name="question1" value="D" /><span>10</span></label></li >
        </ul>
   </li>
   
   <li>
        <h4>Who painted the Mona Lisa ?<h4>
        <ul class="choices">
            <li><label><input type="radio" name="question2" value="A" /><span>Leonardo da Vinci</span></label></li>
			<li><label><input type="radio" name="question2" value="B" /><span>Vincent van Gogh</span></label></li>
			<li><label><input type="radio" name="question2" value="C" /><span>Bob Ross</span></label></li>
			<li><label><input type="radio" name="question2" value="D" /><span>Pablo Picasso</span></label></li >
        </ul>
   </li>
   
   <li>
        <h4>Which of the following is not a part of a computer ?<h4>
        <ul class="choices">
            <li><label><input type="radio" name="question3" value="A" /><span>CPU</span></label></li>
			<li><label><input type="radio" name="question3" value="B" /><span>Keyboard</span></label></li>
			<li><label><input type="radio" name="question3" value="C" /><span>Mouse</span></label></li>
			<li><label><input type="radio" name="question3" value="D" /><span>Cat</span></label></li>
        </ul>
   </li>
   
   <li>
        <h4>Who wrote Romeo and Juliet ?<h4>
        <ul class="choices">
            <li><label><input type="radio" name="question4" value="A" /><span>George Orwell</span></label></li>
			<li><label><input type="radio" name="question4" value="B" /><span>Charles Dickens</span></label></li>
			<li><label><input type="radio" name="question4" value="C" /><span>Fyodor Dostoyevsky</span></label></li>
			<li><label><input type="radio" name="question4" value="D" /><span>William ShakeSpeare</span></label></li>
        </ul>
   </li>

</ul>
<button class="view-results" onclick="returnScore()" style="color: black;">Submit</button>
<span id="myresults" class="my-results">Grade</span>
	
	
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
