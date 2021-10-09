
<html>
<head>
  <title></title>
  <?php require_once 'head.php';?>
</head>
<body>
<?php require_once 'menu.php';?>

<?php
if (isset($_POST['btnsub'])) 
{
  extract($_POST);
   $m->dml("insert into tbladdsub(subname,yid)values('$txtsubname','$ddlyname')");
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

    <p class="h4 mb-4"><b style="font-size: 30px">Add Subject </b></p>

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
     <input type="text" class="form-control mb-4" name="txtsubname" placeholder="Enter subject">
<br>
    
<input type="submit" class="btn btn-info " name="btnsub" value="Add Subject">
    
    
    
</form>
<!-- Default form register -->

</div>
<div class="col-md-3"></div>
</div>
<?php require_once 'footer.php';?>
</body>
</html>
