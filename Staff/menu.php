<nav class="fh5co-nav" role="navigation" style="background-color: #929fba;">
    <div class="top-menu">
      <div class="container">
        <div class="row">
   
          
          <div class="col-xs-10  menu-1">
            <ul>
              <?php
      if($_SESSION["semail"]==null)
      {

      ?>
              <li><a href="stafflogin.php" style="color: white;font-size: 20px""font-family":Trebuchet MS ><b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WELCOME TO THE STAFF SECTION</b></a></li>

               <?php

      }
      else
      {
      ?>
              <li><a href="addyear.php" style="color: white;font-size: 17px"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add Year</b></a></li>
              <li><a href="Addsub.php" style="color: white;font-size: 17px" style="font-family: cursive;"><b>Add Subject</b></a></li>
              <li><a href="Addstud.php" style="color: white;font-size: 17px" style="font-family: cursive;"><b>Add Student</b></a></li>
              <li><a href="Addmarks.php" style="color: white;font-size: 17px"><b>Add Marks</b></a></li>
            <li><a href="staffdetails.php" style="color: white;font-size: 17px"><b>Student Information</b></a></li>
              <li><a href="Logout.php" style="color: white;font-size: 17px"><b>Logout</b></a></li>

              <?php
            }
            ?>
            </ul>
          </div>
          
        </div>
        
      </div>
    </div>
  </nav>