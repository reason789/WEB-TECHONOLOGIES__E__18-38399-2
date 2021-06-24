
<?php 



if (isset($_SESSION['uname'])) {

	
	
}

else{
	header("location:login.php");
}

 ?>

<!DOCTYPE html>
<html>
<head>
<style>

.dashboard{
  border: 2px solid DarkSalmon;
  display: flex;
  margin-bottom: 13px;
  height:320px;
  padding: 20px;
}
.dashboard_1{
    width:30%;
    border-right: 2px solid DarkSalmon;
    padding: 0 20px;
}
.dashboard_2{
    width:70%;
    padding: 0 20px;
}

.dashboard_1 h1{
    border-bottom: 2px solid DarkSalmon;
}


.dashboard_1 li{
    margin: 5px;
}

</style>
</head>
<body>


<div class="dashboard">

    <div class="dashboard_1">
        <h1>Account</h1>
        <ul>
            <li><a href="welcome.php">Dashboard</a></li>
            <li><a href="viewProfile.php">View Profile</a></li>
            <li><a href="editProfile.php" >Edit Profile</a></li>
            <li><a href="profilePicture.php">Change Profile Picture</a></li>
            <li><a href="changePassword.php">Change Password</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>

    <div class="dashboard_2">
        <?php
        
            echo "<h1> Welcome ".$_SESSION['uname']."</h1>";
             
            
        ?>
    </div>
 
</div>


</body>
</html>


