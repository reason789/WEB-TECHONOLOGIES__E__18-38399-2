<?php include '../head.php';?>

<?php 





if(isset($_SESSION['uname'])){
    if($_SESSION["remember"] == "checked")
    {
        setcookie("uname",$_SESSION["uname"],time()+ 10);
        setcookie("pass",$_SESSION["pass"],time()+ 10);
    }
    
    
    include './account.php';
    
}
else{
    header("location:login.php");
}


?>

<?php include '../footer.php';?>