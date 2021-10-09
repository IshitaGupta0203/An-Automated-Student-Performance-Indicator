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
if($_SESSION["aemail"]=="")
{
  ?>
  <script type="text/javascript">
    window.location.href="adminlogin.php";
  </script>
  <?php
}
if (isset($_POST['btnaddstaff'])) 
{
  extract($_POST);

   $a=$m->file("StaffPhoto");

   $m->dml("insert into tbladdstaff (sname,semail,spass,qname,jdate,wexp,desg,aos,ctaught,rintrast,achive,mopb,sdob,sbg,sphoto,did)values('$txtsname','$txtsemail','$txtspass','$txtqname','$txtjdate','$txtwexp','$txtdesg','$txtaos','$txtctaught','$txtrsearch','$txtachive','$txtmopb','$txtdob','$txtbg','$a','$ddldname')");
    ?>
   <script type="text/javascript">
     alert('Record Inserted Sucessfully..');
   
   </script>
   <?php
}

?>



<div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-6">

    <!-- Default form register -->
<form class="text-center border border-light p-5" method="post" enctype="multipart/form-data" style="font-family: Trebuchet MS;">

    <p class="h4 mb-4">Add Staff</p>

   <select class="form-control" name="ddldname">
      <?php
     $q= $m->runquery("select * from tbladddept");
      while ($r=mysqli_fetch_array($q)) 
      {
        extract($_POST);
        
        ?>
        <option value="<?php echo $r["did"];?>">
          <?php echo $r["dname"];?>
          </option>
          <?php
            }
        ?>
    </select>
    <br>

  <input type="text" class="form-control mb-4"  name="txtsname" placeholder="Enter Your Name">
   <input type="text" class="form-control mb-4" name="txtsemail" placeholder="Enter Your Email Id">

 <input type="password" class="form-control mb-4" name="txtspass" placeholder="Enter Your Password">

 
<input type="text" class="form-control mb-4" name="txtdob" placeholder="Enter Your DOB">
<input type="text" class="form-control mb-4" name="txtbg" placeholder="Enter Your blood Group">


     <input type="text" class="form-control mb-4" name="txtqname" placeholder="Enter Your Qualification">


      <input type="text" class="form-control mb-4" name="txtjdate" placeholder="Enter Date of Joinning">
   
    <input type="text" class="form-control mb-4" name="txtwexp" placeholder="Enter Work Experince">
   
    <input type="text" class="form-control mb-4" name="txtqname" placeholder="Enter Your Qualification">
   
    <input type="text" class="form-control mb-4" name="txtdesg" placeholder="Enter Designation">
   
    <input type="text" class="form-control mb-4" name="txtaos" placeholder="Enter Area Of Specilization">
   
    <input type="text" class="form-control mb-4" name="txtctaught" placeholder="Enter Courses Taught">
   
    <input type="text" class="form-control mb-4" name="txtrsearch" placeholder="Enter Research Interest">
   
    <input type="text" class="form-control mb-4" name="txtmopb" placeholder="Enter Membership Of Professional Bodies">
   
    <input type="text" class="form-control mb-4" name="txtachive" placeholder="Enter  Achievements">

   <input type="file" class="form-control mb-4" name="fileToUpload" id="fileToUpload"> 

   
<input type="submit" class="btn btn-info my-4 btn-block" name="btnaddstaff" value="Add Staff">
    
    
    
</form>
<!-- Default form register -->

</div>
<div class="col-md-3"></div>
</div>
<?php require_once 'footer.php';?>
</body>
</html>
