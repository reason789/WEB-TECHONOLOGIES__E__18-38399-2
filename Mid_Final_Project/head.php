<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
<style>

.container{
  border: 2px solid DarkSalmon;
  display: flex;
  margin-bottom: 13px;
  height:80px;
 /*  width: 80%;
  margin : 0 auto; */
  padding: 0 40px;
}
.nav-bar{
  width: 70%;
}
.icon{
  width: 20%;
  padding : 0 60px;
}
.container ul{
  float: right;
  margin-top:25px;
}
.container li{
  display: inline;
  margin:10px;
}
.container li a{
  
  text-decoration: none;
  color: black;
  font-size: 20px;
}

</style>
</head>
<body>


<div class="container">
  <div class="icon">
    <img src="./logo.png"  alt="E-Commerce" width="200px">
  </div>
  <div class="nav-bar">
    <ul>
      <li><a href="land.php">Home</a></li>
      <li><a href="#news"><?php  
       
       if(isset($_SESSION['uname'])){
        echo $_SESSION['uname'];
      }
      else
      {
        echo "<a href='./login.php'>Login</a>";
      }
      
      
      ?></a></li>
      <li><?php  
       
       if(isset($_SESSION['uname'])){
       echo "<a href='./logout.php'>Logout</a>";
       
      }
      else
      {
        echo "<a href='./registration.php'>Registration</a>";
        
      }
      
      
      ?></li>
    </ul>
  </div>
  
</div>


</body>
</html>
