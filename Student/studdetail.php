<html>
<head>
  <title></title>
  <?php require_once 'head.php';?>
</head>
<body>
  
  <?php require_once 'menu.php';?>
   
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8"> 
     <table class="table table-bordered">
    
  
 
<?php 

$q=$m->runquery( "select * from tblmarks,tbladdstud where tbladdstud.stid=tblmarks.stid and tbladdstud.stid='".$_SESSION["stid"]."'");

while ($r=mysqli_fetch_array($q))
 {
      extract($r);
?> 

  <tr>
     <td>
       <br>
     Student Name: <?php  echo $r["stname"];?>
     
    </td>
      <td align="right">
       <br>
  <img src="../Staff/StudentPhoto/<?php  echo $r['studphoto'];?>" width=300px>
     
    </td>
   </tr>
      <tr>
        <td>
          Student Email: <?php echo $r["stemail"];?> 
        </td>
      </tr>
       <tr>
        <td>
          Class Test I: <?php echo $r["ctfirst"];?> 
        </td>
      </tr>
       <tr>
        <td>
          Class Test II: <?php echo $r["ctsecond"];?> 
        </td>
      </tr>
      <tr>
        <td>
         Practicals  <?php echo $r["Practicals"];?> 
        </td>
      </tr>
       <tr>
        <td>
         Microproject <?php echo $r["Microproject"];?> 
        </td>
      </tr>
       <tr>
        <td>
        Industrial Traning <?php echo $r["IndustrialTraning"];?> 
        </td>
      </tr>
         <tr>
        <td>
        Internals<?php echo $r["Internals"];?> 
        </td>
      </tr>
         <tr>
        <td>
       End Semister score <?php echo $r["EndSemisterscore"];?> 
        </td>
      </tr>
        <tr>
        <td>
          Total:-
        <?php echo   $r["ctfirst"]+ $r["ctsecond"]+$r["Practicals"]+$r["Microproject"]+ $r["IndustrialTraning"]+$r["Internals"]+$r["EndSemisterscore"];
        ?>
        </td>
      </tr>
        

    <?php
}
?>

 </table>
  </div>
    <div class="col-md-2"></div>

  </div>
 
 </center>
 <br>
<?php require_once 'footer.php';?>
</body>
</html>