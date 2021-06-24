<?php include '../head.php';?>

 
<!DOCTYPE html>
<html lang="en">
<head>
    <style>fieldset{margin: 0 auto;}</style>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <fieldset style="width: 300px; ">
            <legend><b>FORGOT PASSWORD</b></legend><br>
            Enter Email: <input type="email" name="email" ><br><br>
           
            <hr style="border: 0.1px solid;">
          
            <input type="submit">
            
            <br><br>
        </fieldset>
    </form>
</body>
</html>

<?php include '../footer.php';?>