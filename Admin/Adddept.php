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
if (isset($_POST['btndept'])) 
{
  extract($_POST);
   $m->dml("insert into tbladddept (dname,hname,eyear)values('$txtdname','$txthname','$txtename')");
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

<fontfamily="Cursive">
    <!-- Default form register -->
<form class="text-center border border-light p-5" method="post" style="font-family:Trebuchet MS;">

    <p class="h4 mb-4">Add Department</p>

   
  <input type="text" class="form-control mb-4" name="txtdname" placeholder="Department Name">
<input type="text" class="form-control mb-4" name="txtename" placeholder="Year Of Establishment">

     
   <input type="text" class="form-control mb-4" name="txthname" placeholder="Head Of Department">

<input type="submit" class="btn btn-info my-4 btn-block" name="btndept" value="Add Department">
    
    
    
</form>
<!-- Default form register -->

</div>
<div class="col-md-3"></div>
</div>
<?php require_once 'footer.php';?>
</body>
</html>
