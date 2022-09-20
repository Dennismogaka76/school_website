<?php
session_start();

include('dbconnection.php');

//Code for Registration 
$_SESSION['msg'] = '';
if(isset($_POST['signup']))
{
	$fullname=$_POST['fname'];
	$admission=$_POST['admissionnumber'];
    $year=$_POST['yearcompleted'];
    $house=$_POST['house'];
    $dateofbirth=$_POST['dateofbirth'];
    $townplace=$_POST['town'];
    $worktype=$_POST['work'];
    $workplace=$_POST['workplace'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $imgfile=$_FILES["photo"]["name"];
    $extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));
    $imgnewfile=md5($imgfile).$extension;
    move_uploaded_file($_FILES["photo"]["tmp_name"],"Alumniphotos/".$imgnewfile);
   
 $reg=mysqli_query($con,"INSERT INTO `kdalumni` (`alumniname`,`admissionnumber`,`yeartheycompleted`,`house`,`dateofbirth`,`town`,`job`,`placeofwork`,`profilepic`,`username`, `password`) values('$fullname','$admission','$year','$house','$dateofbirth','$townplace','$worktype','$workplace','$imgnewfile','$username','$password')");

if($reg)
 {
        echo "<script>alert(' You have successfully registered');</script>";
 }
 else{
    echo "<script>alert('Not Registered');</script>";
    }


}



//Code for Login
if(isset($_POST['login']))
{
$admisno=$_POST['admsn']; 
$pass=$_POST['passcode'];
$successful=mysqli_query($con,"SELECT * FROM kdalumni WHERE admissionnumber='$admisno' and password='$pass'");
$r=mysqli_fetch_array($successful);
if($r>0)
    {
        
  $extra="changeprofile.php";
  $_SESSION['login']=$_POST['admsn'];
  $_SESSION['id']=$success['admission'];
 $host=$_SERVER['HTTP_HOST'];
  $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
  header("location:http://$host$uri/$extra");

 } 
   
else
{
    $_SESSION['msg']="Wrong password or Admission Number";
    
}

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni  Login | Sign Up </title>
    <style type="text/css">
        nav ul{
    margin: 0px;
    padding: 0px;
    list-style: none;
}

nav ul li{
    float: left;
    width:150px;
    height: 40px;
    background-color: black;
    opacity: 0.8;
    text-align: center;
    line-height: 40px;
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
#regform{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
}
fieldset{
    background-color: blue;
    color: beige;
    font-size: 20px;

}
body{
    background-color: maroon;
    text-align: center;
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
                            <li><a href="login.php"target="_blank">Alumni registration and login</a></li>

                        </li></ul></ul></nav>
                        <br><br><br><br><br><br><br><br><br>
<h1>Registration and Log In for the Alumnis' </h1>
<div id="regform">

<form name="registration" id="register"  method="POST" enctype="multipart/form-data" >
    <fieldset><legend>
            Sign Up Here</legend>
           
    <ol>
        <li>
            <label for="name">Full Name</label>
            <input type="text" name="fname" required placeholder="Your full name"></li>

            <li>
            <label for="admissionnumber"> Admission Number</label>
            <input type="number" name="admissionnumber"  required placeholder="Admission Number">
            
        </li>
            <li>
            <label for="yearcompleted">Year of Completion</label>
            <input type="number" name="yearcompleted" size="5" title="Year of completion must be from 1998" maxlength="4" min="1998" placeholder="Year of Completion" required>
            
            </li>
            <li>
            <label for="house">House</label>
            <input type="text" name="house" placeholder="House">
            </li>
            <li>
            <label for="dateofbirth">Date of Birth</label>
            <input type="date" name="dateofbirth" placeholder="Date of Birth" required>
            </li>
            <li>
            <label for="town">Current Town Of Residence</label>
            <input type="text" name="town" placeholder="Town of Residence">
            </li>
            <li>
            <label for="work">work</label>
            <input type="text" name="work" placeholder="work">
            </li>
            <li>
            <label for="workplace">Place of Work</label>
            <input type="text" name="workplace" placeholder="Place of Work">
            </li>
            <li>
            <label for="Photo">Photo</label>
            <input type="file"  id="photo" name="photo" title="Upload a Photo" required>


            </li>

            <li>
            <label for="username">Username</label>
            <input type="text" name="username" placeholder="Username">
            </li>
            <li>
            <label for="password">Password</label>
            <input type="password" class="text" value="" minlength="6" maxlength="50" name="password" pattern=".{6,}" title="Must contain  atleast 6 or more characters" required>
            </li>
            <input type="submit" name="signup" id="signingup" value="Sign Up" >
     </ol>
        
        
    </fieldset>
</form>
								



<form name="Login" action="" id="register" method="POST">
 <fieldset>
     <legend>Login Here</legend>
            
    <ol>
    <font color="red" align="center"><?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?></font>
        
        <li>
            <label for="admissionnumber">Admission Number</label>
            <input type="number" name="admsn" required placeholder="Admission Number">
        </li>
        <li>
            <label for="password">Password</label>
            <input type="password" name="passcode" placeholder="Password" required>
        </li>    
			<input type="submit" name="login" value="LOG IN" >
									
     </ol>
        
        
  </fieldset>
</form>
									
</div>								                        
    
</body>
</html>

