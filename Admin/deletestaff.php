<html>
<head>
  <title></title>
  <?php require_once 'head.php';?>

</head>
<body>
  <?php require_once 'header.php';?>
  
  <?php require_once 'menu.php';?>
  <?php
  

  if( $m->dml("delete from tbladdstaff where sid=".$_GET["id"]))
  {
    ?>
    <script type="text/javascript">
      window.location.href="staffinfo.php";
    </script>
    <?php
  }

    ?>
  <?php require_once 'footer.php';?>
</body>
</html>