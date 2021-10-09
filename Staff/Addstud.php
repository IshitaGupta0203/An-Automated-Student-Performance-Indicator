<!DOCTYPE html>
<html>
<head>
  <title></title>
  <?php require_once 'head.php';?>
</head>
<body>
<?php require_once 'menu.php';?>

<?php
if (isset($_POST['btnaddstud'])) 
{
  extract($_POST);
  $a=$m->file("StudentPhoto");

   $m->dml("insert into tbladdstud(stname,stemail,stpass,stmno,staddr,studphoto,yid)values('$txtstname','$txtstemail','$txtstpass','$txtstmno','$txtstaddr','$a','$ddlyname')");
    ?>
   <script type="text/javascript">
     alert('Record Insert...');
    
   </script>
   <?php
}

?>

<br>
<div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-6">


    <!-- Default form register -->
<form class="text-center border border-light p-5" method="post" enctype="multipart/form-data">

    <p class="h4 mb-4"><b style="font-size: 30px">Add Student</b></p>
    Choose Class
<select class="form-control" name="ddlyname">
      <?php
     $q= $m->runquery("select * from tbladdyear");
      while ($r=mysqli_fetch_array($q)) 
      {
        extract($_POST);
        
        ?>
        <option value="<?php echo $r["yid"];?>">
          <?php echo $r["year"];?>
          </option>
          <?php
            }
        ?>
    </select>
   <br>
  <input type="text" class="form-control mb-4" name="txtstname" placeholder="Enter Name"> <br>
   <input type="Email" class="form-control mb-4" name="txtstemail" placeholder="Enter Email" required="Email"> <br>

 <input type="password" class="form-control mb-4" name="txtstpass" placeholder="password"> <br>
 <input type="text" class="form-control mb-4" name="txtstmno" placeholder=" Mobile Number"> <br>
 <input type="text" class="form-control mb-4" name="txtstaddr" placeholder=" Address"> <br>

<input type="file" class="form-control mb-4" name="fileToUpload" id="fileToUpload"> 
    <br>
<input type="submit" class="btn btn-info " name="btnaddstud" value="Add Student">   
</form>
<!-- Default form register -->

</div>
<div class="col-md-3"></div>
</div><br>
<?php require_once 'footer.php';?>
</body>
</html>
