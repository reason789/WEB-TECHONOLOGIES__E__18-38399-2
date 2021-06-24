<?php include '../head.php'?>


<?php   
    
   

    if (isset($_SESSION['uname'])) {
        //header("location:login.php");

        $data = file_get_contents("data.json");  

        $data = json_decode($data, true);  

        foreach($data as $row)  
        {  
            if($row["username"] == $_SESSION['uname'])
             {
                $name = $row["name"];
                $email = $row["e-mail"];
                $dob = $row["dob"];
                $gender = $row["gender"];

                

             } 
             
             
        }  

        
        
    }
    
    else{
        header("location:login.php");
    }

?>  







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    
    .view{
        display: flex;
        width: 500px;
        padding: 40px;
    }
    .viewInfo{
        width: 75%;
    }
    .viewPhoto{
        padding: 0 30px;
        width: 25%;
    }

    .viewPhoto img{
        display: block;
        margin: 0 auto;
    }

    

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
    <form method="post">
    <fieldset class= "view">
    <legend><b>PROFILE</b></legend><br>
        <div class="viewInfo">
            Name: <label type="text" name="name" ><?php echo $name?>
            <hr style="border: 0.1px solid #635C5C;;">
            Email: <label type="text" name="email" ><?php echo $email?>
            <hr style="border: 0.1px solid #635C5C;">
                Gender: 
                <input type="radio" id="male" name="gender" value="male" checked>Male
                <input type="radio" id="female" name="gender" value="female">Female
                <input type="radio" id="other" name="gender" value="other">Other
            <hr style="border: 0.1px solid #635C5C;;">
                Date of Birth: 
                <label type="date" name="dob"   size="2" >  <?php echo $dob?>
            <hr style="border: 0.1px solid #635C5C;"><br>
            <a href="editProfile.php">Edit Profile</a>
        </div>
        <div class="viewPhoto">
             <img src="./user.png" width="100" class="center" alt="">
            <br><br>
            <input type="file" id="img" name="img" accept="image/*">
            
            <br><br>
        </div>
    </fieldset>
    </form>
    </div>
 
</div>

    
</body>
</html>
<?php include '../footer.php'?>