<!DOCTYPE html>
<html>
<head>
  <title></title>
  <?php require_once 'head.php';?>
</head>
<body>
<?php require_once 'header.php';?>
<?php require_once 'menu.php';?>
<?php 
if(isset($_POST["btnlogin"]))
{
  
    extract($_POST);

$n=$m->exists("select * from tbladmin where aemail='$txtemail' and apass='$txtpass'");

if($n==1)
{
    $_SESSION["aemail"]=$txtemail;
    $q1=$m->runquery("select * from tbladmin where aemail='".$_SESSION["aemail"]."'");
     $r1=mysqli_fetch_array($q1);
    $_SESSION["aid"]=$r1["aid"];
    ?>
  <script type="text/javascript">
 window.location.href="Addstaff.php";
  </script> 
  <?php
}
}
?>



</body>
</html>
<br>
  <div class="row">
    <div class="col-md-3"></div>
      <div class="col-md-6">
        <form method="post" class="text-center border border-light p-5">
          <p class="h4 mb-4" <h2 style="font-family:Trebuchet MS;"></h2>Admin Login</p>

      

                   <!-- First name -->
  <input type="text" id="txtemail" name="txtemail" class="form-control mb-4" style="font-family: Trebuchet MS;" placeholder="Enter Your Email Id">
  <br>
  <input type="password" id="txtpass" name="txtpass" class="form-control mb-4"style="font-family: Trebuchet MS;" placeholder="Enter Your Password">
  
        <br>
    <!-- Sign up button -->
    <!--button class="btn btn-info my-4 btn-block" type="submit">Sign in</button--->
    <input type="submit" name="btnlogin"style="font-family: Trebuchet MS;" value="Login" class="btn btn-block btn-lg btn-gradient-primary mt-4">

    <!-- Social register -->

    </div>
    <div class="col-md-4"></div>
    </div>


</form>
<?php require_once 'footer.php';?>

<!-- Default form register -->