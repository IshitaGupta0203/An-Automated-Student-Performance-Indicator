 <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php" style="font-family:Trebuchet MS;">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Welcome Admin</span>
        </a>
      </li>
      <?php
      if($_SESSION["aemail"]==null)
      {
        ?>
      <li class="nav-item active">
        <a class="nav-link" href="adminlogin.php"style="font-family: Trebuchet MS;">
          <i class="fas fa-fw fa-folder"></i>
                    <span>Admin Login</span>
        </a>
      </li>
      <?php
    }
    else
    {
    ?>
      <li class="nav-item active">
        <a class="nav-link" href="Adddept.php" style="font-family: Trebuchet MS;">
          <i class="fas fa-fw fa-folder"></i>
                    <span>Add Department</span>
        </a>
      </li>
     <li class="nav-item active">
        <a class="nav-link" href="Addstaff.php" style="font-family: Trebuchet MS;">
          <i class="fas fa-fw fa-folder"></i>
                    <span>Add Staff</span>
        </a>
      </li>
      <li class="nav-item active" >
        <a class="nav-link" href="removestaff.php" style="font-family: Trebuchet MS;">
          <i class="fas fa-fw fa-folder"></i>
                    <span> Staff Information </span>
        </a>
      </li>
       <li class="nav-item active" >
        <a class="nav-link" href="Logout.php" style="font-family: Trebuchet MS;">
          <i class="fas fa-fw fa-hand-point-right"></i>
                    <span> Logout </span>
        </a>
      </li>
    
    
<?php
}
?>

          </ul>

    <div id="content-wrapper">

 