<!DOCTYPE html>
<html>
<head>
  <title></title>
  <?php require_once 'head.php';?>
</head>
<body>
<?php require_once 'menu.php';?>

<?php
if (isset($_POST['btnyear'])) 
{
  extract($_POST);
   $m->dml("insert into tbladdyear (year)values('$txtyear')");
    ?>
   <script type="text/javascript">
     alert('Record Insert...');
     header("location: Adddept.php");
   </script>
   <?php
}

?>



<div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-6">

<br>
    <!-- Default form register -->
<form class="text-center border border-light p-5" method="post">

    <p class="h4 mb-4"><b style="font-size: 28px""font-family:Trebuchet MS">Add Year</b>

   
  <input type="text" class="form-control mb-4" name="txtyear" placeholder="Enter Your Department">
</p>
     <br>
   
<input type="submit" class="btn btn-info " name="btnyear" value="Add Year">
    
    
    <br>
    <br>
</form>
<!-- Default form register -->

</div>
<div class="col-md-3"></div>
</div>
<?php require_once 'footer.php';?>
</body>
</html>
