<!DOCTYPE html>
<html>
<head>
  <title></title>
  <?php require_once 'head.php';?>
</head>
<body>


<?php require_once 'menu.php';?>


<?php 
if(isset($_POST["btnlogin"]))
{
  
    extract($_POST);

$n=$m->exists("select * from tbladdstaff where semail='$txtemail' and spass='$txtpass'");

if($n==1)
{
    $_SESSION["semail"]=$txtemail;
    $q1=$m->runquery("select * from tbladdstaff where semail='".$_SESSION["semail"]."'");
    $r1=mysqli_fetch_array($q1);
    $_SESSION["sid"]=$r1["sid"];
    
  header("location:ExcelInputFile.php");
  
  }
 }
?>

<br>
  <div class="row">
    <div class="col-md-3"></div>
      <div class="col-md-6">
        <form method="post" class="text-center border border-light p-5">
          <p class="h2 mb-4" <h2 style="font-family:Trebuchet MS;">Student Login</p>

      

                   <!-- First name -->
  <input type="text" id="txtemail" name="txtemail" class="form-control mb-8" style="font-family: Trebuchet MS;" placeholder="Enter Your Email Id">
  <br>
  <input type="password" id="txtpass" name="txtpass" class="form-control mb-8"style="font-family: Trebuchet MS;" placeholder="Enter Your Password">
  
        <br>
    <!-- Sign up button -->
    <!--button class="btn btn-info my-4 btn-block" type="submit">Sign in</button--->
    <input type="submit" name="btnlogin"style="font-family: Trebuchet MS;" value="Login" class="btn btn-block btn-lg btn-gradient-primary mt-4 border border-light p-2 >

    <!-- Social register -->

    </div>
    <div class="col-md-4"></div>
    </div>
    <!-- Social register -->
</form>

    </div>
    <div class="col-md-4"></div>
    </div>

<?php require_once 'footer.php';?>
</body>
</html>

<!-- Default form register -->