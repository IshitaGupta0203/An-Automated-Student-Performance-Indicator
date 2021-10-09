<html>
<head>
  <title></title>
  <?php require_once 'head.php';?>
</head>
<body>
  
  <?php require_once 'menu.php';?>
   

<h4 style="font-family: Times New Roman;">
   <center><b>Guru Gobind Singh Foundation’s<br>
Guru Gobind Singh Polytechnic, Nashik<br>
Department of Computer Engineering</b></center></h4>

   <hr>
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8"> 
        
  
 <br>
<?php 

$q=$m->runquery( "select * from tbladdstaff,tbladddept where tbladddept.did= tbladdstaff.did ");

while ($r=mysqli_fetch_array($q))
 {
      extract($r);
?> 
<br>
<h5 style="font-family: Times New Roman;">
<img src="StaffPhoto/<?php  echo $r['sphoto'];?>" width=150px height=150px align=right >
  <br>
    <b> Name of Staff  :</b>  <?php  echo $r["sname"];?>
     <br>
     <br>
         <b> Email Id  :</b> <?php echo $r["semail"];?> 
          <br>
          <br>
            <b>Qualification  : </b> <?php echo $r["qname"];?> 
           <br><br>
         <b>Date Of Joining  :</b>  <?php echo $r["jdate"];?> 
       <br><br>
       <b>Work Experience  :</b><?php echo $r["wexp"];?> 
       <br><br>
        <b>Designation  :</b><?php echo $r["desg"];?> 
       <br><br>
     <b>Area Of Specilization  : </b> <?php echo $r["aos"];?> 
       <br><br>
     <b>Courses Taught  :</b>  <?php echo $r["ctaught"];?> 
       <br><br>
      <b>Research Interest  :</b> <?php echo $r["rintrast"];?> 
       <br><br>
      <b> Achievements  :</b><?php echo $r["achive"];?> 
       <br><br>
     <b> Membership Of Professional Bodies  : </b><?php echo $r["mopb"];?> 
       <br><br>
     <b> Date Of Birth  :</b> <?php echo $r["sdob"];?> 
       <br><br>
    <b>Blood Group  :</b><?php echo $r["sbg"];?> </h5>
   <?php    
  }     
 ?>      
  </div>
    <div class="col-md-2"></div>

  </div>
  <script type="text/javascript">
    function abc()
    {
      window.print();
    }
  </script>
  <center>
<input type="button" onclick="abc()" class="btn btn-success" name="" value="Print" style="font-family: Times New Roman">
 </center>
 <br>
<?php require_once 'footer.php';?>
</body>
</html>