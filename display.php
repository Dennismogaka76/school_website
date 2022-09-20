<?php
session_start();

include('dbconnection.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
    	body{
    		background-color: maroon;
    		color: white;
        text-align: center;
    	}
      nav ul{
  margin: 0px;
  padding: 0px;
  list-style: none;
}

nav ul li{
  float: left;
  width:150px;
  height: 50px;
  background-color: black;
  opacity: 0.8;
  text-align: center;
  line-height: 50px;
  font-size: 15px;
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
  display: block;
}
#displayprofile{
display: flex;
flex-wrap: wrap;
}
.displays{
padding: 50px;
}
#reg{
  line-height: 30px;
  height: 60px;
}
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
              <li><a id="reg" href="login.php"target="_blank">Alumni registration and login</a></li>

            </li></ul></ul></nav><br><br><br><br><br><br>

<h1>SOME OF THE SCHOOL ALUMNI </h1>


  <?php
  $result=mysqli_query($con, "SELECT * from kdalumni ORDER BY yeartheycompleted ");
  $a=1;
 
  while ($row=mysqli_fetch_array($result)) {
     ?>
   <div  id="displayprofile"> 
  <div class="displays">
  

    <div><b>CLASS OF: </b><?php  echo $row['yeartheycompleted'];?></span></div><br>
    <div><img src="Alumniphotos/<?php echo $row['profilepic'];?>" width="200" height="200"></div>
   <div><b>Name: </b><?php echo  $row['alumniname'];?></div>
   <div><b>ADMN NO: </b><?php echo  $row['admissionnumber'];?></div>
  
  </div><br>
  <?php
  $a=$a++;

  }?></div>

</body>
</html>