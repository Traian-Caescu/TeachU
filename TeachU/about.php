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
        <li class="active"><a href="about.php">About Us</a></li>
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


	

	<!-- INFO -->
	<div class="main-content">
		<p>TeachU is a charity desgned to support teachers in providing remote learning. This site has lots of fantastic resources for teachers and students to achieve their teaching and learning goals</p>
		
	</div>

		
	<h1 style="color:#00008B;"> Meet our team </h1>
	<!-- News boxes -->
	<section class="recentNews">
		<div class="containerNews">

			<div class="row">

				<div class="ct-blog col-sm-4 col-md-3">
					<div class="inner">
						<h2>Traian-Dumitru Caescu</h2>
						<!-- News content -->
						<div class="fauxcrop"><img alt="News Entry" src="https://scontent-man2-1.xx.fbcdn.net/v/t1.6435-9/72701654_2510666709214901_5922254984828682240_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=84a396&_nc_eui2=AeFrrHnViZOFDO_rrl6ii0A8KLsO_yyUnbUouw7_LJSdtRu4hEX1uab_8lXEqdMWHBbIBpi6jQP7Rd8BCMUlW3Pg&_nc_ohc=LL-j3p3vCd0AX-O5VwK&_nc_ht=scontent-man2-1.xx&oh=00_AfBOICqyzaeOQJzp5TONk_qZdmabk802pDsnYQsaKXEBOA&oe=6441FE7A"></a></div>

						<div class="ct-blog-content">
							<!-- news Header -->
							<h4 style="text-align: left;"> Full Stack Developer </h4>
							<h4 style="text-align: left;"> Expertise: </h4>
							<p style="text-align: center;">- React </p>
							<p style="text-align: center;">- C++ </p>
							<p style="text-align: center;">- UX </p>
							<h4 style="text-align: left;"> traian0345@gmail.com </h4>
						</div>

					</div>
				</div>

				
				<div class="ct-blog col-sm-4 col-md-3">
					<div class="inner">
						
						<!-- News content -->
						<div class="fauxcrop"><img alt="News Entry" src="https://img.freepik.com/free-vector/abstract-coming-soon-halftone-style-background-design_1017-27282.jpg"></a></div>


					</div>
				</div>
				<div class="ct-blog col-sm-4 col-md-3">
					<div class="inner">
						
						<!-- News content -->
						<div class="fauxcrop"><img alt="News Entry" src="https://img.freepik.com/free-vector/abstract-coming-soon-halftone-style-background-design_1017-27282.jpg"></a></div>


					</div>
				</div>
		
		
		
	</div>
	
	</section>
	
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
