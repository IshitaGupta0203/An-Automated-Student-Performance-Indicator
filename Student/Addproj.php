
<html>
<head>
  <title></title>
  <?php require_once 'head.php';?>
</head>
<body>

<?php require_once 'menu.php';?>

<?php
if (isset($_POST['btnproj'])) 
{
  extract($_POST);
  $m->dml("insert into tbladdproj(pname,pdesc,stid)values('$txtpname','$txtpdesc','$ddlstname')");
   ?>
   <script type="text/javascript">
     alert('Record Insert...');
     
   </script>
   <?php
}

?>



<div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-6">


    <!-- Default form register -->
<form class="text-center border border-light p-5" method="post">

    <p class="h4 mb-4"><b style="font-size: 30px">Add Project</b> </p>


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
     <input type="text" class="form-control mb-4" name="txtpname" placeholder="Enter Project Name">
<br>
  <input type="text" class="form-control mb-4" name="txtpdesc" placeholder="Project Discription">
<br>
    
<input type="submit" class="btn btn-info" name="btnproj" value="Add Project">
    
    
    
</form>
<!-- Default form register -->

</div>
<div class="col-md-3"></div>
</div>
<?php require_once 'footer.php';?>
</body>
</html>
