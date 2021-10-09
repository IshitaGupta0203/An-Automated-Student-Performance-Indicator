
<html>
<head>
  <title></title>
  <?php require_once 'head.php';?>
</head>
<body>
<?php require_once 'menu.php';?>

<?php
if (isset($_POST['btnmarks'])) 
{
  extract($_POST);
   $m->dml("insert into tblmarks(yid,stid,ctfirst,ctsecond,Practicals,Microproject,IndustrialTraning,Internals,EndSemisterscore,subid)values('$ddlyname','$ddlsubname','$txtmarks','$txtcmarks','$txtpmarks','$txtmmarks','$txtimarks','$txtinmarks','$txtemarks')");
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
<form class="text-center border border-light p-5" method="post">

    <p class="h4 mb-4"><b style="font-size: 30px">Add Marks</b> </p>

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
<select class="form-control" name="ddlsname">
      <?php
     $q= $m->runquery("select * from tbladdsub");
      while ($r=mysqli_fetch_array($q)) 
      {
        extract($_POST);
        
        ?>
        <option value="<?php echo $r["sid"];?>">
          <?php echo $r["subname"];?>
          </option>
          <?php
            }
        ?>
    </select>

<br>
<select class="form-control" name="ddlstname">
      <?php
     $q= $m->runquery("select * from tbladdstud");
      while ($r=mysqli_fetch_array($q)) 
      {
        extract($_POST);
        
        ?>
        <option value="<?php echo $r["stid"];?>">
          <?php echo $r["stname"];?>
          </option>
          <?php
            }
        ?>
    </select>

<br>
     <input type="text" class="form-control mb-4" name="txtmarks" placeholder="Class Test I">
<br>
  <input type="text" class="form-control mb-4" name="txtcmarks" placeholder="Class Test II">
<br>
 <input type="text" class="form-control mb-4" name="txtpmarks" placeholder="Practicals">
<br>
<input type="text" class="form-control mb-4" name="txtmmarks" placeholder="Microproject">
<br>
    <input type="text" class="form-control mb-4" name="txtimarks" placeholder="Industrial Traning Score">
<br>
<input type="text" class="form-control mb-4" name="txtinmarks" placeholder="Internals">
<br>
<input type="text" class="form-control mb-4" name="txtemarks" placeholder="EndSemisterscore">
<br>
    
<input type="submit" class="btn btn-info" name="btnmarks" value="Add Marks">
    
    
    
</form>
<!-- Default form register -->

</div>
<div class="col-md-3"></div>
</div>
<?php require_once 'footer.php';?>
</body>
</html>
