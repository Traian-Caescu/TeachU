<!DOCTYPE html>
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
        <li class="active"><a href="resources.php">Resources</a></li>
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


	
	
	<h1 style="color:#00008B;"> Resources </h1>
	
	<button id="quizButton" class="float-left submit-button" style="color: black; font-weight: 900;">General Knowledge Quiz</button>

	<button id="math-quizButton" class="float-left submit-button" style="color: black; font-weight: 900;">Maths Quiz</button>

	<button id="english-quizButton" class="float-left submit-button" style="color: black; font-weight: 900;">English Quiz</button>

	<button id="computing-quizButton" class="float-left submit-button" style="color: black; font-weight: 900;">Computing Quiz</button>



	<button id="mathButton" class="float-left submit-button" style="color: black; font-weight: 900;">Principles of BODMAS</button>

	<button id="englishButton" class="float-left submit-button" style="color: black; font-weight: 900;">English</button>
	
	<button id="computingButton" class="float-left submit-button" style="color: black; font-weight: 900;">Computing</button>

	<!-- News boxes -->
	<section class="recentNews">
		<div class="containerNews">

			<h2 class="news-title">Explore the world of coding</h2>
			<div class="row">

				<div class="ct-blog col-sm-6 col-md-4">
					<div class="inner">

						<!-- News content -->
						<div class="fauxcrop"><a href="https://www.codecademy.com/catalog"><img alt="News Entry" src="https://images.codecademy.com/social/logo-codecademy-social.png"></a></div>

						<div class="ct-blog-content">
							<!-- news Header -->
							<h3 class="ct-blog-header">Learn to code with Codecademy</h3>
							<p> Codecademy is an online platform that teaches programming skills to students of all levels. Through thousands of online courses, Codecademy offers a wealth of content covering 12 programming languages and two markup languages (HTML and CSS). <p>
						</div>

					</div>
				</div>


				<div class="ct-blog col-sm-6 col-md-4">
					<div class="inner">

						<!-- News content -->
						<div class="fauxcrop"><a href="https://www.codecademy.com/catalog"><img alt="News Entry" src="https://i.pcmag.com/imagery/reviews/01tPXClg2WjLamQzScplH3y-15.fit_scale.size_760x427.v1627670281.png"></a></div>

						<div class="ct-blog-content">
							<!-- news Header -->
							<h3 class="ct-blog-header">Learn to code with freeCodeCamp</h3>
							<p>100% free. It provides thousands of free interactive coding lessons, videos, and articles to help people learn to code. There are also thousands of freeCodeCamp study groups worldwide. <p>
						</div>

					</div>
				</div>
		</div>
	
	
	<h2 class="news-title">Maths</h2>
			<div class ="row">
				<div class="ct-blog col-sm-6 col-md-4">
					<div class="inner">

						<!-- News content -->
						<div class="fauxcrop"><a href="https://mathsbot.com/"><img alt="News Entry" src="https://2.bp.blogspot.com/-RwxiwNe3KkE/WB4kgcPGaRI/AAAAAAAAKDY/b1o1YhE_OlcFwRN0Mh99kZ5RShbxzw2NACLcB/s1600/Four%2BOps.PNG"></a></div>

						<div class="ct-blog-content">
							<!-- news Header -->
							<h3 class="ct-blog-header">Practice your maths with MathsBot.com</h3>
							<p> Interactive tools and activites to aid the teaching of mathematics. Hundreds of randomly generated questions and answers <p>
						</div>

					</div>
				</div>


				<div class="ct-blog col-sm-6 col-md-4">
					<div class="inner">

						<!-- News content -->
						<div class="fauxcrop"><a href="https://www.interactive-maths.com/"><img alt="News Entry" src="https://www.interactive-maths.com/uploads/1/1/3/4/11345755/9272919.jpg"></a></div>

						<div class="ct-blog-content">
							<!-- news Header -->
							<h3 class="ct-blog-header">Teach yourself maths with Interactive Maths</h3>
							<p>Interactive Maths is a site with a mixture of activities for teaching and learning maths, all of which are based around using technology. <p>
						</div>

					</div>
				</div>
		</div>
	
	<h2 class="news-title">Be a better writter</h2>
			<div class ="row">
				<div class="ct-blog col-sm-6 col-md-4">
					<div class="inner">

						<!-- News content -->
						<div class="fauxcrop"><a href="https://nationalcentreforwriting.org.uk/free-resources/"><img alt="News Entry" src="https://nationalcentreforwriting.org.uk/wp-content/uploads/2018/06/national-centre-for-writing-logo.png"></a></div>

						<div class="ct-blog-content">
							<!-- news Header -->
							<h3 class="ct-blog-header">Improve your writing skills with National Centre for Writting</h3>
							<p> Writing can be a solitary activity but that doesn’t mean you’re on your own! These free guides, podcasts and interviews provide a wealth of advice, techniques and tips for being a more productive writer. <p>
						</div>

					</div>
				</div>


				<div class="ct-blog col-sm-6 col-md-4">
					<div class="inner">

						<!-- News content -->
						<div class="fauxcrop"><a href="https://www.grammarly.com/a?utm_source=google&utm_medium=cpc&utm_campaign=10520839321&utm_content=447761320961&utm_term=improve%20english%20writing%20skills&matchtype=b&placement=&network=g&gclid=CjwKCAjwq-WgBhBMEiwAzKSH6NgmbnHPkJxuAhg8rakMSaJeOtSI8D4GzH8NdS-wHgLhIlWfnjQYMxoCzFQQAvD_BwE&gclsrc=aw.ds"><img alt="News Entry" src="https://sm.pcmag.com/pcmag_uk/review/g/grammarly/grammarly_pcwg.jpg"></a></div>

						<div class="ct-blog-content">
							<!-- news Header -->
							<h3 class="ct-blog-header">Enhance your writting skills with Grammarly</h3>
							<p>Instantly Fix Word Choice, Grammatical Errors, and Other Writing Issues. Grammarly Quickly and Easily Makes Your Writing Better. Try Now! Fix Punctuation Errors. AI Writing Assistant. <p>
						</div>

					</div>
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
