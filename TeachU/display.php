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

<div class="containerDisplay" style="color: blue;">
	<h1>Display records:</h1>
<?php
include 'connect.php';

$sql = "SELECT ID, firstname, lastname, email, password, role FROM students";
$result = $mysqli->query ($sql);


if($result){
if ($result->num_rows > 0) {
	
	echo "<table>";
	echo "<thead>";
	echo "<tr>";
	echo "<th style='color: blue;'>firstname|</th>";
	echo "<th style='color: blue;'>lastname|</th>";
	echo "<th style='color: blue;'>email|</th>";
	echo "<th style='color: blue;'>password|</th>";
	echo "<th style='color: blue;'>role.</th>";
	echo "</tr>";
	echo "</thead>";
	while($row = $result->fetch_assoc()) 
	{
		// Output data from each row
		echo "<tr>";
		echo "<td style='color: blue;'>" . $row['firstname'] . "</td>";
		echo "<td style='color: blue;'>" . $row['lastname'] . "</td>";
		echo "<td style='color: blue;'>" . $row['email'] . "</td>";
		echo "<td style='color: blue;'>" . $row['password'] . "</td>";
		echo "<td style='color: blue;'>" . $row['role'] . "</td>";
		echo'<td><a href="edit.php?id=' . $row["ID"] . '">Edit</a></td>';
		echo'<td><a href="delete.php?id=' . $row["ID"] . '">Delete</a></td>';
		echo "</tr>";
	}
	echo "</table>";
	  
} else {
    echo "0 results";
}
// Close data connection
$result->close();


}

echo "<br>";
echo "<br>";
echo "<br>";


$grade_sql = "SELECT Module, Student, Grade FROM grades";
$grade_result =$mysqli->query($grade_sql);
if($grade_result){
if ($grade_result->num_rows > 0) {
	
	echo "<table>";
	echo "<thead>";
	echo "<tr>";
	echo "<th style='color: blue;'>Module|</th>";
	echo "<th style='color: blue;'>Student|</th>";
	echo "<th style='color: blue;'>Grade.</th>";
	echo "</tr>";
	echo "</thead>";
	while($row = $grade_result->fetch_assoc()) 
	{
	
		echo "<tr>";
		echo "<td style='color: blue;'>" . $row['Module'] . "</td>";
		echo "<td style='color: blue;'>" . $row['Student'] . "</td>";
		echo "<td style='color: blue;'>" . $row['Grade'] . "</td>";
		echo "</tr>";
	}
	echo "</table>";
	  
} else {
    echo "0 results";
}
// Close data connection
$grade_result->close();
$mysqli->close();
}
?>
</div>
</body>
</html>
