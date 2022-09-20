<!DOCTYPE html>
<html>
<head>
	<title>dormitories</title>
	<style type="text/css">
		body{background-color: maroon;
			color: white;}
		nav ul{
	margin: 0px;
	padding: 0px;
	list-style: none;
}

nav ul li{
	float: left;
	width:170px;
	height: 40px;
	background-color: black;
	opacity: 0.8;
	text-align: center;
	line-height: 40px;
	font-size: 18px;
	font-family: sans-serif;
	border:2px solid white;
	border-radius: 6px;
	padding: 5px;

}
nav ul li a{
	text-decoration: none;
	color:white; 
	display: block; 

}
nav ul li a:hover{
	background-color:green;
	color: #FFD700; 
}
nav li ul li{
	display:none;
}
nav ul li:hover ul li{
	display: block;}

		p{font-size: 22px;text-align: center;}
		article{border:2px solid green;border-radius: 10px;margin-left: 15%;width: 65%;}
		section{margin-left: 30px;}
		h3{font-size: 30px;color: #FF6347;}
		h6{font-size: 30px;}
	</style>
</head>
<body>
	<nav>
	  <ul>
  	<li><a href="index.php">HOME</a></li>
  	<li><a href=""> ABOUT</a>
  	<ul>

							<li><a href="location.php"target="_blank"> Location</a> </li>
							<li><a href="history.php"target="_blank"> History</a></li>
							<li style="height: 80px"><a href="motto.php"target="_blank">Motto,Mission & Vision</a></li>

						</ul>
</li>
  	<li><a href="">ADMINISTRATION</a>
  		<ul>                <li><a href="bog.php"target="_blank">B.O.G</a></li>
  			                <li><a href="pta.php"target="_blank">P.T.A</a></li>
							<li><a href="principal.php"target="_blank">Principal</a></li>
							<li><a href="deputies.php"target="_blank">Deputy-principals</a></li>
							<li><a href="studentsbody.php"target="_blank">Students Body</a></li>
						</ul>
  	</li>
  	<li><a href="">ACADEMICS</a>
  		<ul>
							<li><a href="departments.php" target="_blank">Departments</a></li>
							<li><a href="staff.php" target="_blank">Staff</a></li>
							<li><a href="examinations.php" target="_blank">Examininations</a></li>



						</ul>

  	</li>

  	<li><a href="">ACCOMODATION</a>
  		<ul>
  			<li><a href="dormitories.php" target="_blank">Dormitories</a></li>
  		</ul>
  	</li>
  	<li><a href="">CO-CURRICULAR</a>
<ul>
							<li><a href="sports.php"target="_blank">Sports</a></li>
							<li><a href="drama.php"target="_blank">Drama</a></li>

						</li></ul>
						</ul>
<ul> </li><li><a href="">ALUMNI</a>
<ul>
							<li><a href="display.php"target="_blank">Alumni</a></li>
							<li><a href="login.php"target="_blank">Alumni registration and login</a></li>

						</li></ul></ul></nav>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<article>
	<section>
		<p>The school has 3 dormitories that can accomodate 1300 students.The dorms are:</p>
		<ol style="font-size: 25px;">
			<li>Bishop Norman</li>
			<li>Bishop Crawley</li>
			<li>Jamuhuri</li>
			
		</ol>
		<u><h6>1.Boshop Norman</h6></u>
		<p>It has a capacity of 418students</p>
		<img src="images/dorm.jpg">
		<u><h6>2.Boshop Crawley</h6></u>
		<p>It has a capacity of 425 students</p>
		<img src="images/dorm2.jpg">
		<u><h6>3.Jamuhuri</h6></u>
		<p>It has a capacity of 780 students</p>
		<img src="images/dorm1.jpeg">
		
	</section>
</article>
</body>
</html>