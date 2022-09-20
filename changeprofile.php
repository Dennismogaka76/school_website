<?php
session_start();


include('dbconnection.php');
if(strlen($_SESSION['login'])==0)
    {   
header('location:Login.php');
}
else{

if(isset($_POST['update']))
{
	$newname=$_POST['name'];
    $newyear=$_POST['yearofcompletion'];
    $newhouse=$_POST['house'];
    $newdob=$_POST['dateofbirth'];
    $townofresidence=$_POST['town'];
    $newjobs=$_POST['jobs'];
    $newplaceofwork=$_POST['placeofwork'];
    $photo=$_FILES["photo"]["name"];
    $newusername=$_POST['username'];
    $newpassword=$_POST['password'];
    move_uploaded_file($_FILES["photo"]["tmp_name"],"Alumniphotos/".$_FILES["photo"]["name"]);


 $prof=mysqli_query($con,"UPDATE  kdalumni set alumniname='$newname',  yeartheycompleted='$newyear', house='$newhouse', dateofbirth='$newdob', town='$townofresidence', job='$newjobs', placeofwork='$newplaceofwork', profilepic='$photo',username='$newusername',password='$newpassword'  WHERE admissionnumber='".$_SESSION['login']."'");
if($prof){
 $_SESSION['msg']=" Profile updated successfully !";
}
else{
    $_SESSION['msg']="Profile not updated,something went wrong";
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni  Profile</title>
    <style type="text/css">
        #logout{
            float: right;
            font-size: 40px;
            margin-right: 100px;

        }
        html{
            background-color:grey;
            font-size: 25px;
        }
        a{
            font-size: 50px;
        }
    </style>
   
</head><a href="logout.php"><p id="logout">Log Out</p></a>


<body>
    <a href="index.php">HOME</a>
<h1>My Profile</h1> 
              
<font color="maroon" align="center"><?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?></font>       
<?php $det=mysqli_query($con,"SELECT * from kdalumni WHERE admissionnumber='".$_SESSION['login']."'");
$all=1;
while($arr=mysqli_fetch_array($det)){
?>
<form   method="post"  enctype="multipart/form-data">
<fieldset><legend>
 Update Your details Here</legend>
        
    <ol>
        <li>
            <label for="name">Full Name</label>
            <input type="text" name="name" required value= "<?php echo htmlentities($arr['alumniname']);?>" required ></li>           <li>
            <label for="admissionnumber"> Admission Number</label>
            <input type="number" name="admissionnumber"   required value= "<?php echo htmlentities($arr['admissionnumber']);?>" readonly required >         
        </li>
            <li>
            <label for="yearofcompletion">Year of Completion</label>
            <input type="number" name="yearofcompletion"  value= "<?php echo htmlentities($arr['yeartheycompleted']);?>"   required>
            
            </li>
            <li>
            <label for="house">House</label>
            <input type="text" name="house" value= "<?php echo htmlentities($arr['house']);?>"  >
            </li>
            <li>
            <label for="dateofbirth">Date of Birth</label>
            <input type="date" name="dateofbirth" value= "<?php echo htmlentities($arr['dateofbirth']);?>"  required>
            </li>
            <li>
            <label for="town">Current Town Of Residence</label>
            <input type="text" name="town" value= "<?php echo htmlentities($arr['town']);?>" required >       </li>
            <li>
            <label for="jobs">Work</label>
            <input type="text" name="jobs" value= "<?php echo htmlentities($arr['job']);?>"required >       </li>
            <li>
            <label for="placeofwork">Place of Work</label>
            <input type="text" name="placeofwork" value= "<?php echo htmlentities($arr['placeofwork']);?>" required>     </li>
            <li>
            <label for="Photo">Photo</label>
            <img src="Alumniphotos/<?php echo htmlentities($arr['profilepic']);?>" width="300px" height="300px">
            <p> Edit profile Photo</p>
            <input type="file" name="photo" value= "<?php echo htmlentities($arr['profilepic']);?>" >


            </li>

            <li>
            <label for="username">Username</label>
            <input type="text" name="username" value= "<?php echo htmlentities($arr['username']);?>" required >      </li>
            <li>
            <label for="password">Password</label>
            <input type="password" class="text" value="<?php echo htmlentities($arr['password']);?>" minlength="6" maxlength="50" name="password" required >
            </li>
            <input type="submit" name="update"  value="Update" >
     </ol>
        
        
     <?php
  $all=$all+1;
  }?>       
    </fieldset>
    <font color="blue" align="center"><?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?></font>
</form>
						




    
</body>
</html>
<?php } ?>