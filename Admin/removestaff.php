<html>
<head>
  <title></title>
  <?php require_once 'head.php';?>
</head>
<body>
  <?php require_once 'header.php';?>
  
  <?php require_once 'menu.php';?>
    <ol class="breadcrumb">
          <li class="breadcrumb-item" style="font-family:Trebuchet MS;">
            <a href="index.php">Welcome</a>
          </li>
          <li class="breadcrumb-item active" style="font-family:Trebuchet MS;">Staff Information</li>
        </ol>
  <br>
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8"> 
     <table class="table table-bordered" style="font-family:Trebuchet MS;">
    
    <tr>
     <th>
        Name of Staff
      </th>
      <th>
        Email
      </th>
    
    <th>
      Delete profile 
      </th>
      <th>
      View profile 
      </th>
    
    </tr>
 
<?php 

$q= $m->runquery( "select * from tbladdstaff ");
while ($r=mysqli_fetch_array($q))
 {
      extract($r);
?> 

  <tr>
    <td>
       <br>
      <?php  echo $r["sname"];?>
     
    </td>
      
        <td>
         <br>
        <?php echo $r["semail"];?>
         </td>
     <td>
         <br>
         <a href="deletestaff.php?id=<?php echo $sid; ?>"><input type="button" name="btnremovestaff" value="Delete" class="btn btn-danger" style="font-family:Trebuchet MS;"></a>
     </td>

      <td>
         <br>
         <a href="staffdetails.php?id=<?php echo $sid; ?>"><input type="button" name="btnremovestaff" value="View" class="btn btn-warning" style="font-family:Trebuchet MS;" ></a>
     </td>
  </tr>  
    <?php
}
?>

 </table>
  </div>
    <div class="col-md-2"></div>

  </div>

 <br>
<?php require_once 'footer.php';?>
</body>
</html>